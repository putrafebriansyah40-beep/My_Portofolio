// Translations Dictionary
const translations = {
    en: {
        nav: {
            home: "Home", about: "About", skills: "Skills", projects: "Projects", experience: "Experience", contact: "Contact", hire: "Hire Me"
        },
        hero: {
            badge: "Available for work", greeting: "Hi, I'm", cta_work: "View My Work", cta_contact: "Contact Me",
            description: "Passionate about creating beautiful, functional, and user-centered digital experiences. Turning complex problems into elegant solutions."
        },
        about: {
            label: "Get to Know Me", title_1: "About", title_2: "Me", subtitle: "A brief introduction about who I am and what I do",
            years_exp: "Years Exp.", heading: "A passionate Web Developer based in Indonesia",
            desc_1: "Saya adalah mahasiswa dari Politeknik Negeri Padang, Jurusan Teknologi Informasi, Program Studi D4 Teknologi Rekayasa Perangkat Lunak dan sekarang berfokus dalam mengembangkan skill dalam pengembangan aplikasi website dan mobile.",
            desc_2: "I am a student at Padang State Polytechnic, majoring in Information Technology within the Software Engineering Technology (D4) program, and I am currently focusing on developing my skills in web and mobile application development.",
            info_name: "Name", info_email: "Email", info_location: "Location", info_education: "Education",
            stat_projects: "Projects", stat_years: "Years Exp.", stat_clients: "Happy Clients"
        },
        skills: {
            label: "What I Do", title_1: "My", title_2: "Skills", subtitle: "Technologies and tools I work with everyday",
            cat_frontend: "Frontend", cat_backend: "Backend", cat_tools_others: "Tools & Others"
        },
        projects: {
            label: "My Portfolio", title_1: "Featured", title_2: "Projects", subtitle: "Some of the projects I've worked on recently",
            filter_all: "All", filter_web_app: "Web App", filter_mobile: "Mobile", filter_uiux: "UI/UX",
            view_project: "View Project", source_code: "Source Code", view_more: "View More Projects",
            proj1_desc: "A full-featured e-commerce platform built with Laravel, featuring product management, cart, and payment integration.",
            proj2_desc: "A collaborative task management application with real-time updates and team workspace features.",
            proj3_desc: "Mobile application for tracking daily workouts, calories, and personal fitness goals.",
            proj4_desc: "UI/UX redesign for a modern banking application focusing on accessibility and user experience.",
            proj5_desc: "Property listing platform with advanced search filters, map integration, and virtual tours.",
            proj6_desc: "Cross-platform mobile app for food ordering with real-time driver tracking and payment gateway."
        },
        experience: {
            label: "My Journey", title_1: "Experience &", title_2: "Education", subtitle: "My professional career and academic background",
            certifications: "Certifications & Awards",
            job1_title: "Senior Web Developer", job1_org: "Tech Solutions Inc.",
            job1_desc: "Lead a team of 5 developers in building enterprise web applications. Improved system performance by 40% and implemented CI/CD pipelines.",
            job2_title: "Full Stack Developer", job2_org: "Digital Creative Agency",
            job2_desc: "Developed responsive websites and e-commerce platforms for various clients using Laravel and Vue.js.",
            edu1_title: "Bachelor of Computer Science", edu1_org: "University of Technology",
            edu1_desc: "Graduated with Honors. Focused on software engineering, database design, and web technologies.",
            cert1_title: "AWS Certified Developer", cert1_issuer: "Amazon Web Services",
            cert2_title: "Laravel Certification", cert2_issuer: "Laravel LLC",
            cert3_title: "Frontend Web UI Frameworks", cert3_issuer: "Coursera"
        },
        contact: {
            label: "Get in Touch", title_1: "Contact", title_2: "Me", subtitle: "Have a project in mind? Let's work together to create something amazing.",
            info_title: "Contact Information", info_desc: "Fill up the form and I will get back to you within 24 hours.",
            phone: "WhatsApp", email: "Email", location: "Location",
            form_name: "Your Name", form_email: "Your Email", form_subject: "Subject", form_message: "Message",
            form_submit: "Send Message", form_success: "Thank you! Your message has been sent successfully."
        },
        footer: {
            rights: "All rights reserved."
        }
    },
    id: {
        nav: {
            home: "Beranda", about: "Tentang", skills: "Keahlian", projects: "Proyek", experience: "Pengalaman", contact: "Kontak", hire: "Rekrut Saya"
        },
        hero: {
            badge: "Tersedia untuk bekerja", greeting: "Hai, Saya", cta_work: "Lihat Karya Saya", cta_contact: "Hubungi Saya",
            description: "Bersemangat menciptakan pengalaman digital yang indah, fungsional, dan berpusat pada pengguna. Mengubah masalah kompleks menjadi solusi elegan."
        },
        about: {
            label: "Kenali Saya", title_1: "Tentang", title_2: "Saya", subtitle: "Perkenalan singkat tentang siapa saya dan apa yang saya lakukan",
            years_exp: "Tahun Pengalaman", heading: "Seorang Web Developer yang bersemangat dari Indonesia",
            desc_1: "Saya adalah mahasiswa dari Politeknik Negeri Padang, Jurusan Teknologi Informasi, Program Studi D4 Teknologi Rekayasa Perangkat Lunak dan sekarang berfokus dalam mengembangkan skill dalam pengembangan aplikasi website dan mobile.",
            desc_2: "I am a student at Padang State Polytechnic, majoring in Information Technology within the Software Engineering Technology (D4) program, and I am currently focusing on developing my skills in web and mobile application development.",
            info_name: "Nama", info_email: "Email", info_location: "Lokasi", info_education: "Pendidikan",
            stat_projects: "Proyek", stat_years: "Tahun Pengalaman", stat_clients: "Klien Puas"
        },
        skills: {
            label: "Apa Yang Saya Lakukan", title_1: "Keahlian", title_2: "Saya", subtitle: "Teknologi dan alat yang saya gunakan setiap hari",
            cat_frontend: "Frontend", cat_backend: "Backend", cat_tools_others: "Alat & Lainnya"
        },
        projects: {
            label: "Portofolio Saya", title_1: "Proyek", title_2: "Pilihan", subtitle: "Beberapa proyek yang baru-baru ini saya kerjakan",
            filter_all: "Semua", filter_web_app: "Aplikasi Web", filter_mobile: "Mobile", filter_uiux: "UI/UX",
            view_project: "Lihat Proyek", source_code: "Kode Sumber", view_more: "Lihat Proyek Lainnya",
            proj1_desc: "Platform e-commerce berfitur lengkap yang dibangun dengan Laravel, menampilkan manajemen produk, keranjang, dan integrasi pembayaran.",
            proj2_desc: "Aplikasi manajemen tugas kolaboratif dengan pembaruan waktu-nyata dan fitur ruang kerja tim.",
            proj3_desc: "Aplikasi seluler untuk melacak latihan harian, kalori, dan tujuan kebugaran pribadi.",
            proj4_desc: "Desain ulang UI/UX untuk aplikasi perbankan modern yang berfokus pada aksesibilitas dan pengalaman pengguna.",
            proj5_desc: "Platform listing properti dengan filter pencarian lanjutan, integrasi peta, dan tur virtual.",
            proj6_desc: "Aplikasi pemesanan makanan lintas platform dengan pelacakan pengemudi real-time dan gateway pembayaran."
        },
        experience: {
            label: "Perjalanan Saya", title_1: "Pengalaman &", title_2: "Pendidikan", subtitle: "Karier profesional dan latar belakang akademik saya",
            certifications: "Sertifikasi & Penghargaan",
            job1_title: "Senior Web Developer", job1_org: "Tech Solutions Inc.",
            job1_desc: "Memimpin tim berisi 5 developer dalam membangun aplikasi web enterprise. Meningkatkan performa sistem sebesar 40% dan mengimplementasikan pipeline CI/CD.",
            job2_title: "Full Stack Developer", job2_org: "Digital Creative Agency",
            job2_desc: "Mengembangkan website responsif dan platform e-commerce untuk berbagai klien menggunakan Laravel dan Vue.js.",
            edu1_title: "Sarjana Ilmu Komputer", edu1_org: "University of Technology",
            edu1_desc: "Lulus dengan predikat Cum Laude. Berfokus pada rekayasa perangkat lunak, desain basis data, dan teknologi web.",
            cert1_title: "AWS Certified Developer", cert1_issuer: "Amazon Web Services",
            cert2_title: "Sertifikasi Laravel", cert2_issuer: "Laravel LLC",
            cert3_title: "Frontend Web UI Frameworks", cert3_issuer: "Coursera"
        },
        contact: {
            label: "Hubungi Saya", title_1: "Kontak", title_2: "Saya", subtitle: "Punya ide proyek? Mari bekerja sama untuk menciptakan sesuatu yang luar biasa.",
            info_title: "Informasi Kontak", info_desc: "Isi formulir dan saya akan membalas dalam waktu 24 jam.",
            phone: "WhatsApp", email: "Email", location: "Lokasi",
            form_name: "Nama Anda", form_email: "Email Anda", form_subject: "Subjek", form_message: "Pesan",
            form_submit: "Kirim Pesan", form_success: "Terima kasih! Pesan Anda telah berhasil dikirim."
        },
        footer: {
            rights: "Hak cipta dilindungi undang-undang."
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // --- Theme Toggling ---
    const themeToggleBtn = document.getElementById('theme-toggle');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');
    
    // Check initial theme
    const currentTheme = localStorage.getItem('theme') || 'dark';
    if (currentTheme === 'light') {
        document.documentElement.classList.add('light-mode');
        iconSun.classList.add('hidden');
        iconMoon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        document.documentElement.classList.toggle('light-mode');
        
        let theme = 'dark';
        if (document.documentElement.classList.contains('light-mode')) {
            theme = 'light';
            iconSun.classList.add('hidden');
            iconMoon.classList.remove('hidden');
        } else {
            iconSun.classList.remove('hidden');
            iconMoon.classList.add('hidden');
        }
        
        localStorage.setItem('theme', theme);
    });

    // --- Language Toggling ---
    const langToggleBtn = document.getElementById('lang-toggle');
    const langLabel = document.getElementById('lang-label');
    
    // Default lang
    let currentLang = localStorage.getItem('lang') || 'en';
    
    const updateLanguage = (lang) => {
        document.documentElement.lang = lang;
        langLabel.textContent = lang.toUpperCase();
        
        // Update all elements with data-i18n attribute
        const elements = document.querySelectorAll('[data-i18n]');
        elements.forEach(el => {
            const key = el.getAttribute('data-i18n');
            const keys = key.split('.'); // e.g. "hero.badge" -> ["hero", "badge"]
            
            let translation = translations[lang];
            for (const k of keys) {
                if (translation && translation[k]) {
                    translation = translation[k];
                } else {
                    translation = null;
                    break;
                }
            }
            
            if (translation) {
                // Check if element has child nodes that aren't just text
                // If it only has text, replace it. If it has HTML, use innerHTML
                if (el.children.length > 0) {
                    el.innerHTML = translation;
                } else {
                    el.textContent = translation;
                }
            }
        });
        
        // Handle input placeholders specifically if needed
        const inputs = document.querySelectorAll('input[data-i18n-placeholder], textarea[data-i18n-placeholder]');
        inputs.forEach(el => {
            // (Optional, not strictly required as placeholders are static in this design, but good practice)
        });
    };

    // Initial translation setup
    if(currentLang === 'id') {
        updateLanguage('id');
    }

    langToggleBtn.addEventListener('click', () => {
        currentLang = currentLang === 'en' ? 'id' : 'en';
        localStorage.setItem('lang', currentLang);
        updateLanguage(currentLang);
    });

    // --- Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');
    let isMenuOpen = false;

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
            hamburgerIcon.children[0].classList.add('rotate-45', 'translate-y-2');
            hamburgerIcon.children[1].classList.add('opacity-0');
            hamburgerIcon.children[2].classList.add('-rotate-45', '-translate-y-2');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            hamburgerIcon.children[0].classList.remove('rotate-45', 'translate-y-2');
            hamburgerIcon.children[1].classList.remove('opacity-0');
            hamburgerIcon.children[2].classList.remove('-rotate-45', '-translate-y-2');
            document.body.style.overflow = '';
        }
    }

    mobileMenuBtn.addEventListener('click', toggleMenu);
    
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) toggleMenu();
        });
    });

    // --- Navbar Scroll Effect ---
    // (Removed because navbar is now permanently liquid-glass-nav)
    const navbar = document.getElementById('navbar');
    
    // The intersection observer for scroll animations is below


    // --- Intersection Observer for Scroll Animations ---
    const revealElements = document.querySelectorAll('.reveal, .reveal-up, .reveal-left, .reveal-right');
    const skillBars = document.querySelectorAll('.skill-bar-fill');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // Animate skill bars when they become visible
                if (entry.target.classList.contains('reveal-up') && entry.target.querySelector('.skill-bar-fill')) {
                    const bars = entry.target.querySelectorAll('.skill-bar-fill');
                    bars.forEach(bar => {
                        bar.style.width = bar.getAttribute('data-width');
                    });
                }
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // --- Active Nav Link on Scroll ---
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - sectionHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });

    // --- Smooth Scrolling ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- Back to Top Button ---
    const backToTopBtn = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTopBtn.classList.remove('opacity-0', 'translate-y-4');
            backToTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
            backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
            backToTopBtn.classList.add('opacity-0', 'translate-y-4');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // --- Projects Filter ---
    const filterBtns = document.querySelectorAll('.project-filter');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => {
                b.classList.remove('bg-gradient-to-r', 'from-primary-600', 'to-accent-600', 'text-white', 'shadow-lg', 'shadow-primary-500/20', 'active');
                b.classList.add('filter-btn-inactive');
            });
            
            // Add active class to clicked button
            btn.classList.remove('filter-btn-inactive');
            btn.classList.add('bg-gradient-to-r', 'from-primary-600', 'to-accent-600', 'text-white', 'shadow-lg', 'shadow-primary-500/20', 'active');

            const filterValue = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // --- Project Detail Modal ---
    const projectDetailBtns = document.querySelectorAll('.project-detail-btn');
    const projectModal = document.getElementById('project-modal');
    const projectModalBackdrop = document.getElementById('project-modal-backdrop');
    const projectModalContent = document.getElementById('project-modal-content');
    const closeModalBtn = document.getElementById('close-modal-btn');
    
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    const modalImage = document.getElementById('modal-image');
    const modalImagePlaceholder = document.getElementById('modal-image-placeholder');
    const modalTags = document.getElementById('modal-tags');
    const modalLink = document.getElementById('modal-link');

    if (projectModal) {
        function openModal() {
            projectModal.classList.remove('hidden');
            projectModal.classList.add('flex');
            // small delay for transition
            setTimeout(() => {
                projectModalBackdrop.classList.remove('opacity-0');
                projectModalBackdrop.classList.add('opacity-100');
                projectModalContent.classList.remove('opacity-0', 'scale-95');
                projectModalContent.classList.add('opacity-100', 'scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            projectModalBackdrop.classList.remove('opacity-100');
            projectModalBackdrop.classList.add('opacity-0');
            projectModalContent.classList.remove('opacity-100', 'scale-100');
            projectModalContent.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                projectModal.classList.add('hidden');
                projectModal.classList.remove('flex');
                document.body.style.overflow = '';
            }, 300);
        }

        projectDetailBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                // Populate data
                modalTitle.textContent = btn.getAttribute('data-title');
                modalDescription.textContent = btn.getAttribute('data-description');
                
                const imgSrc = btn.getAttribute('data-image');
                if (imgSrc) {
                    modalImage.src = imgSrc;
                    modalImage.classList.remove('hidden');
                    modalImagePlaceholder.classList.add('hidden');
                    modalImagePlaceholder.classList.remove('flex');
                } else {
                    modalImage.src = '';
                    modalImage.classList.add('hidden');
                    modalImagePlaceholder.classList.remove('hidden');
                    modalImagePlaceholder.classList.add('flex');
                }

                // Tags
                modalTags.innerHTML = '';
                const tagsData = btn.getAttribute('data-tags');
                if (tagsData) {
                    try {
                        const tags = JSON.parse(tagsData);
                        tags.forEach(tag => {
                            const span = document.createElement('span');
                            span.className = 'px-3 py-1 rounded-md text-sm font-medium tag-bg text-primary-400';
                            span.textContent = tag;
                            modalTags.appendChild(span);
                        });
                    } catch (err) {
                        console.error('Error parsing tags', err);
                    }
                }

                modalLink.href = btn.getAttribute('data-link');

                openModal();
            });
        });

        closeModalBtn.addEventListener('click', closeModal);
        projectModalBackdrop.addEventListener('click', closeModal);
        
        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !projectModal.classList.contains('hidden')) {
                closeModal();
            }
        });
    }

    // --- Typing Effect for Hero Section ---
    const typingText = document.getElementById('typing-text');
    
    if (typingText && window.typingTexts && window.typingTexts.length > 0) {
        const words = window.typingTexts;
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeSpeed = 100;

        function type() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typingText.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 50;
            } else {
                typingText.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
                typeSpeed = 100;
            }

            if (!isDeleting && charIndex === currentWord.length) {
                isDeleting = true;
                typeSpeed = 2000; // Pause at end of word
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex++;
                if (wordIndex === words.length) {
                    wordIndex = 0;
                }
                typeSpeed = 500; // Pause before typing new word
            }

            setTimeout(type, typeSpeed);
        }

        // Start typing effect
        setTimeout(type, 1000);
    }

    // --- Contact Form Submission ---
    const contactForm = document.getElementById('contact-form');
    const formSuccess = document.getElementById('form-success');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;
            
            // Add loading state
            submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Sending...';
            submitBtn.disabled = true;

            try {
                const formData = new FormData(contactForm);
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    // Show success message
                    formSuccess.classList.remove('hidden');
                    formSuccess.classList.replace('bg-red-500/10', 'bg-green-500/10');
                    formSuccess.classList.replace('border-red-500/20', 'border-green-500/20');
                    formSuccess.classList.replace('text-red-400', 'text-green-400');
                    formSuccess.innerHTML = '<span data-i18n="contact.form_success">Thank you! Your message has been sent successfully.</span>';
                    
                    // Reset form
                    contactForm.reset();
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            } catch (error) {
                // Show error message
                formSuccess.classList.remove('hidden');
                formSuccess.classList.replace('bg-green-500/10', 'bg-red-500/10');
                formSuccess.classList.replace('border-green-500/20', 'border-red-500/20');
                formSuccess.classList.replace('text-green-400', 'text-red-400');
                formSuccess.textContent = error.message;
            } finally {
                // Restore button
                submitBtn.innerHTML = originalContent;
                submitBtn.disabled = false;
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    formSuccess.classList.add('hidden');
                }, 5000);
            }
        });
    }
});
