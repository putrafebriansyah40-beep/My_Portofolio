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

    {{-- Preconnect to Google Fonts for faster load --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
<body class="bg-mesh min-h-screen overflow-x-hidden w-full">
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
                            <span class="block w-6 h-0.5 hamburger-line transition-all duration-300 origin-center"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu" class="md:hidden absolute top-full left-0 right-0 mt-2 py-6 rounded-3xl liquid-glass-nav border border-white/10 opacity-0 pointer-events-none -translate-y-4 transition-all duration-300 z-40 shadow-2xl">
            <div class="flex flex-col items-center justify-center space-y-5">
                <a href="#hero" class="text-lg font-display font-medium mobile-nav-link w-full text-center" data-i18n="nav.home">Home</a>
                <a href="#about" class="text-lg font-display font-medium mobile-nav-link w-full text-center" data-i18n="nav.about">About</a>
                <a href="#skills" class="text-lg font-display font-medium mobile-nav-link w-full text-center" data-i18n="nav.skills">Skills</a>
                <a href="#projects" class="text-lg font-display font-medium mobile-nav-link w-full text-center" data-i18n="nav.projects">Projects</a>
                <a href="#contact" class="text-lg font-display font-medium mobile-nav-link w-full text-center" data-i18n="nav.contact">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="w-full overflow-x-hidden relative flex-grow">
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
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/febriansyah-putra-59281a340/" class="social-link transition-colors duration-300" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
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
