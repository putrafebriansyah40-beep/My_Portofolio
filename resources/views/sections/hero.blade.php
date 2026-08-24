<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
    {{-- Animated Background Shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary-600/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-accent-500/15 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-500/5 rounded-full blur-3xl animate-float-slow"></div>
        
        {{-- Grid Pattern --}}
        <div class="absolute inset-0 grid-pattern"></div>

        {{-- Floating Particles --}}
        <div class="absolute top-20 left-[10%] w-2 h-2 bg-primary-400/40 rounded-full animate-float"></div>
        <div class="absolute top-40 right-[15%] w-3 h-3 bg-accent-400/30 rounded-full animate-float-delayed"></div>
        <div class="absolute bottom-32 left-[20%] w-2 h-2 bg-primary-300/30 rounded-full animate-float-slow"></div>
        <div class="absolute top-1/3 right-[25%] w-1.5 h-1.5 bg-accent-300/40 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 right-[10%] w-2.5 h-2.5 bg-primary-400/25 rounded-full animate-float-delayed"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Main Heading --}}
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold heading-text mb-6 animate-fade-in-up" style="animation-delay: 0.1s;">
            <span data-i18n="hero.greeting">Hi, I'm</span> <span class="gradient-text">{{ $name ?? 'Febriansyah Putra' }}</span>
        </h1>

        {{-- Typing Text --}}
        <div class="h-8 md:h-10 mb-8 animate-fade-in-up" style="animation-delay: 0.2s;">
            <p class="text-lg md:text-xl lg:text-2xl body-text-muted">
                <span id="typing-text" class="border-r-2 border-primary-400"></span>
            </p>
        </div>

        {{-- Description --}}
        <p class="text-base md:text-lg body-text-muted max-w-2xl mx-auto mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;" data-i18n="hero.description">
            {{ $hero_description ?? 'Passionate about creating beautiful, functional, and user-centered digital experiences. Turning complex problems into elegant solutions.' }}
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style="animation-delay: 0.4s;">
            <a href="#projects" class="btn-primary flex items-center gap-2 w-full sm:w-auto justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                <span data-i18n="hero.cta_work">View My Work</span>
            </a>
            <a href="{{ asset('cv.pdf') }}" target="_blank" class="btn-outline flex items-center gap-2 w-full sm:w-auto justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span>Lihat CV</span>
            </a>
            <a href="#contact" class="btn-outline flex items-center gap-2 w-full sm:w-auto justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span data-i18n="hero.cta_contact">Contact Me</span>
            </a>
        </div>
    </div>
</section>
