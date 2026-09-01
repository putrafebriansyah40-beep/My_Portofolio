/* =======================================================
   Data Science Portfolio — Main JS
   Handles: preloader, navbar scroll, scroll-reveal,
            active nav, typing effect, count-up, back-to-top
   ======================================================= */

document.addEventListener('DOMContentLoaded', () => {

    // ===================== PRELOADER =====================
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (!preloader) return;
        setTimeout(() => {
            preloader.style.transition = 'opacity 0.6s ease';
            preloader.style.opacity = '0';
            setTimeout(() => preloader.remove(), 650);
        }, 900);
    });

    // ===================== NAVBAR SCROLL =====================
    const navbar = document.getElementById('navbar');
    function updateNavbar() {
        if (!navbar) return;
        if (window.scrollY > 60) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-solid');
        } else {
            navbar.classList.remove('navbar-solid');
            navbar.classList.add('navbar-transparent');
        }
    }
    updateNavbar();
    window.addEventListener('scroll', updateNavbar, { passive: true });

    // ===================== SMOOTH SCROLL =====================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // ===================== SCROLL REVEAL =====================
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => revealObserver.observe(el));

    // ===================== ACTIVE NAV LINK =====================
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function setActiveNav() {
        let current = '';
        sections.forEach(section => {
            const top = section.offsetTop - 100;
            if (window.scrollY >= top) current = section.getAttribute('id');
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href === `#${current}`) link.classList.add('active');
        });
    }
    window.addEventListener('scroll', setActiveNav, { passive: true });
    setActiveNav();

    // ===================== TYPING EFFECT =====================
    const typingEl = document.getElementById('typing-text');
    if (typingEl && window.typingTexts && window.typingTexts.length > 0) {
        const words = window.typingTexts;
        let wIdx = 0, cIdx = 0, deleting = false, speed = 100;
        function type() {
            const word = words[wIdx];
            if (deleting) {
                typingEl.textContent = word.substring(0, cIdx - 1);
                cIdx--;
                speed = 50;
            } else {
                typingEl.textContent = word.substring(0, cIdx + 1);
                cIdx++;
                speed = 110;
            }
            if (!deleting && cIdx === word.length) { deleting = true; speed = 2200; }
            else if (deleting && cIdx === 0) {
                deleting = false;
                wIdx = (wIdx + 1) % words.length;
                speed = 400;
            }
            setTimeout(type, speed);
        }
        setTimeout(type, 1200);
    }

    // ===================== COUNT-UP ANIMATION =====================
    function animateCount(el, target) {
        const isFloat = String(target).includes('.');
        const numTarget = parseFloat(target);
        const suffix = String(target).replace(/[\d.]/g, '');  // e.g. "+" or ""
        const cleanNum = parseFloat(String(target).replace(/[^0-9.]/g, ''));
        const duration = 1600;
        const start = performance.now();
        function step(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // ease-out-cubic
            const current = cleanNum * eased;
            el.textContent = (isFloat ? current.toFixed(2) : Math.floor(current)) + suffix;
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target;
        }
        requestAnimationFrame(step);
    }

    const statEls = document.querySelectorAll('.stat-number');
    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = el.getAttribute('data-target') || el.textContent;
                animateCount(el, target);
                countObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statEls.forEach(el => countObserver.observe(el));

    // ===================== BACK TO TOP =====================
    const backBtn = document.getElementById('back-to-top');
    if (backBtn) {
        backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

});
