(function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // Respect reduced-motion preference
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) return;

    /* ── Helpers ─────────────────────────────────────── */

    function reveal(targets, vars) {
        var els = gsap.utils.toArray(targets);
        if (!els.length) return;
        els.forEach(function (el) {
            gsap.from(el, Object.assign({
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    once: true,
                },
                duration: 0.9,
                ease: 'power3.out',
            }, vars));
        });
    }

    function revealStagger(targets, vars, stagger) {
        var els = gsap.utils.toArray(targets);
        if (!els.length) return;
        gsap.from(els, Object.assign({
            scrollTrigger: {
                trigger: els[0],
                start: 'top 88%',
                once: true,
            },
            duration: 0.85,
            ease: 'power3.out',
            stagger: stagger || 0.1,
        }, vars));
    }

    /* ── Hero (load animation, no scroll trigger) ────── */

    var heroContent = document.querySelector('.dc-hero__content');
    if (heroContent) {
        var heroTitle   = heroContent.querySelector('h1');
        var heroPara    = heroContent.querySelector('p');
        var heroBadges  = heroContent.querySelector('.dc-hero__badges');

        var heroTl = gsap.timeline({ delay: 0.2 });

        if (heroBadges) {
            heroTl.from(heroBadges, { opacity: 0, y: 20, duration: 0.6, ease: 'power2.out' });
        }
        if (heroTitle) {
            heroTl.from(heroTitle, { opacity: 0, y: 40, duration: 1, ease: 'power3.out' }, '-=0.3');
        }
        if (heroPara) {
            heroTl.from(heroPara, { opacity: 0, y: 24, duration: 0.8, ease: 'power2.out' }, '-=0.5');
        }
    }

    /* ── Section headings ────────────────────────────── */

    reveal('.dc-video-section h2', { opacity: 0, y: 40 });
    reveal('.dc-latest-news__head h2', { opacity: 0, y: 40 });
    reveal('.dc-latest-news__badge', { opacity: 0, x: 20 });
    reveal('.dc-archive-hero h1', { opacity: 0, y: 40 });
    reveal('.dc-archive-hero__eyebrow', { opacity: 0, y: 16 });
    reveal('.dc-archive-hero__description', { opacity: 0, y: 20 });
    reveal('.dc-single-hero__title', { opacity: 0, y: 36 });
    reveal('.dc-single-hero__tags', { opacity: 0, y: 16 });
    reveal('.dc-single-hero__meta', { opacity: 0, y: 12 });

    /* ── Video section pill link ─────────────────────── */

    reveal('.dc-video-section__head .dc-pill-link', { opacity: 0, x: 20 });

    /* ── Video cards (stagger per slider) ────────────── */

    gsap.utils.toArray('.dc-slider').forEach(function (slider) {
        var cards = slider.querySelectorAll('.dc-video-card');
        if (!cards.length) return;
        gsap.from(cards, {
            scrollTrigger: {
                trigger: slider,
                start: 'top 85%',
                once: true,
            },
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.12,
        });
    });

    /* ── Latest News cards ───────────────────────────── */

    reveal('.dc-news-card--featured', { opacity: 0, y: 48, duration: 1 });
    revealStagger('.dc-news-card--side', { opacity: 0, y: 40 }, 0.15);

    /* ── Archive grid cards ──────────────────────────── */

    revealStagger('.dc-archive-card', { opacity: 0, y: 40 }, 0.1);

    /* ── Single post content blocks ──────────────────── */

    reveal('.dc-single-content', { opacity: 0, y: 32 });
    reveal('.dc-single-back', { opacity: 0, y: 16 });

    /* ── Sidebar related cards ───────────────────────── */

    revealStagger('.dc-related-card', { opacity: 0, x: 24 }, 0.12);
    reveal('.dc-single-sidebar__heading', { opacity: 0, x: 24 });

    /* ── Footer brand + categories ───────────────────── */

    reveal('.site-footer__brand', { opacity: 0, y: 32 });
    reveal('.site-footer__categories', { opacity: 0, y: 32 });

    /* ── Clip-path line reveal on section borders ────── */

    gsap.utils.toArray('.dc-video-section').forEach(function (section) {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: 'top 90%',
                once: true,
            },
            opacity: 0,
            duration: 0.5,
            ease: 'power2.out',
        });
    });

}());
