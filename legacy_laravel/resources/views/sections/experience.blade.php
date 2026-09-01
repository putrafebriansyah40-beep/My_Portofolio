<section id="experience" class="relative overflow-hidden bg-[#EBE6EF] flex flex-col" style="min-height:100vh;">

    {{-- ===== Animated Floating Dots ===== --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        {{-- Large accent dots --}}
        <div class="absolute top-[8%]   left-[15%]  w-3 h-3 rounded-full bg-purple-500/50  animate-float"></div>
        <div class="absolute top-[22%]  right-[12%] w-4 h-4 rounded-full bg-indigo-500/35  animate-float-slow"></div>
        <div class="absolute top-[55%]  left-[6%]   w-3.5 h-3.5 rounded-full bg-pink-400/40 animate-float-fast"></div>
        <div class="absolute top-[75%]  right-[8%]  w-3 h-3 rounded-full bg-blue-500/40    animate-float"></div>
        <div class="absolute top-[42%]  left-[42%]  w-2.5 h-2.5 rounded-full bg-purple-400/30 animate-float-slow"></div>
        {{-- Medium dots --}}
        <div class="absolute top-[35%]  left-[3%]   w-2 h-2 rounded-full bg-violet-400/45  animate-float-fast"></div>
        <div class="absolute top-[18%]  right-[30%] w-2 h-2 rounded-full bg-pink-500/35    animate-float"></div>
        <div class="absolute top-[88%]  left-[28%]  w-2.5 h-2.5 rounded-full bg-indigo-400/40 animate-float-slow"></div>
        <div class="absolute top-[62%]  right-[25%] w-2 h-2 rounded-full bg-purple-500/30  animate-float"></div>
        <div class="absolute top-[45%]  right-[42%] w-1.5 h-1.5 rounded-full bg-blue-400/40 animate-float-fast"></div>
        {{-- Small dots --}}
        <div class="absolute top-[12%]  left-[50%]  w-1.5 h-1.5 rounded-full bg-violet-500/25 animate-float"></div>
        <div class="absolute top-[30%]  right-[6%]  w-1.5 h-1.5 rounded-full bg-pink-400/30  animate-float-slow"></div>
        <div class="absolute top-[68%]  left-[35%]  w-1.5 h-1.5 rounded-full bg-indigo-500/25 animate-float-fast"></div>
        <div class="absolute top-[82%]  right-[38%] w-2 h-2 rounded-full bg-purple-400/35  animate-float"></div>
        <div class="absolute top-[92%]  left-[10%]  w-1.5 h-1.5 rounded-full bg-blue-500/30 animate-float-slow"></div>
    </div>

    {{-- ===== Section Header ===== --}}
    <div class="text-center relative z-10 pt-20 pb-8 reveal">
        <div class="inline-flex items-center px-7 py-2.5 bg-white/70 backdrop-blur-xl rounded-full border border-[#3A004D]/8 shadow-[0_8px_32px_rgba(58,0,77,0.06)] mb-6">
            <span class="text-[10px] font-mono uppercase tracking-[0.22em] text-[#8B4F67] font-bold">Featured Highlights</span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-[#3A004D] leading-tight font-display">
            Milestones & <span class="gradient-text">Achievements</span>
        </h2>
    </div>

    {{-- ===== 3D Card Carousel ===== --}}
    @php
    $timeline = $timeline ?? [];

    $icons     = ['🏛️', '📡', '🌐', '🎓', '📚'];
    $gradients = [
        'from-violet-500 via-purple-500 to-indigo-600',
        'from-sky-400 via-blue-500 to-indigo-600',
        'from-rose-400 via-pink-500 to-fuchsia-600',
        'from-emerald-400 via-teal-500 to-cyan-600',
        'from-amber-400 via-orange-500 to-red-500',
    ];
    $tagColors = ['bg-violet-500', 'bg-blue-500', 'bg-pink-500', 'bg-emerald-500', 'bg-amber-500'];

    $activities = [];
    foreach ($timeline as $i => $item) {
        $activities[] = [
            'title'       => $item['title'],
            'org'         => $item['org'],
            'period'      => $item['period'],
            'description' => $item['description'],
            'type'        => $item['type'],
            'icon'        => $icons[$i % count($icons)],
            'gradient'    => $gradients[$i % count($gradients)],
            'tag_color'   => $tagColors[$i % count($tagColors)],
            'number'      => str_pad($i + 1, 2, '0', STR_PAD_LEFT),
        ];
    }
    if (empty($activities)) {
        $activities = [
            ['title'=>'Sekretaris Umum','org'=>'Forum Studi Islam Politeknik','period'=>'2025 - 2026','description'=>'Menjadi tangan kanan Ketua Umum dan mengelola administrasi, surat menyurat organisasi.','type'=>'work','icon'=>'🏛️','gradient'=>'from-violet-500 via-purple-500 to-indigo-600','tag_color'=>'bg-violet-500','number'=>'01'],
            ['title'=>'Anggota Multimedia Support','org'=>'Lembaga Responsi Agama Islam','period'=>'2025 - 2026','description'=>'Menyajikan berbagai informasi melalui media sosial untuk mahasiswa Politeknik Negeri Padang.','type'=>'work','icon'=>'📡','gradient'=>'from-sky-400 via-blue-500 to-indigo-600','tag_color'=>'bg-blue-500','number'=>'02'],
            ['title'=>'Anggota Public Relationship','org'=>'CyberTech','period'=>'2026 - Sekarang','description'=>'Menjadi jembatan komunikasi antara organisasi dengan publik internal maupun eksternal.','type'=>'work','icon'=>'🌐','gradient'=>'from-rose-400 via-pink-500 to-fuchsia-600','tag_color'=>'bg-pink-500','number'=>'03'],
            ['title'=>'D4 Teknologi Rekayasa Perangkat Lunak','org'=>'Politeknik Negeri Padang','period'=>'2024 - Sekarang','description'=>'GPA 3.27. Aktif mengembangkan kemampuan di bidang rekayasa perangkat lunak web & mobile.','type'=>'education','icon'=>'🎓','gradient'=>'from-emerald-400 via-teal-500 to-cyan-600','tag_color'=>'bg-emerald-500','number'=>'04'],
            ['title'=>'SMA MIPA','org'=>'SMA Negeri 1 Sungai Limau','period'=>'2021 - 2024','description'=>'Lulus dengan fokus pada Ilmu Pengetahuan Alam.','type'=>'education','icon'=>'📚','gradient'=>'from-amber-400 via-orange-500 to-red-500','tag_color'=>'bg-amber-500','number'=>'05'],
        ];
    }
    @endphp

    <div class="relative z-10 flex-1 flex flex-col items-center justify-center px-4"
         x-data="{
            active: 0,
            total: {{ count($activities) }},
            autoTour: false,
            autoTimer: null,
            prev() { this.active = (this.active - 1 + this.total) % this.total; },
            next() { this.active = (this.active + 1) % this.total; },
            goTo(i) { this.active = i; },
            startAuto() {
                this.autoTour = true;
                this.autoTimer = setInterval(() => { this.next(); }, 3500);
            },
            stopAuto() {
                this.autoTour = false;
                if (this.autoTimer) clearInterval(this.autoTimer);
            },
            toggleAuto() { this.autoTour ? this.stopAuto() : this.startAuto(); },
         }"
         @keydown.left.window="prev()"
         @keydown.right.window="next()">

        {{-- ===== Card Stage ===== --}}
        <div class="relative w-full max-w-6xl mx-auto flex items-center justify-center"
             style="height: 460px; perspective: 1200px;">

            @foreach($activities as $i => $act)
            <div
                class="absolute transition-all ease-[cubic-bezier(0.34,1.56,0.64,1)] cursor-pointer select-none"
                style="transition-duration: 700ms;"
                :style="(function(){
                    const idx = {{ $i }};
                    const offset = (idx - active + {{ count($activities) }}) % {{ count($activities) }};
                    if (offset === 0) {
                        return 'transform: translateX(-60px) translateZ(0) rotateY(0deg) scale(1); z-index: 30; opacity: 1; filter: none;';
                    } else if (offset === 1) {
                        return 'transform: translateX(220px) translateZ(-80px) rotateY(-8deg) scale(0.78); z-index: 20; opacity: 0.9; filter: brightness(0.95);';
                    } else if (offset === 2) {
                        return 'transform: translateX(380px) translateZ(-160px) rotateY(-12deg) scale(0.60); z-index: 10; opacity: 0.55; filter: brightness(0.90) blur(1px);';
                    } else {
                        return 'transform: translateX(0) translateZ(-200px) scale(0.4); z-index: 1; opacity: 0; pointer-events: none;';
                    }
                }())"
                @click="goTo({{ $i }})"
            >
                {{-- Card Container --}}
                <div class="rounded-[28px] overflow-hidden shadow-[0_25px_80px_rgba(58,0,77,0.20)] border border-white/60 bg-white"
                     :class="{{ $i }} === active ? 'ring-2 ring-white/50' : ''"
                     style="width: 360px;">

                    {{-- Gradient Image Header --}}
                    <div class="relative h-52 bg-gradient-to-br {{ $act['gradient'] }} overflow-hidden">
                        {{-- Subtle pattern overlay --}}
                        <div class="absolute inset-0 opacity-[0.08]"
                             style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 1px); background-size: 24px 24px;"></div>

                        {{-- Decorative shapes --}}
                        <div class="absolute -top-8 -right-8 w-32 h-32 bg-white/10 rounded-full"></div>
                        <div class="absolute top-1/2 -left-6 w-20 h-20 bg-white/8 rounded-full"></div>
                        <div class="absolute -bottom-4 right-1/3 w-16 h-16 bg-white/10 rounded-full"></div>

                        {{-- Big Icon --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-7xl drop-shadow-[0_8px_24px_rgba(0,0,0,0.2)] select-none"
                                  :class="{{ $i }} === active ? '' : 'text-5xl'">{{ $act['icon'] }}</span>
                        </div>

                        {{-- Type Badge --}}
                        <div class="absolute top-4 left-4">
                            <div class="px-3 py-1 bg-black/20 backdrop-blur-md rounded-full border border-white/20">
                                <span class="text-[9px] font-bold text-white uppercase tracking-[0.15em]">
                                    {{ $act['type'] === 'education' ? '🎓 Education' : '🏢 Organization' }}
                                </span>
                            </div>
                        </div>

                        {{-- Number Badge --}}
                        <div class="absolute top-4 right-4">
                            <div class="w-9 h-9 rounded-xl {{ $act['tag_color'] }} flex items-center justify-center shadow-lg border border-white/20 backdrop-blur-sm">
                                <span class="text-[11px] font-black text-white font-mono">#{{ $act['number'] }}</span>
                            </div>
                        </div>

                        {{-- Period Badge (bottom) --}}
                        <div class="absolute bottom-3 left-4">
                            <div class="px-3.5 py-1.5 bg-white/20 backdrop-blur-lg rounded-xl border border-white/30">
                                <span class="text-[10px] font-mono font-bold text-white tracking-wider">{{ $act['period'] }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card Body (hidden on non-active with CSS clip) --}}
                    <div class="p-6"
                         :style="{{ $i }} === active ? 'max-height: 200px; opacity: 1;' : 'max-height: 0; padding: 0; opacity: 0; overflow: hidden;'"
                         style="transition: max-height 0.5s ease, padding 0.5s ease, opacity 0.4s ease;">
                        <h3 class="text-base font-black text-[#3A004D] leading-snug mb-1.5">{{ $act['title'] }}</h3>
                        <p class="text-[11px] font-bold text-[#8B4F67] uppercase tracking-[0.12em] mb-3">{{ $act['org'] }}</p>
                        <p class="text-[13px] text-slate-500 leading-relaxed">{{ $act['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- ===== Dot Indicators ===== --}}
        <div class="flex items-center gap-2.5 mt-4 mb-5">
            @foreach($activities as $i => $act)
            <button
                @click="goTo({{ $i }}); stopAuto()"
                :class="active === {{ $i }}
                    ? 'w-8 h-2.5 bg-gradient-to-r from-[#3A004D] to-[#9E4ABB] shadow-[0_2px_8px_rgba(58,0,77,0.3)]'
                    : 'w-2.5 h-2.5 bg-[#3A004D]/20 hover:bg-[#3A004D]/40'"
                class="rounded-full transition-all duration-400 ease-out"
            ></button>
            @endforeach
        </div>

        {{-- ===== Bottom Navigation Bar ===== --}}
        <div class="flex items-center gap-3 pb-16">

            {{-- Prev Button --}}
            <button @click="prev(); stopAuto()"
                    class="group w-11 h-11 rounded-full bg-white/80 backdrop-blur-xl border border-[#3A004D]/10
                           shadow-[0_4px_20px_rgba(58,0,77,0.08)] flex items-center justify-center
                           hover:bg-white hover:shadow-[0_8px_32px_rgba(58,0,77,0.12)] hover:scale-110
                           active:scale-95 transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#3A004D] group-hover:-translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            {{-- Current Title Pill --}}
            <div class="px-7 py-3 bg-white/80 backdrop-blur-xl rounded-full border border-[#3A004D]/8 shadow-[0_4px_20px_rgba(58,0,77,0.06)] min-w-[220px] text-center relative overflow-hidden">
                @foreach($activities as $i => $act)
                <span x-show="active === {{ $i }}"
                      x-transition:enter="transition ease-out duration-300"
                      x-transition:enter-start="opacity-0 translate-y-2"
                      x-transition:enter-end="opacity-100 translate-y-0"
                      x-transition:leave="transition ease-in duration-200"
                      x-transition:leave-start="opacity-100"
                      x-transition:leave-end="opacity-0 -translate-y-2"
                      class="text-[13px] font-bold text-[#3A004D] tracking-wide block">
                    {{ $act['title'] }}
                </span>
                @endforeach
            </div>

            {{-- Auto Tour Button --}}
            <button @click="toggleAuto()"
                    :class="autoTour
                        ? 'bg-white border-[#3A004D]/20 text-[#3A004D] shadow-[0_4px_20px_rgba(58,0,77,0.08)]'
                        : 'bg-[#3A004D] border-transparent text-white shadow-[0_4px_20px_rgba(58,0,77,0.30)]'"
                    class="flex items-center gap-2.5 px-6 py-3 rounded-full border text-[11px] font-bold tracking-[0.15em] uppercase
                           hover:scale-105 active:scale-95 transition-all duration-200 backdrop-blur-xl">
                <template x-if="!autoTour">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </template>
                <template x-if="autoTour">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                </template>
                <span x-text="autoTour ? 'Pause' : 'Auto Tour'"></span>
            </button>

            {{-- Next Button --}}
            <button @click="next(); stopAuto()"
                    class="group w-11 h-11 rounded-full bg-white/80 backdrop-blur-xl border border-[#3A004D]/10
                           shadow-[0_4px_20px_rgba(58,0,77,0.08)] flex items-center justify-center
                           hover:bg-white hover:shadow-[0_8px_32px_rgba(58,0,77,0.12)] hover:scale-110
                           active:scale-95 transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#3A004D] group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>

    </div>

</section>
