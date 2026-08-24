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
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </div>
                            <div>
                                <p class="text-sm body-text-muted mb-1">LinkedIn</p>
                                <p class="heading-text font-medium">Febriansyah Putra</p>
                            </div>
                        </a>

                        {{-- GitHub --}}
                        <a href="https://github.com/putrafebriansyah40-beep" target="_blank" class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-primary-500/10 flex items-center justify-center text-primary-400 group-hover:bg-primary-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
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
