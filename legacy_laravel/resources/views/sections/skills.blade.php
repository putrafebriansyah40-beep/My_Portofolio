<section id="skills" class="py-24 lg:py-32 relative overflow-hidden bg-[#EBE6EF]">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary-300/60 to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary-300/60 to-transparent"></div>
    {{-- Dot pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.07] bg-[radial-gradient(#3A004D_1px,transparent_1px)] [background-size:28px_28px]"></div>
    {{-- Orbs --}}
    <div class="absolute top-1/4 right-0 w-80 h-80 bg-primary-200/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-mauve-200/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-label mb-3">
                <span class="w-4 h-px bg-mauve-500 block"></span>
                Tech Stack
                <span class="w-4 h-px bg-mauve-500 block"></span>
            </span>
            <h2 class="section-title mt-2">Keahlian <span class="gradient-text">Saya</span></h2>
            <p class="section-subtitle mx-auto mt-3">Teknologi dan alat yang saya gunakan setiap hari</p>
        </div>

        {{-- Categories grid --}}
        @php
        $categories = [
            [
                'label'  => 'Programming',
                'icon'   => '🧑‍💻',
                'color'  => 'from-violet-500/10 to-purple-500/10 border-violet-200/50',
                'dot'    => 'bg-violet-500',
                'skills' => [
                    ['name'=>'PHP',       'emoji'=>'🐘','color'=>'#777BB4'],
                    ['name'=>'JavaScript','emoji'=>'🟨','color'=>'#F7DF1E'],
                    ['name'=>'Java',      'emoji'=>'☕','color'=>'#ED8B00'],
                    ['name'=>'Python',    'emoji'=>'🐍','color'=>'#3776AB'],
                    ['name'=>'SQL',       'emoji'=>'🗄️','color'=>'#4479A1'],
                ]
            ],
            [
                'label'  => 'Framework & Library',
                'icon'   => '⚙️',
                'color'  => 'from-blue-500/10 to-indigo-500/10 border-blue-200/50',
                'dot'    => 'bg-blue-500',
                'skills' => [
                    ['name'=>'Laravel',   'emoji'=>'🔴','color'=>'#FF2D20'],
                    ['name'=>'React.js',  'emoji'=>'⚛️','color'=>'#61DAFB'],
                    ['name'=>'Flutter',   'emoji'=>'💙','color'=>'#02569B'],
                    ['name'=>'Tailwind',  'emoji'=>'🎨','color'=>'#06B6D4'],
                ]
            ],
            [
                'label'  => 'Database & Tools',
                'icon'   => '🗃️',
                'color'  => 'from-emerald-500/10 to-teal-500/10 border-emerald-200/50',
                'dot'    => 'bg-emerald-500',
                'skills' => [
                    ['name'=>'MySQL',     'emoji'=>'🗃️','color'=>'#4479A1'],
                    ['name'=>'Git',       'emoji'=>'🌿','color'=>'#F05032'],
                    ['name'=>'GitHub',    'emoji'=>'🐙','color'=>'#181717'],
                    ['name'=>'VS Code',   'emoji'=>'💻','color'=>'#007ACC'],
                ]
            ],
            [
                'label'  => 'Design & Creative',
                'icon'   => '🎨',
                'color'  => 'from-pink-500/10 to-rose-500/10 border-pink-200/50',
                'dot'    => 'bg-pink-500',
                'skills' => [
                    ['name'=>'Figma',     'emoji'=>'🎭','color'=>'#F24E1E'],
                    ['name'=>'Fotografi', 'emoji'=>'📸','color'=>'#6D28D9'],
                    ['name'=>'Videografi','emoji'=>'🎬','color'=>'#DC2626'],
                    ['name'=>'Desain',    'emoji'=>'✏️','color'=>'#7C3AED'],
                ]
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @foreach($categories as $i => $cat)
            <div class="glass-card rounded-2xl p-6 reveal" style="transition-delay: {{ $i * 100 }}ms;">
                <div class="flex items-center gap-2.5 mb-5">
                    <span class="w-2.5 h-2.5 rounded-full {{ $cat['dot'] }}"></span>
                    <p class="text-xs font-bold text-primary-900 uppercase tracking-widest">{{ $cat['label'] }}</p>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    @foreach($cat['skills'] as $skill)
                    <div class="skill-icon-item">
                        <span class="text-2xl">{{ $skill['emoji'] }}</span>
                        <span class="text-[10px] font-semibold text-primary-700/70 text-center">{{ $skill['name'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        {{-- Marquee rows --}}
        <div class="reveal space-y-4">
            <div class="marquee-wrapper">
                <div class="marquee-track">
                    @foreach(['PHP','Laravel','React.js','MySQL','JavaScript','Flutter','Figma','Git','Java','Python','Tailwind CSS','SQL','VS Code','GitHub'] as $s)
                    <span class="inline-flex items-center gap-2 mx-4 px-4 py-2 rounded-full bg-white/60 border border-primary-200/50 text-sm font-semibold text-primary-800 whitespace-nowrap">
                        {{ $s }}
                    </span>
                    @endforeach
                    @foreach(['PHP','Laravel','React.js','MySQL','JavaScript','Flutter','Figma','Git','Java','Python','Tailwind CSS','SQL','VS Code','GitHub'] as $s)
                    <span class="inline-flex items-center gap-2 mx-4 px-4 py-2 rounded-full bg-white/60 border border-primary-200/50 text-sm font-semibold text-primary-800 whitespace-nowrap">
                        {{ $s }}
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="marquee-wrapper">
                <div class="marquee-track-reverse">
                    @foreach(['OOP','SDLC','REST API','Fotografi','Videografi','Desain Grafis','Teamwork','Problem Solving','Adaptabilitas','Komunikasi','Figma','Wireframing'] as $s)
                    <span class="inline-flex items-center gap-2 mx-4 px-4 py-2 rounded-full bg-primary-100/60 border border-primary-200/50 text-sm font-medium text-primary-700 whitespace-nowrap">
                        {{ $s }}
                    </span>
                    @endforeach
                    @foreach(['OOP','SDLC','REST API','Fotografi','Videografi','Desain Grafis','Teamwork','Problem Solving','Adaptabilitas','Komunikasi','Figma','Wireframing'] as $s)
                    <span class="inline-flex items-center gap-2 mx-4 px-4 py-2 rounded-full bg-primary-100/60 border border-primary-200/50 text-sm font-medium text-primary-700 whitespace-nowrap">
                        {{ $s }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
