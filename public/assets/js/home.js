/* ══════════════════════════════════════════════
   AMPF — HOME JS
   File: public/assets/js/home.js
══════════════════════════════════════════════ */

(function () {
  'use strict';

  // ── Scroll Reveal ──────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(el => revealObserver.observe(el));
  }

  // ── Animated Counters ──────────────────────────────────
  const counters = document.querySelectorAll('.counter-num');
  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        const target = parseInt(el.dataset.target || '0', 10);
        const dur = 1400;
        const step = target / (dur / 16);
        let current = 0;

        const tick = () => {
          current = Math.min(current + step, target);
          el.textContent = Math.floor(current);
          if (current < target) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
        obs.unobserve(el);
      });
    }, { threshold: 0.5 });

    counters.forEach(el => counterObserver.observe(el));
  }

  // ── Particles ──────────────────────────────────────────
  const particleContainer = document.getElementById('heroParticles');
  if (particleContainer) {
    for (let i = 0; i < 18; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      const size = Math.random() * 2.5 + 1;
      p.style.cssText = [
        `left:${Math.random() * 100}%`,
        `width:${size}px`,
        `height:${size}px`,
        `animation-duration:${Math.random() * 14 + 10}s`,
        `animation-delay:${Math.random() * 10}s`,
      ].join(';');
      particleContainer.appendChild(p);
    }
  }

  // ── Countdown ──────────────────────────────────────────
  const cdDays = document.getElementById('cd-days');
  const cdHours = document.getElementById('cd-hours');
  const cdMin = document.getElementById('cd-min');
  const cdSec = document.getElementById('cd-sec');

  if (cdDays && cdHours && cdMin && cdSec) {
    const TARGET_DATE = new Date('2027-02-04T09:00:00');

    const pad = (n) => String(n).padStart(2, '0');

    function updateCountdown() {
      const diff = TARGET_DATE.getTime() - Date.now();
      if (diff <= 0) {
        cdDays.textContent = cdHours.textContent = cdMin.textContent = cdSec.textContent = '00';
        return;
      }
      cdDays.textContent = pad(Math.floor(diff / 86400000));
      cdHours.textContent = pad(Math.floor((diff % 86400000) / 3600000));
      cdMin.textContent = pad(Math.floor((diff % 3600000) / 60000));
      cdSec.textContent = pad(Math.floor((diff % 60000) / 1000));
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  }

// ── Events Slider + Tabs Filter ─────────────────────────
const track = document.getElementById('eventsTrack');
const eventsPrev = document.querySelector('.events-nav.prev');
const eventsNext = document.querySelector('.events-nav.next');
const tabBtns = document.querySelectorAll('.tab-btn');

if (track) {
    function getCardStep() {
        const card = track.querySelector('.event-card:not([style*="display: none"])') || track.querySelector('.event-card');
        if (!card) return 300;
        const gap = parseFloat(getComputedStyle(track).gap) || 24;
        return card.getBoundingClientRect().width + gap;
    }

    function updateNav() {
        if (!eventsPrev || !eventsNext) return;
        eventsPrev.classList.toggle('is-disabled', track.scrollLeft <= 2);
        const maxScroll = track.scrollWidth - track.clientWidth - 2;
        eventsNext.classList.toggle('is-disabled', track.scrollLeft >= maxScroll);
    }

    if (eventsPrev && eventsNext) {
        eventsPrev.addEventListener('click', () => track.scrollBy({ left: -getCardStep(), behavior: 'smooth' }));
        eventsNext.addEventListener('click', () => track.scrollBy({ left: getCardStep(), behavior: 'smooth' }));
        track.addEventListener('scroll', updateNav, { passive: true });
        window.addEventListener('resize', updateNav);
        updateNav();
    }

    // Drag (desktop) - FIXED
    let isDown = false, startX = 0, startScroll = 0, didDrag = false;

    track.addEventListener('mousedown', (e) => {
        if (e.target.closest('button, a')) return;
        isDown = true;
        didDrag = false;
        startX = e.pageX;
        startScroll = track.scrollLeft;
    });

    window.addEventListener('mouseup', () => {
        isDown = false;
        setTimeout(() => track.classList.remove('dragging'), 50);
    });

    track.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        const walk = (e.pageX - startX) * 1.2;
        if (Math.abs(e.pageX - startX) > 5) {
            if (!didDrag) {
                didDrag = true;
                track.classList.add('dragging');
            }
            e.preventDefault();
            track.scrollLeft = startScroll - walk;
        }
    });

    // Tabs Filter
    function applyFilter(filter) {
        const cards = track.querySelectorAll('.event-card');
        cards.forEach(card => {
            const type = card.dataset.type || 'past';
            const show =
                filter === 'all' ||
                (filter === 'upcoming' && type === 'evenement_avenir') ||
                (filter === 'past' && type !== 'evenement_avenir');
            card.style.display = show ? '' : 'none';
        });
        track.scrollTo({ left: 0, behavior: 'smooth' });
        setTimeout(updateNav, 60);
    }

    if (tabBtns.length) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                applyFilter(btn.dataset.filter);
            });
        });
    }
}

  // ── Video Slider + Lightbox ─────────────────────────────
  const slider = document.getElementById('videoSlider');
  const slides = document.querySelectorAll('.video-slide');

  const lightbox = document.getElementById('videoLightbox');
  const lightboxVid = document.getElementById('lightboxVideo');
  const lightboxCap = document.getElementById('lightboxCaption');

  const vPrev = document.getElementById('vsliderPrev');
  const vNext = document.getElementById('vsliderNext');
  const closeBtn = document.getElementById('videoLightboxClose');
  const dotsWrap = document.getElementById('vsliderDots');

  if (slider && slides.length && lightbox && lightboxVid) {

    function getScrollAmount() {
      // gap ديال slider (بدلو إذا عندك gap آخر)
      const gap = 22;
      return slides[0].offsetWidth + gap;
    }

    function updateArrows() {
      if (!vPrev || !vNext) return;
      const atStart = slider.scrollLeft <= 4;
      const atEnd = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 4;

      vPrev.style.opacity = atStart ? '0.35' : '1';
      vPrev.style.pointerEvents = atStart ? 'none' : 'auto';

      vNext.style.opacity = atEnd ? '0.35' : '1';
      vNext.style.pointerEvents = atEnd ? 'none' : 'auto';
    }

    if (vPrev) vPrev.addEventListener('click', () => slider.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' }));
    if (vNext) vNext.addEventListener('click', () => slider.scrollBy({ left: getScrollAmount(), behavior: 'smooth' }));

    slider.addEventListener('scroll', updateArrows, { passive: true });
    window.addEventListener('resize', updateArrows);
    updateArrows();

    // keyboard arrows (only when lightbox closed)
    document.addEventListener('keydown', (e) => {
      if (lightbox.classList.contains('open')) return;
      if (e.key === 'ArrowLeft') slider.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
      if (e.key === 'ArrowRight') slider.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
    });

    // open lightbox
    slides.forEach(slide => {
      slide.addEventListener('click', () => {
        const src = slide.dataset.src;
        const caption = slide.dataset.caption || '';

        if (!src) return;

        lightboxVid.pause();
        lightboxVid.src = src;
        lightboxCap && (lightboxCap.textContent = caption);

        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
        lightboxVid.play().catch(() => {});
      });
    });

    function closeLightbox() {
      lightbox.classList.remove('open');
      document.body.style.overflow = '';
      lightboxVid.pause();
      lightboxVid.src = '';
    }

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);

    // close when clicking backdrop
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && lightbox.classList.contains('open')) closeLightbox();
    });

    // dots
    if (dotsWrap) {
      dotsWrap.innerHTML = '';
      slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'vslider-dot' + (i === 0 ? ' active' : '');
        dot.type = 'button';
        dot.setAttribute('aria-label', `Vidéo ${i + 1}`);
        dot.addEventListener('click', () => {
          slider.scrollTo({ left: getScrollAmount() * i, behavior: 'smooth' });
        });
        dotsWrap.appendChild(dot);
      });

      const dots = dotsWrap.querySelectorAll('.vslider-dot');
      slider.addEventListener('scroll', () => {
        const idx = Math.round(slider.scrollLeft / getScrollAmount());
        dots.forEach((d, i) => d.classList.toggle('active', i === idx));
      }, { passive: true });
    }
  }

  // ── RIB / IBAN Reveal (Click to show) ───────────────────
  // كيخدم مع:
  // <span class="rib-value rib-blur" data-reveal="...."> ... <small>...</small></span>
  const ribBlurs = document.querySelectorAll('.rib-blur');

  if (ribBlurs.length) {
    ribBlurs.forEach((el) => {
      el.addEventListener('click', () => {
        if (el.classList.contains('revealed')) return;

        const realValue = el.getAttribute('data-reveal');
        if (!realValue) return;

        // accessible label
        el.setAttribute('aria-label', realValue);

        // بدل المحتوى كامل بالقيمة (كيحيد small)
        el.textContent = realValue;

        // حيد blur
        el.classList.add('revealed');
      });
    });
  }

})();