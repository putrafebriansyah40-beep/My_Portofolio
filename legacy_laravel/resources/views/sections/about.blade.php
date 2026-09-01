<section id="about" class="py-24 lg:py-32 relative overflow-hidden bg-[#EBE6EF]">
    {{-- BG decoration --}}
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-primary-200/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-mauve-200/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
    {{-- Dot pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.07] bg-[radial-gradient(#3A004D_1px,transparent_1px)] [background-size:28px_28px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="section-label mb-3">
                <span class="w-4 h-px bg-mauve-500 block"></span>
                Kenali Saya
                <span class="w-4 h-px bg-mauve-500 block"></span>
            </span>
            <h2 class="section-title mt-2">Tentang <span class="gradient-text">Saya</span></h2>
            <p class="section-subtitle mx-auto mt-3">Perkenalan singkat tentang siapa saya dan apa yang saya lakukan</p>
        </div>

        {{-- Narrative Blocks --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            @php
            $blocks = [
                ['icon'=>'👋','label'=>'Who I am','text'=> $about_description ?? 'Mahasiswa semester 5 Politeknik Negeri Padang Jurusan Teknologi Informasi Program Studi D4 Teknologi Rekayasa Perangkat Lunak yang aktif mengembangkan kemampuan di bidang web dan mobile.'],
                ['icon'=>'⚡','label'=>'What motivates me','text'=>'Semangat saya berasal dari proses membangun solusi nyata — dari nol hingga produk yang bisa dipakai orang banyak. Tantangan teknis adalah bahan bakar saya untuk terus berkembang.'],
                ['icon'=>'🛠️','label'=>'What I enjoy building','text'=> $about_description_2 ?? 'Saya senang membangun aplikasi web full-stack menggunakan Laravel & React, serta desain UI/UX yang bersih dan intuitif menggunakan Figma dan Tailwind CSS.'],
                ['icon'=>'🚀','label'=>"Where I'm heading",'text'=>'Saya ingin menjadi developer handal yang tidak hanya menulis kode, tetapi juga memahami bisnis dan memberikan dampak nyata melalui teknologi. Terbuka untuk internship & kolaborasi.'],
            ];
            @endphp
            @foreach($blocks as $i => $block)
            <div class="glass-card rounded-2xl p-6 reveal" style="transition-delay: {{ $i * 120 }}ms;">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-primary-100/60 flex items-center justify-center flex-shrink-0 text-xl border border-primary-200/40">{{ $block['icon'] }}</div>
                    <div>
                        <p class="text-xs font-bold text-mauve-500 uppercase tracking-widest mb-1">{{ $block['label'] }}</p>
                        <p class="text-sm text-primary-800/80 leading-relaxed">{{ $block['text'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Stat Cards (Count-up) --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
            @php
            $stats = [
                ['value'=>'3.27','label'=>'IPK / GPA','suffix'=>'','icon'=>'🎓'],
                ['value'=>'5+',  'label'=>'Projects','suffix'=>'','icon'=>'💻'],
                ['value'=>'3',   'label'=>'Org. Roles','suffix'=>'','icon'=>'🏛️'],
                ['value'=>'3+',  'label'=>'Tahun Coding','suffix'=>'','icon'=>'⚡'],
            ];
            @endphp
            @foreach($stats as $i => $stat)
            <div class="stat-card reveal" style="transition-delay: {{ $i * 100 }}ms;">
                <div class="text-2xl mb-1">{{ $stat['icon'] }}</div>
                <div class="stat-number" data-target="{{ $stat['value'] }}">{{ $stat['value'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        {{-- Location & availability --}}
        <div class="flex flex-wrap items-center justify-center gap-4 reveal">
            <div class="flex items-center gap-2 text-sm text-primary-700/70">
                <svg class="w-4 h-4 text-mauve-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                {{ $location ?? 'Padang, Sumatera Barat, Indonesia' }}
            </div>
            <div class="badge-available flex items-center gap-2 px-4 py-2 rounded-full">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-xs font-semibold text-emerald-700">Open to Internships & Collaboration</span>
            </div>
        </div>

    </div>
</section>
