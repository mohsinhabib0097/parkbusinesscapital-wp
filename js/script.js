/* ═══════════════════════════════════════════
   Park Business Capital — Unified Scripts
   Covers: Homepage, Loan Products, Apply Page
   ═══════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {

  /* ─── PAGE DETECTION ───────────────────── */
  const isHomepage    = !!document.querySelector('section.bg-park-bg');
  const isLoanProducts = !!document.querySelector('.lp-hero');
  const isApplyPage   = !!document.getElementById('applyForm');


  /* ═══════════════════════════════════════════
     SHARED — Runs on every page
     ═══════════════════════════════════════════ */

  /* ─── SCROLL PROGRESS BAR ──────────────── */
  if (!document.querySelector('.scroll-progress')) {
    const bar = document.createElement('div');
    bar.className = 'scroll-progress';
    document.body.appendChild(bar);
  }

  const progressBar = document.querySelector('.scroll-progress');
  window.addEventListener('scroll', () => {
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (docHeight > 0) {
      progressBar.style.width = ((window.scrollY / docHeight) * 100) + '%';
    }
  }, { passive: true });

  /* ─── NAV SHADOW ON SCROLL ─────────────── */
  const nav = document.querySelector('nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

  /* ─── MOBILE MENU ──────────────────────── */
  const menuToggle  = document.getElementById('menuToggle');
  const mobileMenu  = document.getElementById('mobileMenu');
  const menuOverlay = document.getElementById('menuOverlay');
  const menuClose   = document.getElementById('menuClose');

  function openMenu() {
    if (mobileMenu) mobileMenu.classList.add('open');
    if (menuOverlay) menuOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    if (mobileMenu) mobileMenu.classList.remove('open');
    if (menuOverlay) menuOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  if (menuToggle) menuToggle.addEventListener('click', openMenu);
  if (menuClose)  menuClose.addEventListener('click', closeMenu);
  if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

  document.querySelectorAll('.mobile-menu a').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  /* ─── MOBILE ACCORDIONS ────────────────── */
  document.querySelectorAll('.mobile-accordion-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const accordion = trigger.closest('.mobile-accordion');
      const isOpen = accordion.classList.contains('open');
      document.querySelectorAll('.mobile-accordion.open').forEach(other => {
        if (other !== accordion) other.classList.remove('open');
      });
      accordion.classList.toggle('open', !isOpen);
    });
  });

  /* ─── NAV DROPDOWN TOUCH SUPPORT ───────── */
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-dropdown-wrap')) {
      document.querySelectorAll('.nav-dropdown-wrap.open').forEach(d => d.classList.remove('open'));
    }
  });

  document.querySelectorAll('.nav-dropdown-trigger').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const wrap = trigger.closest('.nav-dropdown-wrap');
      const isOpen = wrap.classList.contains('open');
      document.querySelectorAll('.nav-dropdown-wrap.open').forEach(other => {
        if (other !== wrap) other.classList.remove('open');
      });
      wrap.classList.toggle('open', !isOpen);
    });
  });

  /* ─── FAQ ACCORDION ────────────────────── */
  document.querySelectorAll('.faq-trigger').forEach(trigger => {
  trigger.addEventListener('click', () => {
    const item   = trigger.closest('.faq-item');
    const answer = item.querySelector('.faq-answer-wrap');
    const icon   = trigger.querySelector('.faq-chevron');

    const isOpen = answer.classList.contains('open');

    if (isOpen) {
  answer.style.maxHeight = '0px';
  answer.classList.remove('open');
  icon.classList.remove('open');
} else {
  answer.classList.add('open');
  answer.style.maxHeight = answer.scrollHeight + 'px';
  icon.classList.add('open');
}
  });
});

  /* ─── BUTTON RIPPLE EFFECT ─────────────── */
  document.querySelectorAll('.btn-park, .lp-hero-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      const ripple = document.createElement('span');
      ripple.className = 'btn-ripple';
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top  = (e.clientY - rect.top  - size / 2) + 'px';
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  /* ─── TILT EFFECT ON LENDING CARDS ─────── */
  document.querySelectorAll('.lending-card-bg').forEach(card => {
    card.addEventListener('mousemove', function (e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const rotateX = ((y - rect.height / 2) / (rect.height / 2)) * -3;
      const rotateY = ((x - rect.width  / 2) / (rect.width  / 2)) * 3;
      this.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
    });
    card.addEventListener('mouseleave', function () {
      this.style.transform = '';
      this.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease';
    });
    card.addEventListener('mouseenter', function () {
      this.style.transition = 'box-shadow 0.4s ease';
    });
  });

  /* ─── SMOOTH IMAGE LOADING ─────────────── */
  document.querySelectorAll('img').forEach(img => {
    if (img.complete) return;
    img.dataset.loaded = 'false';
    img.addEventListener('load', () => { img.dataset.loaded = 'true'; });
  });

  /* ─── REVIEW SLIDER ────────────────────── */
  const reviews = [
    {
      name: "Justin Andrews",
      text: "I had an amazing experience with Park Business Capital. From start to finish, the team made the entire funding process smooth and stress-free. They guided me through every step—from application to funding—so professionally and with such clear communication that everything felt effortless. It truly was an A-to-Z experience with ease. Highly recommend Park Business Capital to anyone looking for reliable and efficient business funding!"
    },
    {
      name: "Maria Gonzalez",
      text: "Park Business Capital provided us with the working capital we needed to grow our business. The process was quick, transparent, and the team was extremely professional. We received our funds within 24 hours of approval. I highly recommend them to any small business owner looking for reliable funding!"
    },
    {
      name: "David Chen",
      text: "Outstanding service from start to finish. The application process was straightforward and the team kept us informed at every stage. We were approved within hours and had the funds in our account the next morning. Park Business Capital truly understands the needs of small businesses."
    }
  ];

  let currentReview = 0;
  const reviewName    = document.getElementById('reviewName');
  const reviewText    = document.getElementById('reviewText');
  const reviewContent = document.querySelector('.review-content');

  function changeReview(direction) {
    if (!reviewContent) return;
    reviewContent.classList.add('fade');
    reviewContent.classList.add('fading');
    setTimeout(() => {
      currentReview = (currentReview + direction + reviews.length) % reviews.length;
      if (reviewName) reviewName.textContent = reviews[currentReview].name;
      if (reviewText) reviewText.textContent = reviews[currentReview].text;
      reviewContent.classList.remove('fade');
      reviewContent.classList.remove('fading');
    }, 300);
  }

  const prevReviewBtn = document.getElementById('prevReview');
  const nextReviewBtn = document.getElementById('nextReview');
  if (prevReviewBtn) prevReviewBtn.addEventListener('click', () => changeReview(-1));
  if (nextReviewBtn) nextReviewBtn.addEventListener('click', () => changeReview(1));

  // Auto-slide reviews
  let reviewAutoSlide = null;
  if (reviewContent) {
    reviewAutoSlide = setInterval(() => changeReview(1), 3000);
    [prevReviewBtn, nextReviewBtn].forEach(btn => {
      if (btn) {
        btn.addEventListener('click', () => {
          clearInterval(reviewAutoSlide);
          reviewAutoSlide = setInterval(() => changeReview(1), 3000);
        });
      }
    });
  }

  /* ─── DROPDOWN OPTION SELECT (old-style) ─ */
  document.querySelectorAll('.dropdown-option').forEach(option => {
    option.addEventListener('click', function () {
      const dropdown = this.closest('.custom-dropdown');
      const label    = dropdown.querySelector('.dropdown-label');
      const menu     = dropdown.querySelector('.custom-dropdown-menu');
      const chevron  = dropdown.querySelector('.dropdown-chevron');
      const trigger  = dropdown.querySelector('.custom-dropdown-trigger');
      const hidden   = dropdown.querySelector('input[type="hidden"]');

      // Update label
      label.textContent = this.dataset.value || this.textContent;
      label.style.color = '#000';

      // Update hidden input
      if (hidden) hidden.value = this.dataset.value;

      // Close
      if (menu) menu.classList.add('hidden');
      if (chevron) chevron.style.transform = '';
      if (trigger) trigger.classList.remove('dropdown-open');

      // Mark selected
      dropdown.querySelectorAll('.dropdown-option').forEach(o => {
        o.style.background = '';
        o.style.fontWeight = '';
        o.style.color = '';
        o.classList.remove('selected');
      });
      this.style.background = '#f0f5ff';
      this.style.fontWeight = '600';
      this.style.color = '#0055B8';
      this.classList.add('selected');
    });
  });

  /* ─── PARK DROPDOWN OPTION SELECT ──────── */
  document.querySelectorAll('.park-dropdown-option').forEach(option => {
    option.addEventListener('click', function () {
      const dropdown = this.closest('.park-dropdown');
      const label  = dropdown.querySelector('.park-dropdown-label');
      const hidden = dropdown.querySelector('input[type="hidden"]');
      dropdown.querySelectorAll('.park-dropdown-option').forEach(o => o.classList.remove('selected'));
      this.classList.add('selected');
      label.textContent = this.dataset.value;
      label.style.color = '#111';
      if (hidden) hidden.value = this.dataset.value;
      dropdown.classList.remove('open');
    });
  });

  /* ─── AMOUNT PRESETS ───────────────────── */
  document.querySelectorAll('.amount-preset').forEach(btn => {
    btn.addEventListener('click', function () {
      const val = parseInt(this.dataset.val);
      // Try both possible amount input IDs
      const amountInput = document.getElementById('amountInput') || document.getElementById('applyAmountInput');
      if (amountInput) amountInput.value = val.toLocaleString();
      document.querySelectorAll('.amount-preset').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    });
  });

  /* ─── CLOSE DROPDOWNS ON OUTSIDE CLICK ─── */
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.custom-dropdown')) {
      document.querySelectorAll('.custom-dropdown-menu').forEach(m => m.classList.add('hidden'));
      document.querySelectorAll('.dropdown-chevron').forEach(c => c.style.transform = '');
      document.querySelectorAll('.custom-dropdown-trigger').forEach(t => t.classList.remove('dropdown-open'));
    }
    if (!e.target.closest('.park-dropdown')) {
      document.querySelectorAll('.park-dropdown.open').forEach(d => d.classList.remove('open'));
    }
  });

  /* ─── PREVENT DEFAULT ON # LINKS ───────── */
  document.querySelectorAll('a[href="#"]').forEach(a => {
    a.addEventListener('click', e => e.preventDefault());
  });

  /* ─── SMOOTH ANCHOR SCROLL ─────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });


  /* ═══════════════════════════════════════════
     HOMEPAGE
     ═══════════════════════════════════════════ */
  if (isHomepage) {

    /* ─── HERO TEXT REVEAL ────────────────── */
    const heroSection = document.querySelector('section.bg-park-bg');
    if (heroSection) {
      const heroTextContainer = heroSection.querySelector('.w-full.lg\\:w-1\\/2.z-10');
      if (heroTextContainer) {
        Array.from(heroTextContainer.children).forEach(child => child.classList.add('hero-text-reveal'));
      }

      const heroImageDiv = heroSection.querySelector('.overflow-hidden');
      if (heroImageDiv) heroImageDiv.classList.add('hero-image-reveal');

      // Floating shapes
      const floatingShapes = document.createElement('div');
      floatingShapes.className = 'floating-shapes';
      floatingShapes.innerHTML = '<div class="floating-shape"></div><div class="floating-shape"></div><div class="floating-shape"></div>';
      const heroInner = heroSection.querySelector('.max-w-\\[75rem\\]');
      if (heroInner) heroInner.appendChild(floatingShapes);
    }

    /* ─── HERO HEADLINE HIGHLIGHT ────────── */
    const heroH1 = document.querySelector('h1.text-park-blue');
    if (heroH1) {
      heroH1.innerHTML = heroH1.innerHTML.replace(
        'accelerate everything',
        '<span class="hero-highlight">accelerate everything</span>'
      );
    }

    /* ─── ANIMATED COUNTERS ──────────────── */
    function animateCounter(element, target, suffix, prefix, duration) {
      suffix   = suffix   || '';
      prefix   = prefix   || '';
      duration = duration || 1800;
      const startTime = performance.now();

      function easeOutExpo(t) {
        return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
      }

      function update(currentTime) {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const eased    = easeOutExpo(progress);
        const value    = Math.floor(target * eased);

        if (target >= 1000000) {
          element.textContent = prefix + '$' + (value / 1000000).toFixed(0) + 'M';
        } else if (target >= 1000) {
          element.textContent = prefix + value.toLocaleString() + suffix;
        } else {
          element.textContent = prefix + value + suffix;
        }

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          element.textContent = element.dataset.finalText;
        }
      }
      requestAnimationFrame(update);
    }

    // Mark key fact items
    const keyFactSection = document.querySelector('section.bg-white.fade-up');
    if (keyFactSection) {
      keyFactSection.querySelectorAll('.text-center').forEach(item => {
        item.classList.add('key-fact-item');
        const counterEl = item.querySelector('.text-park-blue.leading-tight');
        if (counterEl) {
          counterEl.dataset.finalText = counterEl.textContent.trim();
          counterEl.dataset.counted = 'false';
        }
      });
    }

    /* ─── STAGGER CLASS INJECTION ────────── */
    document.querySelectorAll('.industry-item').forEach(item => item.classList.add('stagger-item'));
    document.querySelectorAll('.explore-card').forEach(card => card.classList.add('stagger-item'));
    document.querySelectorAll('.lending-card-bg').forEach(card => card.classList.add('stagger-item'));
    document.querySelectorAll('.faq-item').forEach(item => item.classList.add('stagger-item'));

    document.querySelectorAll('h2').forEach(h2 => {
      if (!h2.closest('section.bg-park-bg') && !h2.closest('nav')) {
        h2.classList.add('section-heading');
      }
    });

    /* ─── INTERSECTION OBSERVER (HOMEPAGE) ── */
    const homeAnimEls = document.querySelectorAll(
      '.fade-up, .slide-left, .slide-right, .scale-up, .stagger-item, .key-fact-item, .section-heading'
    );

    if (homeAnimEls.length && 'IntersectionObserver' in window) {
      const homeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');

            // Counter animation
            const counterEl = entry.target.querySelector('.text-park-blue.leading-tight');
            if (counterEl && counterEl.dataset.counted === 'false') {
              counterEl.dataset.counted = 'true';
              const finalText = counterEl.dataset.finalText;

              if (finalText.includes('2800')) {
                animateCounter(counterEl, 2800, '+', '', 2000);
              } else if (finalText.includes('$250K')) {
                const start = performance.now();
                (function anim(now) {
                  const p = Math.min((now - start) / 1800, 1);
                  const e = p === 1 ? 1 : 1 - Math.pow(2, -10 * p);
                  counterEl.textContent = '$' + Math.floor(250 * e) + 'K';
                  if (p < 1) requestAnimationFrame(anim);
                  else counterEl.textContent = finalText;
                })(start);
              } else if (finalText.includes('4 hrs')) {
                const start = performance.now();
                (function anim(now) {
                  const p = Math.min((now - start) / 1200, 1);
                  const e = p === 1 ? 1 : 1 - Math.pow(2, -10 * p);
                  counterEl.textContent = Math.floor(4 * e) + ' hrs';
                  if (p < 1) requestAnimationFrame(anim);
                  else counterEl.textContent = finalText;
                })(start);
              } else if (finalText.includes('$50K')) {
                counterEl.textContent = finalText;
              }
            }

            homeObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

      homeAnimEls.forEach(el => homeObserver.observe(el));
    } else {
      homeAnimEls.forEach(el => el.classList.add('visible'));
    }

    /* ─── PARALLAX ON SCROLL ─────────────── */
    const parallaxImages = document.querySelectorAll('.parallax-img');
    if (parallaxImages.length) {
      window.addEventListener('scroll', () => {
        parallaxImages.forEach(img => {
          const rect = img.getBoundingClientRect();
          const scrolled = (rect.top - window.innerHeight) / (window.innerHeight + rect.height);
          img.style.transform = `translateY(${scrolled * -20}px)`;
        });
      }, { passive: true });
    }

    /* ─── HOMEPAGE FORM SUBMIT ───────────── */
    const fundingForm = document.getElementById('fundingForm');
    if (fundingForm) {
      fundingForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const submitBtn = fundingForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.7';

        setTimeout(() => {
          const formWrapper = fundingForm.closest('.bg-white');
          if (formWrapper) formWrapper.classList.add('form-success');

          alert('Thank you! Your application has been submitted. A Funding Manager will contact you shortly.');
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
          submitBtn.style.opacity = '1';
          fundingForm.reset();

          setTimeout(() => {
            if (formWrapper) formWrapper.classList.remove('form-success');
          }, 1000);

          // Reset dropdowns
          document.querySelectorAll('.dropdown-label').forEach(l => { l.textContent = 'Select'; l.style.color = ''; });
          document.querySelectorAll('.park-dropdown-label').forEach(l => { l.textContent = 'Select'; l.style.color = ''; });
          document.querySelectorAll('.park-dropdown-option').forEach(o => o.classList.remove('selected'));
          document.querySelectorAll('.dropdown-option').forEach(o => { o.style.background = ''; o.style.fontWeight = ''; });
          document.querySelectorAll('.amount-preset').forEach(b => b.classList.remove('active'));
          const amountInput = document.getElementById('amountInput');
          if (amountInput) amountInput.value = '50,000';
        }, 800);
      });
    }

    /* ─── MISSION SLIDER ─────────────────── */
    const slides = document.querySelectorAll('.mission-slide');
    const dots   = document.querySelectorAll('.mission-dot');
    let currentSlide = 0;
    let missionTimer;

    function goToSlide(index) {
      if (!slides.length) return;
      slides[currentSlide].classList.remove('active', 'fade-in');
      if (dots.length) dots[currentSlide].classList.remove('active');
      currentSlide = index;
      slides[currentSlide].style.display = 'block';
      slides[currentSlide].classList.add('active', 'fade-in');
      if (dots.length) dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
      goToSlide((currentSlide + 1) % slides.length);
    }

    function startMissionTimer() {
      missionTimer = setInterval(nextSlide, 4000);
    }

    if (slides.length) {
      dots.forEach(dot => {
        dot.addEventListener('click', () => {
          goToSlide(parseInt(dot.dataset.index));
          clearInterval(missionTimer);
          startMissionTimer();
        });
      });
      startMissionTimer();
    }

  } // end isHomepage


  /* ═══════════════════════════════════════════
     LOAN PRODUCTS PAGE
     ═══════════════════════════════════════════ */
  if (isLoanProducts) {

    /* ─── HERO FLOATING SHAPES ───────────── */
    const lpHero = document.querySelector('.lp-hero');
    if (lpHero) {
      const shapes = document.createElement('div');
      shapes.className = 'lp-hero-shapes';
      shapes.innerHTML = '<div class="lp-hero-shape"></div><div class="lp-hero-shape"></div><div class="lp-hero-shape"></div>';
      lpHero.appendChild(shapes);
    }

    /* ─── STEPS CARD VISIBLE ─────────────── */
    const stepsCard = document.querySelector('.lp-steps-card');
    if (stepsCard) {
      setTimeout(() => stepsCard.classList.add('visible'), 800);
    }

    /* ─── STAGGER CLASS INJECTION ────────── */
    document.querySelectorAll('.lending-card-bg').forEach((card, i) => {
      card.classList.add('lp-stagger');
      card.style.transitionDelay = (i * 0.12) + 's';
    });

    document.querySelectorAll('.explore-card').forEach((card, i) => {
      card.classList.add('lp-stagger');
      card.style.transitionDelay = (i * 0.08) + 's';
    });

    document.querySelectorAll('.faq-item').forEach((item, i) => {
      item.classList.add('lp-stagger');
      item.style.transitionDelay = (i * 0.1) + 's';
    });

    document.querySelectorAll('section.fade-up h2').forEach(h2 => {
      h2.classList.add('lp-fade-up');
    });

    /* ─── INTERSECTION OBSERVER (LP) ─────── */
    const lpAnimTargets = document.querySelectorAll('.fade-up, .lp-fade-up, .lp-stagger');

    if (lpAnimTargets.length && 'IntersectionObserver' in window) {
      const lpObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            lpObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

      lpAnimTargets.forEach(el => lpObserver.observe(el));
    } else {
      lpAnimTargets.forEach(el => el.classList.add('visible'));
    }

    /* ─── HERO CARD PARALLAX ON MOUSE ────── */
    const heroIllustration = document.querySelector('.lp-hero-illustration');
    if (heroIllustration && lpHero) {
      const cards = heroIllustration.querySelectorAll('.lp-hero-card');

      lpHero.addEventListener('mousemove', (e) => {
        const rect = lpHero.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width  - 0.5;
        const y = (e.clientY - rect.top)  / rect.height - 0.5;
        cards.forEach((card, i) => {
          const factor = (i + 1) * 4;
          card.style.transform = card.style.transform.replace(/translate\([^)]*\)/g, '') +
            ` translate(${x * factor}px, ${y * factor}px)`;
        });
      });

      lpHero.addEventListener('mouseleave', () => {
        cards.forEach(card => { card.style.transform = ''; });
      });
    }

    /* ─── HERO TAG STAGGER ───────────────── */
    document.querySelectorAll('.lp-tag').forEach((tag, i) => {
      tag.style.opacity = '0';
      tag.style.transform = 'translateY(10px) scale(0.95)';
      tag.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
      tag.style.transitionDelay = (0.5 + i * 0.06) + 's';
      setTimeout(() => {
        tag.style.opacity = '1';
        tag.style.transform = 'translateY(0) scale(1)';
      }, 100);
    });

    /* ─── STEP COUNTER ANIMATION ─────────── */
    const stepsSection = document.querySelector('.lp-steps-bar');
    if (stepsSection) {
      const stepValues = stepsSection.querySelectorAll('.text-\\[28px\\]');

      const stepsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            stepValues.forEach(el => {
              const text = el.textContent.trim();
              if (text === '3 min' && !el.dataset.animated) {
                el.dataset.animated = 'true';
                animateValue(el, 3, ' min', 800);
              } else if (text === '$10K' && !el.dataset.animated) {
                el.dataset.animated = 'true';
                const s = performance.now();
                (function a(now) {
                  const p = Math.min((now - s) / 1000, 1);
                  const e = 1 - Math.pow(2, -10 * p);
                  el.textContent = '$' + Math.round(10 * e) + 'K';
                  if (p < 1) requestAnimationFrame(a);
                })(s);
              }
            });
            stepsObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });

      stepsObserver.observe(stepsSection);
    }

    function animateValue(el, end, suffix, duration) {
      duration = duration || 1200;
      const start = performance.now();
      function update(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(2, -10 * progress);
        el.textContent = Math.round(end * eased) + suffix;
        if (progress < 1) requestAnimationFrame(update);
      }
      requestAnimationFrame(update);
    }

  } // end isLoanProducts


  /* ═══════════════════════════════════════════
     APPLY PAGE
     ═══════════════════════════════════════════ */
  if (isApplyPage) {

    /* ─── YES/NO TOGGLE ──────────────────── */
    document.querySelectorAll('input[name="inBusiness"]').forEach(cb => {
      cb.addEventListener('change', function () {
        if (this.checked) {
          document.querySelectorAll('input[name="inBusiness"]').forEach(other => {
            if (other !== this) other.checked = false;
          });
        }
      });
    });

    /* ─── APPLY FORM VALIDATION & SUBMIT ─── */
    const applyForm = document.getElementById('applyForm');
    if (applyForm) {
      applyForm.addEventListener('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        // Clear previous errors
        document.querySelectorAll('.apply-field').forEach(f => f.classList.remove('has-error'));
        document.querySelectorAll('.apply-input.error').forEach(i => i.classList.remove('error'));

        // Required text fields
        ['firstName', 'lastName', 'email', 'businessName', 'phone'].forEach(name => {
          const input = applyForm.querySelector(`[name="${name}"]`);
          if (input && !input.value.trim()) {
            input.classList.add('error');
            isValid = false;
          }
        });

        // Email validation
        const emailInput = applyForm.querySelector('[name="email"]');
        if (emailInput && emailInput.value.trim()) {
          if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
            emailInput.classList.add('error');
            isValid = false;
          }
        }

        // Monthly revenue required
        const revenueVal = document.getElementById('applyRevenueValue');
        if (revenueVal && !revenueVal.value) {
          const revenueBtn = document.querySelector('#applyRevenue .apply-select');
          if (revenueBtn) revenueBtn.classList.add('error');
          isValid = false;
        }

        if (isValid) {
          const formData = new FormData(applyForm);
          const data = {};
          formData.forEach((value, key) => { data[key] = value; });

          data.loanType       = document.getElementById('applyLoanTypeValue')?.value || '';
          data.monthlyRevenue = document.getElementById('applyRevenueValue')?.value || '';
          data.amountNeeded   = document.getElementById('applyAmountInput')?.value || '';

          console.log('Form submitted:', data);
          alert('Application submitted successfully! We\'ll be in touch shortly.');
          applyForm.reset();

          // Reset dropdowns
          document.querySelectorAll('.dropdown-label').forEach(l => { l.textContent = 'Select'; l.style.color = '#99999b'; });
          document.querySelectorAll('.dropdown-option').forEach(o => o.classList.remove('selected'));
          document.querySelectorAll('input[type="hidden"]').forEach(h => h.value = '');

          const amountInput = document.getElementById('applyAmountInput');
          if (amountInput) amountInput.value = '50,000';
        }
      });
    }

    /* ─── APPLY PAGE FADE-UP OBSERVER ────── */
    const applyFadeEls = document.querySelectorAll('.fade-up');
    if (applyFadeEls.length && 'IntersectionObserver' in window) {
      const applyObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            applyObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      applyFadeEls.forEach(el => applyObserver.observe(el));
    }

  } // end isApplyPage


  /* ═══════════════════════════════════════════
     CALCULATOR PAGE
     ═══════════════════════════════════════════ */
  const isCalcPage = !!document.getElementById('calcAmount');

  if (isCalcPage) {

    const calcAmount  = document.getElementById('calcAmount');
    const calcRate    = document.getElementById('calcRate');
    const calcTerm    = document.getElementById('calcTerm');
    const amountDisplay  = document.getElementById('calcAmountDisplay');
    const rateDisplay    = document.getElementById('calcRateDisplay');
    const termDisplay    = document.getElementById('calcTermDisplay');
    const paymentEl      = document.getElementById('calcPayment');
    const totalPaymentEl = document.getElementById('calcTotalPayment');
    const totalInterestEl = document.getElementById('calcTotalInterest');
    const barPrincipal   = document.getElementById('calcBarPrincipal');
    const barInterest    = document.getElementById('calcBarInterest');
    const principalPctEl = document.getElementById('calcPrincipalPct');
    const interestPctEl  = document.getElementById('calcInterestPct');
    const amortBody      = document.getElementById('calcAmortBody');
    const toggleAmortBtn = document.getElementById('calcToggleAmort');
    const toggleText     = document.getElementById('calcToggleText');

    let currentFreq = 'monthly';
    let showFullSchedule = false;

    function formatCurrency(val) {
      return '$' + val.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }

    function getPeriodsPerYear(freq) {
      if (freq === 'biweekly') return 26;
      if (freq === 'weekly') return 52;
      return 12;
    }

    function getFreqLabel(freq) {
      if (freq === 'biweekly') return 'Bi-weekly';
      if (freq === 'weekly') return 'Weekly';
      return 'Monthly';
    }

    function calculateLoan() {
      const principal = parseFloat(calcAmount.value);
      const annualRate = parseFloat(calcRate.value) / 100;
      const totalMonths = parseInt(calcTerm.value);
      const periodsPerYear = getPeriodsPerYear(currentFreq);
      const totalPeriods = Math.round(totalMonths * periodsPerYear / 12);
      const periodRate = annualRate / periodsPerYear;

      let payment, totalPayment, totalInterest;

      if (periodRate === 0) {
        payment = principal / totalPeriods;
        totalPayment = principal;
        totalInterest = 0;
      } else {
        payment = principal * (periodRate * Math.pow(1 + periodRate, totalPeriods)) /
                  (Math.pow(1 + periodRate, totalPeriods) - 1);
        totalPayment = payment * totalPeriods;
        totalInterest = totalPayment - principal;
      }

      // Update displays
      amountDisplay.textContent = '$' + parseInt(calcAmount.value).toLocaleString();
      rateDisplay.textContent = parseFloat(calcRate.value).toFixed(1) + '%';
      termDisplay.textContent = calcTerm.value + ' months';

      paymentEl.textContent = formatCurrency(payment);
      totalPaymentEl.textContent = formatCurrency(totalPayment);
      totalInterestEl.textContent = formatCurrency(totalInterest);

      // Update payment label
      const resultLabel = document.querySelector('.calc-result-label');
      if (resultLabel) resultLabel.textContent = getFreqLabel(currentFreq) + ' Payment';

      // Breakdown bar
      const principalPct = totalPayment > 0 ? (principal / totalPayment * 100) : 100;
      const interestPct = 100 - principalPct;
      barPrincipal.style.width = principalPct.toFixed(1) + '%';
      barInterest.style.width = interestPct.toFixed(1) + '%';
      principalPctEl.textContent = principalPct.toFixed(1);
      interestPctEl.textContent = interestPct.toFixed(1);

      // Slider fill gradient
      updateSliderFill(calcAmount);
      updateSliderFill(calcRate);
      updateSliderFill(calcTerm);

      // Amortization schedule
      buildAmortization(principal, periodRate, payment, totalPeriods);
    }

    function updateSliderFill(slider) {
      const min = parseFloat(slider.min);
      const max = parseFloat(slider.max);
      const val = parseFloat(slider.value);
      const pct = ((val - min) / (max - min)) * 100;
      slider.style.background = 'linear-gradient(to right, #0055B8 0%, #3b82f6 ' + pct + '%, #eef0f5 ' + pct + '%, #eef0f5 100%)';
    }

    function buildAmortization(principal, periodRate, payment, totalPeriods) {
      let balance = principal;
      let rows = '';
      const maxDisplay = showFullSchedule ? totalPeriods : Math.min(12, totalPeriods);

      for (let i = 1; i <= totalPeriods; i++) {
        const interestPart = balance * periodRate;
        const principalPart = payment - interestPart;
        balance = Math.max(0, balance - principalPart);

        if (i <= maxDisplay) {
          rows += '<tr>' +
            '<td>' + i + '</td>' +
            '<td>' + formatCurrency(payment) + '</td>' +
            '<td>' + formatCurrency(principalPart) + '</td>' +
            '<td>' + formatCurrency(interestPart) + '</td>' +
            '<td>' + formatCurrency(balance) + '</td>' +
            '</tr>';
        }
      }

      if (!showFullSchedule && totalPeriods > 12) {
        rows += '<tr class="calc-amort-more"><td colspan="5" style="text-align:center; color:#0055B8; font-weight:600; font-size:13px; padding:14px;">' +
          'Showing 12 of ' + totalPeriods + ' payments. Click "Show Full Schedule" to see all.' +
          '</td></tr>';
      }

      amortBody.innerHTML = rows;
    }

    // Event listeners
    [calcAmount, calcRate, calcTerm].forEach(slider => {
      slider.addEventListener('input', calculateLoan);
    });

    // Frequency buttons
    document.querySelectorAll('.calc-freq-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.calc-freq-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        currentFreq = this.dataset.freq;
        calculateLoan();
      });
    });

    // Toggle amortization
    if (toggleAmortBtn) {
      toggleAmortBtn.addEventListener('click', function () {
        showFullSchedule = !showFullSchedule;
        this.classList.toggle('open', showFullSchedule);
        toggleText.textContent = showFullSchedule ? 'Show Less' : 'Show Full Schedule';
        calculateLoan();
      });
    }

    // Initial calculation
    calculateLoan();

    /* ─── CALC PAGE FADE-UP OBSERVER ──────── */
    const calcFadeEls = document.querySelectorAll('.fade-up, .lending-card-bg, .faq-item');
    if (calcFadeEls.length && 'IntersectionObserver' in window) {
      const calcObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            calcObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      calcFadeEls.forEach(el => calcObserver.observe(el));
    }

    /* ─── CALC TAG STAGGER ────────────────── */
    document.querySelectorAll('.lp-tag').forEach((tag, i) => {
      tag.style.opacity = '0';
      tag.style.transform = 'translateY(10px) scale(0.95)';
      tag.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
      tag.style.transitionDelay = (0.5 + i * 0.06) + 's';
      setTimeout(() => {
        tag.style.opacity = '1';
        tag.style.transform = 'translateY(0) scale(1)';
      }, 100);
    });

  } // end isCalcPage


  /* ═══════════════════════════════════════════
     FAQ PAGE
     ═══════════════════════════════════════════ */
  const isFaqPage = !!document.getElementById('faqList');

  if (isFaqPage) {

    const faqList      = document.getElementById('faqList');
    const faqSearch    = document.getElementById('faqSearch');
    const faqNoResults = document.getElementById('faqNoResults');
    const faqClearBtn  = document.getElementById('faqClearSearch');
    const faqItems     = faqList.querySelectorAll('.faq-page-item');

    let currentCat = 'all';

    function filterFaqs() {
      const query = faqSearch.value.toLowerCase().trim();
      let visibleCount = 0;

      faqItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        const cat  = item.dataset.cat;
        const matchesCat   = currentCat === 'all' || cat === currentCat;
        const matchesQuery = !query || text.includes(query);

        if (matchesCat && matchesQuery) {
          item.classList.remove('hidden');
          visibleCount++;
        } else {
          item.classList.add('hidden');
        }
      });

      if (faqNoResults) {
        faqNoResults.style.display = visibleCount === 0 ? 'block' : 'none';
      }
    }

    // Category filter buttons
    document.querySelectorAll('.faq-cat-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.faq-cat-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        currentCat = this.dataset.cat;
        filterFaqs();
      });
    });

    // Search input
    if (faqSearch) {
      faqSearch.addEventListener('input', filterFaqs);
    }

    // Clear search button
    if (faqClearBtn) {
      faqClearBtn.addEventListener('click', function () {
        faqSearch.value = '';
        currentCat = 'all';
        document.querySelectorAll('.faq-cat-btn').forEach(b => b.classList.remove('active'));
        document.querySelector('.faq-cat-btn[data-cat="all"]').classList.add('active');
        filterFaqs();
        faqSearch.focus();
      });
    }

    /* ─── FAQ PAGE FADE-UP OBSERVER ─────── */
    const faqFadeEls = document.querySelectorAll('.fade-up');
    if (faqFadeEls.length && 'IntersectionObserver' in window) {
      const faqObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            faqObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      faqFadeEls.forEach(el => faqObserver.observe(el));
    }

    /* ─── FAQ TAG STAGGER ─────────────── */
    document.querySelectorAll('.lp-tag').forEach((tag, i) => {
      tag.style.opacity = '0';
      tag.style.transform = 'translateY(10px) scale(0.95)';
      tag.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
      tag.style.transitionDelay = (0.5 + i * 0.06) + 's';
      setTimeout(() => {
        tag.style.opacity = '1';
        tag.style.transform = 'translateY(0) scale(1)';
      }, 100);
    });

  } // end isFaqPage


}); // end DOMContentLoaded


/* ═══════════════════════════════════════════
   GLOBAL FUNCTIONS (called via onclick="")
   ═══════════════════════════════════════════ */

function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  if (!dropdown) return;
  const menu    = dropdown.querySelector('.custom-dropdown-menu');
  const chevron = dropdown.querySelector('.dropdown-chevron');
  const trigger = dropdown.querySelector('.custom-dropdown-trigger');
  const isOpen  = !menu.classList.contains('hidden');

  // Close all first
  document.querySelectorAll('.custom-dropdown-menu').forEach(m => m.classList.add('hidden'));
  document.querySelectorAll('.dropdown-chevron').forEach(c => c.style.transform = '');
  document.querySelectorAll('.custom-dropdown-trigger').forEach(t => t.classList.remove('dropdown-open'));

  if (!isOpen) {
    menu.classList.remove('hidden');
    if (chevron) chevron.style.transform = 'rotate(180deg)';
    if (trigger) trigger.classList.add('dropdown-open');
  }
}

function toggleParkDropdown(id) {
  const dropdown = document.getElementById(id);
  if (!dropdown) return;
  const isOpen = dropdown.classList.contains('open');
  document.querySelectorAll('.park-dropdown.open').forEach(d => d.classList.remove('open'));
  if (!isOpen) {
    dropdown.classList.add('open');
    const search = dropdown.querySelector('.park-dropdown-search');
    if (search) setTimeout(() => search.focus(), 50);
  }
}

function filterDropdown(input) {
  const query = input.value.toLowerCase();
  const options = input.closest('.park-dropdown-menu').querySelectorAll('.park-dropdown-option');
  options.forEach(opt => {
    opt.classList.toggle('hidden', !opt.textContent.toLowerCase().includes(query));
  });
}

function formatAmount(input) {
  let raw = input.value.replace(/[^0-9]/g, '');
  if (raw === '') { input.value = ''; return; }
  input.value = parseInt(raw, 10).toLocaleString();
  document.querySelectorAll('.amount-preset').forEach(btn => {
    btn.classList.toggle('active', parseInt(btn.dataset.val) === parseInt(raw));
  });
}