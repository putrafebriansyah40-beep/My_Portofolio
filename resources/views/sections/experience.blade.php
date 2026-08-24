<section id="experience" class="py-20 lg:py-32 relative section-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-primary-400 font-medium text-sm tracking-wider uppercase mb-2 block" data-i18n="experience.label">My Journey</span>
            <h2 class="section-title"><span data-i18n="experience.title_1">Experience &</span> <span class="gradient-text" data-i18n="experience.title_2">Education</span></h2>
            <p class="section-subtitle" data-i18n="experience.subtitle">My professional career and academic background</p>
        </div>

        <div class="relative">
            {{-- Timeline Line --}}
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-primary-500/50 via-accent-500/50 to-transparent"></div>

            @php
            $timeline = $timeline ?? [
                [
                    'type' => 'work',
                    'title' => 'Senior Web Developer',
                    'org' => 'Tech Solutions Inc.',
                    'period' => '2021 - Present',
                    'description' => 'Lead a team of 5 developers in building enterprise web applications. Improved system performance by 40% and implemented CI/CD pipelines.',
                    'i18n_title' => 'experience.job1_title',
                    'i18n_org' => 'experience.job1_org',
                    'i18n_desc' => 'experience.job1_desc'
                ],
                [
                    'type' => 'work',
                    'title' => 'Full Stack Developer',
                    'org' => 'Digital Creative Agency',
                    'period' => '2019 - 2021',
                    'description' => 'Developed responsive websites and e-commerce platforms for various clients using Laravel and Vue.js.',
                    'i18n_title' => 'experience.job2_title',
                    'i18n_org' => 'experience.job2_org',
                    'i18n_desc' => 'experience.job2_desc'
                ],
                [
                    'type' => 'education',
                    'title' => 'Bachelor of Computer Science',
                    'org' => 'University of Technology',
                    'period' => '2015 - 2019',
                    'description' => 'Graduated with Honors. Focused on software engineering, database design, and web technologies.',
                    'i18n_title' => 'experience.edu1_title',
                    'i18n_org' => 'experience.edu1_org',
                    'i18n_desc' => 'experience.edu1_desc'
                ]
            ];
            @endphp

            <div class="space-y-12">
                @foreach($timeline as $index => $item)
                <div class="relative flex flex-col md:flex-row items-center justify-between group reveal-up">
                    
                    {{-- Timeline Dot --}}
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-full glass-card border-2 border-primary-500 items-center justify-center z-10 group-hover:scale-110 group-hover:bg-primary-500 transition-all duration-300">
                        @if($item['type'] === 'work')
                        <svg class="w-4 h-4 text-primary-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        @else
                        <svg class="w-4 h-4 text-primary-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                        @endif
                    </div>

                    {{-- Content Box (Alternating Sides) --}}
                    <div class="w-full md:w-[45%] {{ $index % 2 == 0 ? 'md:pr-8 md:text-right' : 'md:ml-auto md:pl-8' }}">
                        <div class="glass-card p-6 lg:p-8 rounded-2xl hover:border-primary-500/30 transition-colors duration-300 relative overflow-hidden">
                            {{-- Mobile Dot --}}
                            <div class="md:hidden absolute top-6 right-6 w-8 h-8 rounded-full bg-primary-500/10 flex items-center justify-center">
                                @if($item['type'] === 'work')
                                <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                @else
                                <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                                @endif
                            </div>

                            <span class="inline-block py-1 px-3 rounded-full text-xs font-medium bg-primary-500/10 text-primary-400 mb-4 border border-primary-500/20">
                                {{ $item['period'] }}
                            </span>
                            <h3 class="text-xl font-bold heading-text mb-1" data-i18n="{{ $item['i18n_title'] }}">{{ $item['title'] }}</h3>
                            <p class="text-accent-400 font-medium text-sm mb-4" data-i18n="{{ $item['i18n_org'] }}">{{ $item['org'] }}</p>
                            <p class="body-text-muted text-sm leading-relaxed" data-i18n="{{ $item['i18n_desc'] }}">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Certifications --}}
        <div class="mt-20 reveal-up">
            <h3 class="text-2xl font-display font-bold heading-text text-center mb-10" data-i18n="experience.certifications">Certifications & Awards</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $certs = $certs ?? [
                    ['title' => 'AWS Certified Developer', 'issuer' => 'Amazon Web Services', 'year' => '2023', 'i18n_title' => 'experience.cert1_title', 'i18n_issuer' => 'experience.cert1_issuer'],
                    ['title' => 'Laravel Certification', 'issuer' => 'Laravel LLC', 'year' => '2022', 'i18n_title' => 'experience.cert2_title', 'i18n_issuer' => 'experience.cert2_issuer'],
                    ['title' => 'Frontend Web UI Frameworks', 'issuer' => 'Coursera', 'year' => '2021', 'i18n_title' => 'experience.cert3_title', 'i18n_issuer' => 'experience.cert3_issuer'],
                ];
                @endphp

                @foreach($certs as $cert)
                <div class="glass-card p-6 flex items-center gap-4 hover:border-primary-500/30 transition-colors cursor-default">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary-500/20 to-accent-500/20 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <div>
                        <h4 class="heading-text font-bold text-sm mb-1" data-i18n="{{ $cert['i18n_title'] }}">{{ $cert['title'] }}</h4>
                        <div class="flex items-center gap-2 text-xs body-text-muted">
                            <span data-i18n="{{ $cert['i18n_issuer'] }}">{{ $cert['issuer'] }}</span>
                            <span>•</span>
                            <span>{{ $cert['year'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
