/**
 * Miller Tree Experts — Main JS
 *
 * Shared across all pages. Handles:
 *   - Scroll-reveal animations
 *   - Sticky nav on scroll
 *   - Mobile nav toggle
 *   - FAQ accordion
 *   - Count-up animations
 *   - Smooth-scroll for anchor links
 *   - Hash-based navigation (e.g. /#areas from inner pages)
 */

(function () {
    'use strict';

    // ========================================
    // Scroll Reveal (IntersectionObserver)
    // ========================================
    const revealEls = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: '0px 0px -30px 0px' }
    );

    // Handle hash-based navigation (e.g. from inner pages linking to /#areas)
    if (window.location.hash) {
        revealEls.forEach((el) => {
            el.style.transition = 'none';
            el.classList.add('visible');
            revealObserver.unobserve(el);
        });
        setTimeout(() => {
            const target = document.querySelector(window.location.hash);
            if (target) {
                const navHeight = document.querySelector('.nav').offsetHeight;
                const targetPos =
                    target.getBoundingClientRect().top + window.scrollY - navHeight - 16;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
                setTimeout(
                    () => revealEls.forEach((el) => (el.style.transition = '')),
                    600
                );
            }
        }, 100);
    } else {
        revealEls.forEach((el) => revealObserver.observe(el));
    }

    // ========================================
    // Sticky Nav
    // ========================================
    const nav = document.querySelector('.nav');
    if (nav) {
        window.addEventListener(
            'scroll',
            () => {
                nav.classList.toggle('scrolled', window.scrollY > 20);
            },
            { passive: true }
        );
    }

    // ========================================
    // Mobile Nav Toggle
    // ========================================
    const toggle = document.querySelector('.nav__toggle');
    const mobileNav = document.querySelector('.nav__mobile');

    if (toggle && mobileNav) {
        toggle.addEventListener('click', () => {
            const isOpen = mobileNav.classList.toggle('open');
            toggle.classList.toggle('active');
            toggle.setAttribute('aria-expanded', isOpen);
        });

        mobileNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('open');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (
                !e.target.closest('.nav') &&
                mobileNav.classList.contains('open')
            ) {
                mobileNav.classList.remove('open');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // ========================================
    // Smooth Scroll for Anchor Links
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const navHeight = document.querySelector('.nav').offsetHeight;
                const targetPos =
                    target.getBoundingClientRect().top +
                    window.pageYOffset -
                    navHeight;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }
        });
    });

    // ========================================
    // FAQ Accordion
    // ========================================
    const faqItems = document.querySelectorAll('.faq__item');

    if (faqItems.length) {
        faqItems.forEach((item) => {
            const question = item.querySelector('.faq__question');
            const answer = item.querySelector('.faq__answer');
            const inner = answer ? answer.querySelector('.faq__answer-inner') : null;

            if (!question || !answer || !inner) return;

            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Close all other items
                faqItems.forEach((otherItem) => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        otherItem
                            .querySelector('.faq__question')
                            .setAttribute('aria-expanded', 'false');
                        otherItem.querySelector('.faq__answer').style.maxHeight = '0';
                    }
                });

                // Toggle current item
                if (isActive) {
                    item.classList.remove('active');
                    question.setAttribute('aria-expanded', 'false');
                    answer.style.maxHeight = '0';
                } else {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                    answer.style.maxHeight = inner.scrollHeight + 'px';
                }
            });
        });
    }

    // ========================================
    // Count-Up Animation (about page stats)
    // ========================================
    const countEls = document.querySelectorAll('[data-count]');

    if (countEls.length) {
        const countObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseFloat(el.dataset.count);
                        const decimals = parseInt(el.dataset.decimals) || 0;
                        const suffix = el.dataset.suffix || '';
                        const duration = 2000;
                        const start = performance.now();

                        function update(now) {
                            const elapsed = now - start;
                            const progress = Math.min(elapsed / duration, 1);
                            const eased = 1 - Math.pow(1 - progress, 3);
                            const current = eased * target;

                            if (decimals > 0) {
                                el.textContent = current.toFixed(decimals) + suffix;
                            } else {
                                el.textContent =
                                    Math.floor(current).toLocaleString() + suffix;
                            }

                            if (progress < 1) {
                                requestAnimationFrame(update);
                            }
                        }
                        requestAnimationFrame(update);
                        countObserver.unobserve(el);
                    }
                });
            },
            { threshold: 0.3 }
        );

        countEls.forEach((el) => countObserver.observe(el));
    }
})();
