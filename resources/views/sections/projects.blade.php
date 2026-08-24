<section id="projects" class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-primary-400 font-medium text-sm tracking-wider uppercase mb-2 block" data-i18n="projects.label">My Portfolio</span>
            <h2 class="section-title"><span data-i18n="projects.title_1">Featured</span> <span class="gradient-text" data-i18n="projects.title_2">Projects</span></h2>
            <p class="section-subtitle" data-i18n="projects.subtitle">Some of the projects I've worked on recently</p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal">
            @php
            $categories = ['All', 'Web App', 'Mobile', 'UI/UX'];
            @endphp
            @foreach($categories as $cat)
            <button class="project-filter px-5 py-2 rounded-full text-sm font-medium transition-all duration-300 {{ $loop->first ? 'bg-gradient-to-r from-primary-600 to-accent-600 text-white shadow-lg shadow-primary-500/20 active' : 'filter-btn-inactive' }}" data-filter="{{ strtolower(str_replace(' ', '-', $cat)) }}" data-i18n="projects.filter_{{ strtolower(str_replace([' ', '/'], ['_', ''], $cat)) }}">
                {{ $cat }}
            </button>
            @endforeach
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" id="projects-grid">
            @php
            $projects = $projects ?? [
                [
                    'title' => 'Project Based Learning QM Billiard dan Cafe',
                    'description' => 'Aplikasi web untuk manajemen QM Billiard dan Cafe berbasis Project Based Learning.',
                    'full_description' => 'Aplikasi web komprehensif untuk manajemen QM Billiard dan Cafe. Proyek ini dibangun dengan pendekatan Project Based Learning. Fitur utamanya mencakup manajemen pemesanan meja biliar, pemesanan menu makanan/minuman cafe, pelaporan transaksi, serta dashboard interaktif untuk admin guna memantau aktivitas operasional secara real-time.',
                    'tags' => ['PHP', 'Laravel', 'MySQL'],
                    'category' => 'web-app',
                    'color' => 'from-cyan-600/20 to-blue-600/20',
                    'border' => 'hover:border-cyan-500/30',
                    'link' => '#',
                    'image' => 'images/projects/qm-billiard-cafe.jpg',
                    'i18n_desc' => 'projects.proj1_desc'
                ],
                [
                    'title' => 'UI/UX QM Billiard dan Cafe',
                    'description' => 'Desain antarmuka pengguna dan pengalaman pengguna untuk aplikasi QM Billiard dan Cafe.',
                    'full_description' => 'Fokus pada riset pengguna, prototyping, dan desain antarmuka untuk aplikasi QM Billiard dan Cafe. Desain ini dibuat dengan memperhatikan kenyamanan dan kemudahan navigasi bagi staf kasir dan pelanggan. Menghasilkan user flow yang efisien dan tampilan modern.',
                    'tags' => ['Figma', 'UI/UX'],
                    'category' => 'ui-ux',
                    'color' => 'from-rose-600/20 to-pink-600/20',
                    'border' => 'hover:border-rose-500/30',
                    'link' => '#',
                    'i18n_desc' => 'projects.proj2_desc'
                ]
            ];
            @endphp

            @foreach($projects as $index => $project)
            <div class="project-card group relative rounded-2xl overflow-hidden glass-card transition-all duration-500 {{ $project['border'] }}" data-category="{{ $project['category'] }}">
                {{-- Project Image Placeholder --}}
                <div class="aspect-video relative overflow-hidden bg-gradient-to-br {{ $project['color'] }}">
                    @if(isset($project['image']))
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center opacity-50 group-hover:scale-110 transition-transform duration-700">
                            <svg class="w-20 h-20 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                    @endif
                    
                    {{-- Hover Overlay --}}
                    <div class="absolute inset-0 bg-dark-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center p-6 gap-4">
                        <button type="button" class="btn-primary py-2 px-6 project-detail-btn"
                            data-title="{{ $project['title'] }}"
                            data-description="{{ $project['full_description'] ?? $project['description'] }}"
                            data-image="{{ isset($project['image']) ? asset($project['image']) : '' }}"
                            data-tags="{{ json_encode($project['tags']) }}"
                            data-link="{{ $project['link'] }}"
                        >
                            <span data-i18n="projects.view_project">View Project</span>
                        </button>
                    </div>
                </div>

                {{-- Project Info --}}
                <div class="p-6">
                    <h3 class="text-xl font-bold heading-text mb-2">{{ $project['title'] }}</h3>
                    <p class="body-text-muted text-sm mb-4 line-clamp-2" data-i18n="{{ $project['i18n_desc'] ?? '' }}">
                        {{ $project['description'] }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium tag-bg text-primary-400">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center reveal">
            <a href="#" class="btn-outline inline-flex items-center gap-2">
                <span data-i18n="projects.view_more">View More Projects</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>

    {{-- Project Detail Modal --}}
    <div id="project-modal" class="fixed inset-0 z-[100] hidden items-center justify-center">
        <div class="absolute inset-0 bg-dark-900/80 backdrop-blur-sm transition-opacity duration-300 opacity-0" id="project-modal-backdrop"></div>
        <div class="relative w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto glass-card rounded-2xl border border-white/10 shadow-2xl transform transition-all duration-300 scale-95 opacity-0 flex flex-col" id="project-modal-content">
            <button id="close-modal-btn" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors p-2 bg-dark-800/50 rounded-full z-10 backdrop-blur-md">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="relative w-full h-64 md:h-80 bg-dark-800 flex items-center justify-center overflow-hidden rounded-t-2xl flex-shrink-0">
                <img id="modal-image" src="" alt="" class="w-full h-full object-cover hidden">
                <div id="modal-image-placeholder" class="text-white/30 hidden">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
            </div>
            <div class="p-6 md:p-8 flex-1">
                <h3 id="modal-title" class="text-2xl md:text-3xl font-bold heading-text mb-4">Project Title</h3>
                <div id="modal-tags" class="flex flex-wrap gap-2 mb-6">
                    <!-- Tags will be injected here -->
                </div>
                <div class="prose prose-invert max-w-none mb-8">
                    <p id="modal-description" class="body-text-muted leading-relaxed"></p>
                </div>
                <div class="flex items-center gap-4">
                    <a id="modal-link" href="#" class="btn-primary py-2.5 px-6 inline-flex items-center gap-2" target="_blank">
                        <span data-i18n="projects.view_project">Visit Project</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
