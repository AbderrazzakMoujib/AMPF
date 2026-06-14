/* ═══════════════════════════════════════
   AMPF — NAVBAR JS
   File: public/assets/js/navbar.js
═══════════════════════════════════════ */

(() => {
  'use strict';

  const init = () => {
    const navbar  = document.getElementById('navbar');
    const burger  = document.getElementById('navBurger');
    const links   = document.getElementById('navLinks');

    if (!navbar || !burger || !links) return;

    // ─── Overlay ─────────────────────────────────
    const overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);

    // ─── Open / Close ─────────────────────────────
    const setOpen = (isOpen) => {
      links.classList.toggle('open', isOpen);
      burger.classList.toggle('open', isOpen);
      overlay.classList.toggle('open', isOpen);
      document.body.classList.toggle('nav-open', isOpen);
      burger.setAttribute('aria-expanded', String(isOpen));
    };

    const isOpen = () => links.classList.contains('open');

    // ─── Scroll ───────────────────────────────────
    const onScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 50);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // ─── Burger ───────────────────────────────────
    burger.addEventListener('click', () => {
      setOpen(!isOpen());
    });

    // ─── Dropdown mobile (click) ──────────────────
    document.querySelectorAll('.nav-dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 1100) {
          e.preventDefault();
          e.stopPropagation();

          const parent = toggle.closest('.nav-dropdown');

          // Fermer les autres dropdowns ouverts
          document.querySelectorAll('.nav-dropdown.open').forEach(el => {
            if (el !== parent) {
              el.classList.remove('open');
              el.querySelector('.nav-dropdown-toggle')
                .setAttribute('aria-expanded', 'false');
            }
          });

          const nowOpen = parent.classList.toggle('open');
          toggle.setAttribute('aria-expanded', String(nowOpen));
        }
      });
    });

    // ─── Overlay click → close ────────────────────
    overlay.addEventListener('click', () => setOpen(false));

    // ─── Links click → close menu ─────────────────
    links.querySelectorAll('a').forEach(a => {
      if (a.classList.contains('nav-dropdown-toggle')) return;
      if (a.getAttribute('href') === '#') return;
      a.addEventListener('click', () => {
        if (window.innerWidth <= 1100) setOpen(false);
      });
    });

    // ─── Escape → close ───────────────────────────
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') setOpen(false);
    });

    // ─── Resize → reset ───────────────────────────
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1100) {
        setOpen(false);
        document.querySelectorAll('.nav-dropdown.open').forEach(el => {
          el.classList.remove('open');
        });
      }
    });

    // ─── Language switcher ────────────────────────
    document.querySelectorAll('.lang-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.dispatchEvent(new CustomEvent('ampf:langChange', {
          detail: { lang: btn.dataset.lang }
        }));
      });
    });
  };

  // ─── DOMContentLoaded ─────────────────────────
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();