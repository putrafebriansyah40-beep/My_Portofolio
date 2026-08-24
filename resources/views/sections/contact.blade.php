<section id="contact" class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-primary-400 font-medium text-sm tracking-wider uppercase mb-2 block" data-i18n="contact.label">Get in Touch</span>
            <h2 class="section-title"><span data-i18n="contact.title_1">Contact</span> <span class="gradient-text" data-i18n="contact.title_2">Me</span></h2>
            <p class="section-subtitle" data-i18n="contact.subtitle">Have a project in mind? Let's work together to create something amazing.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-8 items-start">
            {{-- Contact Info --}}
            <div class="lg:col-span-2 space-y-8 reveal-left">
                <div class="glass-card p-8 h-full">
                    <h3 class="text-2xl font-bold heading-text mb-6" data-i18n="contact.info_title">Contact Information</h3>
                    <p class="body-text-muted mb-8" data-i18n="contact.info_desc">Fill up the form and I will get back to you within 24 hours.</p>

                    <div class="space-y-6">
                        {{-- Phone --}}
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $phone ?? '6283195690357') }}" target="_blank" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1" data-i18n="contact.phone">WhatsApp</p>
                                <p class="heading-text font-medium">{{ $phone ?? '+62 831 9569 0357' }}</p>
                            </div>
                        </a>

                        {{-- Email --}}
                        <a href="mailto:{{ $email ?? 'putrafebriansyah40@gmail.com' }}" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1" data-i18n="contact.email">Email</p>
                                <p class="heading-text font-medium">{{ $email ?? 'putrafebriansyah40@gmail.com' }}</p>
                            </div>
                        </a>

                        {{-- Instagram --}}
                        <a href="https://instagram.com/{{ str_replace('@', '', $instagram ?? 'fbriansyh_ptra') }}" target="_blank" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z M16 12a4 4 0 11-8 0 4 4 0 018 0z M17.5 6.5h.01"/></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1" data-i18n="contact.instagram">Instagram</p>
                                <p class="heading-text font-medium">{{ $instagram ?? '@fbriansyh_ptra' }}</p>
                            </div>
                        </a>

                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/in/febriansyah-putra-59281a340/" target="_blank" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1">LinkedIn</p>
                                <p class="heading-text font-medium">Febriansyah Putra</p>
                            </div>
                        </a>

                        {{-- GitHub --}}
                        <a href="https://github.com/putrafebriansyah40-beep" target="_blank" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1">GitHub</p>
                                <p class="heading-text font-medium">putrafebriansyah40-beep</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3 reveal-right">
                <form id="contact-form" class="glass-card p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-medium body-text-muted mb-2" data-i18n="contact.form_name">Your Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full form-input rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-500/50 transition-colors"
                                placeholder="Masukkan nama anda">
                        </div>
                        
                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium body-text-muted mb-2" data-i18n="contact.form_email">Your Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full form-input rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-500/50 transition-colors"
                                placeholder="Masukkan email anda">
                        </div>
                    </div>

                    {{-- Message --}}
                    <div class="mb-8">
                        <label for="message" class="block text-sm font-medium body-text-muted mb-2" data-i18n="contact.form_message">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full form-input rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-500/50 transition-colors resize-none"
                            placeholder="Hello, I'd like to talk about..."></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2 group">
                        <span data-i18n="contact.form_submit">Send Message</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>

                    {{-- Success Message (Hidden by default) --}}
                    <div id="form-success" class="hidden mt-4 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 text-center font-medium">
                        <span data-i18n="contact.form_success">Thank you! Your message has been sent successfully.</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
