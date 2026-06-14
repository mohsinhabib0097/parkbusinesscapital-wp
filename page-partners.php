<? /* Template Name: Partners */ ?>
<?php get_header(); ?>
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-park-p" viewBox="0 0 36 40"><rect width="36" height="40" rx="6" fill="#0055B8"/><path d="M10 32V10h8c5.5 0 9 3 9 7.5S23.5 25 18 25h-3v7h-5z" fill="#fff"/><path d="M15 14v7h3c2.5 0 4-1.5 4-3.5S20.5 14 18 14h-3z" fill="#0055B8"/></symbol>
  <symbol id="icon-dollars" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></symbol>
  <symbol id="icon-chart" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 3v18h18M7 14l4-4 3 3 5-6"/></symbol>
  <symbol id="icon-clock-fast" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
  <symbol id="icon-bank" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18M7 15h4"/></symbol>
  <symbol id="icon-users" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></symbol>
  <symbol id="icon-zap" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"/></symbol>
  <symbol id="icon-trending" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></symbol>
  <symbol id="icon-credit-card" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></symbol>
  <symbol id="icon-monitor" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v12H4z"/><path d="M2 20h20M9 8l2 2 4-4"/></symbol>
  <symbol id="icon-check-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#0055B8" stroke-width="2" fill="none"/><path d="M8 12l3 3 5-6" stroke="#0055B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-left" viewBox="0 0 20 20"><path d="M13 4l-6 6 6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-arrow-right-nav" viewBox="0 0 20 20"><path d="M7 4l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></symbol>
  <symbol id="icon-hamburger" viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
  <symbol id="icon-close" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol>
</svg>

<style>
  /* Partners page specific styles — uses twind utility classes for most layout */
  .partner-hero {
    background: linear-gradient(135deg, #0033A1 0%, #0055B8 100%);
    position: relative;
    overflow: hidden;
  }
  .partner-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 600px 400px at 80% 20%, rgba(255,255,255,0.08), transparent);
    pointer-events: none;
  }
  .partner-hero-shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.04);
    pointer-events: none;
  }
  .partner-hero-shape:nth-child(1) { width: 300px; height: 300px; top: -100px; right: 5%; }
  .partner-hero-shape:nth-child(2) { width: 180px; height: 180px; bottom: -60px; left: 10%; }
  .partner-hero-shape:nth-child(3) { width: 120px; height: 120px; top: 40%; right: 40%; }

  .partner-stat-card {
    background: #fff;
    border-radius: 16px;
    padding: 32px 20px;
    text-align: center;
    box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .partner-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(0,85,184,0.10);
  }

  .partner-step {
    background: #fff;
    border-radius: 16px;
    padding: 36px 28px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    position: relative;
  }
  .partner-step-number {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: #0055B8;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 20px;
  }

  .partner-benefit-card {
    background: #f6f6fb;
    border-radius: 16px;
    padding: 32px 28px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .partner-benefit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(0,85,184,0.08);
  }
  .partner-benefit-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: rgba(0,85,184,0.08);
    color: #0055B8;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
  }

  .partner-tier {
    background: #fff;
    border-radius: 18px;
    padding: 36px 28px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    border: 2px solid transparent;
    display: flex;
    flex-direction: column;
  }
  .partner-tier.featured {
    border-color: #0055B8;
    box-shadow: 0 8px 28px rgba(0,85,184,0.10);
    position: relative;
  }
  .partner-tier-popular {
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: #0055B8;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 6px 18px;
    border-radius: 20px;
    white-space: nowrap;
  }
  .partner-tier ul { list-style: none; flex: 1; }
  .partner-tier ul li {
    font-size: 15px;
    padding: 10px 0 10px 30px;
    position: relative;
    border-bottom: 1px solid #e0e0e0;
  }
  .partner-tier ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 15px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: rgba(0,85,184,0.10);
  }
  .partner-tier ul li::after {
    content: '';
    position: absolute;
    left: 5px;
    top: 20px;
    width: 7px;
    height: 4px;
    border-left: 2px solid #0055B8;
    border-bottom: 2px solid #0055B8;
    transform: rotate(-45deg);
  }

  .partner-criteria-card {
    text-align: center;
    padding: 24px 16px;
  }
  .partner-criteria-card .big-num {
    font-size: 36px;
    font-weight: 700;
    color: #0055B8;
    line-height: 1.1;
  }

  .partner-resource {
    background: #fff;
    border-radius: 16px;
    padding: 32px 28px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.04);
  }
  .partner-resource-num {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(0,85,184,0.08);
    color: #0055B8;
    font-weight: 700;
    font-size: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
  }

  .partner-cta {
    background: linear-gradient(135deg, #0033A1, #0055B8);
    border-radius: 24px;
    padding: 56px 48px;
  }

  .partner-faq-item {
    border-bottom: 1px solid #e0e0e0;
  }
  .partner-faq-question {
    width: 100%;
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    font-weight: 600;
    font-size: 18px;
    color: #0033A1;
    padding: 22px 40px 22px 0;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Figtree', sans-serif;
  }
  .partner-faq-question .plus {
    font-size: 24px;
    color: #0055B8;
    transition: transform 0.2s ease;
  }
  .partner-faq-item.open .partner-faq-question .plus { transform: rotate(45deg); }
  .partner-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.28s ease;
    color: #666;
    font-size: 16px;
  }
  .partner-faq-answer p { padding-bottom: 24px; }
  .partner-faq-item.open .partner-faq-answer { max-height: 320px; }
</style>

<!-- ═══════════════════════════════════════════
     PARTNER HERO
     ═══════════════════════════════════════════ -->
<section class="partner-hero fade-up">
  <span class="partner-hero-shape"></span>
  <span class="partner-hero-shape"></span>
  <span class="partner-hero-shape"></span>
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 lg:py-24 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div>
        <span class="text-sm font-semibold text-white/80 tracking-[1.5px] uppercase mb-4 inline-block">Park Business Capital Partner Program</span>
        <h1 class="text-[40px] sm:text-[48px] lg:text-[56px] font-semibold text-white leading-[1.05] tracking-tight mb-5">Turn your network into recurring revenue.</h1>
        <p class="text-[17px] text-white/80 leading-relaxed max-w-[520px] mb-8">Refer business owners who need working capital and earn commission on every deal we fund — plus you keep earning every time they renew. You make the introduction; Park Business Capital handles underwriting, funding, and service end to end.</p>
        <div class="flex flex-wrap gap-4 mb-5">
          <a href="#join" class="btn-park bg-white text-park-blue font-semibold text-lg px-8 py-3 inline-block">Start earning today</a>
          <a href="#how" class="btn-park border-2 border-white/30 text-white font-semibold text-lg px-8 py-3 inline-block hover:bg-white/10 transition-colors">See how it works</a>
        </div>
        <p class="text-[14px] text-white/60">No fees to join. No volume commitment. Get approved as a partner in minutes.</p>
      </div>
      <div class="hidden lg:flex justify-end">
        <div class="w-[440px] h-[440px] rounded-[50%_50%_50%_22px_/_60%_56%_44%_38%] overflow-hidden bg-park-blue shadow-2xl relative">
          <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?w=900&q=80" alt="Partner professional" class="w-full h-full object-cover" onerror="this.style.display='none'" />
          <div class="absolute inset-0 bg-gradient-to-br from-park-blue/40 to-[#0033A1]/30 mix-blend-multiply"></div>
          <div class="absolute -left-[6%] -bottom-[8%] text-[280px] font-bold text-white/10 leading-[0.7] select-none">P</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     WHY PARTNERS CHOOSE US — STATS ROW
     ═══════════════════════════════════════════ -->
<section class="bg-white fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <h2 class="text-center text-[28px] sm:text-[34px] font-semibold text-park-blue tracking-tight mb-10 lg:mb-12">Why partners choose Park Business Capital</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
      <div class="partner-stat-card">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-park-blue"><use href="#icon-dollars"/></svg>
        </div>
        <div class="text-[30px] sm:text-[36px] font-semibold text-park-blue leading-tight">Up to 25%</div>
        <div class="text-base text-black mt-1">commission per funded deal</div>
      </div>
      <div class="partner-stat-card">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-park-blue"><use href="#icon-chart"/></svg>
        </div>
        <div class="text-[30px] sm:text-[36px] font-semibold text-park-blue leading-tight">Lifetime</div>
        <div class="text-base text-black mt-1">paid on every renewal</div>
      </div>
      <div class="partner-stat-card">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-park-blue"><use href="#icon-clock-fast"/></svg>
        </div>
        <div class="text-[30px] sm:text-[36px] font-semibold text-park-blue leading-tight">Same-day</div>
        <div class="text-base text-black mt-1">funding for your referrals</div>
      </div>
      <div class="partner-stat-card">
        <div class="flex justify-center mb-3">
          <svg class="w-10 h-10 text-park-blue"><use href="#icon-bank"/></svg>
        </div>
        <div class="text-[24px] sm:text-[36px] font-semibold text-park-blue leading-tight">$50K–$10M</div>
        <div class="text-base text-black mt-1">deal sizes we fund</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     HOW IT WORKS
     ═══════════════════════════════════════════ -->
<section class="fade-up" id="how">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">How the program works</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">Three steps to your first payout</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">From sign-up to commission, the process is built to be fast and hands-off for you.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      <div class="partner-step stagger-item">
        <div class="partner-step-number">1</div>
        <h3 class="text-[22px] font-semibold text-park-blue mb-3">Apply in minutes</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Complete a short partner application and get access to your dashboard, referral link, and submission tools. No fees, no commitments.</p>
      </div>
      <div class="partner-step stagger-item">
        <div class="partner-step-number">2</div>
        <h3 class="text-[22px] font-semibold text-park-blue mb-3">Refer &amp; submit</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Send clients through your link or hand them off by phone or email. Use our co-branded materials to reach the business owners in your network.</p>
      </div>
      <div class="partner-step stagger-item">
        <div class="partner-step-number">3</div>
        <h3 class="text-[22px] font-semibold text-park-blue mb-3">Get paid</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Earn commission on every deal we fund and on every renewal after. Track every lead and payout live, and get paid on a fixed monthly cycle.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     BENEFITS
     ═══════════════════════════════════════════ -->
<section class="bg-white fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">Why partner with us</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">Everything you need to earn more</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">We built the program to make referring simple and rewarding — you focus on relationships, we handle the funding.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-dollars"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Commissions</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Industry-leading payouts</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Our tiered structure rewards volume with commissions up to 25% per funded deal — paid fast, paid monthly, with zero hidden fees.</p>
      </div>
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-users"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Dedicated support</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Your own account manager</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Get paired with a Park Business Capital rep who knows your book and works every submission with you to lift approval rates.</p>
      </div>
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-zap"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Speed</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Same-day funding</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Decisions in hours, not days, and funding the same day when possible. Fast results for your clients mean more referrals back to you.</p>
      </div>
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-trending"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Transparency</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Live dashboard tracking</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">See every lead, deal stage, and dollar earned in real time. Clear reporting shows exactly where each referral stands.</p>
      </div>
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-credit-card"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Payments</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Reliable monthly payouts</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">No chasing checks. Commissions are reconciled and paid on a set schedule via direct deposit — clean, predictable, on time.</p>
      </div>
      <div class="partner-benefit-card stagger-item">
        <div class="partner-benefit-icon">
          <svg class="w-6 h-6"><use href="#icon-monitor"/></svg>
        </div>
        <span class="text-[11px] font-semibold text-park-blue tracking-[1px] uppercase">Resources</span>
        <h3 class="text-[20px] font-semibold text-park-blue mt-2 mb-2">Ready-made marketing</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Launch fast with co-branded landing pages, email templates, and creatives designed to convert business owners in your network.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     COMMISSION TIERS
     ═══════════════════════════════════════════ -->
<section class="fade-up" id="commissions">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">Commission structure</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">The more you refer, the more you earn</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">Move up automatically as your funded volume grows. Every tier pays on new deals and renewals.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      <div class="partner-tier stagger-item">
        <span class="text-sm text-gray-400 font-medium">1–4 funded deals / mo</span>
        <h3 class="text-[24px] font-semibold text-park-blue mt-2 mb-3">Referral Partner</h3>
        <div class="text-[48px] font-semibold text-park-blue leading-none mb-1">15%</div>
        <div class="text-sm text-gray-400 mb-6">commission rate</div>
        <ul>
          <li>15% on every funded deal</li>
          <li>Commission on renewals</li>
          <li>Partner dashboard access</li>
          <li>Marketing materials</li>
          <li>Email support</li>
        </ul>
        <a href="#join" class="btn-park bg-park-blue text-white font-semibold text-base px-8 py-3 w-full text-center block mt-6">Get started</a>
      </div>
      <div class="partner-tier featured stagger-item">
        <span class="partner-tier-popular">Most popular</span>
        <span class="text-sm text-gray-400 font-medium">5–9 funded deals / mo</span>
        <h3 class="text-[24px] font-semibold text-park-blue mt-2 mb-3">Preferred Partner</h3>
        <div class="text-[48px] font-semibold text-park-blue leading-none mb-1">20%</div>
        <div class="text-sm text-gray-400 mb-6">commission rate</div>
        <ul>
          <li>Everything in Referral, plus:</li>
          <li>20% on every funded deal</li>
          <li>Priority deal handling</li>
          <li>Advanced reporting</li>
          <li>Dedicated account manager</li>
        </ul>
        <a href="#join" class="btn-park bg-park-blue text-white font-semibold text-base px-8 py-3 w-full text-center block mt-6">Get started</a>
      </div>
      <div class="partner-tier stagger-item">
        <span class="text-sm text-gray-400 font-medium">10+ funded deals / mo</span>
        <h3 class="text-[24px] font-semibold text-park-blue mt-2 mb-3">Elite Partner</h3>
        <div class="text-[48px] font-semibold text-park-blue leading-none mb-1">25%</div>
        <div class="text-sm text-gray-400 mb-6">commission rate</div>
        <ul>
          <li>Everything in Preferred, plus:</li>
          <li>25% on every funded deal</li>
          <li>Custom co-marketing</li>
          <li>Weekly strategy calls</li>
          <li>Top-of-queue funding</li>
        </ul>
        <a href="#join" class="btn-park bg-park-blue text-white font-semibold text-base px-8 py-3 w-full text-center block mt-6">Get started</a>
      </div>
    </div>
    <div class="bg-white rounded-2xl p-8 lg:p-10 mt-8 text-center shadow-sm">
      <h3 class="text-[24px] font-semibold text-park-blue mb-3">Funding a lot of deals?</h3>
      <p class="text-[15px] text-gray-500 max-w-[560px] mx-auto mb-6">We build custom arrangements for high-volume partners, ISOs, and enterprise referral sources. Let's design a structure that works for your business.</p>
      <a href="#join" class="btn-park bg-park-blue text-white font-semibold text-lg px-8 py-3 inline-block">Talk to our partner team</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     QUALIFICATION CRITERIA
     ═══════════════════════════════════════════ -->
<section class="bg-white fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">Client qualification</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">What makes a fundable referral</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">Send us business owners who meet these basics and we'll do the rest. Higher-quality submissions earn faster approvals.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
      <div class="partner-criteria-card stagger-item">
        <div class="big-num">1 Year+</div>
        <div class="text-[17px] font-semibold text-park-blue mt-1 mb-3">in business</div>
        <p class="text-[14px] text-gray-500">Operating for at least 12 months with verifiable history.</p>
      </div>
      <div class="partner-criteria-card stagger-item">
        <div class="big-num">525+</div>
        <div class="text-[17px] font-semibold text-park-blue mt-1 mb-3">FICO score</div>
        <p class="text-[14px] text-gray-500">Owner's personal credit score of 525 or higher.</p>
      </div>
      <div class="partner-criteria-card stagger-item">
        <div class="big-num">$200K+</div>
        <div class="text-[17px] font-semibold text-park-blue mt-1 mb-3">annual revenue</div>
        <p class="text-[14px] text-gray-500">Minimum $200,000 in gross annual revenue.</p>
      </div>
      <div class="partner-criteria-card stagger-item">
        <div class="big-num">Active</div>
        <div class="text-[17px] font-semibold text-park-blue mt-1 mb-3">business checking</div>
        <p class="text-[14px] text-gray-500">An open business checking account in good standing.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     MARKETING RESOURCES
     ═══════════════════════════════════════════ -->
<section class="fade-up">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">Marketing resources</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">Tools to promote funding to your network</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">Everything you need to put working capital in front of the right business owners.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="partner-resource stagger-item">
        <div class="partner-resource-num">01</div>
        <h3 class="text-[20px] font-semibold text-park-blue mb-3">Co-branded landing pages</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Custom pages carrying your company's identity to capture and convert business-owner leads seamlessly.</p>
      </div>
      <div class="partner-resource stagger-item">
        <div class="partner-resource-num">02</div>
        <h3 class="text-[20px] font-semibold text-park-blue mb-3">Marketing campaigns</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Ready-to-send email sequences, ad creatives, and social assets tailored to your audience and ready to deploy.</p>
      </div>
      <div class="partner-resource stagger-item">
        <div class="partner-resource-num">03</div>
        <h3 class="text-[20px] font-semibold text-park-blue mb-3">Embedded application</h3>
        <p class="text-[15px] text-gray-500 leading-relaxed">Drop our funding application directly into your site for a fully branded, white-label experience.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     CTA BAND
     ═══════════════════════════════════════════ -->
<section class="fade-up" id="join">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="partner-cta flex flex-col lg:flex-row items-center justify-between gap-8">
      <div>
        <h2 class="text-[30px] sm:text-[36px] font-semibold text-white leading-tight tracking-tight mb-3 max-w-[560px]">Join the Park Business Capital partner network</h2>
        <p class="text-[16px] text-white/80 max-w-[520px]">Ready to start earning while helping businesses grow? Apply now and our partner team will reach out within 48 hours.</p>
      </div>
      <a href="#" class="btn-park bg-white text-park-blue font-semibold text-lg px-10 py-3 whitespace-nowrap shrink-0">Apply to become a partner</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════
     FAQ
     ═══════════════════════════════════════════ -->
<section class="bg-white fade-up" id="faq">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20">
    <div class="text-center max-w-[640px] mx-auto mb-12 lg:mb-14">
      <span class="text-sm font-semibold text-park-blue tracking-[1.5px] uppercase mb-3 inline-block">FAQ</span>
      <h2 class="text-[30px] sm:text-[38px] font-semibold text-park-blue tracking-tight mb-4 leading-tight">Frequently asked questions</h2>
      <p class="text-[16px] text-gray-500 leading-relaxed">Common questions about the partner program and how payouts work.</p>
    </div>
    <div class="max-w-[780px] mx-auto">
      <div class="partner-faq-item">
        <button class="partner-faq-question">How do I apply to become a partner?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>Apply through the form above or email our partner team. We review every application and respond within 48 hours with your next steps and dashboard access.</p></div>
      </div>
      <div class="partner-faq-item">
        <button class="partner-faq-question">How does referral tracking work?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>We use a 30-day cookie window. If a business owner visits through your link and returns within 30 days — even directly — the lead is still credited to you. You can also submit referrals manually by phone or email.</p></div>
      </div>
      <div class="partner-faq-item">
        <button class="partner-faq-question">When and how do I get paid?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>Commissions are reconciled and paid monthly by direct deposit once a referred deal funds and clears the holding period. Your dashboard shows pending and paid amounts in real time.</p></div>
      </div>
      <div class="partner-faq-item">
        <button class="partner-faq-question">Do I earn commission on renewals?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>Yes. You earn on the original funding and again every time your referred client renews — building ongoing income for as long as they keep working with Park Business Capital.</p></div>
      </div>
      <div class="partner-faq-item">
        <button class="partner-faq-question">Will I have support on my submissions?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>Preferred and Elite partners are paired with a dedicated account manager who works each submission with you to improve approval rates and speed up funding.</p></div>
      </div>
      <div class="partner-faq-item">
        <button class="partner-faq-question">Are there any clawbacks?<span class="plus">+</span></button>
        <div class="partner-faq-answer"><p>Commissions may be reversed if a funded deal defaults within the first 30 days. Full terms are provided in your partner agreement.</p></div>
      </div>
    </div>
  </div>
</section>

<script>
  // FAQ Accordion
  document.querySelectorAll('.partner-faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = btn.parentElement;
      var open = item.classList.contains('open');
      document.querySelectorAll('.partner-faq-item').forEach(function(i) { i.classList.remove('open'); });
      if (!open) item.classList.add('open');
    });
  });

  // Scroll-triggered animations
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) entry.target.classList.add('visible');
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.fade-up, .stagger-item').forEach(function(el) {
    observer.observe(el);
  });
</script>

<?php get_footer(); ?>