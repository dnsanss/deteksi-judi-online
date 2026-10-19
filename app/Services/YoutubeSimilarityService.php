<?php

namespace App\Services;

use App\Models\YoutubeComment;

class YoutubeSimilarityService
{
    public function detect(string $input): array
    {
        $documents = YoutubeComment::query()
            ->whereNotNull('comment')
            ->where('comment', '<>', '')
            ->get(['id', 'comment', 'label']);

        if ($documents->isEmpty()) {
            return [
                'similarity' => 0,
                'category' => 'dataset_kosong',
                'matched_comment' => null,
                'matched_label' => null,
            ];
        }

        $inputTokens = $this->tokenize($input);

        if (empty($inputTokens)) {
            return [
                'similarity' => 0,
                'category' => 'input_kosong',
                'matched_comment' => null,
                'matched_label' => null,
            ];
        }

        $tokenizedDocuments = [];

        foreach ($documents as $document) {
            $tokenizedDocuments[] = $this->tokenize(
                $document->comment
            );
        }

        // Hitung document frequency untuk setiap token.
        $documentFrequency = [];

        foreach ($tokenizedDocuments as $tokens) {
            foreach (array_unique($tokens) as $token) {
                $documentFrequency[$token] =
                    ($documentFrequency[$token] ?? 0) + 1;
            }
        }

        $totalDocuments = count($tokenizedDocuments);

        $idf = [];

        foreach ($documentFrequency as $token => $frequency) {
            $idf[$token] = log(
                ($totalDocuments + 1) / ($frequency + 1)
            ) + 1;
        }

        $inputVector = $this->vectorize($inputTokens, $idf);

        $inputNorm = $this->norm($inputVector);

        if ($inputNorm == 0.0) {
            return [
                'similarity' => 0,
                'category' => 'tidak_ada_kata_cocok',
                'matched_comment' => null,
                'matched_label' => null,
            ];
        }

        $bestScore = 0.0;
        $bestDocument = null;

        foreach ($documents as $index => $document) {
            $documentVector = $this->vectorize(
                $tokenizedDocuments[$index],
                $idf
            );

            $documentNorm = $this->norm($documentVector);

            if ($documentNorm == 0.0) {
                continue;
            }

            $dotProduct = 0.0;

            foreach ($inputVector as $token => $weight) {
                $dotProduct += $weight
                    * ($documentVector[$token] ?? 0.0);
            }

            $score = $dotProduct / ($inputNorm * $documentNorm);

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestDocument = $document;
            }
        }

        $percentage = round($bestScore * 100, 2);

        // Ambang awal untuk pengujian, bukan probabilitas.
        $threshold = 20.0;

        if ($bestDocument === null || $percentage < $threshold) {
            $category = 'tidak_cukup_mirip';
        } elseif ((int) $bestDocument->label === 1) {
            $category = 'mirip_promosi_judi_online';
        } else {
            $category = 'mirip_bukan_promosi';
        }

        return [
            'similarity' => $percentage,
            'category' => $category,
            'matched_comment' => $bestDocument?->comment,
            'matched_label' => $bestDocument
                ? (int) $bestDocument->label
                : null,
        ];
    }

    private function tokenize(string $text): array
    {
        $text = mb_strtolower($text, 'UTF-8');

        preg_match_all('/[\p{L}\p{N}]+/u', $text, $matches);

        return $matches[0] ?? [];
    }

    private function vectorize(array $tokens, array $idf): array
    {
        $termFrequency = array_count_values($tokens);
        $vector = [];

        foreach ($termFrequency as $token => $count) {
            if (isset($idf[$token])) {
                $vector[$token] = $count * $idf[$token];
            }
        }

        return $vector;
    }

    private function norm(array $vector): float
    {
        $sum = 0.0;

        foreach ($vector as $weight) {
            $sum += $weight * $weight;
        }

        return sqrt($sum);
    }
}
