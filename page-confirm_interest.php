<? /* Template Name: confirm interest */ ?>
<?php get_header(); ?>

<section class="bg-park-bg">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 lg:py-0 lg:h-[662px] flex flex-col lg:flex-row items-center relative overflow-hidden">
    <div class="w-full lg:w-1/2 z-10 text-center lg:text-left">
      <h1 class="text-[32px] sm:text-[38px] lg:text-[44px] font-semibold text-park-blue leading-[1] tracking-tight">It's time to<br>accelerate everything<br>about funding.</h1>
      <p class="text-[15px] leading-relaxed text-black mt-3 max-w-[420px] mx-auto lg:mx-0">Funding from Park Business Capital wastes no time getting to work. From the application to approval to same-day funding whenever possible, Park Business Capital can provide working capital from $50K to $10M that's in a hurry to work for you.</p>
      <a href="#" class="btn-park bg-park-blue text-white text-lg sm:text-xl font-semibold px-12 py-3.5 mt-5 inline-block">No-fee application</a>
      <p class="text-xs text-black mt-3 max-w-[320px] mx-auto lg:mx-0 leading-snug">No credit check and no impact to your credit for applying. Get an answer in minutes.</p>
    </div>
    <div class="w-full lg:w-1/2 mt-10 lg:mt-0 flex justify-center lg:justify-end lg:absolute lg:right-8 xl:right-16 lg:top-[50px]">
      <div class="w-[280px] h-[340px] sm:w-[340px] sm:h-[400px] lg:w-[420px] lg:h-[520px] xl:w-[460px] xl:h-[540px] overflow-hidden mt-4 sm:mt-6 lg:mt-8 xl:mt-[80px]">
         
        <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.3/dist/dotlottie-wc.js" type="module"></script>
<dotlottie-wc src="https://lottie.host/e047262c-0d52-4830-a3c5-6428083631b4/2LJOQ5oRlr.lottie" style="width: 100%;height: 450px" autoplay loop></dotlottie-wc> 
         
         
      </div>
    </div>
  </div>
</section>

<!-- BOOK NOW SECTION -->
<section class="bg-white py-16 lg:py-24">
  <div class="max-w-[75rem] mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section header -->
    <div class="text-center mb-12">
      <p class="text-xs font-semibold tracking-[0.15em] uppercase text-park-blue-light mb-3">Confirm Your Interest</p>
      <h2 class="text-[30px] sm:text-[36px] lg:text-[42px] font-semibold text-park-blue tracking-tight leading-tight">Let's get your funding moving.</h2>
      <p class="mt-3 text-[15px] text-park-gray max-w-[500px] mx-auto leading-relaxed">Fill out a few quick details below and pick a time to talk. We'll take it from here, fast.</p>
    </div>

    <div class="max-w-[640px] mx-auto">

      <!-- Success state (hidden until submit) -->
      <div id="successState" class="hidden bg-park-bg rounded-2xl border border-park-border p-10 text-center">
        <div class="w-14 h-14 rounded-full bg-park-blue flex items-center justify-center mx-auto mb-5">
          <svg width="24" height="18" viewBox="0 0 24 18" fill="none"><path d="M2 9L9 16L22 2" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3 class="text-[22px] font-semibold text-black mb-2">You're all set!</h3>
        <p id="successMsg" class="text-[14px] text-park-gray leading-relaxed max-w-[380px] mx-auto"></p>
        <a href="https://www.parkbusinesscapital.com/" class="btn-park inline-block bg-park-blue text-white font-semibold text-[14px] px-8 py-3 mt-7">Back to Home</a>
      </div>

      <!-- Form card -->
      <div id="formCard" class="bg-park-bg rounded-2xl border border-park-border overflow-hidden">

        <!-- Step indicators -->
        <div class="flex border-b border-park-border">
          <div class="step-tab flex-1 flex items-center gap-2.5 px-5 py-4 border-r border-park-border" data-step="1">
            <span class="step-num w-6 h-6 rounded-full bg-park-blue text-white text-[11px] font-bold flex items-center justify-center flex-shrink-0">1</span>
            <span class="text-[12px] font-semibold text-black hidden sm:block">Your Info</span>
          </div>
          <div class="step-tab flex-1 flex items-center gap-2.5 px-5 py-4 border-r border-park-border opacity-40" data-step="2">
            <span class="step-num w-6 h-6 rounded-full bg-park-blue text-white text-[11px] font-bold flex items-center justify-center flex-shrink-0">2</span>
            <span class="text-[12px] font-semibold text-black hidden sm:block">Timeline</span>
          </div>
          <div class="step-tab flex-1 flex items-center gap-2.5 px-5 py-4 opacity-40" data-step="3">
            <span class="step-num w-6 h-6 rounded-full bg-park-blue text-white text-[11px] font-bold flex items-center justify-center flex-shrink-0">3</span>
            <span class="text-[12px] font-semibold text-black hidden sm:block">Book a Call</span>
          </div>
        </div>

        <form id="bookForm" class="p-8 lg:p-10 space-y-5" onsubmit="handleBookSubmit(event)">

          <!-- STEP 1: Info -->
          <div class="form-step" data-step="1">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-[12px] font-semibold text-black uppercase tracking-wide mb-1.5">Your Name</label>
                <input id="fieldName" type="text" placeholder="First and last name" required
                  class="w-full bg-white border border-park-border rounded-xl px-4 py-3 text-[14px] text-black placeholder-park-gray focus:outline-none focus:ring-2 focus:ring-park-blue focus:border-transparent transition-all" />
              </div>
              <div>
                <label class="block text-[12px] font-semibold text-black uppercase tracking-wide mb-1.5">Business Name</label>
                <input id="fieldBusiness" type="text" placeholder="Your business name" required
                  class="w-full bg-white border border-park-border rounded-xl px-4 py-3 text-[14px] text-black placeholder-park-gray focus:outline-none focus:ring-2 focus:ring-park-blue focus:border-transparent transition-all" />
              </div>
            </div>
            <div class="mt-4">
              <label class="block text-[12px] font-semibold text-black uppercase tracking-wide mb-1.5">Best Phone Number</label>
              <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-park-gray pointer-events-none">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M13 10.5v1.8a1.2 1.2 0 01-1.3 1.2A11.9 11.9 0 011.5 3.3 1.2 1.2 0 012.7 2H4.5a1.2 1.2 0 011.2 1c.1.5.3 1 .5 1.5a1.2 1.2 0 01-.3 1.3l-.8.8a9.6 9.6 0 004.3 4.3l.8-.8a1.2 1.2 0 011.3-.3c.5.2 1 .4 1.5.5a1.2 1.2 0 011 1.2z" stroke="#99999b" stroke-width="1.2" fill="none"/></svg>
                </span>
                <input id="fieldPhone" type="tel" placeholder="(000) 000-0000" required maxlength="14"
                  oninput="formatPhone(this)"
                  class="w-full bg-white border border-park-border rounded-xl pl-10 pr-4 py-3 text-[14px] text-black placeholder-park-gray focus:outline-none focus:ring-2 focus:ring-park-blue focus:border-transparent transition-all" />
              </div>
            </div>
          </div>

          <!-- STEP 2: Timeline + Notes -->
          <div class="form-step" data-step="2">
            <div>
              <label class="block text-[12px] font-semibold text-black uppercase tracking-wide mb-2">When are you looking to move forward?</label>
              <div class="space-y-2" id="timelineGroup">
                <label class="timeline-option flex items-center gap-3 bg-white border-2 border-park-border rounded-xl px-4 py-3 cursor-pointer transition-all hover:border-park-blue">
                  <span class="tl-dot w-4 h-4 rounded-full border-2 border-park-border flex-shrink-0 flex items-center justify-center transition-all">
                    <span class="tl-dot-inner w-2 h-2 rounded-full bg-park-blue opacity-0 transition-all"></span>
                  </span>
                  <input type="radio" name="timeline" value="asap" class="sr-only" onchange="updateTimeline(this)" />
                  <div>
                    <span class="text-[13.5px] font-medium text-black block">Right now — I need funding ASAP</span>
                  </div>
                </label>
                <label class="timeline-option flex items-center gap-3 bg-white border-2 border-park-border rounded-xl px-4 py-3 cursor-pointer transition-all hover:border-park-blue">
                  <span class="tl-dot w-4 h-4 rounded-full border-2 border-park-border flex-shrink-0 flex items-center justify-center transition-all">
                    <span class="tl-dot-inner w-2 h-2 rounded-full bg-park-blue opacity-0 transition-all"></span>
                  </span>
                  <input type="radio" name="timeline" value="week" class="sr-only" onchange="updateTimeline(this)" />
                  <div>
                    <span class="text-[13.5px] font-medium text-black block">Within the next week</span>
                  </div>
                </label>
                <label class="timeline-option flex items-center gap-3 bg-white border-2 border-park-border rounded-xl px-4 py-3 cursor-pointer transition-all hover:border-park-blue">
                  <span class="tl-dot w-4 h-4 rounded-full border-2 border-park-border flex-shrink-0 flex items-center justify-center transition-all">
                    <span class="tl-dot-inner w-2 h-2 rounded-full bg-park-blue opacity-0 transition-all"></span>
                  </span>
                  <input type="radio" name="timeline" value="questions" class="sr-only" onchange="updateTimeline(this)" />
                  <div>
                    <span class="text-[13.5px] font-medium text-black block">I have questions first</span>
                  </div>
                </label>
              </div>
            </div>
            <div class="mt-4">
              <label class="block text-[12px] font-semibold text-black uppercase tracking-wide mb-1.5">
                Notes <span class="text-park-gray font-normal normal-case tracking-normal">(optional)</span>
              </label>
              <textarea rows="3" placeholder="e.g. I had a question about terms, or I need funding for equipment…"
                class="w-full bg-white border border-park-border rounded-xl px-4 py-3 text-[14px] text-black placeholder-park-gray focus:outline-none focus:ring-2 focus:ring-park-blue focus:border-transparent transition-all resize-none"></textarea>
            </div>
          </div>

          <!-- STEP 3: Calendar -->
          <div class="form-step" data-step="3">
            <p class="text-[13px] text-park-gray mb-4">Pick a 15–20 min slot — no pressure, just straight answers.</p>
            <div class="bg-white rounded-xl border border-park-border p-5">
              <div class="flex items-center justify-between mb-5">
                <span id="calMonthLabel" class="text-[15px] font-semibold text-park-blue"></span>
                <div class="flex gap-1.5">
                  <button type="button" onclick="changeMonth(-1)" class="w-7 h-7 flex items-center justify-center rounded-full border border-park-border hover:border-park-blue hover:text-park-blue transition-colors text-park-gray">
                    <svg width="7" height="11" viewBox="0 0 7 11" fill="none"><path d="M6 1L1 5.5L6 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                  <button type="button" onclick="changeMonth(1)" class="w-7 h-7 flex items-center justify-center rounded-full border border-park-border hover:border-park-blue hover:text-park-blue transition-colors text-park-gray">
                    <svg width="7" height="11" viewBox="0 0 7 11" fill="none"><path d="M1 1L6 5.5L1 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                </div>
              </div>
              <div class="grid grid-cols-7 mb-2">
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">SU</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">MO</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">TU</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">WE</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">TH</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">FR</div>
                <div class="text-center text-[11px] font-semibold text-park-gray py-1 tracking-wide">SA</div>
              </div>
              <div id="calGrid" class="grid grid-cols-7 gap-y-1"></div>
            </div>

            <!-- Time slots -->
            <div id="timeSlots" class="hidden mt-4">
              <p class="text-[12px] font-semibold text-black uppercase tracking-wide mb-3">Available times — <span id="selectedDateLabel" class="text-park-blue normal-case"></span></p>
              <div id="timeSlotsGrid" class="grid grid-cols-4 gap-2"></div>
            </div>

            <!-- Booking summary pill -->
            <div id="bookingSummary" class="hidden mt-4 flex items-center gap-3 bg-blue-50 border border-park-blue rounded-xl px-4 py-3">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="flex-shrink-0"><rect x="1" y="3" width="14" height="12" rx="2" stroke="#0055B8" stroke-width="1.3" fill="none"/><path d="M5 1v4M11 1v4M1 7h14" stroke="#0055B8" stroke-width="1.3" stroke-linecap="round"/></svg>
              <p id="bookingSummaryText" class="text-[13px] font-medium text-park-blue"></p>
            </div>
          </div>

          <!-- Navigation buttons -->
          <div class="flex items-center gap-3 pt-2">
            <button type="button" id="btnBack" onclick="goStep(-1)"
              style="display:none"
              class="border border-park-border rounded-xl px-6 py-3 text-[14px] font-semibold text-black hover:border-park-blue hover:text-park-blue transition-all">
              ← Back
            </button>
            <button type="button" id="btnNext" onclick="goStep(1)"
              style="display:block"
              class="btn-park flex-1 bg-park-blue text-white font-semibold text-[15px] py-3.5">
              Continue →
            </button>
            <button type="submit" id="btnSubmit"
              style="display:none"
              class="btn-park flex-1 bg-park-blue text-white font-semibold text-[15px] py-3.5">
              Submit &amp; Book My Call
            </button>
          </div>

          <div class="flex items-center justify-center gap-5">
            <span class="flex items-center gap-1.5 text-[11.5px] text-park-gray">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.2 3.6H11L8.2 6.9l1.1 3.4L6 8.2l-3.3 2.1 1.1-3.4L1 4.6h3.8z" fill="#FFB800"/></svg>
              No credit check
            </span>
            <span class="w-px h-3 bg-park-border"></span>
            <span class="flex items-center gap-1.5 text-[11.5px] text-park-gray">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.2 3.6H11L8.2 6.9l1.1 3.4L6 8.2l-3.3 2.1 1.1-3.4L1 4.6h3.8z" fill="#FFB800"/></svg>
              No application fee
            </span>
            <span class="w-px h-3 bg-park-border"></span>
            <span class="flex items-center gap-1.5 text-[11.5px] text-park-gray">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.2 3.6H11L8.2 6.9l1.1 3.4L6 8.2l-3.3 2.1 1.1-3.4L1 4.6h3.8z" fill="#FFB800"/></svg>
              No pressure
            </span>
          </div>

        </form>
      </div>

    </div>
  </div>
</section>

<script>
  // ── State ──────────────────────────────────────────────
  const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  const today = new Date();
  let calYear = today.getFullYear();
  let calMonth = today.getMonth();
  let selectedDate = null;
  let selectedTime = null;
  let currentStep = 1;
  const totalSteps = 3;

  const times = ['9:00 AM','9:30 AM','10:00 AM','10:30 AM','11:00 AM','11:30 AM','1:00 PM','1:30 PM','2:00 PM','2:30 PM','3:00 PM','3:30 PM'];

  // ── Phone formatter ────────────────────────────────────
  function formatPhone(input) {
    let v = input.value.replace(/\D/g, '').slice(0, 10);
    if (v.length >= 7) v = '(' + v.slice(0,3) + ') ' + v.slice(3,6) + '-' + v.slice(6);
    else if (v.length >= 4) v = '(' + v.slice(0,3) + ') ' + v.slice(3);
    else if (v.length > 0) v = '(' + v;
    input.value = v;
  }

  // ── Step navigation ────────────────────────────────────
  function goStep(dir) {
    // Validate step 1 before advancing
    if (dir === 1 && currentStep === 1) {
      const name = document.getElementById('fieldName').value.trim();
      const biz  = document.getElementById('fieldBusiness').value.trim();
      const phone = document.getElementById('fieldPhone').value.trim();
      if (!name || !biz || phone.length < 14) {
        highlightEmpty([
          { el: document.getElementById('fieldName'), ok: !!name },
          { el: document.getElementById('fieldBusiness'), ok: !!biz },
          { el: document.getElementById('fieldPhone'), ok: phone.length >= 14 }
        ]);
        return;
      }
    }
    const next = currentStep + dir;
    if (next < 1 || next > totalSteps) return;
    currentStep = next;
    renderStep();
  }

  function highlightEmpty(fields) {
    fields.forEach(({ el, ok }) => {
      el.style.borderColor = ok ? '' : '#ef4444';
      el.style.boxShadow  = ok ? '' : '0 0 0 2px rgba(239,68,68,0.2)';
      el.addEventListener('input', () => { el.style.borderColor = ''; el.style.boxShadow = ''; }, { once: true });
    });
  }

  function renderStep() {
    // Show/hide step panels
    document.querySelectorAll('.form-step').forEach(el => {
      el.style.display = el.dataset.step == currentStep ? 'block' : 'none';
    });

    // Update step tabs
    document.querySelectorAll('.step-tab').forEach(tab => {
      const s = parseInt(tab.dataset.step);
      tab.style.opacity = s === currentStep ? '1' : s < currentStep ? '0.6' : '0.3';
    });

    // Show/hide Back button
    const btnBack = document.getElementById('btnBack');
    btnBack.style.display = currentStep > 1 ? '' : 'none';

    // Show Submit vs Continue
    document.getElementById('btnNext').style.display   = currentStep < totalSteps ? '' : 'none';
    document.getElementById('btnSubmit').style.display = currentStep === totalSteps ? '' : 'none';
  }

  // ── Calendar ───────────────────────────────────────────
  function renderCalendar() {
    document.getElementById('calMonthLabel').textContent = months[calMonth] + ' ' + calYear;
    const grid = document.getElementById('calGrid');
    grid.innerHTML = '';
    const firstDay = new Date(calYear, calMonth, 1).getDay();
    const daysInMonth = new Date(calYear, calMonth + 1, 0).getDate();
    for (let i = 0; i < firstDay; i++) grid.appendChild(document.createElement('div'));
    for (let d = 1; d <= daysInMonth; d++) {
      const cell = document.createElement('button');
      cell.type = 'button';
      const cellDate = new Date(calYear, calMonth, d);
      const isWeekend = cellDate.getDay() === 0 || cellDate.getDay() === 6;
      const isPast    = cellDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());
      const isSelected = selectedDate && selectedDate.getDate() === d && selectedDate.getMonth() === calMonth && selectedDate.getFullYear() === calYear;
      const isToday   = d === today.getDate() && calMonth === today.getMonth() && calYear === today.getFullYear();
      cell.textContent = d;
      cell.className = 'mx-auto w-8 h-8 flex items-center justify-center rounded-full text-[13px] transition-colors ';
      if (isPast || isWeekend) { cell.className += 'text-gray-300 cursor-default'; cell.disabled = true; }
      else if (isSelected)     { cell.className += 'bg-park-blue text-white font-semibold'; }
      else if (isToday)        { cell.className += 'border-2 border-park-blue text-park-blue font-semibold hover:bg-park-blue hover:text-white cursor-pointer'; }
      else                     { cell.className += 'text-black font-medium hover:bg-blue-50 hover:text-park-blue cursor-pointer'; }
      cell.onclick = () => selectDate(new Date(calYear, calMonth, d));
      grid.appendChild(cell);
    }
  }

  function selectDate(date) {
    selectedDate = date;
    selectedTime = null;
    renderCalendar();
    const label = months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();
    document.getElementById('selectedDateLabel').textContent = label;
    const slotsContainer = document.getElementById('timeSlotsGrid');
    slotsContainer.innerHTML = '';
    times.forEach(t => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.textContent = t;
      btn.className = 'border border-park-border rounded-lg py-2 text-[12.5px] text-black font-medium hover:border-park-blue hover:text-park-blue hover:bg-blue-50 transition-colors';
      btn.onclick = () => selectTime(t, btn);
      slotsContainer.appendChild(btn);
    });
    const ts = document.getElementById('timeSlots');
    ts.classList.remove('hidden');
    ts.style.opacity = '0';
    ts.style.transform = 'translateY(6px)';
    ts.style.transition = 'opacity 0.2s, transform 0.2s';
    requestAnimationFrame(() => { ts.style.opacity = '1'; ts.style.transform = 'translateY(0)'; });
    updateBookingSummary();
  }

  function selectTime(time, btn) {
    selectedTime = time;
    document.querySelectorAll('#timeSlotsGrid button').forEach(b => {
      b.className = 'border border-park-border rounded-lg py-2 text-[12.5px] text-black font-medium hover:border-park-blue hover:text-park-blue hover:bg-blue-50 transition-colors';
    });
    btn.className = 'border-2 border-park-blue rounded-lg py-2 text-[12.5px] text-park-blue font-semibold bg-blue-50';
    updateBookingSummary();
  }

  function updateBookingSummary() {
    const summary = document.getElementById('bookingSummary');
    const text    = document.getElementById('bookingSummaryText');
    if (selectedDate && selectedTime) {
      text.textContent = months[selectedDate.getMonth()] + ' ' + selectedDate.getDate() + ', ' + selectedDate.getFullYear() + ' · ' + selectedTime;
      summary.style.display = 'flex';
    } else {
      summary.style.display = 'none';
    }
  }

  function changeMonth(dir) {
    calMonth += dir;
    if (calMonth > 11) { calMonth = 0; calYear++; }
    if (calMonth < 0)  { calMonth = 11; calYear--; }
    renderCalendar();
  }

  // ── Timeline radio ─────────────────────────────────────
  function updateTimeline(radio) {
    document.querySelectorAll('#timelineGroup .timeline-option').forEach(label => {
      const dot   = label.querySelector('.tl-dot');
      const inner = label.querySelector('.tl-dot-inner');
      const active = label.querySelector('input') === radio;
      label.style.borderColor     = active ? '#0055b8' : '';
      label.style.backgroundColor = active ? '#eff6ff' : '#fff';
      dot.style.borderColor       = active ? '#0055b8' : '';
      inner.style.opacity         = active ? '1' : '0';
    });
  }

  // ── Submit ─────────────────────────────────────────────
  function handleBookSubmit(e) {
    e.preventDefault();
    const name = document.getElementById('fieldName').value.trim();
    let msg = 'Thanks, ' + name + '! Your information has been received and a Funding Manager will be in touch shortly.';
    if (selectedDate && selectedTime) {
      msg = 'Thanks, ' + name + '! Your call is booked for ' + months[selectedDate.getMonth()] + ' ' + selectedDate.getDate() + ' at ' + selectedTime + '. A Funding Manager will confirm shortly.';
    }
    document.getElementById('successMsg').textContent = msg;
    document.getElementById('formCard').style.display = 'none';
    document.getElementById('successState').classList.remove('hidden');
    window.scrollTo({ top: document.getElementById('successState').offsetTop - 100, behavior: 'smooth' });
  }

  // ── Init ───────────────────────────────────────────────
  renderCalendar();
  renderStep();
</script>



<?php get_footer(); ?>