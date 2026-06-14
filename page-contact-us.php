<? /* Template Name: application page v2 */ ?>
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
    /* ── Toggle switcher ── */
    .form-toggle-wrap {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-bottom: 28px;
    }
    .form-toggle-btn {
      position: relative;
      padding: 14px 16px;
      border-radius: 12px;
      border: 2px solid #e0e0e0;
      background: #f6f6fb;
      cursor: pointer;
      text-align: left;
      transition: border-color .2s, background .2s, box-shadow .2s;
    }
    .form-toggle-btn.active {
      border-color: #0033A1;
      background: #fff;
      box-shadow: 0 2px 12px rgba(0,51,161,.10);
    }
    .form-toggle-btn .toggle-title {
      display: block;
      font-size: 15px;
      font-weight: 700;
      color: #0033A1;
      line-height: 1.3;
      margin-bottom: 4px;
    }
    .form-toggle-btn:not(.active) .toggle-title {
      color: #99999b;
    }
    .form-toggle-btn .toggle-note {
      display: block;
      font-size: 12px;
      line-height: 1.4;
      color: #99999b;
    }
    .form-toggle-btn.active .toggle-note {
      color: #555;
    }
    .form-toggle-btn .toggle-dot {
      position: absolute;
      top: 14px;
      right: 14px;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      border: 2px solid #e0e0e0;
      background: #fff;
      transition: border-color .2s, background .2s;
    }
    .form-toggle-btn.active .toggle-dot {
      border-color: #0033A1;
      background: #0033A1;
      box-shadow: inset 0 0 0 2px #fff;
    }

    /* ── Multi-step app: progress bar ── */
    .app-steps-bar {
      display: flex;
      align-items: flex-start;
      gap: 0;
      margin-bottom: 28px;
      overflow-x: auto;
    }
    .app-step-item {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      min-width: 0;
    }
    .app-step-item:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 15px;
      left: 50%;
      width: 100%;
      height: 2px;
      background: #e0e0e0;
      z-index: 0;
      transition: background .3s;
    }
    .app-step-item.done:not(:last-child)::after,
    .app-step-item.active:not(:last-child)::after {
      background: #0033A1;
    }
    .step-circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 2px solid #e0e0e0;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      font-weight: 700;
      color: #99999b;
      position: relative;
      z-index: 1;
      transition: all .25s;
      flex-shrink: 0;
    }
    .app-step-item.active .step-circle {
      border-color: #0033A1;
      background: #0033A1;
      color: #fff;
    }
    .app-step-item.done .step-circle {
      border-color: #0033A1;
      background: #0033A1;
      color: #fff;
    }
    .step-label {
      font-size: 10px;
      font-weight: 600;
      color: #99999b;
      margin-top: 5px;
      text-align: center;
      line-height: 1.2;
      white-space: nowrap;
    }
    .app-step-item.active .step-label,
    .app-step-item.done .step-label {
      color: #0033A1;
    }

    /* step panels */
    .app-step-panel { display: none; }
    .app-step-panel.visible { display: block; }

    /* section heading inside multi-step */
    .app-section-heading {
      font-size: 16px;
      font-weight: 700;
      color: #0033A1;
      margin-bottom: 14px;
      padding-bottom: 10px;
      border-bottom: 1px solid #e0e0e0;
    }

    /* signature pad */
    .sig-pad-wrap {
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      background: #fafafa;
      overflow: hidden;
      position: relative;
    }
    .sig-pad-wrap canvas {
      display: block;
      width: 100%;
      height: 130px;
      cursor: crosshair;
      touch-action: none;
    }
    .sig-clear-btn {
      position: absolute;
      top: 8px;
      right: 10px;
      font-size: 11px;
      color: #0033A1;
      cursor: pointer;
      background: rgba(255,255,255,.85);
      border-radius: 4px;
      padding: 2px 7px;
      border: 1px solid #e0e0e0;
    }
    .sig-label {
      font-size: 11px;
      color: #99999b;
      text-align: center;
      margin-top: 6px;
    }

    /* app nav buttons */
    .app-nav-row {
      display: flex;
      gap: 10px;
      margin-top: 22px;
    }
    .app-btn-back {
      flex: 0 0 auto;
      padding: 11px 22px;
      border-radius: 8px;
      border: 2px solid #e0e0e0;
      background: #fff;
      font-size: 15px;
      font-weight: 600;
      color: #0033A1;
      cursor: pointer;
      transition: border-color .2s;
    }
    .app-btn-back:hover { border-color: #0033A1; }
    .app-btn-next {
      flex: 1;
      padding: 12px;
      border-radius: 8px;
      background: #0033A1;
      color: #fff;
      font-size: 15px;
      font-weight: 700;
      cursor: pointer;
      border: none;
      transition: background .2s;
    }
    .app-btn-next:hover { background: #0055b8; }

    /* success state */
    .app-success {
      text-align: center;
      padding: 32px 0 8px;
    }
    .app-success-icon {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: #eef2ff;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
    }

    /* Error highlight */
    .field-error { border-color: #e53e3e !important; }
  </style>

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

    .wpcf7-radio label {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}
  </style>
<!-- ═══════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════ -->
 

<!-- ═══════════════════════════════════════════
     MAIN CONTACT CARD
     ═══════════════════════════════════════════ -->
 

<style>
                /* ================================
   CONTACT FORM 7 DESIGN FIX
   Makes CF7 behave like your original HTML
================================ */
.wpcf7-form br {
  display: none;
}
.agree {
  float: left;
  width: 100%;
      margin-top: 10px;
}
.funding48-hour {
  float: left;
  width: 100%; margin-top: 10px;
}
.agree .wpcf7-form-control-wrap {
    float: none;
    width: auto;
    margin: 0;
}
/* Remove wrapper impact on grid layout */
.wpcf7-form-control-wrap {
    float: left;
    width: 100%;
      margin-bottom: 1rem; 
}

.amount-field-wrap .wpcf7-form-control-wrap {
  margin-bottom: 0;
}

/* Ensure inputs keep your original width */
.wpcf7-form-control.form-input,
.wpcf7-form-control.amount-input {
  width: 100%;
  box-sizing: border-box;
}

/* Fix select dropdown width */
.wpcf7-form-control.cf-select {
  width: 100%;
}

/* Remove CF7 default margin spacing */
.wpcf7 p {
  margin: 0;
}

/* Fix radio alignment to match your flex layout */
.wpcf7-radio {
  display: flex;
  gap: 20px;
}

.wpcf7-radio .wpcf7-list-item {
  margin: 0;
}

.wpcf7-radio label {
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
}

/* Fix checkbox alignment */
.wpcf7-acceptance {
  display: flex;
  align-items: center;
  gap: 8px;
}

.wpcf7-acceptance .wpcf7-list-item {
  margin: 0;
}

/* Remove extra bottom spacing CF7 adds */
.wpcf7-response-output {
  margin: 20px 0 0 0;
  padding: 10px;
  font-size: 14px;
}

/* Remove validation tip layout shifts */
.wpcf7-not-valid-tip {
  font-size: 12px;
  margin-top: 4px;
}

/* Ensure dropdown hidden fields don't break layout */
.wpcf7-form-control[type="hidden"] {
  display: none;
}

/* Prevent CF7 from forcing inline display */
.wpcf7-form-control {
  display: block;
}

.cf7mls_next.action-button  {
      position: relative;
    overflow: hidden;
    border: none;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    z-index: 0;
        background: #0055B8 !important;
        border-radius: 0.375rem;
            font-weight: 600;
            font-size: 1.125rem;
    line-height: 1.75rem;

        --tw-bg-opacity: 1;

            padding-top: 0.75rem;
    padding-bottom: 0.75rem;
        width: 40%;
}
.city-state-zip, .fix-div {
  float: left;
  width: 100%;
}


.cf-file-label {
  display: block;
  font-size: 15px;
  font-weight: 500;
  color: #1e40af;
  margin-bottom: 6px;
}

.cf-file-box {
  display: flex;
  align-items: center;
  gap: 10px;
  border: 2px dashed #d1d5db;
  padding: 14px;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #fafafa;
}

.cf-file-box:hover {
  border-color: #1e40af;
  background: #f0f6ff;
}

.cf-file-icon {
  font-size: 18px;
}

.cf-file-text {
  font-size: 14px;
  color: #374151;
}

.cf-file-name {
  margin-left: auto;
  font-size: 13px;
  color: #6b7280;
}

/* HIDE DEFAULT INPUT */
.cf-file-input {
  position: absolute;
  opacity: 0;
  pointer-events: none;
}
              </style> 






<style type="text/css">


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
 

<!-- ═══════════════════════════════════════════
     REVIEWS
     ═══════════════════════════════════════════ -->
   
<!-- ═══════════════════════════════════════════
     APPLICATION HERO + FORM
     ═══════════════════════════════════════════ -->
<section class="apply-hero">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 md:py-20 lg:py-24">
    <div class="flex flex-col lg:flex-row items-start gap-10 lg:gap-16">

      <!-- Left: Heading -->
      <div class="w-full lg:w-[38%] lg:sticky lg:top-[110px]">
        <div class="apply-hero-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.svg" alt="" class="w-14 h-14 mb-5 apply-icon-reveal" />
          <h1 class="text-[30px] sm:text-[36px] lg:text-[42px] font-semibold text-park-blue leading-[1.1] tracking-tight mb-1">
            Everything about our funding is fast.
          </h1>
          <p class="text-[22px] sm:text-[26px] font-semibold text-park-blue leading-snug mb-5">
            <span class="apply-subtitle-underline">(Even the application.)</span>
          </p>
          <p class="text-[15px] text-black leading-relaxed max-w-[360px]">
            Apply and get an answer in minutes. Then get the rapid funding you need. No application fee. No risk to your credit score.
          </p>
        </div>
      </div>

      <!-- Right: Form Card -->
      <div class="w-full lg:w-[62%]">
        <div class="apply-form-card bg-white rounded-2xl p-6 sm:p-8 lg:p-10 shadow-lg formbox">

          <!-- ── TOGGLE ── -->
          <div class="form-toggle-wrap">
            <button type="button" class="form-toggle-btn active" id="toggleContact" onclick="switchFormMode('contact')">
              <span class="toggle-dot"></span>
              <span class="toggle-title">Contact form</span>
              <span class="toggle-note">Best for inquiries &amp; learning more before applying</span>
            </button>
            <button type="button" class="form-toggle-btn" id="toggleApp" onclick="switchFormMode('app')">
              <span class="toggle-dot"></span>
              <span class="toggle-title">One-page application</span>
              <span class="toggle-note">Sent directly to underwriting — fastest answer</span>
            </button>
          </div>

          <!-- ══════════════════════════════
               PANEL A: CONTACT FORM
               ══════════════════════════════ -->
          <div id="panelContact">
             <?php echo do_shortcode('[contact-form-7 id="76dbeb5" title="Application Form"]'); ?>
          </div><!-- /panelContact -->


          <!-- ══════════════════════════════
               PANEL B: ONE-PAGE APPLICATION
               ══════════════════════════════ -->
          <div id="panelApp" style="display:none">

            <!-- Progress / step tabs -->
             

          <?php echo do_shortcode('[contact-form-7 id="3c3ec20" title="One page Application"]'); ?>

             

             

          </div><!-- /panelApp -->

        </div><!-- /apply-form-card -->
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     KEY FACTS
     ═══════════════════════════════════════════ -->
<section class="bg-white fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <h2 class="text-center text-[28px] sm:text-[34px] font-semibold text-park-blue tracking-tight">Park Business Capital Key Facts</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mt-10 lg:mt-14">
      <div class="text-center"><div class="flex justify-center mb-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/2800.svg" alt="Businesses funded" class="w-[30px] h-[30px]" /></div><div class="text-[28px] sm:text-[36px] font-semibold text-park-blue leading-tight">2800+</div><div class="text-lg sm:text-[22px] text-black leading-snug mt-1">businesses<br>funded</div></div>
      <div class="text-center"><div class="flex justify-center mb-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/50k.svg" alt="Funding capabilities" class="w-[30px] h-[30px]" /></div><div class="text-[24px] sm:text-[36px] font-semibold text-park-blue leading-tight">$50K-$10M</div><div class="text-lg sm:text-[22px] text-black leading-snug mt-1">funding<br>capabilities</div></div>
      <div class="text-center"><div class="flex justify-center mb-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/250.svg" alt="Average loan" class="w-[30px] h-[30px]" /></div><div class="text-[28px] sm:text-[36px] font-semibold text-park-blue leading-tight">$250K</div><div class="text-lg sm:text-[22px] text-black leading-snug mt-1">average<br>loan</div></div>
      <div class="text-center"><div class="flex justify-center mb-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/4h.svg" alt="Average time to fund" class="w-[30px] h-[30px]" /></div><div class="text-[28px] sm:text-[36px] font-semibold text-park-blue leading-tight">4 hrs</div><div class="text-lg sm:text-[22px] text-black leading-snug mt-1">average time<br>to fund</div></div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════
     REVIEWS
     ═══════════════════════════════════════════ -->
<section class="bg-park-blue-light fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="flex flex-col lg:flex-row items-start gap-10 lg:gap-16">
      <div class="w-full lg:w-1/2">
        <h2 class="text-[30px] sm:text-[39px] font-semibold text-white leading-tight tracking-tight mb-5">Consistently excellent<br>reviews from clients</h2>
        <p class="text-base text-white leading-relaxed mb-6 max-w-[400px]">Clients of Park Business Capital remain overwhelmingly pleased by their choice.</p>
        <div class="flex gap-3 mb-8"><button id="prevReview" class="review-nav-btn"><svg class="w-5 h-5"><use href="#icon-arrow-left"/></svg></button><button id="nextReview" class="review-nav-btn"><svg class="w-5 h-5"><use href="#icon-arrow-right-nav"/></svg></button></div>
        <div class="flex flex-wrap items-center gap-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/g-review-1.svg" alt="Google Reviews" class="h-10 w-auto object-contain" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/A-Rating-bbb-Accredited-Business-WHITE-1-e1764780554505 1.svg" alt="BBB Accredited Business" class="h-10 w-auto object-contain" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/trustpilot-white-1 1.svg" alt="Trustpilot" class="h-10 w-auto object-contain" />
        </div>
      </div>
      <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
        <div class="bg-white rounded-2xl p-6 sm:p-8 w-full max-w-[380px] testimonials">
          <div class="review-content">
            <div class="flex gap-1 mb-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /><img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="star" class="w-6 h-6" /></div>
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

document.addEventListener('change', function(e) {
  if (e.target.classList.contains('cf-file-input')) {

    const fileInput = e.target;
    const fileName = fileInput.files.length ? fileInput.files[0].name : 'No file selected';

    const box = fileInput.closest('.cf-file-box');
    const nameEl = box.querySelector('.cf-file-name');

    if (nameEl) {
      nameEl.textContent = fileName;
      nameEl.style.color = '#000';
    }
  }
});

</script>

     <script>

  // ─── Toggle between Contact Form / One-page App ───────────────────────
  function switchFormMode(mode) {
    var btnContact = document.getElementById('toggleContact');
    var btnApp     = document.getElementById('toggleApp');
    var panelC     = document.getElementById('panelContact');
    var panelA     = document.getElementById('panelApp');

    if (mode === 'contact') {
      btnContact.classList.add('active');
      btnApp.classList.remove('active');
      panelC.style.display = '';
      panelA.style.display = 'none';
    } else {
      btnApp.classList.add('active');
      btnContact.classList.remove('active');
      panelC.style.display = 'none';
      panelA.style.display = '';
    }
  }

  // ─── Multi-step navigation ────────────────────────────────────────────
  var appCurrentStep = 1;

  function appGoStep(from, to) {
    if (to > from && !appValidateStep(from)) return;

    // hide current panel
    var cur = document.getElementById('appStep' + from);
    if (cur) cur.classList.remove('visible');

    // update tab states
    var items = document.querySelectorAll('.app-step-item');
    items.forEach(function(el) {
      var s = parseInt(el.getAttribute('data-step'));
      el.classList.remove('active', 'done');
      if (s < to)       el.classList.add('done');
      else if (s === to) el.classList.add('active');
    });

    // show new panel
    appCurrentStep = to;
    var next = document.getElementById('appStep' + to);
    if (next) next.classList.add('visible');

    // scroll form card into view on mobile
    document.querySelector('.apply-form-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function appValidateStep(step) {
    var ok = true;
    var required = [];

    if (step === 1) required = ['aFirstName','aLastName','aEmail','aPhone','aSSN'];
    if (step === 2) required = ['aBizName','aBizAddress','aCity','aState','aZip','aEIN','aYearsInBiz','aBizPhone'];
    if (step === 3) required = ['oFirstName','oLastName','oTitle','oDOB','oOwnership','oHomeAddress','oCity','oState','oZip'];
    if (step === 4) required = ['aPurpose'];

    required.forEach(function(id) {
      var el = document.getElementById(id);
      if (!el) return;
      var val = el.value.trim();
      if (!val) {
        el.classList.add('field-error');
        ok = false;
      } else {
        el.classList.remove('field-error');
      }
      el.addEventListener('input', function() { el.classList.remove('field-error'); }, { once: true });
    });

    // check dropdowns
    var dropMap = {
      2: [['appIndustryDrop','aIndustryVal'],['appBizTypeDrop','aBizTypeVal']],
      4: [['appLoanDrop','aLoanTypeVal'],['appRevDrop','aRevVal']]
    };
    if (dropMap[step]) {
      dropMap[step].forEach(function(pair) {
        var val = document.getElementById(pair[1]) ? document.getElementById(pair[1]).value : '';
        var btn = document.querySelector('#' + pair[0] + ' .custom-dropdown-trigger');
        if (!val) {
          if (btn) btn.style.borderColor = '#e53e3e';
          ok = false;
        } else {
          if (btn) btn.style.borderColor = '';
        }
      });
    }

    if (!ok) {
      var panel = document.getElementById('appStep' + step);
      if (panel) panel.querySelector('.field-error, [style*="e53e3e"]') && panel.querySelector('.field-error').focus();
    }
    return ok;
  }

  // ─── Submit Application ───────────────────────────────────────────────
  function submitApp() {
    // validate sig name + consent
    var sigName  = document.getElementById('aSigName');
    var consent  = document.getElementById('aConsent');
    var ok = true;

    if (!sigName.value.trim()) { sigName.classList.add('field-error'); ok = false; }
    else sigName.classList.remove('field-error');

    if (!consent.checked) {
      consent.style.outline = '2px solid #e53e3e';
      ok = false;
    } else {
      consent.style.outline = '';
    }

    if (!ok) return;

    // hide steps bar + step 5 panel, show success
    document.getElementById('appStepsBar').style.display = 'none';
    document.getElementById('appStep5').classList.remove('visible');
    document.getElementById('appSuccess').style.display = '';
  }

  // ─── Signature canvas ─────────────────────────────────────────────────
  var sigCanvas, sigCtx, sigDrawing = false, sigLastX = 0, sigLastY = 0;

  function initSig() {
    sigCanvas = document.getElementById('sigCanvas');
    if (!sigCanvas) return;
    sigCtx = sigCanvas.getContext('2d');

    // hi-dpi
    var rect = sigCanvas.getBoundingClientRect();
    sigCanvas.width  = rect.width  * window.devicePixelRatio;
    sigCanvas.height = rect.height * window.devicePixelRatio;
    sigCtx.scale(window.devicePixelRatio, window.devicePixelRatio);
    sigCtx.strokeStyle = '#0033A1';
    sigCtx.lineWidth = 2;
    sigCtx.lineCap = 'round';
    sigCtx.lineJoin = 'round';

    sigCanvas.addEventListener('mousedown',  sigStart);
    sigCanvas.addEventListener('mousemove',  sigDraw);
    sigCanvas.addEventListener('mouseup',    sigEnd);
    sigCanvas.addEventListener('mouseleave', sigEnd);
    sigCanvas.addEventListener('touchstart', function(e){ e.preventDefault(); sigStart(e.touches[0]); }, { passive: false });
    sigCanvas.addEventListener('touchmove',  function(e){ e.preventDefault(); sigDraw(e.touches[0]);  }, { passive: false });
    sigCanvas.addEventListener('touchend',   sigEnd);
  }

  function sigPos(e) {
    var rect = sigCanvas.getBoundingClientRect();
    return { x: e.clientX - rect.left, y: e.clientY - rect.top };
  }
  function sigStart(e) { sigDrawing = true; var p = sigPos(e); sigLastX = p.x; sigLastY = p.y; }
  function sigDraw(e) {
    if (!sigDrawing) return;
    var p = sigPos(e);
    sigCtx.beginPath();
    sigCtx.moveTo(sigLastX, sigLastY);
    sigCtx.lineTo(p.x, p.y);
    sigCtx.stroke();
    sigLastX = p.x; sigLastY = p.y;
  }
  function sigEnd() { sigDrawing = false; }
  function clearSig() { if (sigCtx) sigCtx.clearRect(0, 0, sigCanvas.width, sigCanvas.height); }

  // init sig when app panel is first shown (or immediately if visible)
  var _origSwitch = switchFormMode;
  switchFormMode = function(mode) {
    _origSwitch(mode);
    if (mode === 'app' && !sigCanvas) { setTimeout(initSig, 50); }
  };

  // ─── Phone formatter ──────────────────────────────────────────────────
  function fmtPhone(el) {
    var d = el.value.replace(/\D/g,'').substring(0,10);
    if (d.length >= 7)      el.value = '(' + d.substring(0,3) + ') ' + d.substring(3,6) + '-' + d.substring(6);
    else if (d.length >= 4) el.value = '(' + d.substring(0,3) + ') ' + d.substring(3);
    else if (d.length > 0)  el.value = '(' + d;
    else                    el.value = '';
  }

  // ─── DOB formatter ────────────────────────────────────────────────────
  function fmtDOB(el) {
    var d = el.value.replace(/\D/g,'').substring(0,8);
    if (d.length >= 5)      el.value = d.substring(0,2) + '/' + d.substring(2,4) + '/' + d.substring(4);
    else if (d.length >= 3) el.value = d.substring(0,2) + '/' + d.substring(2);
    else                    el.value = d;
  }

  // ─── Amount presets for app panel ─────────────────────────────────────
  function setAmt(id, val) {
    var el = document.getElementById(id);
    if (el) el.value = val.toLocaleString();
  }

  // ─── Auto-fill signature date ─────────────────────────────────────────
  var sigDateEl = document.getElementById('aSigDate');
  if (sigDateEl) {
    var now = new Date();
    sigDateEl.value = (now.getMonth()+1) + '/' + now.getDate() + '/' + now.getFullYear();
  }

  // ─── Scroll animations ────────────────────────────────────────────────
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('visible');
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-up, .stagger-item').forEach(el => observer.observe(el));

</script>

<?php get_footer(); ?>