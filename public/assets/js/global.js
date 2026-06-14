/* ═══════════════════════════════════════════
   AMPF — GLOBAL JS
   File: public/js/global.js
═══════════════════════════════════════════ */

(function () {
  'use strict';

  // ── Preloader ──────────────────────────────────────────
  const preloader = document.getElementById('preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => preloader.classList.add('hidden'), 400);
    });
    setTimeout(() => preloader && preloader.classList.add('hidden'), 2000);
  }

  // ── Scroll Reveal ──────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    const ro = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.classList.add('visible');
        ro.unobserve(e.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(el => ro.observe(el));
  }

  // ── Scroll to Top ──────────────────────────────────────
  const scrollBtn = document.getElementById('scrollTopBtn');
  if (scrollBtn) {
    window.addEventListener('scroll', () => {
      scrollBtn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    scrollBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

})();