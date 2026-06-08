(function () {
    const toggle = document.querySelector('[data-nav-toggle]');
    const nav = document.querySelector('[data-site-nav]');
    const header = document.querySelector('[data-site-header]');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', String(!isOpen));
            nav.classList.toggle('is-open', !isOpen);
            header?.classList.toggle('is-nav-open', !isOpen);
        });
    }

    document.querySelectorAll('[data-dc-slider]').forEach(function (slider) {
        const track = slider.querySelector('[data-dc-slider-track]');
        const dotsContainer = slider.querySelector('[data-dc-slider-dots]');
        const prev = slider.querySelector('[data-dc-slider-prev]');
        const next = slider.querySelector('[data-dc-slider-next]');

        if (!track) {
            return;
        }

        const getStep = function () {
            const card = track.querySelector('.dc-video-card');
            const gap = parseFloat(window.getComputedStyle(track).columnGap || window.getComputedStyle(track).gap) || 0;
            return card ? card.getBoundingClientRect().width + gap : track.clientWidth;
        };

        const getPageCount = function () {
            const step = getStep();
            if (!step) return 1;
            return Math.max(1, Math.round((track.scrollWidth - track.clientWidth) / step) + 1);
        };

        const getActiveIndex = function () {
            const step = getStep();
            return step > 0 ? Math.round(track.scrollLeft / step) : 0;
        };

        const updateDots = function () {
            if (!dotsContainer) return;
            const active = getActiveIndex();
            dotsContainer.querySelectorAll('.dc-slider__dot').forEach(function (dot, i) {
                dot.classList.toggle('is-active', i === active);
            });
        };

        const buildDots = function () {
            if (!dotsContainer) return;
            const count = getPageCount();
            dotsContainer.innerHTML = '';
            for (var i = 0; i < count; i++) {
                var dot = document.createElement('button');
                dot.className = 'dc-slider__dot' + (i === 0 ? ' is-active' : '');
                dot.setAttribute('type', 'button');
                (function (index) {
                    dot.addEventListener('click', function () {
                        track.scrollTo({ left: getStep() * index, behavior: 'smooth' });
                    });
                }(i));
                dotsContainer.appendChild(dot);
            }
        };

        buildDots();
        window.addEventListener('resize', buildDots);

        track.addEventListener('scroll', updateDots, { passive: true });

        const goNext = function () {
            const maxScroll = track.scrollWidth - track.clientWidth;
            const nextLeft = track.scrollLeft + getStep();

            track.scrollTo({
                left: nextLeft >= maxScroll - 4 ? 0 : nextLeft,
                behavior: 'smooth',
            });
        };

        if (prev) {
            prev.addEventListener('click', function () {
                track.scrollBy({ left: -getStep(), behavior: 'smooth' });
            });
        }

        if (next) {
            next.addEventListener('click', goNext);
        }

        let autoplay = window.setInterval(goNext, 5000);
        const pause = function () {
            window.clearInterval(autoplay);
        };
        const resume = function () {
            pause();
            autoplay = window.setInterval(goNext, 5000);
        };

        slider.addEventListener('mouseenter', pause);
        slider.addEventListener('mouseleave', resume);
        slider.addEventListener('focusin', pause);
        slider.addEventListener('focusout', resume);

        let isDragging = false;
        let dragStartX = 0;
        let scrollStartX = 0;
        let draggedDistance = 0;

        track.addEventListener('pointerdown', function (event) {
            if (event.target.closest('[data-youtube-id]') || event.target.closest('a')) {
                return;
            }
            isDragging = true;
            dragStartX = event.clientX;
            scrollStartX = track.scrollLeft;
            draggedDistance = 0;
            track.classList.add('is-dragging');
            track.setPointerCapture(event.pointerId);
            pause();
        });

        track.addEventListener('pointermove', function (event) {
            if (!isDragging) {
                return;
            }

            event.preventDefault();
            draggedDistance = event.clientX - dragStartX;
            track.scrollLeft = scrollStartX - draggedDistance;
        });

        const stopDragging = function (event) {
            if (!isDragging) {
                return;
            }

            isDragging = false;
            track.classList.remove('is-dragging');

            if (track.hasPointerCapture(event.pointerId)) {
                track.releasePointerCapture(event.pointerId);
            }

            window.setTimeout(resume, 600);
        };

        track.addEventListener('pointerup', stopDragging);
        track.addEventListener('pointercancel', stopDragging);
        track.addEventListener('pointerleave', stopDragging);
        track.addEventListener('click', function (event) {
            if (Math.abs(draggedDistance) > 8) {
                event.preventDefault();
                event.stopPropagation();
            }
        }, true);
    });

    const modal = document.querySelector('[data-video-modal]');
    const modalFrame = document.querySelector('[data-video-modal-frame]');
    const modalTitle = document.querySelector('#dc-video-modal-title');

    if (modal && modalFrame) {
        const closeModal = function () {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            modalFrame.innerHTML = '';
            document.body.classList.remove('dc-modal-open');
        };

        document.querySelectorAll('[data-youtube-id]').forEach(function (button) {
            button.addEventListener('click', function () {
                const youtubeId = button.getAttribute('data-youtube-id');
                const title = button.getAttribute('data-video-title') || 'Video';

                if (!youtubeId) {
                    return;
                }

                if (modalTitle) {
                    modalTitle.textContent = title;
                }

                modalFrame.innerHTML = '<iframe src="https://www.youtube.com/embed/' + encodeURIComponent(youtubeId) + '?autoplay=1&rel=0" title="' + title.replace(/"/g, '&quot;') + '" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('dc-modal-open');
            });
        });

        modal.querySelectorAll('[data-video-modal-close]').forEach(function (closeButton) {
            closeButton.addEventListener('click', closeModal);
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && modal.classList.contains('is-open')) {
                closeModal();
            }
        });
    }
}());
