/* Carla Rogado — interações do site */

const onReady = (fn) => {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
};

/* ------------------------------- preloader ------------------------------- */

window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');

    // A animação da logo roda em todo carregamento de página (~4,3s no total)
    const reduzido = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const espera = reduzido ? 600 : 4600;

    setTimeout(() => {
        if (preloader) preloader.classList.add('is-done');
        document.body.classList.add('is-loaded');
        document.body.classList.remove('is-locked');
    }, espera);
});

onReady(() => {
    document.body.classList.add('is-locked');

    /* ------------------------------ header scroll ----------------------------- */

    const header = document.querySelector('[data-header]');

    const onScroll = () => {
        if (!header) return;
        header.classList.toggle('is-scrolled', window.scrollY > 60);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* ------------------------------- menu mobile ------------------------------ */

    const menuToggle = document.querySelector('[data-menu-toggle]');
    const menuOverlay = document.querySelector('[data-menu-overlay]');

    if (menuToggle && menuOverlay) {
        menuToggle.addEventListener('click', () => {
            const open = menuOverlay.classList.toggle('is-open');
            menuToggle.classList.toggle('is-open', open);
            document.body.classList.toggle('is-locked', open);
            menuToggle.setAttribute('aria-expanded', String(open));
        });

        menuOverlay.querySelectorAll('a').forEach((link) =>
            link.addEventListener('click', () => {
                menuOverlay.classList.remove('is-open');
                menuToggle.classList.remove('is-open');
                document.body.classList.remove('is-locked');
            })
        );
    }

    /* ------------------------------ scroll reveal ------------------------------ */

    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
    );

    document.querySelectorAll('[data-reveal], .img-reveal').forEach((el) => revealObserver.observe(el));

    /* grupos com stagger automático */
    document.querySelectorAll('[data-reveal-group]').forEach((group) => {
        [...group.children].forEach((child, i) => {
            child.setAttribute('data-reveal', child.getAttribute('data-reveal') || '');
            child.style.setProperty('--reveal-delay', `${i * 0.12}s`);
            revealObserver.observe(child);
        });
    });

    /* -------------------------------- contadores ------------------------------- */

    const animateCounter = (el) => {
        const target = parseFloat(el.dataset.counter.replace(',', '.'));
        const decimals = el.dataset.counter.includes(',') || el.dataset.counter.includes('.') ? 1 : 0;
        const duration = 1800;
        const start = performance.now();

        const tick = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = (target * eased).toFixed(decimals);
            el.textContent = decimals ? String(value).replace('.', ',') : value;
            if (progress < 1) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
    };

    const counterObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    document.querySelectorAll('[data-counter]').forEach((el) => counterObserver.observe(el));

    /* --------------------------------- parallax -------------------------------- */

    const parallaxItems = [...document.querySelectorAll('[data-parallax]')];

    if (parallaxItems.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        let raf = null;

        const updateParallax = () => {
            raf = null;
            const vh = window.innerHeight;

            parallaxItems.forEach((el) => {
                const speed = parseFloat(el.dataset.parallax) || 0.15;
                const rect = el.getBoundingClientRect();
                if (rect.bottom < 0 || rect.top > vh) return;
                const offset = (rect.top + rect.height / 2 - vh / 2) * speed;
                el.style.transform = `translateY(${offset.toFixed(1)}px)`;
            });
        };

        window.addEventListener(
            'scroll',
            () => {
                if (!raf) raf = requestAnimationFrame(updateParallax);
            },
            { passive: true }
        );
        updateParallax();
    }

    /* --------------------------- carrossel com arraste -------------------------- */

    document.querySelectorAll('.drag-scroll').forEach((track) => {
        let isDown = false;
        let startX = 0;
        let scrollStart = 0;

        track.addEventListener('pointerdown', (e) => {
            isDown = true;
            startX = e.clientX;
            scrollStart = track.scrollLeft;
            track.classList.add('is-dragging');
        });

        window.addEventListener('pointerup', () => {
            isDown = false;
            track.classList.remove('is-dragging');
        });

        track.addEventListener('pointermove', (e) => {
            if (!isDown) return;
            track.scrollLeft = scrollStart - (e.clientX - startX);
        });
    });

    /* setas do carrossel */
    document.querySelectorAll('[data-scroll-target]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const track = document.querySelector(btn.dataset.scrollTarget);
            if (!track) return;
            const amount = track.clientWidth * 0.7 * (btn.dataset.dir === 'prev' ? -1 : 1);
            track.scrollBy({ left: amount, behavior: 'smooth' });
        });
    });

    /* ------------------------------- depoimentos ------------------------------- */

    const testimonialWrap = document.querySelector('[data-testimonials]');

    if (testimonialWrap) {
        const slides = [...testimonialWrap.querySelectorAll('.testimonial-slide')];
        const dots = [...document.querySelectorAll('.testimonial-dot')];
        let current = 0;
        let timer;

        const goTo = (index) => {
            current = (index + slides.length) % slides.length;
            slides.forEach((s, i) => s.classList.toggle('is-active', i === current));
            dots.forEach((d, i) => d.classList.toggle('is-active', i === current));
        };

        const autoplay = () => {
            clearInterval(timer);
            timer = setInterval(() => goTo(current + 1), 6500);
        };

        dots.forEach((dot, i) =>
            dot.addEventListener('click', () => {
                goTo(i);
                autoplay();
            })
        );

        goTo(0);
        autoplay();
    }

    /* ---------------------------- filtro do portfólio --------------------------- */

    const filterButtons = [...document.querySelectorAll('[data-filter]')];
    const portfolioItems = [...document.querySelectorAll('[data-category]')];

    filterButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
            filterButtons.forEach((b) => b.classList.remove('is-active'));
            btn.classList.add('is-active');
            const filter = btn.dataset.filter;

            portfolioItems.forEach((item) => {
                const show = filter === 'todos' || item.dataset.category === filter;
                item.style.display = show ? '' : 'none';
                if (show) {
                    item.classList.remove('is-visible');
                    requestAnimationFrame(() => requestAnimationFrame(() => item.classList.add('is-visible')));
                }
            });
        });
    });

    /* --------------------------------- lightbox -------------------------------- */

    const lightbox = document.querySelector('[data-lightbox]');

    if (lightbox) {
        const lightboxImg = lightbox.querySelector('img');
        const caption = lightbox.querySelector('[data-lightbox-caption]');
        let gallery = [];
        let index = 0;

        const openAt = (i) => {
            gallery = [...document.querySelectorAll('[data-lightbox-src]')].filter(
                (el) => el.closest('[data-category]')?.style.display !== 'none'
            );
            index = (i + gallery.length) % gallery.length;
            const el = gallery[index];
            lightboxImg.src = el.dataset.lightboxSrc;
            if (caption) caption.textContent = el.dataset.lightboxCaption || '';
            lightbox.classList.add('is-open');
            document.body.classList.add('is-locked');
        };

        document.addEventListener('click', (e) => {
            const trigger = e.target.closest('[data-lightbox-src]');
            if (!trigger) return;
            e.preventDefault();
            const all = [...document.querySelectorAll('[data-lightbox-src]')].filter(
                (el) => el.closest('[data-category]')?.style.display !== 'none'
            );
            openAt(all.indexOf(trigger));
        });

        const close = () => {
            lightbox.classList.remove('is-open');
            document.body.classList.remove('is-locked');
        };

        lightbox.querySelector('[data-lightbox-close]')?.addEventListener('click', close);
        lightbox.querySelector('[data-lightbox-prev]')?.addEventListener('click', () => openAt(index - 1));
        lightbox.querySelector('[data-lightbox-next]')?.addEventListener('click', () => openAt(index + 1));

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) close();
        });

        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('is-open')) return;
            if (e.key === 'Escape') close();
            if (e.key === 'ArrowLeft') openAt(index - 1);
            if (e.key === 'ArrowRight') openAt(index + 1);
        });
    }

    /* ------------------------------ cursor custom ------------------------------ */

    if (window.matchMedia('(pointer: fine)').matches) {
        const dot = document.createElement('div');
        const ring = document.createElement('div');
        dot.className = 'cursor-dot';
        ring.className = 'cursor-ring';
        document.body.append(dot, ring);

        let mouseX = 0;
        let mouseY = 0;
        let ringX = 0;
        let ringY = 0;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.transform = `translate(${mouseX - 3}px, ${mouseY - 3}px)`;
        });

        const followLoop = () => {
            ringX += (mouseX - ringX) * 0.16;
            ringY += (mouseY - ringY) * 0.16;
            ring.style.transform = `translate(${ringX - 19}px, ${ringY - 19}px)`;
            requestAnimationFrame(followLoop);
        };
        followLoop();

        document.addEventListener('mouseover', (e) => {
            document.body.classList.toggle(
                'cursor-grow',
                Boolean(e.target.closest('a, button, [data-lightbox-src], .drag-scroll'))
            );
        });
    }
});
