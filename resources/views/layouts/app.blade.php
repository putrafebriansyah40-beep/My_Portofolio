<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Web Developer & Designer. Melihat karya dan pengalaman saya di bidang teknologi.">
    <meta name="keywords" content="portfolio, web developer, designer, laravel, fullstack">
    <meta name="author" content="Febriansyah Putra">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Portfolio | Web Developer' }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">

    {{-- Prevent flash of wrong theme --}}
    <script>
        (function() {
            const theme = localStorage.getItem('theme') || 'dark';
            if (theme === 'light') document.documentElement.classList.add('light-mode');
            const lang = localStorage.getItem('lang') || 'en';
            document.documentElement.lang = lang === 'id' ? 'id' : 'en';
        })();
        window.typingTexts = @json($typing_texts ?? []);
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-mesh min-h-screen">
    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-4 left-4 right-4 md:left-1/2 md:-translate-x-1/2 md:w-[90%] max-w-7xl z-50 transition-all duration-500 rounded-3xl liquid-glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                {{-- Logo --}}
                <a href="#hero" class="flex items-center space-x-2 group">
                    <span class="logo-text font-display font-bold text-xl tracking-tight">febri.tech</span>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#hero" class="nav-link active" data-i18n="nav.home">Home</a>
                    <a href="#about" class="nav-link" data-i18n="nav.about">About</a>
                    <a href="#skills" class="nav-link" data-i18n="nav.skills">Skills</a>
                    <a href="#projects" class="nav-link" data-i18n="nav.projects">Projects</a>
                    <a href="#contact" class="nav-link" data-i18n="nav.contact">Contact</a>
                </div>

                {{-- Right Controls --}}
                <div class="flex items-center gap-2">
                    {{-- Language Toggle --}}
                    <button id="lang-toggle" class="w-9 h-9 rounded-xl nav-toggle-btn flex items-center justify-center transition-all duration-300 hover:scale-110 text-xs font-bold" aria-label="Toggle Language" title="Switch Language">
                        <span id="lang-label">ID</span>
                    </button>

                    {{-- Theme Toggle --}}
                    <button id="theme-toggle" class="w-9 h-9 rounded-xl nav-toggle-btn flex items-center justify-center transition-all duration-300 hover:scale-110" aria-label="Toggle Theme" title="Switch Theme">
                        {{-- Sun icon (shown in dark mode) --}}
                        <svg id="icon-sun" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        {{-- Moon icon (shown in light mode) --}}
                        <svg id="icon-moon" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    </button>

                    {{-- CTA Button Desktop (Removed) --}}

                    {{-- Mobile Menu Button --}}
                    <button id="mobile-menu-btn" class="md:hidden relative w-10 h-10 flex items-center justify-center focus:outline-none" aria-label="Toggle menu">
                        <div class="space-y-1.5" id="hamburger-icon">
                            <span class="block w-6 h-0.5 hamburger-line transition-all duration-300 origin-center"></span>
                            <span class="block w-6 h-0.5 hamburger-line transition-all duration-300"></span>
                            <span class="block w-4 h-0.5 hamburger-line transition-all duration-300 origin-center"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="md:hidden fixed inset-0 top-16 mobile-menu-bg backdrop-blur-xl opacity-0 pointer-events-none transition-all duration-500 ease-in-out z-40">
            <div class="flex flex-col items-center justify-center h-full space-y-8">
                <a href="#hero" class="text-2xl font-display font-semibold mobile-nav-link" data-i18n="nav.home">Home</a>
                <a href="#about" class="text-2xl font-display font-semibold mobile-nav-link" data-i18n="nav.about">About</a>
                <a href="#skills" class="text-2xl font-display font-semibold mobile-nav-link" data-i18n="nav.skills">Skills</a>
                <a href="#projects" class="text-2xl font-display font-semibold mobile-nav-link" data-i18n="nav.projects">Projects</a>
                <a href="#contact" class="text-2xl font-display font-semibold mobile-nav-link" data-i18n="nav.contact">Contact</a>
                {{-- Hire Me button removed --}}
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer-border py-8 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-2">
                    {{-- Removed P Logo --}}
                    <span class="footer-text text-sm">© {{ date('Y') }} Portofolio. <span data-i18n="footer.rights">All rights reserved.</span></span>
                </div>
                <div class="flex items-center space-x-6">
                    {{-- GitHub --}}
                    <a href="https://github.com/putrafebriansyah40-beep" class="social-link transition-colors duration-300" aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/febriansyah-putra-59281a340/" class="social-link transition-colors duration-300" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/fbriansyh_ptra/" class="social-link transition-colors duration-300" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Back to Top --}}
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-gradient-to-r from-primary-600 to-accent-600 text-white shadow-lg shadow-primary-500/30 flex items-center justify-center opacity-0 translate-y-4 transition-all duration-300 hover:scale-110 z-50" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>
</body>
</html>
