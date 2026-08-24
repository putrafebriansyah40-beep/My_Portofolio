<section id="about" class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-primary-400 font-medium text-sm tracking-wider uppercase mb-2 block" data-i18n="about.label">Get to Know Me</span>
            <h2 class="section-title"><span data-i18n="about.title_1">About</span> <span class="gradient-text" data-i18n="about.title_2">Me</span></h2>
            <p class="section-subtitle" data-i18n="about.subtitle">A brief introduction about who I am and what I do</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Photo Side --}}
            <div class="reveal-left">
                <div class="relative group">
                    {{-- Main Photo Container --}}
                    <div class="relative w-72 h-72 sm:w-80 sm:h-80 mx-auto">
                        {{-- Decorative Border --}}
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-primary-500 to-accent-500 rotate-6 group-hover:rotate-3 transition-transform duration-500"></div>
                        {{-- Photo --}}
                        <div class="relative w-full h-full rounded-2xl overflow-hidden border-2">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Febriansyah Putra - Profile Photo" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Info Side --}}
            <div class="reveal-right">
                <h3 class="text-2xl md:text-3xl font-display font-bold heading-text mb-6" data-i18n="about.heading">
                    {{ $about_title ?? 'A passionate Web Developer based in Indonesia' }}
                </h3>
                <p class="body-text leading-relaxed mb-6" data-i18n="about.desc_1">
                    {{ $about_description ?? 'Saya adalah mahasiswa dari Politeknik Negeri Padang, Jurusan Teknologi Informasi, Program Studi D4 Teknologi Rekayasa Perangkat Lunak dan sekarang berfokus dalam mengembangkan skill dalam pengembangan aplikasi website dan mobile.' }}
                </p>
                <p class="body-text-muted leading-relaxed mb-8" data-i18n="about.desc_2">
                    {{ $about_description_2 ?? 'I am a student at Padang State Polytechnic, majoring in Information Technology within the Software Engineering Technology (D4) program, and I am currently focusing on developing my skills in web and mobile application development.' }}
                </p>

                {{-- Info Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    @foreach([
                        ['label' => 'Name', 'value' => $name ?? 'Febriansyah Putra', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'i18n' => 'about.info_name'],
                        ['label' => 'Email', 'value' => $email ?? 'putrafebriansyah40@gmail.com', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'i18n' => 'about.info_email'],
                        ['label' => 'Instagram', 'value' => $instagram ?? '@fbriansyh_ptra', 'icon' => 'M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z M16 12a4 4 0 11-8 0 4 4 0 018 0z M17.5 6.5h.01', 'i18n' => 'about.info_instagram'],
                        ['label' => 'Education', 'value' => $education_short ?? 'D4 TRPL', 'icon' => 'M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z', 'i18n' => 'about.info_education'],
                    ] as $info)
                    <div class="flex items-center gap-3 glass-card p-3">
                        <div class="w-8 h-8 rounded-lg bg-primary-500/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"/></svg>
                        </div>
                        <div class="min-w-0">
                            <p class="body-text-muted text-xs" data-i18n="{{ $info['i18n'] }}">{{ $info['label'] }}</p>
                            <p class="heading-text text-sm font-medium truncate">{{ $info['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Organization History --}}
        <div class="mt-24 reveal">
            <div class="text-center mb-12">
                <h3 class="text-2xl md:text-3xl font-display font-bold heading-text" data-i18n="about.org_title">Riwayat Organisasi</h3>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-accent-500 mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6">
                {{-- Item 1: FORUM STUDI ISLAM POLITEKNIK --}}
                <div class="glass-card p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-16 h-16 rounded-xl bg-primary-500/10 flex items-center justify-center text-primary-400 shrink-0 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                            <h4 class="text-xl font-bold heading-text">Forum Studi Islam Politeknik</h4>
                            <span class="inline-block px-3 py-1 rounded-full bg-primary-500/20 text-primary-400 text-xs font-semibold whitespace-nowrap">2025 - 2026</span>
                        </div>
                        <p class="text-accent-400 font-medium mb-3">Sekretaris Umum</p>
                        <p class="body-text-muted text-sm leading-relaxed">
                            Menjadi tangan kanan Ketua Umum dan mengelola administrasi, menjadi pengelola dalam hal surat menyurat.
                        </p>
                    </div>
                </div>

                {{-- Item 2: LEMBAGA RESPONSI AGAMA ISLAM --}}
                <div class="glass-card p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-16 h-16 rounded-xl bg-primary-500/10 flex items-center justify-center text-primary-400 shrink-0 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                            <h4 class="text-xl font-bold heading-text">Lembaga Responsi Agama Islam</h4>
                            <span class="inline-block px-3 py-1 rounded-full bg-primary-500/20 text-primary-400 text-xs font-semibold whitespace-nowrap">2025 - 2026</span>
                        </div>
                        <p class="text-accent-400 font-medium mb-3">Anggota Multimedia Support System</p>
                        <p class="body-text-muted text-sm leading-relaxed">
                            Membantu ketua divisi dalam menyajikan berbagai informasi melalui media sosial yang disajikan untuk semua mahasiswa di Politeknik Negeri Padang.
                        </p>
                    </div>
                </div>
                
                {{-- Item 3: CYBERTECH --}}
                <div class="glass-card p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center hover:-translate-y-1 transition-transform duration-300 group">
                    <div class="w-16 h-16 rounded-xl bg-primary-500/10 flex items-center justify-center text-primary-400 shrink-0 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                            <h4 class="text-xl font-bold heading-text">Cybertech</h4>
                            <span class="inline-block px-3 py-1 rounded-full bg-primary-500/20 text-primary-400 text-xs font-semibold whitespace-nowrap">2026 - Sekarang</span>
                        </div>
                        <p class="text-accent-400 font-medium mb-3">Anggota Public Relationship</p>
                        <p class="body-text-muted text-sm leading-relaxed">
                            Menjadi jembatan komunikasi antara organisasi dengan publik internal maupun eksternal guna menjaga citra positif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
