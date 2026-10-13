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
                        class="rounded-lg px-4 py-2 text-slate-400 transition hover:bg-slate-800 hover:text-white">
                        YouTube
                    </a>
                    <a href="{{ route('deteksi.tiktok') }}"
                        class="rounded-lg border border-slate-700 bg-slate-800 px-4 py-2 font-semibold text-white">
                        TikTok
                    </a>
                </div>

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
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.75v13.67a2.89 2.89 0 0 1-2.9 2.89 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.31 0 .61.05.9.14V9.09a6.65 6.65 0 0 0-.9-.06 6.64 6.64 0 0 0-6.64 6.64 6.64 6.64 0 0 0 6.64 6.64 6.64 6.64 0 0 0 6.64-6.64V8.71a8.48 8.48 0 0 0 4.96 1.59V6.55a4.84 4.84 0 0 1-1.18.14Z" />
                    </svg>
                    Deteksi Komentar TikTok
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
                    di <a target="_blank" class="text-red-500">TikTok</a>
                </h1>

                <p class="mt-6 text-slate-400 text-sm sm:text-base leading-7 max-w-2xl mx-auto">
                    Analisis komentar TikTok untuk mengidentifikasi indikasi
                    promosi judi online menggunakan pendekatan machine learning
                    berbasis dataset komentar.
                </p>

            </section>

            <!-- Detection Form -->
            <section class="max-w-3xl mx-auto">

                <div class="panel rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl shadow-black/20">

                    <form id="detectionForm" class="p-5 sm:p-8">

                        <div class="mb-4 rounded-xl border border-slate-700 bg-slate-800/70 p-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-500/10 text-red-400">
                                    <svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor" aria-hidden="true">
                                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.75v13.67a2.89 2.89 0 0 1-2.9 2.89 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.31 0 .61.05.9.14V9.09a6.65 6.65 0 0 0-.9-.06 6.64 6.64 0 0 0-6.64 6.64 6.64 6.64 0 0 0 6.64 6.64 6.64 6.64 0 0 0 6.64-6.64V8.71a8.48 8.48 0 0 0 4.96 1.59V6.55a4.84 4.84 0 0 1-1.18.14Z" />
                                    </svg>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-white">
                                        Sumber Analisis: Komentar TikTok
                                    </h3>
                                    <p class="mt-1 text-sm leading-6 text-slate-400">
                                        Masukkan komentar yang ingin diperiksa.
                                        Sistem dirancang untuk mengenali pola bahasa
                                        yang mengindikasikan promosi judi online berdasarkan
                                        dataset komentar TikTok yang telah dikumpulkan.
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
                                placeholder="Tempelkan komentar di sini...
Contoh: Daftar sekarang, bonus saldo untuk member baru!"
                                class="w-full resize-y min-h-[170px] rounded-xl border border-slate-700/80 bg-[#0a1020] px-4 py-4 text-sm leading-7 text-slate-200 placeholder:text-slate-600 focus:border-teal-400/60 focus:ring-2 focus:ring-teal-400/10 transition"
                                required></textarea>

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

                        <div id="resultLabel" class="font-bold text-lg"></div>

                        <p id="resultDescription"
                            class="text-sm text-slate-400 mt-2 leading-6"></p>

                        <div class="mt-5">
                            <div class="flex items-center justify-between text-xs mb-2">
                                <span class="text-slate-400">Skor prediksi</span>
                                <span id="resultScore" class="font-semibold text-slate-300">—</span>
                            </div>

                            <div class="h-2 rounded-full bg-slate-800 overflow-hidden">
                                <div id="resultBar"
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

    <script>
        const form = document.getElementById('detectionForm');
        const comment = document.getElementById('comment');
        const charCount = document.getElementById('charCount');
        const formMessage = document.getElementById('formMessage');
        const resultPanel = document.getElementById('resultPanel');
        const detectButton = document.getElementById('detectButton');

        comment.addEventListener('input', () => {
            charCount.textContent = comment.value.length;
        });

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const text = comment.value.trim();

            resultPanel.classList.add('hidden');
            formMessage.classList.add('hidden');

            if (!text) {
                formMessage.textContent = 'Silakan masukkan komentar terlebih dahulu.';
                formMessage.className =
                    'mt-4 rounded-xl border border-amber-400/20 bg-amber-400/5 px-4 py-3 text-sm text-amber-300';
                return;
            }

            formMessage.textContent =
                'Antarmuka berhasil menerima komentar. Model machine learning belum dihubungkan.';

            formMessage.className =
                'mt-4 rounded-xl border border-teal-400/20 bg-teal-400/5 px-4 py-3 text-sm text-teal-300';
        });
    </script>

</body>

</html>