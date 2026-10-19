<?php

namespace App\Http\Controllers;

use App\Services\YoutubeSimilarityService;
use Illuminate\Http\Request;

class DeteksiYoutubeController extends Controller
{
    public function index()
    {
        return view('deteksi');
    }

    public function detect(
        Request $request,
        YoutubeSimilarityService $similarityService
    ) {
        $validated = $request->validate([
            'comment' => ['required', 'string', 'max:5000'],
        ], [
            'comment.required' => 'Silakan masukkan komentar terlebih dahulu.',
            'comment.max' => 'Komentar maksimal 5000 karakter.',
        ]);

        $result = $similarityService->detect(
            $validated['comment']
        );

        return response()->json($result);
    }
}
