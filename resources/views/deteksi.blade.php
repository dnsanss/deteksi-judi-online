<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FraudGuard — Deteksi Komentar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #080d18;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(148, 163, 184, .035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(148, 163, 184, .035) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .glow {
            background: radial-gradient(circle,
                    rgba(20, 184, 166, .12) 0%,
                    transparent 70%);
        }

        .panel {
            background: rgba(15, 23, 42, .82);
            border: 1px solid rgba(148, 163, 184, .13);
            backdrop-filter: blur(16px);
        }

        .accent {
            background: linear-gradient(135deg, #2dd4bf, #14b8a6);
        }

        textarea:focus {
            outline: none;
        }
    </style>
</head>

<body class="min-h-screen text-slate-100 antialiased">

    <div class="fixed inset-0 grid-bg pointer-events-none"></div>
    <div class="fixed -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[400px] glow pointer-events-none"></div>

    <div class="relative min-h-screen flex flex-col">

        <!-- Navbar -->
        <header class="border-b border-white/[0.07]">
            <nav class="max-w-6xl mx-auto px-5 sm:px-8 h-[76px] flex items-center justify-between">

                <a href="{{ route('deteksi') }}" class="flex items-center gap-3">
                    <div class="accent w-10 h-10 rounded-xl flex items-center justify-center text-slate-950">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    </div>

                    <div>
                        <div class="font-extrabold tracking-tight text-lg">
                            Fraud<span class="text-teal-400">Guard</span>
                        </div>
                        <div class="text-[10px] tracking-[0.19em] uppercase text-slate-500">
                            Digital Safety Intelligence
                        </div>
                    </div>
                </a>

                <div class="flex flex-wrap items-center gap-2 text-sm">
                    <a href="{{ route('deteksi') }}"
                        class="rounded-lg border border-slate-700 bg-slate-800 px-4 py-2 font-semibold text-white">
                        YouTube
                    </a>
                    <a href="{{ route('deteksi.tiktok') }}"
                        class="rounded-lg px-4 py-2 text-slate-400 transition hover:bg-slate-800 hover:text-white">
                        TikTok
                    </a>
                </div>
                <!-- <div class="hidden sm:flex items-center gap-2 text-xs text-slate-400">
                    <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                    Comment Detection System
                </div> -->

                <div class="sm:hidden text-xs text-slate-400">
                    <span class="inline-block w-2 h-2 rounded-full bg-teal-400 mr-1"></span>
                    Online
                </div>

            </nav>
        </header>

        <!-- Main -->
        <main class="flex-1 max-w-5xl w-full mx-auto px-5 sm:px-8 py-14 sm:py-20">

            <!-- Hero -->
            <section class="text-center max-w-3xl mx-auto mb-12">

                <div class="inline-flex items-center gap-2 rounded-full border border-red-500/30 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.2 3.6-6.2 3.6Z" />
                    </svg>
                    Deteksi Komentar YouTube
                </div>

                <div class="inline-flex items-center gap-2 rounded-full border border-teal-400/20 bg-teal-400/[0.07] px-4 py-2 mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="15" height="15" viewBox="0 0 24 24"
                        fill="none" stroke="#2dd4bf" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3v3" />
                        <path d="M12 18v3" />
                        <path d="m5.6 5.6 2.1 2.1" />
                        <path d="m16.3 16.3 2.1 2.1" />
                        <path d="M3 12h3" />
                        <path d="M18 12h3" />
                        <path d="m5.6 18.4 2.1-2.1" />
                        <path d="m16.3 7.7 2.1-2.1" />
                        <circle cx="12" cy="12" r="5" />
                    </svg>

                    <span class="text-xs font-semibold text-teal-300">
                        AI-POWERED COMMENT ANALYSIS
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.12]">
                    Deteksi Komentar
                    <span class="block mt-2 bg-gradient-to-r from-teal-300 to-cyan-400 bg-clip-text text-transparent">
                        Promosi Judi Online
                    </span>
                    di YouTube
                </h1>

                <p class="mt-6 text-slate-400 text-sm sm:text-base leading-7 max-w-2xl mx-auto">
                    Analisis komentar YouTube untuk mengidentifikasi indikasi
                    promosi judi online menggunakan pendekatan machine learning
                    berbasis dataset komentar.
                </p>

            </section>

            <!-- Detection Form -->
            <section class="max-w-3xl mx-auto">

                <div class="panel rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-black/20">

                    <form id="detectionForm"
                        action="{{ route('deteksi.youtube.detect') }}"
                        method="POST"
                        class="p-5 sm:p-8">
                        @csrf

                        <div class="mb-4 rounded-xl border border-slate-700 bg-slate-800/70 p-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-500/10 text-red-400">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="22" height="22" viewBox="0 0 24 24"
                                        fill="currentColor" aria-hidden="true">
                                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.2 3.6-6.2 3.6Z" />
                                    </svg>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-white">
                                        Sumber Analisis: Komentar YouTube
                                    </h3>
                                    <p class="mt-1 text-sm leading-6 text-slate-400">
                                        Masukkan komentar yang ingin diperiksa.
                                        Sistem dirancang untuk mengenali pola bahasa
                                        yang mengindikasikan promosi judi online berdasarkan
                                        dataset komentar YouTube yang telah dikumpulkan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <textarea
                                id="comment"
                                name="comment"
                                rows="6"
                                maxlength="5000"
                                class="w-full rounded-xl border border-white/10 bg-[#111827] px-4 py-3 text-white placeholder:text-gray-500 focus:border-teal-400 focus:outline-none"
                                placeholder="Masukkan komentar di sini..."
                                required>{{ old('comment', $inputComment ?? '') }}</textarea>

                            <div class="absolute bottom-3 right-4 text-xs text-slate-600">
                                <span id="charCount">0</span>/5000
                            </div>
                        </div>

                        <div class="flex items-start gap-2 mt-3 text-xs text-slate-500 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="15" height="15" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="shrink-0 mt-0.5">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 16v-4" />
                                <path d="M12 8h.01" />
                            </svg>

                            <p>
                                Masukkan komentar yang ingin dianalisis.
                                Maksimal 5.000 karakter.
                            </p>
                        </div>

                        <button
                            id="detectButton"
                            type="submit"
                            class="accent w-full mt-7 min-h-[54px] rounded-xl text-sm font-bold text-slate-950 flex items-center justify-center gap-3 hover:brightness-110 active:scale-[0.99] transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="19" height="19" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m20 20-4-4" />
                                <path d="M11 8v6" />
                                <path d="M8 11h6" />
                            </svg>

                            <span>Deteksi Komentar</span>
                        </button>

                        <p id="formMessage"
                            role="status"
                            aria-live="polite"
                            class="hidden mt-4 rounded-xl border px-4 py-3 text-sm">
                        </p>

                    </form>

                    <!-- Placeholder result -->
                    <div id="resultPanel"
                        class="hidden mx-5 sm:mx-8 mb-8 rounded-xl border border-white/10 bg-[#0a1020] p-5 sm:p-6">

                        <div class="text-xs uppercase tracking-widest text-slate-500 mb-3">
                            Hasil analisis
                        </div>

                        <div id="placeholderResultLabel" class="font-bold text-lg"></div>

                        <p id="placeholderResultDescription"
                            class="text-sm text-slate-400 mt-2 leading-6"></p>

                        <div class="mt-5">
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="text-slate-400">Skor prediksi</span>
                                <span id="placeholderResultScore" class="font-semibold text-slate-300">—</span>
                            </div>

                            <div class="h-2 rounded-full bg-slate-800 overflow-hidden">
                                <div id="placeholderResultBar"
                                    class="h-full rounded-full transition-all duration-500"
                                    style="width: 0%">
                                </div>
                            </div>
                        </div>

                        <p class="text-xs text-slate-600 mt-4">
                            Hasil merupakan indikasi model dan bukan keputusan
                            definitif mengenai suatu komentar.
                        </p>
                    </div>

                </div>

                <!-- Feature cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-5">

                    <div class="panel rounded-xl p-4 flex items-center sm:items-start gap-3">
                        <div class="w-10 h-10 shrink-0 rounded-xl bg-teal-400/10 text-teal-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 3 8 4v5c0 5-3.4 8-8 9-4.6-1-8-4-8-9V7z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold">Analisis Teks</h3>
                            <p class="text-xs text-slate-500 leading-5 mt-1">
                                Pemeriksaan berdasarkan isi komentar.
                            </p>
                        </div>
                    </div>

                    <div class="panel rounded-xl p-4 flex items-center sm:items-start gap-3">
                        <div class="w-10 h-10 shrink-0 rounded-xl bg-cyan-400/10 text-cyan-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="M8 15V9" />
                                <path d="M12 15V5" />
                                <path d="M16 15v-3" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold">Skor Prediksi</h3>
                            <p class="text-xs text-slate-500 leading-5 mt-1">
                                Skor ditampilkan setelah model terhubung.
                            </p>
                        </div>
                    </div>

                    <div class="panel rounded-xl p-4 flex items-center sm:items-start gap-3">
                        <div class="w-10 h-10 shrink-0 rounded-xl bg-violet-400/10 text-violet-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M7 8h10" />
                                <path d="M7 12h6" />
                                <path d="M7 16h4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold">Berbasis Data</h3>
                            <p class="text-xs text-slate-500 leading-5 mt-1">
                                Dirancang menggunakan model hasil pelatihan.
                            </p>
                        </div>
                    </div>

                </div>

                <p class="text-center text-xs text-slate-600 leading-6 mt-7">
                    Sistem pendukung deteksi promosi judi online.
                    Hasil analisis perlu ditinjau sesuai konteks komentar.
                </p>

            </section>

        </main>

        <footer class="relative border-t border-white/[0.07]">
            <div class="max-w-6xl mx-auto px-5 sm:px-8 py-6 flex flex-col sm:flex-row gap-2 justify-between items-center text-xs text-slate-600">
                <p>© {{ date('Y') }} FraudGuard</p>
                <p>Digital Fraud Detection Research Project</p>
            </div>
        </footer>

    </div>


    <!-- Detection Result Modal -->
    <div
        id="detectionModal"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-[#020617]/85 px-4 py-8 backdrop-blur-md"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modalTitle">
        <div
            class="panel relative my-auto w-full max-w-xl overflow-hidden rounded-2xl border border-teal-400/20 shadow-2xl shadow-black/50">
            <!-- Top accent -->
            <div class="accent absolute left-0 top-0 h-1 w-full"></div>

            <div class="p-6 sm:p-8">

                <!-- Modal header -->
                <div class="flex items-start justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div
                            id="modalIcon"
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-teal-400/10 text-teal-300">
                            <svg
                                id="loadingIcon"
                                class="h-6 w-6 animate-spin"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24">
                                <circle
                                    class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4" />
                                <path
                                    class="opacity-90"
                                    fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.37 0 0 5.37 0 12h4z" />
                            </svg>

                            <svg
                                id="resultIcon"
                                class="hidden h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-300">
                                FraudGuard Analysis
                            </p>
                            <h2 id="modalTitle" class="mt-1 text-xl font-bold text-white">
                                Menganalisis Komentar
                            </h2>
                        </div>
                    </div>

                    <button
                        id="closeModal"
                        type="button"
                        aria-label="Tutup popup"
                        class="rounded-lg p-2 text-slate-400 transition hover:bg-white/10 hover:text-white">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="21"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 6-12 12" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Loading content -->
                <div id="loadingContent" class="py-9 text-center">
                    <div class="mx-auto mb-5 flex h-20 w-20 items-center justify-center rounded-full border border-teal-400/20 bg-teal-400/5">
                        <div class="h-12 w-12 animate-spin rounded-full border-4 border-slate-700 border-t-teal-400"></div>
                    </div>

                    <p class="text-base font-semibold text-white">
                        Memeriksa pola komentar
                    </p>
                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Sistem sedang membandingkan komentar dengan dataset YouTube.
                        Mohon tunggu sebentar.
                    </p>

                    <div class="mt-7">
                        <div class="mb-2 flex justify-between text-xs">
                            <span class="text-slate-500">Proses analisis</span>
                            <span id="loadingPercent" class="font-semibold text-teal-300">0%</span>
                        </div>

                        <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                            <div
                                id="loadingBar"
                                class="h-full rounded-full bg-gradient-to-r from-teal-400 to-cyan-400 transition-[width] duration-300"
                                style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Result content -->
                <div id="resultContent" class="hidden pt-7">

                    <div class="rounded-xl border border-white/[0.07] bg-[#0a1020] p-5">
                        <p class="text-xs uppercase tracking-[0.18em] text-slate-500">
                            Hasil analisis
                        </p>

                        <h3
                            id="resultLabel"
                            class="mt-3 text-xl font-extrabold leading-7 text-white"></h3>

                        <p
                            id="resultDescription"
                            class="mt-2 text-sm leading-6 text-slate-400"></p>


                        <div class="mt-7">
                            <div class="mb-3 flex items-end justify-between gap-3">
                                <div>
                                    <p class="text-xs text-slate-500">
                                        Kemiripan teks tertinggi
                                    </p>

                                    <p
                                        id="resultScore"
                                        class="mt-1 text-4xl font-extrabold tabular-nums text-teal-300"
                                        aria-live="polite">0.00%</p>
                                </div>

                                <span
                                    id="scoreBadge"
                                    class="rounded-lg border border-teal-400/20 bg-teal-400/10 px-3 py-2 text-xs font-semibold text-teal-300">Cosine Similarity</span>
                            </div>

                            <div
                                class="h-3 overflow-hidden rounded-full bg-slate-800"
                                role="progressbar"
                                aria-label="Persentase kemiripan teks"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                aria-valuenow="0"
                                id="resultProgress">
                                <div
                                    id="resultBar"
                                    class="h-full rounded-full bg-gradient-to-r from-teal-400 to-cyan-400"
                                    style="width: 0%; transition: width 1.2s ease-out"></div>
                            </div>

                            <div class="mt-2 flex justify-between text-[10px] text-slate-600">
                                <span>0%</span>
                                <span>100%</span>
                            </div>
                        </div>

                    </div>

                    <div class="mt-5">
                        <p class="mb-2 text-xs font-semibold uppercase tracking-widest text-slate-500">
                            Komentar dataset terdekat
                        </p>
                        <div class="rounded-xl border border-slate-700/70 bg-[#0a1020] p-4">
                            <p
                                id="matchedComment"
                                class="whitespace-pre-wrap break-words text-sm leading-6 text-slate-300"></p>

                            <p
                                id="matchedLabel"
                                class="mt-3 text-xs text-slate-500"></p>
                        </div>
                    </div>

                    <p class="mt-5 text-xs leading-5 text-slate-500">
                        Skor menunjukkan kemiripan teks dengan komentar dataset,
                        bukan probabilitas bahwa komentar tersebut merupakan promosi judi online.
                        Hasil bergantung pada data dan label komentar terdekat.
                    </p>
                </div>

                <!-- Error content -->
                <div id="errorContent" class="hidden py-8">
                    <div class="rounded-xl border border-red-400/20 bg-red-400/5 p-5">
                        <p class="font-semibold text-red-300">Analisis tidak berhasil</p>
                        <p id="errorMessage" class="mt-2 text-sm leading-6 text-slate-400"></p>
                    </div>
                </div>

                <!-- Close button at bottom -->
                <div id="modalFooter" class="hidden mt-7">
                    <button
                        id="closeModalBottom"
                        type="button"
                        class="accent w-full rounded-xl py-3.5 font-bold text-slate-950 transition hover:brightness-110">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('detectionForm');
            const modal = document.getElementById('detectionModal');
            const textarea = document.getElementById('comment');
            const button = document.getElementById('detectButton');

            if (!form || !modal || !textarea || !button) {
                console.error('Elemen deteksi tidak ditemukan.', {
                    form: !!form,
                    modal: !!modal,
                    textarea: !!textarea,
                    button: !!button
                });
                return;
            }

            const loading = document.getElementById('loadingContent');
            const result = document.getElementById('resultContent');
            const error = document.getElementById('errorContent');

            const scoreElement = document.getElementById('resultScore');
            const bar = document.getElementById('resultBar');
            const label = document.getElementById('resultLabel');
            const description = document.getElementById('resultDescription');
            const matchedComment = document.getElementById('matchedComment');
            const matchedLabel = document.getElementById('matchedLabel');
            const errorMessage = document.getElementById('errorMessage');

            // Mendukung beberapa nama ID spinner, jika elemen tersebut tersedia.
            const resultLoading = document.getElementById('resultLoading');
            const loadingIcon = document.getElementById('loadingIcon');

            const categories = {
                mirip_promosi_judi_online: {
                    title: 'Mirip Promosi Judi Online',
                    description: 'Komentar memiliki kemiripan dengan komentar promosi judi online dalam dataset.'
                },
                mirip_bukan_promosi: {
                    title: 'Mirip Bukan Promosi',
                    description: 'Komentar lebih mirip dengan komentar nonpromosi dalam dataset.'
                },
                tidak_cukup_mirip: {
                    title: 'Kemiripan Rendah',
                    description: 'Kemiripan belum cukup untuk menentukan kategori berdasarkan ambang yang digunakan.'
                },
                tidak_ada_kata_cocok: {
                    title: 'Tidak Ada Kata yang Cocok',
                    description: 'Tidak ditemukan kata yang sama antara komentar dan dataset.'
                },
                dataset_kosong: {
                    title: 'Dataset Kosong',
                    description: 'Dataset YouTube belum berisi data yang dapat dibandingkan.'
                },
                input_kosong: {
                    title: 'Komentar Kosong',
                    description: 'Masukkan komentar terlebih dahulu.'
                }
            };

            function show(element) {
                if (element) element.classList.remove('hidden');
            }

            function hide(element) {
                if (element) element.classList.add('hidden');
            }

            function resetResult() {
                hide(result);
                hide(error);
                show(loading);

                // Reset visualisasi sebelum permintaan baru.
                if (scoreElement) scoreElement.textContent = '0.00%';
                if (bar) bar.style.width = '0%';

                hide(resultLoading);
            }

            form.addEventListener('submit', async (event) => {
                // Mencegah browser berpindah ke halaman POST.
                event.preventDefault();

                const comment = textarea.value.trim();

                if (!comment) {
                    textarea.focus();
                    return;
                }

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                resetResult();
                button.disabled = true;

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: new FormData(form)
                    });

                    const data = await response.json();

                    console.log('Respons deteksi:', data);

                    if (!response.ok) {
                        const messages = data.errors ?
                            Object.values(data.errors).flat().join('\n') :
                            (data.message || 'Deteksi gagal dilakukan.');

                        throw new Error(messages);
                    }

                    /*
                     * Terima similarity dalam skala 0–1 atau 0–100.
                     * Jika service Anda sudah mengembalikan persentase,
                     * nilainya tidak dikalikan lagi.
                     */
                    const rawScore = Number(data.similarity);

                    if (!Number.isFinite(rawScore)) {
                        throw new Error(
                            'Nilai similarity tidak ditemukan atau bukan angka. Periksa respons Laravel.'
                        );
                    }

                    const score = Math.min(
                        100,
                        Math.max(0, rawScore <= 1 ? rawScore * 100 : rawScore)
                    );

                    console.log('Persentase kemiripan:', score);

                    // Isi hasil analisis.
                    const category = categories[data.category] || {
                        title: 'Hasil Deteksi',
                        description: 'Kemiripan komentar berhasil dihitung.'
                    };

                    if (label) label.textContent = category.title;

                    if (description) {
                        description.textContent = category.description;
                    }

                    if (matchedComment) {
                        matchedComment.textContent =
                            data.matched_comment || 'Tidak ada komentar pembanding.';
                    }

                    if (matchedLabel) {
                        const matched = data.matched_label;

                        matchedLabel.textContent =
                            matched === 1 || matched === '1' ?
                            'Promosi judi online' :
                            matched === 0 || matched === '0' ?
                            'Bukan promosi' :
                            'Tidak tersedia';
                    }

                    // Hentikan loading sebelum hasil ditampilkan.
                    hide(loading);
                    hide(loadingIcon);
                    hide(resultLoading);
                    hide(error);

                    // Tampilkan panel hasil.
                    show(result);

                    // Pastikan hasil memiliki nilai awal yang terlihat.
                    if (scoreElement) {
                        scoreElement.textContent = `${score.toFixed(2)}%`;
                    }

                    if (bar) {
                        bar.style.width = `${score}%`;
                    }

                } catch (err) {
                    console.error('Deteksi gagal:', err);

                    hide(loading);
                    hide(loadingIcon);
                    hide(resultLoading);
                    hide(result);

                    show(error);

                    if (errorMessage) {
                        errorMessage.textContent =
                            err.message || 'Terjadi kesalahan saat mendeteksi komentar.';
                    }
                } finally {
                    button.disabled = false;
                }
            });

            function closeModal() {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }

            document.getElementById('closeModal')
                ?.addEventListener('click', closeModal);

            document.getElementById('closeModalBottom')
                ?.addEventListener('click', closeModal);

            modal.addEventListener('click', (event) => {
                if (event.target === modal) closeModal();
            });

            document.addEventListener('keydown', (event) => {
                if (
                    event.key === 'Escape' &&
                    !modal.classList.contains('hidden')
                ) {
                    closeModal();
                }
            });
        });
    </script>

</body>

</html>