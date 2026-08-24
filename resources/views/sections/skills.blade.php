<section id="skills" class="py-20 lg:py-32 relative section-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-primary-400 font-medium text-sm tracking-wider uppercase mb-2 block" data-i18n="skills.label">What I Do</span>
            <h2 class="section-title"><span data-i18n="skills.title_1">My</span> <span class="gradient-text" data-i18n="skills.title_2">Skills</span></h2>
            <p class="section-subtitle" data-i18n="skills.subtitle">Technologies and tools I work with everyday</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $delay = 0;
            // Use the skills data from controller, or fallback
            $skills_data = $skills ?? [
                [
                    'title' => 'Frontend',
                    'items' => [
                        ['name' => 'HTML & CSS', 'level' => 95],
                        ['name' => 'JavaScript', 'level' => 90],
                        ['name' => 'React.js', 'level' => 85],
                    ]
                ],
                [
                    'title' => 'Backend',
                    'items' => [
                        ['name' => 'PHP/Laravel', 'level' => 85],
                        ['name' => 'MySQL', 'level' => 85],
                        ['name' => 'Python', 'level' => 80],
                        ['name' => 'Java', 'level' => 75],
                        ['name' => 'C++', 'level' => 70],
                    ]
                ],
                [
                    'title' => 'Alat Lainnya',
                    'items' => [
                        ['name' => 'Git & GitHub', 'level' => 85],
                        ['name' => 'Figma', 'level' => 85],
                    ]
                ],
            ];
            @endphp

            @foreach($skills_data as $category)
            <div class="glass-card p-6 lg:p-8 reveal-up" style="transition-delay: {{ $delay }}ms">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center">
                        @if($category['title'] === 'Frontend')
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        @elseif($category['title'] === 'Backend')
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                        @else
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-display font-bold heading-text" data-i18n="skills.cat_{{ strtolower(str_replace([' & ', ' '], ['_', '_'], $category['title'])) }}">{{ $category['title'] }}</h3>
                </div>

                <div class="space-y-6">
                    @foreach($category['items'] as $skill)
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="body-text font-medium">{{ $skill['name'] }}</span>
                            <span class="text-primary-400 text-sm font-bold">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="w-full h-2 bg-dark-800 rounded-full overflow-hidden skill-bar-bg">
                            <div class="h-full bg-gradient-to-r from-primary-500 to-accent-500 rounded-full skill-bar-fill" data-width="{{ $skill['level'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @php $delay += 150; @endphp
            @endforeach
        </div>
    </div>
</section>
