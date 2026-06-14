<? /* Template Name: Contact */ ?>
<?php get_header(); ?>
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-park-p" viewBox="0 0 36 40"><rect width="36" height="40" rx="6" fill="#0055B8"/><path d="M10 32V10h8c5.5 0 9 3 9 7.5S23.5 25 18 25h-3v7h-5z" fill="#fff"/><path d="M15 14v7h3c2.5 0 4-1.5 4-3.5S20.5 14 18 14h-3z" fill="#0055B8"/></symbol>
  <symbol id="icon-chevron" viewBox="0 0 12 8"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow" viewBox="0 0 16 12"><path d="M1 6h13M10 1l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-hamburger" viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
  <symbol id="icon-close" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
  <symbol id="icon-phone" viewBox="0 0 14 14"><path d="M13 10.5v1.8a1.2 1.2 0 01-1.3 1.2A11.9 11.9 0 011.5 3.3 1.2 1.2 0 012.7 2H4.5a1.2 1.2 0 011.2 1c.1.5.3 1 .5 1.5a1.2 1.2 0 01-.3 1.3l-.8.8a9.6 9.6 0 004.3 4.3l.8-.8a1.2 1.2 0 011.3-.3c.5.2 1 .4 1.5.5a1.2 1.2 0 011 1.2z" stroke="currentColor" stroke-width="1" fill="none"/></symbol>
  <symbol id="icon-email" viewBox="0 0 14 12"><rect x="1" y="1" width="12" height="10" rx="1.5" stroke="currentColor" stroke-width="1" fill="none"/><path d="M1 2l6 4.5L13 2" stroke="currentColor" stroke-width="1" fill="none"/></symbol>
  <symbol id="icon-location" viewBox="0 0 14 16"><path d="M7 1C3.7 1 1 3.7 1 7c0 4.5 6 8 6 8s6-3.5 6-8c0-3.3-2.7-6-6-6z" stroke="currentColor" stroke-width="1" fill="none"/><circle cx="7" cy="7" r="2" stroke="currentColor" stroke-width="1" fill="none"/></symbol>
  <symbol id="icon-clock" viewBox="0 0 14 14"><circle cx="7" cy="7" r="6" stroke="currentColor" stroke-width="1" fill="none"/><path d="M7 4v3l2 1.5" stroke="currentColor" stroke-width="1" stroke-linecap="round" fill="none"/></symbol>
  <symbol id="icon-check-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#0055B8" stroke-width="2" fill="none"/><path d="M8 12l3 3 5-6" stroke="#0055B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-send" viewBox="0 0 20 20"><path d="M18 2L9 11M18 2L12 18l-3-7-7-3 16-6z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-left" viewBox="0 0 20 20"><path d="M13 4l-6 6 6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-right-nav" viewBox="0 0 20 20"><path d="M7 4l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-star" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="#FFB800" stroke="#FFB800" stroke-width="0.5"/></symbol>
</svg>
  <style>
    /* ── Contact Hero ── */
    .contact-hero {
      background: linear-gradient(135deg, #001e6e 0%, #0033A1 45%, #0055b8 100%);
      position: relative;
      overflow: hidden;
      min-height: 440px;
      display: flex;
      align-items: center;
    }

    /* Decorative orbs */
    .contact-hero-orb-1 {
      position: absolute;
      top: -80px; right: -80px;
      width: 420px; height: 420px;
      border-radius: 50%;
      background: radial-gradient(ellipse, rgba(255,255,255,0.07) 0%, transparent 70%);
      pointer-events: none;
    }
    .contact-hero-orb-2 {
      position: absolute;
      bottom: -120px; left: -60px;
      width: 340px; height: 340px;
      border-radius: 50%;
      background: radial-gradient(ellipse, rgba(0,0,0,0.15) 0%, transparent 70%);
      pointer-events: none;
    }
    .contact-hero-orb-3 {
      position: absolute;
      top: 50%; right: 6%;
      transform: translateY(-50%);
      width: 240px; height: 240px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.07);
      pointer-events: none;
    }
    .contact-hero-orb-4 {
      position: absolute;
      top: 50%; right: 6%;
      transform: translateY(-50%);
      width: 380px; height: 380px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.04);
      pointer-events: none;
    }

    /* Grid lines texture */
    .contact-hero-grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 60px 60px;
      pointer-events: none;
    }

    /* Hero text animation */
    .contact-hero-text > * {
      opacity: 0;
      transform: translateY(28px);
      animation: heroReveal 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .contact-hero-text > *:nth-child(1) { animation-delay: 0.05s; }
    .contact-hero-text > *:nth-child(2) { animation-delay: 0.18s; }
    .contact-hero-text > *:nth-child(3) { animation-delay: 0.32s; }
    .contact-hero-text > *:nth-child(4) { animation-delay: 0.46s; }
    @keyframes heroReveal {
      to { opacity: 1; transform: translateY(0); }
    }

    /* Stat cards */
    .hero-stat-card {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: 16px;
      padding: 20px 24px;
      backdrop-filter: blur(8px);
      opacity: 0;
      transform: translateY(20px);
      animation: heroReveal 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .hero-stat-card:nth-child(1) { animation-delay: 0.55s; }
    .hero-stat-card:nth-child(2) { animation-delay: 0.65s; }
    .hero-stat-card:nth-child(3) { animation-delay: 0.75s; }

    /* Contact method pills */
    .hero-contact-pill {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 18px;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.18);
      border-radius: 100px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      text-decoration: none;
      backdrop-filter: blur(6px);
      transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
    }
    .hero-contact-pill:hover {
      background: rgba(255,255,255,0.18);
      border-color: rgba(255,255,255,0.35);
      transform: translateY(-1px);
    }
    .hero-contact-pill-icon {
      width: 28px; height: 28px;
      background: rgba(255,255,255,0.15);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }

    /* Badge */
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 14px;
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 100px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.85);
    }
    .hero-badge-dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: #4ade80;
      box-shadow: 0 0 0 2px rgba(74,222,128,0.3);
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { box-shadow: 0 0 0 2px rgba(74,222,128,0.3); }
      50% { box-shadow: 0 0 0 5px rgba(74,222,128,0.1); }
    }

    @media (max-width: 768px) {
      .contact-hero { min-height: auto; }
      .hero-stats-row { flex-direction: column; }
    }

    /* ── Contact Section ── */
    .contact-section {
      margin-top: -48px;
      position: relative;
      z-index: 10;
      padding: 0 16px 80px;
    }
    .contact-card {
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 4px 32px rgba(0,0,0,0.09), 0 1px 4px rgba(0,0,0,0.04);
      max-width: 1100px;
      margin: 0 auto;
      overflow: hidden;
      opacity: 0;
      transform: translateY(30px);
      animation: cardReveal 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.35s forwards;
    }
    @keyframes cardReveal {
      to { opacity: 1; transform: translateY(0); }
    }

    /* ── Info Sidebar ── */
    .contact-sidebar {
      background: linear-gradient(160deg, #0033A1 0%, #0055b8 100%);
      padding: 48px 40px;
      display: flex;
      flex-direction: column;
      gap: 36px;
      position: relative;
      overflow: hidden;
    }
    .contact-sidebar::before {
      content: '';
      position: absolute;
      top: -60px;
      right: -60px;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      pointer-events: none;
    }
    .contact-sidebar::after {
      content: '';
      position: absolute;
      bottom: -40px;
      left: -40px;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background: rgba(255,255,255,0.04);
      pointer-events: none;
    }
    .contact-info-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
    }
    .contact-info-icon {
      width: 44px;
      height: 44px;
      background: rgba(255,255,255,0.12);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      backdrop-filter: blur(4px);
    }
    .contact-info-label {
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      margin-bottom: 4px;
    }
    .contact-info-value {
      font-size: 15px;
      font-weight: 500;
      color: #fff;
      line-height: 1.5;
    }
    .contact-info-value a {
      color: #fff;
      text-decoration: none;
    }
    .contact-info-value a:hover {
      text-decoration: underline;
      opacity: 0.85;
    }
    .contact-divider {
      height: 1px;
      background: rgba(255,255,255,0.12);
    }
    .contact-hours-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 6px 16px;
      margin-top: 4px;
    }
    .contact-hours-day {
      font-size: 13px;
      color: rgba(255,255,255,0.65);
    }
    .contact-hours-time {
      font-size: 13px;
      color: #fff;
      font-weight: 500;
    }

    /* ── Form Side ── */
    .contact-form-side {
      padding: 48px 48px;
    }
    @media (max-width: 1024px) {
      .contact-form-side { padding: 36px 28px; }
      .contact-sidebar { padding: 36px 28px; }
    }
    @media (max-width: 640px) {
      .contact-form-side { padding: 28px 20px; }
      .contact-sidebar { padding: 28px 20px; }
      .contact-hours-grid { grid-template-columns: 1fr; }
    }

    /* ── Form Fields ── */
    .cf-label {
      display: block;
      font-size: 13px;
      font-weight: 600;
      color: #444;
      margin-bottom: 6px;
      letter-spacing: 0.02em;
    }
    .cf-input,
    .cf-select,
    .cf-textarea {
      width: 100%;
      background: #f8f9fc;
      border: 1.5px solid #e8ecf4;
      border-radius: 10px;
      font-size: 15px;
      color: #111;
      font-family: 'Figtree', sans-serif;
      outline: none;
      transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
    }
    .cf-input,
    .cf-select { height: 48px; padding: 0 16px; }
    .cf-select { appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%23666' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' fill='none'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 16px center; padding-right: 40px; }
    .cf-textarea { padding: 14px 16px; resize: vertical; min-height: 120px; }
    .cf-input:focus,
    .cf-select:focus,
    .cf-textarea:focus {
      border-color: #0055B8;
      box-shadow: 0 0 0 3px rgba(0,85,184,0.1);
      background: #fff;
    }
    .cf-input::placeholder,
    .cf-textarea::placeholder { color: #a0a8b8; }
    .cf-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }
    @media (max-width: 640px) {
      .cf-grid-2 { grid-template-columns: 1fr; }
    }
    .cf-group { display: flex; flex-direction: column; }

    /* ── Submit Button ── */
    .cf-submit {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      height: 52px;
      padding: 0 36px;
      background: #0055B8;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      font-family: 'Figtree', sans-serif;
      transition: background 0.2s ease, transform 0.15s ease, box-shadow 0.2s ease;
      position: relative;
      overflow: hidden;
    }
    .cf-submit:hover {
      background: #0044a0;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(0,85,184,0.35);
    }
    .cf-submit:active { transform: translateY(0); }

    /* ── Success State ── */
    .cf-success {
      display: none;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 48px 24px;
      gap: 16px;
    }
    .cf-success.show { display: flex; }
    .cf-success-icon {
      width: 72px;
      height: 72px;
      background: #eef6ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ── Quick Contact Chips ── */
    .contact-chips {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 36px;
    }
    .contact-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      background: #f0f5ff;
      border: 1.5px solid #c5d8f0;
      border-radius: 100px;
      font-size: 14px;
      font-weight: 600;
      color: #0055B8;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .contact-chip:hover {
      background: #0055B8;
      color: #fff;
      border-color: #0055B8;
      box-shadow: 0 4px 12px rgba(0,85,184,0.25);
    }

    /* ── Map Embed ── */
    .map-section {
      max-width: 1100px;
      margin: 0 auto 60px;
      padding: 0 16px;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .map-section.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .map-frame {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 24px rgba(0,0,0,0.08);
      height: 340px;
    }
    .map-frame iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
<!-- ═══════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════ -->
<section class="contact-hero">
  <!-- Decorative layers -->
  <div class="contact-hero-grid"></div>
  <div class="contact-hero-orb-1"></div>
  <div class="contact-hero-orb-2"></div>
  <div class="contact-hero-orb-3"></div>
  <div class="contact-hero-orb-4"></div>

  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 w-full relative z-10">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

      <!-- Left: Text Content -->
      <div class="w-full lg:w-1/2 contact-hero-text">
        <div class="hero-badge mb-5">
          <span class="hero-badge-dot"></span>
          We respond within 1 business day
        </div>
        <h1 class="text-[36px] sm:text-[48px] lg:text-[52px] font-semibold text-white leading-[1.08] tracking-tight mb-5">
          We're here to<br>fuel your business<br><span style="color:rgba(255,255,255,0.6);">every step of the way.</span>
        </h1>
        <p class="text-[16px] text-white/70 leading-relaxed max-w-[420px] mb-8">
          Whether you're ready to apply, have a question, or just want to explore your options — our funding specialists are standing by.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="tel:3052092818" class="hero-contact-pill">
            <span class="hero-contact-pill-icon"><svg class="w-3.5 h-3.5" style="display:block;color:#fff;"><use href="#icon-phone"/></svg></span>
            305-209-2818
          </a>
          <a href="mailto:info@parkbusinesscapital.com" class="hero-contact-pill">
            <span class="hero-contact-pill-icon"><svg class="w-3.5 h-3" style="display:block;color:#fff;"><use href="#icon-email"/></svg></span>
            info@parkbusinesscapital.com
          </a>
          <a href="#contactFormWrap" class="hero-contact-pill">
            <span class="hero-contact-pill-icon"><svg class="w-3.5 h-3.5" style="display:block;color:#fff;"><use href="#icon-send"/></svg></span>
            Send a Message
          </a>
        </div>
      </div>

      <!-- Right: Stat Cards -->
      <div class="w-full lg:w-auto grid grid-cols-3 lg:grid-cols-1 gap-4 lg:min-w-[260px]">
        <div class="hero-stat-card">
          <div class="text-[28px] sm:text-[32px] font-semibold text-white leading-none mb-1">2,800+</div>
          <div class="text-[12px] sm:text-[13px] text-white/55 font-medium">Businesses funded</div>
        </div>
        <div class="hero-stat-card">
          <div class="text-[28px] sm:text-[32px] font-semibold text-white leading-none mb-1">4 hrs</div>
          <div class="text-[12px] sm:text-[13px] text-white/55 font-medium">Average time to fund</div>
        </div>
        <div class="hero-stat-card">
          <div class="text-[22px] sm:text-[28px] font-semibold text-white leading-none mb-1">$50K–$10M</div>
          <div class="text-[12px] sm:text-[13px] text-white/55 font-medium">Funding range available</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     MAIN CONTACT CARD
     ═══════════════════════════════════════════ -->
<section class="contact-section">
  <div class="contact-card">
    <div class="flex flex-col lg:flex-row">

      <!-- LEFT: Info Sidebar -->
      <div class="contact-sidebar lg:w-[38%]">
        <div>
          <h2 class="text-[22px] font-semibold text-white leading-tight mb-1">Contact Information</h2>
          <p class="text-sm text-white/60">Reach us anytime — our team responds fast.</p>
        </div>

        <div class="flex flex-col gap-6">
          <!-- Phone -->
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg class="w-5 h-5 text-white"><use href="#icon-phone"/></svg>
            </div>
            <div>
              <div class="contact-info-label">Phone</div>
              <div class="contact-info-value"><a href="tel:3052092818">305-209-2818</a></div>
            </div>
          </div>

          <div class="contact-divider"></div>

          <!-- Email -->
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg class="w-5 h-5 text-white"><use href="#icon-email"/></svg>
            </div>
            <div>
              <div class="contact-info-label">Email</div>
              <div class="contact-info-value"><a href="mailto:info@parkbusinesscapital.com">info@parkbusinesscapital.com</a></div>
            </div>
          </div>

          <div class="contact-divider"></div>

          <!-- Address -->
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg class="w-5 h-5 text-white"><use href="#icon-location"/></svg>
            </div>
            <div>
              <div class="contact-info-label">Office</div>
              <div class="contact-info-value">2125 Biscayne Blvd<br>Miami, FL 33137</div>
            </div>
          </div>

          <div class="contact-divider"></div>

          <!-- Hours -->
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <svg class="w-5 h-5 text-white"><use href="#icon-clock"/></svg>
            </div>
            <div style="flex:1;">
              <div class="contact-info-label">Business Hours</div>
              <div class="contact-hours-grid mt-2">
                <span class="contact-hours-day">Mon – Fri</span>
                <span class="contact-hours-time">9:00 AM – 6:00 PM</span>
                <span class="contact-hours-day">Saturday</span>
                <span class="contact-hours-time">Closed</span>
                <span class="contact-hours-day">Sunday</span>
                <span class="contact-hours-time">Closed</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick-reach chips -->
        <div>
          <p class="text-xs font-semibold tracking-widest uppercase text-white/40 mb-3">Quick Reach</p>
          <div class="flex flex-wrap gap-2">
            <a href="tel:3052092818" style="display:inline-flex;align-items:center;gap:8px;padding:8px 16px;background:rgba(255,255,255,0.12);border-radius:100px;font-size:13px;font-weight:600;color:#fff;text-decoration:none;backdrop-filter:blur(4px);transition:background 0.2s;">
              <svg class="w-3.5 h-3.5" style="display:inline-block;"><use href="#icon-phone"/></svg>
              Call Now
            </a>
            <a href="mailto:info@parkbusinesscapital.com" style="display:inline-flex;align-items:center;gap:8px;padding:8px 16px;background:rgba(255,255,255,0.12);border-radius:100px;font-size:13px;font-weight:600;color:#fff;text-decoration:none;backdrop-filter:blur(4px);transition:background 0.2s;">
              <svg class="w-3.5 h-3" style="display:inline-block;"><use href="#icon-email"/></svg>
              Send Email
            </a>
          </div>
        </div>
      </div>

      <!-- RIGHT: Contact Form -->
      <div class="contact-form-side lg:w-[62%]">
        <div id="contactFormWrap">
          <h2 class="text-[24px] sm:text-[28px] font-semibold text-park-blue tracking-tight mb-2">Send Us a Message</h2>
          <p class="text-[15px] text-gray-500 mb-8">Fill out the form and a funding specialist will get back to you within one business day.</p>

           <?php echo do_shortcode('[contact-form-7 id="34f0636" title="Contact us form"]'); ?>
        </div>

        <!-- Success State -->
        <div class="cf-success" id="contactSuccess">
          <div class="cf-success-icon">
            <svg class="w-10 h-10"><use href="#icon-check-circle"/></svg>
          </div>
          <h3 class="text-[22px] font-semibold text-park-blue">Message Sent!</h3>
          <p class="text-[15px] text-gray-500 max-w-[340px]">Thank you for reaching out. A member of our team will contact you within one business day.</p>
          <a href="application.html" class="cf-submit mt-2">
            Apply for Funding
            <svg class="w-4 h-4"><use href="#icon-arrow"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<style type="text/css">
  /* Remove CF7 wrapper spacing */
.wpcf7-form-control-wrap {
  display: block;
}

.wpcf7-not-valid-tip {
  font-size: 12px;
  margin-top: 4px;
}

.wpcf7 form .wpcf7-response-output {
  margin: 20px 0 0 0;
}

.wpcf7-form br {
  display: none;
}
</style>

<!-- ═══════════════════════════════════════════
     MAP
     ═══════════════════════════════════════════ -->
<div class="map-section" id="mapSection">
  <div class="flex items-center gap-3 mb-5">
    <svg class="w-4 h-4" style="color:#0055B8;flex-shrink:0;"><use href="#icon-location"/></svg>
    <h3 class="text-[18px] font-semibold text-park-blue">Our Location</h3>
  </div>
  <div class="map-frame">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.7!2d-80.192!3d25.795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b6ae5e6d73d5%3A0x7d9b4e7b7b7b7b7b!2s2125+Biscayne+Blvd%2C+Miami%2C+FL+33137!5e0!3m2!1sen!2sus!4v1700000000000"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Park Business Capital Office Location">
    </iframe>
  </div>
</div>

<!-- ═══════════════════════════════════════════
     REVIEWS
     ═══════════════════════════════════════════ -->
<section class="bg-park-blue-light fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="flex flex-col lg:flex-row items-start gap-10 lg:gap-16">
      <div class="w-full lg:w-1/2">
        <h2 class="text-[30px] sm:text-[39px] font-semibold text-white leading-tight tracking-tight mb-5">Consistently excellent<br>reviews from clients</h2>
        <p class="text-base text-white leading-relaxed mb-6 max-w-[400px]">Clients of Park Business Capital remain overwhelmingly pleased by their choice.</p>
        <div class="flex gap-3 mb-8">
          <button id="prevReview" class="review-nav-btn"><svg class="w-5 h-5"><use href="#icon-arrow-left"/></svg></button>
          <button id="nextReview" class="review-nav-btn"><svg class="w-5 h-5"><use href="#icon-arrow-right-nav"/></svg></button>
        </div>
        <div class="flex flex-wrap items-center gap-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/g-review-1.svg" alt="Google Reviews" class="h-10 w-auto object-contain" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/A-Rating-bbb-Accredited-Business-WHITE-1-e1764780554505 1.svg" alt="BBB Accredited Business" class="h-10 w-auto object-contain" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/trustpilot-white-1 1.svg" alt="Trustpilot" class="h-10 w-auto object-contain" />
        </div>
      </div>
      <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
        <div class="bg-white rounded-2xl p-6 sm:p-8 w-full max-w-[380px] testimonials">
          <div class="review-content">
            <div class="flex gap-1 mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" />
            </div>
            <div class="h-px bg-park-blue mb-5"></div>
            <p id="reviewName" class="text-[24px] sm:text-[29px] font-semibold text-park-blue leading-tight tracking-tight mb-4">Justin Andrews</p>
            <p id="reviewText" class="text-[14px] text-black leading-[22px]">I had an amazing experience with Park Business Capital. From start to finish, the team made the entire funding process smooth and stress-free. They guided me through every step—from application to funding—so professionally and with such clear communication that everything felt effortless. It truly was an A-to-Z experience with ease. Highly recommend Park Business Capital to anyone looking for reliable and efficient business funding!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // ── Scroll progress ──
  const progressBar = document.getElementById('scrollProgress');
  window.addEventListener('scroll', () => {
    const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    if (progressBar) progressBar.style.width = scrolled + '%';
  });

  // ── Nav scroll shadow ──
  const nav = document.querySelector('nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 10);
  });

  // ── Mobile menu ──
  const menuToggle = document.getElementById('menuToggle');
  const menuClose = document.getElementById('menuClose');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuOverlay = document.getElementById('menuOverlay');
  function openMenu() { mobileMenu.classList.add('open'); menuOverlay.classList.add('open'); document.body.style.overflow = 'hidden'; }
  function closeMenu() { mobileMenu.classList.remove('open'); menuOverlay.classList.remove('open'); document.body.style.overflow = ''; }
  if (menuToggle) menuToggle.addEventListener('click', openMenu);
  if (menuClose) menuClose.addEventListener('click', closeMenu);
  if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

  // ── Mobile accordion ──
  document.querySelectorAll('.mobile-accordion-trigger').forEach(btn => {
    btn.addEventListener('click', () => {
      const acc = btn.closest('.mobile-accordion');
      acc.classList.toggle('open');
    });
  });

  // ── Scroll-in animations ──
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-up, #mapSection').forEach(el => observer.observe(el));

  // ── Reviews carousel ──
  const reviews = [
    { name: 'Justin Andrews', text: 'I had an amazing experience with Park Business Capital. From start to finish, the team made the entire funding process smooth and stress-free. They guided me through every step—from application to funding—so professionally and with such clear communication that everything felt effortless.' },
    { name: 'Maria Gonzalez', text: 'Park Business Capital helped my restaurant survive a rough patch. They understood our industry and got us funded quickly. The process was transparent and the team was incredibly supportive throughout. I couldn\'t have asked for better service.' },
    { name: 'David Chen', text: 'Outstanding service from start to finish. I was skeptical about business lending at first, but the team at Park Business Capital walked me through every step and made it completely painless. Funded in under 48 hours!' },
  ];
  let current = 0;
  const reviewName = document.getElementById('reviewName');
  const reviewText = document.getElementById('reviewText');
  function updateReview(idx) {
    if (!reviewName || !reviewText) return;
    reviewName.style.opacity = '0'; reviewText.style.opacity = '0';
    setTimeout(() => {
      reviewName.textContent = reviews[idx].name;
      reviewText.textContent = reviews[idx].text;
      reviewName.style.opacity = '1'; reviewText.style.opacity = '1';
    }, 200);
  }
  document.getElementById('prevReview')?.addEventListener('click', () => { current = (current - 1 + reviews.length) % reviews.length; updateReview(current); });
  document.getElementById('nextReview')?.addEventListener('click', () => { current = (current + 1) % reviews.length; updateReview(current); });
  if (reviewName && reviewText) {
    reviewName.style.transition = 'opacity 0.3s ease';
    reviewText.style.transition = 'opacity 0.3s ease';
  }

  // ── Contact Form Submit ──
  const form = document.getElementById('contactForm');
  const formWrap = document.getElementById('contactFormWrap');
  const successMsg = document.getElementById('contactSuccess');
  form?.addEventListener('submit', (e) => {
    e.preventDefault();
    // Basic validation
    const required = form.querySelectorAll('[required]');
    let valid = true;
    required.forEach(field => {
      if (!field.value.trim()) {
        valid = false;
        field.style.borderColor = '#e53e3e';
        field.style.boxShadow = '0 0 0 3px rgba(229,62,62,0.1)';
        field.addEventListener('input', () => {
          field.style.borderColor = '';
          field.style.boxShadow = '';
        }, { once: true });
      }
    });
    if (!valid) return;
    // Show success
    formWrap.style.display = 'none';
    successMsg.classList.add('show');
  });
</script>

<?php get_footer(); ?>