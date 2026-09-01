<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Febriansyah Putra — Full Stack Developer & Data Enthusiast. Portfolio personal mahasiswa Politeknik Negeri Padang.">
    <meta name="keywords" content="portfolio, web developer, data science, laravel, fullstack, Padang">
    <meta name="author" content="Febriansyah Putra">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Febriansyah Putra — Developer & Data Enthusiast' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💜</text></svg>">

    {{-- Alpine.js CDN (lightweight interactivity) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        document.documentElement.lang = 'id';
        window.typingTexts = @json($typing_texts ?? []);
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#EBE6EF] text-[#3A004D] antialiased">

    {{-- ==================== PRELOADER ==================== --}}
    <div id="preloader" class="fixed inset-0 z-[9999] bg-[#EBE6EF] flex flex-col items-center justify-center gap-4">
        <div class="relative w-16 h-16">
            <div class="absolute inset-0 rounded-full border-4 border-primary-200 animate-ping opacity-60"></div>
            <div class="absolute inset-2 rounded-full bg-gradient-to-br from-primary-600 to-primary-900 flex items-center justify-center">
                <span class="text-white font-display font-bold text-xl">FP</span>
            </div>
        </div>
        <p class="text-xs text-primary-400 font-medium tracking-widest uppercase font-mono">Loading Portfolio</p>
    </div>

    {{-- ==================== NAVBAR (Floating Pill, Fixed Top) ==================== --}}
    <header id="navbar" class="navbar-wrapper sticky top-0 left-0 right-0 z-50 px-3 sm:px-6 pt-4" x-data="{ menuOpen: false }">
        <div class="navbar-pill w-full p-2 flex items-center justify-between gap-3 overflow-hidden relative">
            {{-- Top shimmer line --}}
            <div class="absolute top-0 left-6 right-6 h-[1px] bg-gradient-to-r from-transparent via-white/40 to-transparent pointer-events-none"></div>
            {{-- Purple glow behind pill --}}
            <div class="absolute -top-10 left-1/4 w-1/2 h-20 bg-primary-500/20 blur-3xl pointer-events-none rounded-full"></div>

            {{-- Nav Links (desktop) --}}
            <nav class="flex items-center gap-1 overflow-x-auto py-0.5 px-1 max-w-[75%] sm:max-w-none" style="scrollbar-width:none;-ms-overflow-style:none;">
                <a href="#hero"       class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"/><path stroke-linecap="round" stroke-linejoin="round" d="M20 2v4M22 4h-4"/><circle cx="4" cy="20" r="2"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">Home</span>
                </a>
                <a href="#about"      class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">About</span>
                </a>
                <a href="#tour"       class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m3.3 7 8.7 5 8.7-5M12 22V12"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">3D Tour</span>
                    <span class="text-[9px] font-mono px-1.5 rounded-md bg-primary-500/40 text-primary-200 border border-primary-400/40 uppercase tracking-widest ml-0.5">3D</span>
                </a>
                <a href="#skills"     class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20v2M12 2v2M17 20v2M17 2v2M2 12h2M2 17h2M2 7h2M20 12h2M20 17h2M20 7h2M7 20v2M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">Skills</span>
                </a>
                <a href="#projects"   class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3v16a2 2 0 0 0 2 2h16M18 17V9M13 17V5M8 17v-3"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">Projects</span>
                </a>
                <a href="#experience" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">Experience</span>
                </a>
                <a href="#contact"    class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11zM21.854 2.147l-10.94 10.939"/></svg>
                    <span class="tracking-wide text-xs sm:text-sm">Contact</span>
                </a>
            </nav>

            {{-- Right side: Available + Logo + Mobile toggle --}}
            <div class="shrink-0 flex items-center gap-2 pr-1">
                {{-- Available badge (desktop) --}}
                <div class="hidden lg:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-md">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-300/90 font-medium">Available</span>
                </div>

                {{-- Brand logo --}}
                <a href="#hero" class="relative group flex items-center gap-1.5 px-4 py-1.5 rounded-xl bg-gradient-to-r from-primary-600/30 via-white/10 to-primary-600/20 border border-white/30 hover:border-primary-400/60 transition-all duration-300 shadow-md hover:shadow-primary-500/20">
                    <span class="font-extrabold text-sm sm:text-base tracking-widest text-white font-sans group-hover:scale-105 transition-transform flex items-center gap-0.5">FP<span class="text-primary-400 animate-pulse">.</span></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white/60 group-hover:text-primary-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10v10M7 17 17 7"/></svg>
                </a>

                {{-- Mobile hamburger --}}
                <button @click="menuOpen = !menuOpen" class="md:hidden w-9 h-9 flex flex-col items-center justify-center gap-1.5 rounded-xl hover:bg-white/10 transition-colors" aria-label="Toggle menu">
                    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-300" :class="menuOpen ? 'rotate-45 translate-y-2' : ''"></span>
                    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-300" :class="menuOpen ? 'opacity-0' : ''"></span>
                    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-300" :class="menuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div x-show="menuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="md:hidden mt-2 rounded-2xl pb-4 overflow-hidden"
             style="background:rgba(2,2,15,0.80);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,0.15);">
            <nav class="flex flex-col px-4 pt-4 gap-1">
                @foreach(['#hero'=>'Home','#about'=>'About','#tour'=>'3D Tour','#skills'=>'Skills','#projects'=>'Projects','#experience'=>'Experience','#contact'=>'Contact'] as $href => $label)
                <a href="{{ $href }}" @click="menuOpen=false" class="px-4 py-3 rounded-xl font-medium text-white/80 hover:bg-white/10 hover:text-white transition-colors text-sm">{{ $label }}</a>
                @endforeach
                <div class="mt-3 pt-3 border-t border-white/10">
                    <div class="flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/20 rounded-full px-3 py-2 w-fit">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-semibold text-emerald-300">Available for Opportunity</span>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{-- ==================== MAIN CONTENT ==================== --}}
    <main class="w-full overflow-x-hidden">
        @yield('content')
    </main>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="relative bg-primary-950 text-white pt-16 pb-10 overflow-hidden">
        {{-- Background decoration --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-primary-800/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-48 h-48 bg-mauve-500/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pb-10 border-b border-white/10">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-400 to-mauve-500 flex items-center justify-center">
                            <span class="font-display font-bold text-white">FP</span>
                        </div>
                        <div>
                            <p class="font-display font-bold text-white">Febriansyah Putra</p>
                            <p class="text-xs text-primary-300">D4 TRPL · Politeknik Negeri Padang</p>
                        </div>
                    </div>
                    <p class="text-sm text-primary-300 leading-relaxed">Full Stack Developer yang bersemangat membangun produk digital berdampak dari Padang, Indonesia.</p>
                </div>

                {{-- Links --}}
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-primary-400 mb-4">Navigasi</p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Home'=>'#hero','About'=>'#about','Skills'=>'#skills','Projects'=>'#projects','Experience'=>'#experience','Contact'=>'#contact'] as $label => $href)
                        <a href="{{ $href }}" class="text-sm text-primary-300 hover:text-white transition-colors">{{ $label }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Built with --}}
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-primary-400 mb-4">Built With</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Laravel', 'Tailwind CSS', 'Alpine.js', 'Vite'] as $tech)
                        <span class="px-2.5 py-1 rounded-lg bg-white/10 text-xs text-primary-200 font-medium border border-white/10">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <p class="text-xs text-primary-400 mt-4">Deployed on Vercel</p>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-primary-400">© {{ date('Y') }} Febriansyah Putra. All rights reserved.</p>
                <button id="back-to-top" class="flex items-center gap-2 text-xs text-primary-300 hover:text-white transition-colors group">
                    <span>Back to top</span>
                    <svg class="w-4 h-4 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                </button>
            </div>
        </div>
    </footer>

</body>
</html>
