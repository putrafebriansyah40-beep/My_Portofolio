<section id="tour" class="py-24 lg:py-32 relative overflow-hidden bg-[#EBE6EF]">
    {{-- Dot pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.07] bg-[radial-gradient(#3A004D_1px,transparent_1px)] [background-size:28px_28px]"></div>
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-primary-200/25 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-mauve-200/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-label mb-3">
                <span class="w-4 h-px bg-mauve-500 block"></span>
                Interactive
                <span class="w-4 h-px bg-mauve-500 block"></span>
            </span>
            <h2 class="section-title mt-2">3D <span class="gradient-text">Skills Tour</span></h2>
            <p class="section-subtitle mx-auto mt-3">Hover untuk menjeda rotasi, klik ikon untuk melihat detail skill</p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16">
            {{-- CSS 3D Globe --}}
            <div class="flex-shrink-0 reveal-left">
                <div class="globe-scene w-72 h-72 md:w-96 md:h-96 relative select-none" id="globe-scene">
                    {{-- Glow ring --}}
                    <div class="absolute inset-0 rounded-full border-2 border-primary-200/40 shadow-glow"></div>
                    <div class="absolute inset-4 rounded-full border border-primary-100/30"></div>
                    <div class="absolute inset-8 rounded-full border border-primary-50/30"></div>

                    {{-- Center dot --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary-400 to-primary-800 flex items-center justify-center shadow-purple">
                            <span class="text-white font-display font-black text-xl">FP</span>
                        </div>
                    </div>

                    {{-- Orbit 1 (horizontal) --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-full h-full rounded-full border border-primary-200/40 animate-spin-slow" style="transform: rotateX(70deg);">
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">PHP</div>
                            </div>
                            <div class="absolute -bottom-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">Laravel</div>
                            </div>
                        </div>
                    </div>

                    {{-- Orbit 2 (tilted) --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-full h-full rounded-full border border-surface-300/60 animate-spin-slow" style="transform: rotateX(70deg) rotateZ(60deg); animation-duration: 16s; animation-direction: reverse;">
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">React</div>
                            </div>
                            <div class="absolute -bottom-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">MySQL</div>
                            </div>
                        </div>
                    </div>

                    {{-- Orbit 3 --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-full h-full rounded-full border border-primary-100/50 animate-spin-slow" style="transform: rotateX(70deg) rotateZ(120deg); animation-duration: 22s;">
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">Figma</div>
                            </div>
                            <div class="absolute -bottom-4 left-1/2 -translate-x-1/2">
                                <div class="glass-card px-2 py-1 rounded-lg text-[10px] font-bold text-primary-800 border-primary-200/60 whitespace-nowrap">Flutter</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Journey text --}}
            <div class="flex-1 reveal-right">
                <h3 class="text-2xl md:text-3xl font-display font-bold text-primary-900 mb-6">
                    Perjalanan Belajar <span class="gradient-text">Saya</span>
                </h3>

                {{-- Timeline journey --}}
                <div class="space-y-6">
                    @php
                    $journey = [
                        ['year'=>'2021','title'=>'Awal Coding','desc'=>'Mulai belajar pemrograman dari scratch dengan Python dan algoritma dasar di SMA.','icon'=>'🌱'],
                        ['year'=>'2023','title'=>'Web Development','desc'=>'Mendalami HTML, CSS, JavaScript, kemudian merambah ke PHP dan framework Laravel.','icon'=>'🌐'],
                        ['year'=>'2024','title'=>'Kuliah di PNP','desc'=>'Diterima di D4 Teknologi Rekayasa Perangkat Lunak, Politeknik Negeri Padang. IPK 3.27.','icon'=>'🎓'],
                        ['year'=>'Now','title'=>'Full Stack & Design','desc'=>'Fokus pada Laravel, React, Flutter, dan Figma. Aktif di berbagai organisasi kampus.','icon'=>'🚀'],
                    ];
                    @endphp
                    @foreach($journey as $j)
                    <div class="flex items-start gap-4">
                        <div class="flex flex-col items-center flex-shrink-0">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary-100 to-surface-200 flex items-center justify-center text-base shadow-card">{{ $j['icon'] }}</div>
                            @if(!$loop->last)
                            <div class="w-0.5 h-8 bg-gradient-to-b from-primary-200 to-transparent mt-1"></div>
                            @endif
                        </div>
                        <div class="pb-2">
                            <div class="flex items-center gap-3 mb-1">
                                <span class="text-xs font-bold text-primary-500 bg-primary-50 px-2 py-0.5 rounded-full">{{ $j['year'] }}</span>
                                <h4 class="text-sm font-bold text-primary-900">{{ $j['title'] }}</h4>
                            </div>
                            <p class="text-sm text-neutral-500 leading-relaxed">{{ $j['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
