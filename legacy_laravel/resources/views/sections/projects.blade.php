<section id="projects" class="py-24 lg:py-32 relative overflow-hidden bg-[#f6f2fb]">
    {{-- Dot pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.10] bg-[radial-gradient(#3A004D_1px,transparent_1px)] [background-size:28px_28px]"></div>
    {{-- Orbs --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-300/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-mauve-300/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="projectFilter()">

        {{-- Header --}}
        <div class="text-center mb-12 reveal">
            <span class="section-label mb-3">
                <span class="w-4 h-px bg-mauve-500 block"></span>
                Portfolio
                <span class="w-4 h-px bg-mauve-500 block"></span>
            </span>
            <h2 class="section-title mt-2">Featured <span class="gradient-text">Projects</span></h2>
            <p class="section-subtitle mx-auto mt-3">Proyek-proyek yang pernah saya kerjakan</p>
        </div>

        {{-- Filter Pills --}}
        <div class="flex flex-wrap justify-center gap-3 mb-10 reveal">
            @php $categories = ['all'=>'All','web-app'=>'Web App','ui-ux'=>'UI/UX','mobile'=>'Mobile']; @endphp
            @foreach($categories as $value => $label)
            <button
                @click="setFilter('{{ $value }}')"
                :class="activeFilter === '{{ $value }}' ? 'filter-btn active' : 'filter-btn'"
                class="filter-btn"
            >{{ $label }}</button>
            @endforeach
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            @php
            $projects = $projects ?? [
                ['title'=>'QM Billiard & Cafe','description'=>'Peran : FrontEnd Developer. Membangun antarmuka SPA modern menggunakan React dan Tailwind CSS.','full_description'=>'Aplikasi manajemen QM Billiard & Cafe yang dibangun dengan React sebagai frontend SPA dan dipadukan dengan Tailwind CSS untuk tampilan yang responsif dan modern. Mencakup manajemen pemesanan meja biliar, menu cafe, laporan transaksi, dan dashboard admin.','tags'=>['React','Tailwind CSS','PHP'],'category'=>'web-app','year'=>'2024','link'=>'https://github.com/M-IrsyadGumanof/QM-Cafe-Billiard','image'=>'images/projects/qm-billiard-cafe.jpeg','stats'=>[['v'=>'2 Bulan','l'=>'Dev Time'],['v'=>'SPA','l'=>'Architecture'],['v'=>'10+','l'=>'Features'],['v'=>'Mobile','l'=>'Responsive']],'overview'=>'Platform manajemen terintegrasi untuk QM Billiard & Cafe.','recruiter'=>'Proyek ini membuktikan kemampuan saya dalam membangun SPA dengan React, integrasi API, dan penerapan UI/UX responsif dalam setting bisnis nyata.','steps'=>['Analisis kebutuhan bisnis QM','Desain wireframe di Figma','Setup React + Tailwind CSS','Implementasi fitur management','Testing & deployment']],
                ['title'=>'SISIPOL (On Going)','description'=>'Peran : Full Stack Developer. Sistem Informasi Forsipol berbasis Laravel & MySQL.','full_description'=>'Sistem Informasi manajemen organisasi Forum Studi Islam Politeknik (FORSIPOL) yang menggantikan pencatatan manual. Dibangun full-stack dengan Laravel, Blade Template, dan MySQL.','tags'=>['Laravel','MySQL','Blade'],'category'=>'web-app','year'=>'2025','link'=>'https://github.com/putrafebriansyah40-beep/SistemInformasiForsipol','image'=>'images/projects/sisipol.png','stats'=>[['v'=>'Full Stack','l'=>'Role'],['v'=>'3 Modul','l'=>'Fitur Utama'],['v'=>'Laravel','l'=>'Framework'],['v'=>'MySQL','l'=>'Database']],'overview'=>'Sistem informasi untuk manajemen anggota, keuangan, dan administrasi organisasi FORSIPOL PNP.','recruiter'=>'Mendemonstrasikan kemampuan full-stack Laravel: CRUD, autentikasi, manajemen database, dan arsitektur MVC.','steps'=>['Analisis kebutuhan organisasi','Desain ERD database','Setup Laravel & auth','Implementasi modul anggota & keuangan','Testing dan review']],
                ['title'=>'UI/UX QM Billiard & Cafe','description'=>'Desain antarmuka modern untuk aplikasi QM Billiard dan Cafe menggunakan Figma.','full_description'=>'Desain UI/UX komprehensif untuk aplikasi QM Billiard & Cafe. Meliputi riset pengguna, user flow, wireframe, hingga prototype interaktif di Figma.','tags'=>['Figma','UI/UX','Prototype'],'category'=>'ui-ux','year'=>'2024','link'=>'https://www.figma.com/design/SmKvpP1B6jZHsPqLxLe8mB/QM-Cafe---Billiard-V2','image'=>'images/projects/qm-uiux-figma.jpg','stats'=>[['v'=>'Figma','l'=>'Tool'],['v'=>'20+','l'=>'Screens'],['v'=>'2','l'=>'User Roles'],['v'=>'Mobile+Web','l'=>'Platform']],'overview'=>'Desain sistem visual dan interaksi untuk platform manajemen QM Billiard & Cafe.','recruiter'=>'Menampilkan kemampuan riset UX, design thinking, dan pembuatan prototype yang bisa langsung di-handoff ke developer.','steps'=>['User research & persona','User flow mapping','Wireframe sketching','High-fidelity design di Figma','Prototype & user testing']],
            ];
            @endphp

            @foreach($projects as $index => $project)
            <div
                class="project-card reveal"
                style="transition-delay: {{ $index * 120 }}ms;"
                x-show="activeFilter === 'all' || activeFilter === '{{ $project['category'] }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-data="{ expanded: false }"
            >
                {{-- Thumbnail --}}
                <div class="aspect-[16/9] relative overflow-hidden bg-gradient-to-br from-surface-200 to-primary-100">
                    @if(isset($project['image']))
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" onerror="this.parentElement.classList.add('flex','items-center','justify-center'); this.style.display='none'; this.parentElement.innerHTML += '<span class=\'text-4xl\'>💻</span>'">
                    @else
                    <div class="w-full h-full flex items-center justify-center text-4xl">💻</div>
                    @endif
                    {{-- Category + year badge --}}
                    <div class="absolute top-3 left-3 flex items-center gap-2">
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-white/80 text-primary-700 backdrop-blur-sm border border-primary-100">{{ ucfirst(str_replace('-',' ',$project['category'])) }}</span>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-primary-900/80 text-white backdrop-blur-sm">{{ $project['year'] ?? '2024' }}</span>
                    </div>
                </div>

                {{-- Body --}}
                <div class="p-6">
                    <h3 class="text-base font-bold text-primary-900 mb-1">{{ $project['title'] }}</h3>
                    <p class="text-xs text-primary-700/60 mb-4 line-clamp-2">{{ $project['description'] }}</p>

                    {{-- Tech tags --}}
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        @foreach($project['tags'] as $tag)
                        <span class="tag-pill">{{ $tag }}</span>
                        @endforeach
                    </div>

                    {{-- Mini stats --}}
                    @if(isset($project['stats']))
                    <div class="grid grid-cols-4 gap-2 mb-4 py-3 border-t border-primary-100/50">
                        @foreach($project['stats'] as $stat)
                        <div class="text-center">
                            <p class="text-xs font-bold text-primary-700">{{ $stat['v'] }}</p>
                            <p class="text-[9px] text-primary-500/60 leading-tight">{{ $stat['l'] }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    {{-- Expand toggle --}}
                    <button @click="expanded = !expanded" class="flex items-center gap-2 text-xs font-semibold text-primary-600 hover:text-primary-800 transition-colors mt-2 w-full justify-between py-2">
                        <span x-text="expanded ? 'Tutup Detail' : 'Lihat Detail'"></span>
                        <svg class="w-4 h-4 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    {{-- Expanded detail --}}
                    <div x-show="expanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="border-t border-primary-100/50 pt-4 mt-2 space-y-4">

                        {{-- Overview --}}
                        @if(isset($project['overview']))
                        <div>
                            <p class="text-[10px] font-bold text-mauve-500 uppercase tracking-widest mb-1">Project Overview</p>
                            <p class="text-xs text-primary-700/80 leading-relaxed">{{ $project['full_description'] ?? $project['overview'] }}</p>
                        </div>
                        @endif

                        {{-- Recruiter perspective --}}
                        @if(isset($project['recruiter']))
                        <div class="bg-primary-50/80 rounded-xl p-3 border border-primary-100/60">
                            <p class="text-[10px] font-bold text-primary-600 uppercase tracking-widest mb-1.5">🎯 Recruiter Perspective</p>
                            <p class="text-xs text-primary-700 leading-relaxed">{{ $project['recruiter'] }}</p>
                        </div>
                        @endif

                        {{-- Workflow steps --}}
                        @if(isset($project['steps']))
                        <div>
                            <p class="text-[10px] font-bold text-mauve-500 uppercase tracking-widest mb-2">Workflow</p>
                            <ol class="space-y-1.5">
                                @foreach($project['steps'] as $si => $step)
                                <li class="flex items-start gap-2.5">
                                    <span class="w-4 h-4 rounded-full bg-primary-900 text-white text-[9px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">{{ $si + 1 }}</span>
                                    <span class="text-xs text-primary-700/80">{{ $step }}</span>
                                </li>
                                @endforeach
                            </ol>
                        </div>
                        @endif

                        {{-- GitHub link --}}
                        <a href="{{ $project['link'] }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-semibold text-white bg-primary-900 hover:bg-primary-800 px-4 py-2 rounded-xl transition-colors">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <script>
    function projectFilter() {
        return { activeFilter: 'all', setFilter(f) { this.activeFilter = f; } };
    }
    </script>
</section>
