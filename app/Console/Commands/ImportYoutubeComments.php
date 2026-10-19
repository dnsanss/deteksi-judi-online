<?php

namespace App\Console\Commands;

use App\Models\YoutubeComment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class ImportYoutubeComments extends Command
{
    protected $signature = 'dataset:import-youtube';

    protected $description = 'Impor dataset komentar YouTube dari CSV';

    public function handle(): int
    {
        $path = storage_path(
            'app/datasets/youtube_comments_labeled.csv'
        );

        if (! is_file($path)) {
            $this->error("File CSV tidak ditemukan: {$path}");

            return self::FAILURE;
        }

        $file = fopen($path, 'r');

        if ($file === false) {
            $this->error('File CSV tidak dapat dibuka.');

            return self::FAILURE;
        }

        try {
            $headers = fgetcsv($file);

            if (! is_array($headers)) {
                throw new RuntimeException('CSV kosong atau tidak valid.');
            }

            // Hilangkan BOM jika file CSV berasal dari Excel.
            $headers[0] = preg_replace('/^\xEF\xBB\xBF/', '', $headers[0]);

            $headers = array_map(
                fn($header) => strtolower(trim($header)),
                $headers
            );

            foreach (['author', 'comment', 'label'] as $required) {
                if (! in_array($required, $headers, true)) {
                    throw new RuntimeException(
                        "Kolom wajib '{$required}' tidak ditemukan."
                    );
                }
            }

            $index = array_flip($headers);
            $batch = [];
            $imported = 0;
            $rowNumber = 1;

            DB::transaction(function () use (
                $file,
                $index,
                &$batch,
                &$imported,
                &$rowNumber
            ) {
                while (($row = fgetcsv($file)) !== false) {
                    $rowNumber++;

                    // Abaikan baris kosong.
                    if ($row === [null] || $row === []) {
                        continue;
                    }

                    if (
                        !isset($row[$index['comment']]) ||
                        !isset($row[$index['label']])
                    ) {
                        throw new RuntimeException(
                            "Kolom tidak lengkap pada baris {$rowNumber}."
                        );
                    }

                    $comment = trim($row[$index['comment']]);
                    $label = trim($row[$index['label']]);

                    if ($comment === '') {
                        continue;
                    }

                    if (!in_array($label, ['0', '1'], true)) {
                        throw new RuntimeException(
                            "Label tidak valid pada baris {$rowNumber}."
                        );
                    }

                    $batch[] = [
                        'author' => isset($row[$index['author']])
                            ? trim($row[$index['author']])
                            : null,
                        'comment' => $comment,
                        'label' => (int) $label,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    if (count($batch) >= 500) {
                        YoutubeComment::insert($batch);
                        $imported += count($batch);
                        $batch = [];
                    }
                }

                if ($batch !== []) {
                    YoutubeComment::insert($batch);
                    $imported += count($batch);
                }
            });

            $this->info("Impor berhasil: {$imported} komentar.");

            return self::SUCCESS;
        } catch (\Throwable $e) {
            $this->error('Impor gagal: ' . $e->getMessage());

            return self::FAILURE;
        } finally {
            fclose($file);
        }
    }
}
