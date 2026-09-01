{{-- ==================== INTRO SPLASH SECTION ==================== --}}
<section class="relative h-screen w-full overflow-hidden flex flex-col justify-between items-center font-sans select-none z-[100] pb-8 bg-[#f6f2fb]">

    {{-- Background blur overlay + gradient orbs --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-white/35 backdrop-blur-[3px]"></div>
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-purple-300/30 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-pink-300/25 rounded-full blur-[120px] pointer-events-none"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 pointer-events-none opacity-[0.18] bg-[radial-gradient(#3A004D_1px,transparent_1px)] [background-size:28px_28px]"></div>
    </div>

    {{-- Glowing accent dots --}}
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/3 left-12 w-2.5 h-2.5 rounded-full bg-purple-600 shadow-[0_0_15px_#9333ea]"></div>
        <div class="absolute top-1/4 right-1/4 w-3.5 h-3.5 rounded-full bg-indigo-500 shadow-[0_0_18px_#6366f1]"></div>
        <div class="absolute bottom-1/3 left-1/3 w-3 h-3 rounded-full bg-pink-500 shadow-[0_0_16px_#ec4899]"></div>
        <div class="absolute bottom-1/4 right-16 w-2.5 h-2.5 rounded-full bg-emerald-500 shadow-[0_0_12px_#10b981]"></div>
    </div>

    {{-- Floating Context Cards (desktop) --}}
    {{-- Top Right: Data Visualization --}}
    <div class="floating-card absolute top-[22%] right-[5%] lg:right-[8%] z-20 animate-float hidden md:flex items-center gap-3">
        <div class="p-2.5 bg-gradient-to-tr from-primary-600 to-indigo-600 rounded-xl text-white shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3v16a2 2 0 0 0 2 2h16M18 17V9M13 17V5M8 17v-3"/></svg>
        </div>
        <div class="flex flex-col">
            <span class="text-[10px] font-mono uppercase tracking-wider text-primary-900 font-bold flex items-center gap-1">Web Dev
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7h6v6m-22 4 8.5-8.5 5 5L22 7"/></svg>
            </span>
            <span class="text-xs font-extrabold text-slate-800 tracking-wide">Full Stack Developer</span>
        </div>
    </div>

    {{-- Top Right pill: Model Acc --}}
    <div class="floating-pill absolute right-[8%] lg:right-[14%] top-[33%] z-20 hidden lg:flex animate-float-slow">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-emerald-600 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
        <span>GPA: <span class="text-emerald-600 font-extrabold">3.27</span></span>
    </div>

    {{-- Bottom Left: AI & ML --}}
    <div class="floating-card absolute left-[5%] lg:left-[8%] bottom-[28%] z-20 animate-float-slow hidden md:flex items-center gap-3">
        <div class="p-2.5 bg-gradient-to-tr from-pink-500 to-primary-600 rounded-xl text-white shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 13a4.5 4.5 0 0 0 3-4M6.003 5.125A3 3 0 0 0 6.401 6.5M3.477 10.896a4 4 0 0 1 .585-.396M6 18a4 4 0 0 1-1.967-.516M12 13h4M12 18h6a2 2 0 0 1 2 2v1M12 8h8M16 8V5a2 2 0 0 1 2-2"/><circle cx="16" cy="13" r=".5"/><circle cx="18" cy="3" r=".5"/><circle cx="20" cy="21" r=".5"/><circle cx="20" cy="8" r=".5"/></svg>
        </div>
        <div class="flex flex-col">
            <span class="text-[10px] font-mono uppercase tracking-wider text-pink-900 font-bold">Laravel Dev</span>
            <span class="text-xs font-extrabold text-slate-800 tracking-wide">Full Stack & Mobile</span>
        </div>
    </div>

    {{-- Bottom Left pill: Framework --}}
    <div class="floating-pill absolute left-[8%] lg:left-[14%] bottom-[44%] z-20 hidden lg:flex animate-float">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-primary-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20v2M12 2v2M17 20v2M17 2v2M2 12h2M2 17h2M2 7h2M20 12h2M20 17h2M20 7h2M7 20v2M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>
        <span>Laravel & React.js</span>
    </div>

    {{-- Left middle: SQL & Big Data --}}
    <div class="floating-card absolute left-[3%] lg:left-[5%] top-1/2 -translate-y-12 z-20 hidden lg:flex items-center gap-3">
        <div class="p-2 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-lg text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5V19A9 3 0 0 0 21 19V5M3 12A9 3 0 0 0 21 12"/></svg>
        </div>
        <div class="flex flex-col pr-1">
            <span class="text-[9px] font-mono uppercase text-cyan-900 font-bold">Database</span>
            <span class="text-xs font-extrabold text-slate-800">MySQL & PostgreSQL</span>
        </div>
    </div>

    {{-- Right middle: Python & R --}}
    <div class="floating-card absolute right-[3%] lg:right-[5%] bottom-[36%] z-20 hidden md:flex items-center gap-3">
        <div class="p-2 bg-gradient-to-tr from-emerald-500 to-teal-600 rounded-lg text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19h8M4 17l6-6-6-6"/></svg>
        </div>
        <div class="flex flex-col pr-1">
            <span class="text-[9px] font-mono uppercase text-emerald-900 font-bold">Design</span>
            <span class="text-xs font-extrabold text-slate-800">Figma & UI/UX</span>
        </div>
    </div>

    {{-- Right pill: ETL --}}
    <div class="floating-pill absolute right-[6%] top-1/2 -translate-y-16 z-20 hidden lg:flex animate-float-slow">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 6a9 9 0 0 0-9 9V3"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/></svg>
        <span>Git & GitHub</span>
    </div>

    {{-- Center: Big Title Box --}}
    <div class="relative px-8 py-6 sm:px-12 sm:py-8 border-2 border-white/90 bg-white/40 backdrop-blur-xl rounded-2xl shadow-[0_20px_50px_rgba(100,116,139,0.15)] z-30 my-auto" id="intro-box">
        {{-- Corner handles --}}
        <div class="absolute -top-2 -left-2 w-3.5 h-3.5 bg-white border border-primary-400 shadow-sm rounded-sm"></div>
        <div class="absolute -top-2 -right-2 w-3.5 h-3.5 bg-white border border-primary-400 shadow-sm rounded-sm"></div>
        <div class="absolute -bottom-2 -left-2 w-3.5 h-3.5 bg-white border border-primary-400 shadow-sm rounded-sm"></div>
        <div class="absolute -bottom-2 -right-2 w-3.5 h-3.5 bg-white border border-primary-400 shadow-sm rounded-sm"></div>

        <h1 class="text-5xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-slate-900 tracking-tight drop-shadow-[0_4px_12px_rgba(255,255,255,0.8)] whitespace-nowrap pr-4 sm:pr-8">MY PORTFOLIO</h1>

        {{-- Cursor icon --}}
        <div class="absolute -bottom-5 left-3 sm:-bottom-6 sm:left-6 z-40 pointer-events-none">
            <svg width="34" height="34" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="drop-shadow-md scale-110 sm:scale-125">
                <path d="M4 4V28L10.5 21.5L14.5 30L19 28L15 19.5L24 19L4 4Z" fill="#3A004D" stroke="white" stroke-width="2"/>
            </svg>
        </div>

        {{-- Dropdown Role badges --}}
        <div class="absolute -right-3 sm:-right-8 -bottom-16 sm:-bottom-20 w-36 sm:w-44 bg-white/80 backdrop-blur-2xl rounded-[20px] shadow-[0_15px_35px_rgba(100,116,139,0.18)] border border-white/90 overflow-hidden flex flex-col z-40 text-center">
            <div class="py-2 sm:py-2.5 px-3 text-xs sm:text-sm font-semibold text-slate-800 hover:bg-primary-50/80 active:scale-[0.98] transition-all cursor-default border-b border-primary-100/60">Full Stack Dev</div>
            <div class="py-2 sm:py-2.5 px-3 text-xs sm:text-sm font-semibold text-slate-800 hover:bg-primary-50/80 active:scale-[0.98] transition-all cursor-default border-b border-primary-100/60">UI/UX Designer</div>
            <div class="py-2 sm:py-2.5 px-3 text-xs sm:text-sm font-semibold text-slate-800 hover:bg-primary-50/80 active:scale-[0.98] transition-all cursor-default border-b border-primary-100/60">Laravel Expert</div>
            <div class="py-2 sm:py-2.5 px-3 text-xs sm:text-sm font-semibold text-slate-800 hover:bg-primary-50/80 active:scale-[0.98] transition-all cursor-default">Open to Internship</div>
        </div>
    </div>

    {{-- Bottom Presented by badge --}}
    <div class="z-30">
        <div class="bg-white/85 px-6 py-2 rounded-full shadow-[0_10px_25px_rgba(100,116,139,0.12)] border border-white transition-transform hover:scale-105 cursor-default backdrop-blur-xl">
            <p class="text-slate-800 text-xs sm:text-sm tracking-wide whitespace-nowrap font-semibold">Presented by <span class="font-black text-primary-900">Febriansyah Putra</span></p>
        </div>
    </div>
</section>

{{-- ==================== HERO SECTION ==================== --}}
<section id="hero" class="relative flex min-h-screen flex-col overflow-hidden z-20 bg-[#EBE6EF]">

    {{-- Top Marquee --}}
    <div class="absolute top-0 left-0 w-full overflow-hidden z-20 py-4">
        <div class="relative overflow-hidden border-y border-[#3A004D]/10 py-3 bg-transparent"
             style="-webkit-mask-image:linear-gradient(90deg,transparent,black 8%,black 92%,transparent);mask-image:linear-gradient(90deg,transparent,black 8%,black 92%,transparent)"
             aria-label="Skills and areas of focus">
            <div class="marquee-track flex w-max items-center gap-8">
                @php
                $marqueeItems = ['PHP & Laravel','JavaScript','React.js','Flutter','MySQL','Git & GitHub','Figma','Tailwind CSS','Java','SQL','REST API','Fotografi','Videografi','Desain Grafis','OOP','SDLC','VS Code'];
                $marqueeAll   = array_merge($marqueeItems, $marqueeItems);
                @endphp
                @foreach($marqueeAll as $item)
                <span class="flex items-center gap-8 whitespace-nowrap font-mono text-[11px] uppercase tracking-[0.12em] text-[#3A004D] font-semibold">
                    {{ $item }}<span class="text-[#8B4F67]" aria-hidden="true">·</span>
                </span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Main 2-Column Content --}}
    <div class="container relative z-10 mx-auto grid max-w-6xl grid-cols-1 items-center gap-12 px-4 pt-36 pb-24 lg:grid-cols-12 w-full my-auto">

        {{-- Left: Text Content --}}
        <div class="relative flex flex-col items-center text-center lg:col-span-7 lg:items-start lg:text-left justify-center">
            {{-- Blurred backdrop behind text (mobile + desktop) --}}
            <div class="absolute -inset-6 sm:-inset-10 rounded-[4rem] pointer-events-none -z-10 backdrop-blur-[6px]"
                 style="background:radial-gradient(ellipse at center,rgba(235,230,239,0.92) 20%,rgba(235,230,239,0.65) 60%,rgba(235,230,239,0) 100%);-webkit-mask-image:radial-gradient(ellipse at center,black 45%,transparent 100%);mask-image:radial-gradient(ellipse at center,black 45%,transparent 100%)"></div>

            <div class="flex flex-col items-center lg:items-start space-y-6 w-full animate-fade-in-up" style="animation-delay:0.1s; opacity:0; animation-fill-mode:forwards;">
                {{-- Available badge --}}
                <div class="inline-flex items-center rounded-full border border-[#3A004D]/20 px-4 py-1.5 text-xs font-semibold shadow-[0_4px_20px_rgba(255,255,255,0.9)] bg-[#3A004D] text-white">
                    Available for Internships & Projects
                </div>

                {{-- Name heading --}}
                <h2 class="font-display italic font-medium text-[clamp(2.2rem,5vw,4.2rem)] leading-[1.1] text-[#3A004D]"
                    style="text-shadow:0 0 20px rgba(255,255,255,0.95),0 0 35px rgba(255,255,255,0.8),0 2px 10px rgba(255,255,255,1)">
                    Hi, I'm Febriansyah<br>Putra
                </h2>

                {{-- Role tags --}}
                <div class="flex flex-wrap gap-2 justify-center lg:justify-start">
                    <span class="text-xs px-3.5 py-1.5 bg-[#3A004D] text-white font-medium rounded-full shadow-[0_2px_12px_rgba(255,255,255,0.8)]">Full Stack Developer</span>
                    <span class="text-xs px-3.5 py-1.5 bg-[#3A004D] text-white font-medium rounded-full shadow-[0_2px_12px_rgba(255,255,255,0.8)]">UI/UX Designer</span>
                    <span class="text-xs px-3.5 py-1.5 bg-[#3A004D] text-white font-medium rounded-full shadow-[0_2px_12px_rgba(255,255,255,0.8)]">Laravel Expert</span>
                </div>

                {{-- Description --}}
                <p class="max-w-2xl text-base text-[#3A004D] md:text-lg font-medium leading-relaxed"
                   style="text-shadow:0 0 14px rgba(255,255,255,0.95),0 0 28px rgba(255,255,255,0.7)">
                    {{ $hero_description ?? 'Mahasiswa Politeknik Negeri Padang yang bersemangat membangun aplikasi web & mobile modern dengan Laravel, React, dan Flutter.' }}
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-wrap items-center justify-center gap-4 pt-4 lg:justify-start">
                    <a href="#projects" class="inline-flex h-12 items-center justify-center rounded-full bg-[#3A004D] px-6 font-semibold text-white transition-all hover:bg-[#8B4F67] shadow-[0_4px_20px_rgba(255,255,255,0.85)] hover:shadow-xl">
                        View Work
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ asset('cv.pdf') }}" target="_blank" class="inline-flex h-12 items-center justify-center rounded-full border-2 border-[#3A004D] bg-white px-6 font-semibold text-[#3A004D] transition-all hover:bg-gray-100 shadow-[0_4px_20px_rgba(255,255,255,0.85)] hover:shadow-xl">
                        Download CV
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 text-[#3A004D]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15V3M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4m4-5 5 5 5-5"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: Photo --}}
        <div class="relative lg:col-span-5 w-full flex items-center justify-center animate-fade-in" style="animation-delay:0.5s; opacity:0; animation-fill-mode:forwards;">
            <div class="relative w-full max-w-md aspect-[4/3] rounded-2xl p-1 bg-gradient-to-tr from-[#3A004D]/30 via-[#8B4F67]/30 to-[#9E4ABB]/30 shadow-xl backdrop-blur-md border border-[#3A004D]/10">
                <div class="w-full h-full rounded-xl overflow-hidden bg-white relative">
                    <img src="{{ asset('images/profile.jpg') }}"
                         alt="Febriansyah Putra"
                         class="object-cover object-center w-full h-full"
                         onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-100 to-surface-200\'><span class=\'text-6xl font-display font-black text-primary-300\'>FP</span></div>'">
                </div>
                <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-[#9E4ABB] to-[#8B4F67] opacity-15 blur-xl -z-10"></div>
            </div>
        </div>
    </div>

    {{-- Bottom Marquee --}}
    <div class="absolute bottom-0 left-0 w-full overflow-hidden z-20 py-4">
        <div class="relative overflow-hidden border-y border-[#3A004D]/10 py-3 bg-transparent"
             style="-webkit-mask-image:linear-gradient(90deg,transparent,black 8%,black 92%,transparent);mask-image:linear-gradient(90deg,transparent,black 8%,black 92%,transparent)"
             aria-label="Skills and areas of focus">
            <div class="marquee-track-reverse flex w-max items-center gap-8">
                @foreach($marqueeAll as $item)
                <span class="flex items-center gap-8 whitespace-nowrap font-mono text-[11px] uppercase tracking-[0.12em] text-[#3A004D] font-semibold">
                    {{ $item }}<span class="text-[#8B4F67]" aria-hidden="true">·</span>
                </span>
                @endforeach
            </div>
        </div>
    </div>

</section>
