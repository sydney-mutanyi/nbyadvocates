<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NB Yaseen ADVOCATES — Greeting Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,600;1,700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --red: #C8102E; --red-deep: #8B0000; --navy: #0F2441;
      --navy-mid: #1E3A5F; --navy-light: #2A4A75; --navy-faint: #EEF3FA;
      --gold: #C9A84C; --gold-light: #E8C96A; --gold-pale: #F8F0DA;
      --white: #FFFFFF; --off-white: #F9F7F4; --dark: #0D1117;
      --gray-700: #374151; --gray-500: #6B7280; --gray-200: #E5E7EB; --gray-100: #F3F4F6;
      --card-w: 148mm; --card-h: 210mm;
    }
    html { background: #111827; font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }
    body { min-height: 100vh; display: flex; flex-direction: column; align-items: center; padding: 0 0 60px; }

    /* ===== PRINT BAR ===== */
    .print-bar {
      position: sticky; top: 0; z-index: 999; width: 100%;
      background: linear-gradient(90deg, var(--navy) 0%, var(--navy-mid) 100%);
      border-bottom: 3px solid var(--gold); padding: 10px 28px;
      display: flex; align-items: center; justify-content: space-between; gap: 16px; flex-wrap: wrap;
      margin-bottom: 36px;
    }
    .pb-brand { display: flex; align-items: center; gap: 12px; }
    .pb-logo-wrap { background: white; border-radius: 8px; padding: 5px 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
    .pb-logo-wrap img { height: 30px; width: auto; display: block; }
    .pb-brand strong { color: #fff; font-size: 14px; font-weight: 800; letter-spacing: 0.5px; display: block; }
    .pb-brand span { color: rgba(255,255,255,0.55); font-size: 11px; }
    .pb-actions { display: flex; gap: 10px; }
    .pb-btn { padding: 9px 20px; border-radius: 7px; border: none; cursor: pointer; font-weight: 700;
      font-size: 12px; letter-spacing: 0.3px; transition: all 0.2s; font-family: 'Inter', sans-serif; }
    .pb-btn.primary { background: var(--red); color: #fff; box-shadow: 0 4px 12px rgba(200,16,46,0.35); }
    .pb-btn.primary:hover { background: #e5193a; transform: translateY(-1px); }
    .pb-btn.ghost { background: transparent; color: var(--gold); border: 1.5px solid rgba(201,168,76,0.45); }
    .pb-btn.ghost:hover { background: rgba(201,168,76,0.08); }
    .page-tag { color: rgba(255,255,255,0.28); font-size: 10px; font-weight: 700; letter-spacing: 3px;
      text-transform: uppercase; margin-bottom: 6px; align-self: flex-start; padding-left: 3px; }

    .cards-wrap { display: flex; flex-direction: column; align-items: center; gap: 32px; }

    /* ===== CARD BASE ===== */
    .card { width: var(--card-w); height: var(--card-h); position: relative; overflow: hidden;
      box-shadow: 0 32px 80px rgba(0,0,0,0.7), 0 4px 20px rgba(0,0,0,0.4); }

    /* ============================================================
       PAGE 1 — FRONT COVER
    ============================================================ */
    .front { background: var(--navy); }
    .front-gold-rule { position: absolute; top: 0; left: 0; right: 0; height: 6px;
      background: linear-gradient(90deg, var(--gold) 0%, var(--red) 50%, var(--gold-light) 100%); z-index: 5; }
    .front-bottom-rule { position: absolute; bottom: 0; left: 0; right: 0; height: 4px;
      background: linear-gradient(90deg, var(--red) 0%, var(--gold) 100%); z-index: 5; }
    .front-bg-1 { position: absolute; top: -80px; right: -80px; width: 280px; height: 280px;
      border-radius: 50%; background: radial-gradient(circle, rgba(200,16,46,0.28) 0%, transparent 68%); }
    .front-bg-2 { position: absolute; bottom: -70px; left: -70px; width: 240px; height: 240px;
      border-radius: 50%; background: radial-gradient(circle, rgba(201,168,76,0.15) 0%, transparent 68%); }
    .front-grid { position: absolute; inset: 0; opacity: 0.035;
      background-image: linear-gradient(rgba(201,168,76,1) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(201,168,76,1) 1px, transparent 1px);
      background-size: 24px 24px; }
    .front-ring { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
      width: 310px; height: 310px; border: 1px solid rgba(201,168,76,0.11); border-radius: 50%; }
    .front-ring-2 { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
      width: 248px; height: 248px; border: 1px solid rgba(201,168,76,0.07); border-radius: 50%; }
    .front-sash { position: absolute; bottom: 0; right: 0; width: 180px; height: 180px; overflow: hidden; }
    .front-sash::before { content: ''; position: absolute; bottom: -20px; right: -20px;
      width: 180px; height: 180px;
      background: linear-gradient(135deg, transparent 35%, rgba(200,16,46,0.45) 100%); }
    .front-content { position: absolute; inset: 6px 0 4px; display: flex; flex-direction: column;
      align-items: center; justify-content: center; padding: 18px 30px 60px; text-align: center; z-index: 2; }
    .logo-card { background: rgba(255,255,255,0.97); border-radius: 14px; padding: 13px 22px;
      margin-bottom: 18px; box-shadow: 0 14px 44px rgba(0,0,0,0.55), 0 2px 10px rgba(0,0,0,0.2);
      border: 1px solid rgba(201,168,76,0.35); position: relative; }
    .logo-card::after { content: ''; position: absolute; bottom: 0; left: 20%; right: 20%; height: 2px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent); }
    .logo-card img { height: 68px; width: auto; display: block; }
    .ornament { display: flex; align-items: center; gap: 10px; margin: 13px auto; width: 190px; }
    .orn-line { flex: 1; height: 1px; background: linear-gradient(90deg, transparent, rgba(201,168,76,0.6)); }
    .orn-line.rev { background: linear-gradient(270deg, transparent, rgba(201,168,76,0.6)); }
    .orn-diamond { width: 7px; height: 7px; background: var(--gold); transform: rotate(45deg); flex-shrink: 0; }
    .occasion-chip { display: inline-block; border: 1px solid rgba(201,168,76,0.45); color: var(--gold-light);
      border-radius: 50px; padding: 4px 16px; font-size: 7pt; font-weight: 700; letter-spacing: 3px;
      text-transform: uppercase; margin-bottom: 10px; background: rgba(201,168,76,0.08); }
    .firm-name { font-family: 'Cormorant Garamond', serif; font-size: 34pt; font-weight: 800;
      color: #fff; letter-spacing: 4px; text-transform: uppercase; line-height: 1.0;
      text-shadow: 0 4px 18px rgba(0,0,0,0.45); }
    .firm-name em { font-style: normal; color: var(--gold); }
    .firm-tagline { font-size: 7pt; color: rgba(201,168,76,0.8); letter-spacing: 5px;
      text-transform: uppercase; font-weight: 700; margin-top: 7px; }
    /* Mission strip */
    .mission-strip { margin-top: 14px; padding: 10px 16px; border: 1px solid rgba(201,168,76,0.3);
      border-radius: 8px; background: rgba(201,168,76,0.07); text-align: center; }
    .mission-strip p { font-family: 'Cormorant Garamond', serif; font-size: 10.5pt; font-weight: 600;
      font-style: italic; color: rgba(255,255,255,0.88); line-height: 1.45; }
    .mission-strip p span { color: var(--gold); font-style: normal; font-weight: 700; }
    /* Stat cards row */
    .stat-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; margin-top: 14px; width: 100%; }
    .stat-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(201,168,76,0.2);
      border-radius: 10px; padding: 12px 8px 10px; text-align: center; position: relative; overflow: hidden; }
    .stat-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
      background: linear-gradient(90deg, var(--gold), var(--red)); }
    .stat-icon { font-size: 18px; display: block; margin-bottom: 5px; }
    .stat-num { font-family: 'Cormorant Garamond', serif; font-size: 17pt; font-weight: 800;
      color: var(--gold); line-height: 1; }
    .stat-label { font-size: 6pt; font-weight: 700; color: rgba(255,255,255,0.65); letter-spacing: 1.5px;
      text-transform: uppercase; margin-top: 3px; line-height: 1.3; }
    /* Front footer */
    .front-footer { position: absolute; bottom: 4px; left: 0; right: 0;
      background: rgba(0,0,0,0.52); border-top: 1px solid rgba(201,168,76,0.25);
      padding: 7px 20px; display: flex; justify-content: space-between; align-items: center; z-index: 3; }
    .front-footer p { font-size: 6.2pt; color: rgba(255,255,255,0.5); line-height: 1.55; }
    .front-footer p strong { color: rgba(255,255,255,0.8); font-weight: 700; display: block; font-size: 6.5pt; }
    .front-footer .ff-mark { font-family: 'Cormorant Garamond', serif; font-size: 8pt;
      color: var(--gold); font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; text-align: right; }

    /* ============================================================
       PAGE 2 — INSIDE
    ============================================================ */
    .inside { background: var(--white); display: flex; flex-direction: column; }

    /* Top hero band */
    .inside-hero {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 55%, #1c1040 100%);
      padding: 0; position: relative; overflow: hidden; flex-shrink: 0;
    }
    .inside-hero::before { content: ''; position: absolute; top: -50px; right: -50px;
      width: 200px; height: 200px; border-radius: 50%;
      background: radial-gradient(circle, rgba(200,16,46,0.28) 0%, transparent 68%); }
    .inside-hero::after { content: ''; position: absolute; bottom: -30px; left: -30px;
      width: 130px; height: 130px; border-radius: 50%;
      background: radial-gradient(circle, rgba(201,168,76,0.13) 0%, transparent 68%); }
    .hero-top-rule { height: 5px; background: linear-gradient(90deg, var(--gold) 0%, var(--red) 50%, var(--gold-light) 100%); }
    .hero-inner {
      position: relative; z-index: 1; display: flex; align-items: center;
      gap: 0; padding: 0;
    }
    /* Large logo strip on left */
    .hero-logo-strip {
      background: rgba(255,255,255,0.97);
      padding: 16px 18px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      border-right: 3px solid var(--gold);
      position: relative;
    }
    .hero-logo-strip::after {
      content: '';
      position: absolute; right: -1px; top: 15%; bottom: 15%;
      width: 1px; background: rgba(201,168,76,0.4);
    }
    .hero-logo-strip img { height: 78px; width: auto; display: block; }
    /* Text side */
    .hero-text-area {
      flex: 1; padding: 16px 20px;
      display: flex; flex-direction: column; justify-content: center;
    }
    .hero-chip { display: inline-block; background: rgba(201,168,76,0.15);
      border: 1px solid rgba(201,168,76,0.4); border-radius: 50px; padding: 3px 12px;
      font-size: 6.5pt; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
      color: var(--gold-light); margin-bottom: 7px; width: fit-content; }
    .hero-firm { font-family: 'Cormorant Garamond', serif; font-size: 18pt; font-weight: 800;
      color: #fff; letter-spacing: 2px; text-transform: uppercase; line-height: 1; }
    .hero-firm em { color: var(--gold); font-style: normal; }
    .hero-tagline { font-size: 7pt; color: rgba(201,168,76,0.75); letter-spacing: 3px;
      text-transform: uppercase; font-weight: 700; margin-top: 5px; }
    /* Gold dot row */
    .hero-dots {
      display: flex; gap: 5px; margin-top: 9px;
    }
    .hero-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--gold); opacity: 0.5; }
    .hero-dot.red { background: var(--red); opacity: 0.7; }

    /* Body */
    .inside-body { padding: 16px 20px 88px; flex: 1; overflow: hidden; }

    /* Greeting */
    .greet-h { font-family: 'Cormorant Garamond', serif; font-size: 16.5pt; font-weight: 700;
      color: var(--navy); line-height: 1.2; margin-bottom: 7px; }
    .greet-h em { color: var(--red); font-style: normal; }
    .accent-line { width: 48px; height: 3px; background: linear-gradient(90deg, var(--red), var(--gold));
      border-radius: 2px; margin-bottom: 11px; }

    /* message */
    .msg { font-size: 7.8pt; color: var(--gray-700); line-height: 1.78; }
    .msg + .msg { margin-top: 7px; }
    .msg strong { color: var(--navy); font-weight: 700; }

    /* Pull quote */
    .pull-quote {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 100%);
      border-radius: 10px; padding: 12px 15px 12px 19px; margin: 11px 0;
      position: relative; overflow: hidden;
    }
    .pull-quote::before { content: '\201C'; position: absolute; top: -8px; left: 8px;
      font-family: 'Cormorant Garamond', serif; font-size: 60pt;
      color: rgba(201,168,76,0.13); line-height: 1; }
    .pull-quote::after { content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 3px;
      background: linear-gradient(180deg, var(--gold), var(--red)); }
    .pull-quote p { font-size: 7.8pt; color: rgba(255,255,255,0.88); font-style: italic; line-height: 1.65;
      position: relative; z-index: 1; }
    .pull-quote cite { display: block; font-size: 6pt; color: var(--gold); font-style: normal;
      font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 5px; }

    /* Section heading */
    .sec-label { font-size: 7pt; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase;
      color: var(--red); margin: 11px 0 7px; display: flex; align-items: center; gap: 8px; }
    .sec-label::after { content: ''; flex: 1; height: 1px; background: var(--gray-200); }

    /* Practice grid */
    .pa-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 5px; margin-bottom: 11px; }
    .pa-item { background: var(--gray-100); border: 1px solid var(--gray-200); border-radius: 6px;
      padding: 7px 4px; text-align: center; font-size: 6.2pt; color: var(--navy); font-weight: 700;
      line-height: 1.3; position: relative; overflow: hidden; }
    .pa-item::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
      background: linear-gradient(90deg, var(--red), var(--navy-mid)); }
    .pa-item .ico { font-size: 12px; display: block; margin-bottom: 2px; }

    /* Contact grid */
    .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 6px; margin-bottom: 10px; }
    .c-pill { display: flex; align-items: flex-start; gap: 8px; background: var(--navy-faint);
      border: 1px solid rgba(15,36,65,0.1); border-radius: 8px; padding: 8px 10px; }
    .c-pill-icon { width: 24px; height: 24px; background: var(--navy); border-radius: 6px;
      display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px; }
    .c-label { font-size: 6pt; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
      color: var(--gold); display: block; margin-bottom: 1px; }
    .c-val { font-size: 7pt; color: var(--navy); font-weight: 600; line-height: 1.4; }

    /* Closing row */
    .closing-row { display: flex; align-items: flex-end; justify-content: space-between;
      padding-top: 9px; border-top: 1px solid var(--gray-200); margin-top: 8px; }
    .closing-text { font-size: 7.5pt; color: var(--gray-500); margin-bottom: 3px; }
    .sig-name { font-family: 'Cormorant Garamond', serif; font-size: 14pt; font-weight: 700;
      color: var(--navy); font-style: italic; line-height: 1; }
    .sig-title { font-size: 5.8pt; font-weight: 700; color: var(--red);
      text-transform: uppercase; letter-spacing: 1.5px; margin-top: 3px; }
    /* Seal */
    .seal { width: 52px; height: 52px; border: 1.5px solid rgba(201,168,76,0.5); border-radius: 50%;
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      text-align: center; background: rgba(201,168,76,0.04); padding: 4px; flex-shrink: 0; }
    .seal-text { font-size: 5pt; font-weight: 800; color: var(--navy);
      text-transform: uppercase; letter-spacing: 0.5px; line-height: 1.3; }
    .seal-line { width: 24px; height: 1px; background: var(--gold); margin: 2px auto; }
    .seal-year { font-family: 'Cormorant Garamond', serif; font-size: 9pt; font-weight: 700; color: var(--gold); }

    /* Inside footer */
    .inside-footer { position: absolute; bottom: 0; left: 0; right: 0;
      background: var(--dark); border-top: 3px solid var(--red); padding: 7px 18px;
      display: flex; justify-content: space-between; align-items: center; z-index: 3; }
    .inside-footer p { font-size: 5.8pt; color: rgba(255,255,255,0.52); line-height: 1.65; }
    .if-mark { font-family: 'Cormorant Garamond', serif; font-size: 9pt; color: var(--gold);
      letter-spacing: 1.5px; text-align: right; font-weight: 700; text-transform: uppercase; flex-shrink: 0; }

    /* ===== PRINT ===== */
    @media print {
      @page { size: 148mm 210mm; margin: 0; }
      html { background: none; }
      body { padding: 0; display: block; background: none; }
      .print-bar, .page-tag { display: none !important; }
      .cards-wrap { gap: 0; display: block; }
      .card { width: 148mm; height: 210mm; page-break-after: always; box-shadow: none; break-after: page; }
      .card:last-child { page-break-after: avoid; break-after: avoid; }
      * { -webkit-print-color-adjust: exact !important; print-color-adjust: exact !important; }
    }
    @media screen and (max-width: 580px) {
      .card { transform: scale(0.8); transform-origin: top center; margin-bottom: -42mm; }
    }
  </style>
</head>
<body>

  <!-- PRINT BAR -->
  <div class="print-bar">
    <div class="pb-brand">
      <div class="pb-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
      <div>
        <strong>NB Yaseen ADVOCATES</strong>
        <span>Greeting Card &nbsp;·&nbsp; A5 Print-Ready &nbsp;·&nbsp; 2 Pages</span>
      </div>
    </div>
    <div class="pb-actions">
      <button class="pb-btn ghost" onclick="document.getElementById('help').style.display='flex'">ℹ️ &nbsp;Tips</button>
      <button class="pb-btn primary" onclick="window.print()">🖨️ &nbsp;Print / Save as PDF</button>
    </div>
  </div>

  <div class="cards-wrap">

    <!-- ============================
         PAGE 1 — FRONT COVER
    ============================= -->
    <div class="page-tag">Page 1 of 2 &nbsp;—&nbsp; Front Cover</div>
    <div class="card front">
      <div class="front-gold-rule"></div>
      <div class="front-bg-1"></div>
      <div class="front-bg-2"></div>
      <div class="front-grid"></div>
      <div class="front-ring"></div>
      <div class="front-ring-2"></div>
      <div class="front-sash"></div>

      <div class="front-content">
        <div class="logo-card">
          <img src="{{ asset('logo.png') }}" alt="NB Yaseen ADVOCATES" />
        </div>

        <div class="occasion-chip">✦ &nbsp; Client Appreciation &nbsp; ✦</div>

        <div class="firm-name">NB Yaseen<br><em>Advocates</em></div>
        <div class="firm-tagline">Digital &nbsp;·&nbsp; Fast &nbsp;·&nbsp; Diligent</div>

        <div class="ornament">
          <div class="orn-line"></div>
          <div class="orn-diamond"></div>
          <div class="orn-line rev"></div>
        </div>

        <!-- Mission statement -->
        <div class="mission-strip">
          <p>To deliver <span>exceptional digital &amp; physical legal services</span><br>that exceed client expectations — every time.</p>
        </div>

        <!-- Stat cards -->
        <div class="stat-cards">
          <div class="stat-card">
            <span class="stat-icon">⚖️</span>
            <div class="stat-num">12</div>
            <div class="stat-label">Practice<br>Areas</div>
          </div>
          <div class="stat-card">
            <span class="stat-icon">💻</span>
            <div class="stat-num">100<span style="font-size:11pt">%</span></div>
            <div class="stat-label">Digital-First<br>Service</div>
          </div>
          <div class="stat-card">
            <span class="stat-icon">🌍</span>
            <div class="stat-num">6+</div>
            <div class="stat-label">East Africa<br>Countries</div>
          </div>
        </div>
      </div>

      <div class="front-footer">
        <p><strong>NB Yaseen ADVOCATES</strong>Diamond Plaza, Nairobi, Kenya &nbsp;·&nbsp; P.O Box 38556-00623<br>+254 732 355 157 &nbsp;|&nbsp; info@nbyadvocates.com &nbsp;|&nbsp; www.nbyadvocates.com</p>
        <div class="ff-mark">Cutting Edge<br>Legal Services</div>
      </div>
      <div class="front-bottom-rule"></div>
    </div>


    <!-- ============================
         PAGE 2 — INSIDE MESSAGE
    ============================= -->
    <div class="page-tag">Page 2 of 2 &nbsp;—&nbsp; Inside Message</div>
    <div class="card inside">

      <!-- Hero banner with big logo -->
      <div class="inside-hero">
        <div class="hero-top-rule"></div>
        <div class="hero-inner">

          <!-- Logo strip -->
          <div class="hero-logo-strip">
            <img src="{{ asset('logo.png') }}" alt="Logo" />
          </div>

          <!-- Text area -->
          <div class="hero-text-area">
            <div class="hero-chip">A Message From Our Firm</div>
            <div class="hero-firm">NB Yaseen <em>Advocates</em></div>
            <div class="hero-tagline">Digital &nbsp;·&nbsp; Fast &nbsp;·&nbsp; Diligent</div>
            <div class="hero-dots">
              <div class="hero-dot red"></div>
              <div class="hero-dot"></div>
              <div class="hero-dot"></div>
              <div class="hero-dot red"></div>
              <div class="hero-dot"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Body content -->
      <div class="inside-body">

        <div class="greet-h">Dear <em>Valued Client</em> &amp; Esteemed Partner,</div>
        <div class="accent-line"></div>

        <p class="msg">
          On behalf of the entire team at <strong>NB Yaseen ADVOCATES</strong>, we extend our warmest greetings and heartfelt appreciation for the trust and confidence you have placed in us.
        </p>

        <div class="pull-quote">
          <p>"You will not be just another file on the desk — you will have a dedicated legal partner at your service."</p>
          <cite>— NB Yaseen ADVOCATES</cite>
        </div>

        <p class="msg">
          As your dedicated legal partners, we remain committed to delivering <strong>exceptional, digital-first legal services</strong> — tailored to your unique needs, whether in Nairobi or across the globe. We look forward to serving you with the integrity and passion that defines everything we do.
        </p>

        <!-- Practice Areas -->
        <div class="sec-label">Our Practice Areas</div>
        <div class="pa-grid">
          <div class="pa-item"><span class="ico">🏢</span>Commercial Law</div>
          <div class="pa-item"><span class="ico">🏠</span>Conveyancing</div>
          <div class="pa-item"><span class="ico">👨‍👩‍👧</span>Family Law</div>
          <div class="pa-item"><span class="ico">⚖️</span>Criminal Lit.</div>
          <div class="pa-item"><span class="ico">💼</span>Employment</div>
          <div class="pa-item"><span class="ico">🌙</span>Islamic Law</div>
          <div class="pa-item"><span class="ico">🤝</span>Mediation</div>
          <div class="pa-item"><span class="ico">🔍</span>Due Diligence</div>
        </div>

        <!-- Contact Details -->
        <div class="sec-label">Get in Touch</div>
        <div class="contact-grid">
          <div class="c-pill">
            <div class="c-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2.5" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <span class="c-label">Office</span>
              <span class="c-val">Diamond Plaza, Nairobi<br>P.O Box 38556-00623</span>
            </div>
          </div>
          <div class="c-pill">
            <div class="c-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2.5" stroke-linecap="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 10.23 19.79 19.79 0 0 1 1.61 1.6A2 2 0 0 1 3.6 0h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 7.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <span class="c-label">Phone / WhatsApp</span>
              <span class="c-val">+254 732 355 157</span>
            </div>
          </div>
          <div class="c-pill">
            <div class="c-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2.5" stroke-linecap="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <span class="c-label">Email</span>
              <span class="c-val">info@nbyadvocates.com</span>
            </div>
          </div>
          <div class="c-pill">
            <div class="c-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <div>
              <span class="c-label">Website</span>
              <span class="c-val">www.nbyadvocates.com</span>
            </div>
          </div>
        </div>

        <!-- Closing row -->
        <div class="closing-row">
          <div>
            <div class="closing-text">With warm regards,</div>
            <div class="sig-name">NB Yaseen ADVOCATES</div>
            <div class="sig-title">The Legal Team &nbsp;·&nbsp; Nairobi, Kenya</div>
          </div>
          <div class="seal">
            <div class="seal-text">NBY<br>ADVOCATES</div>
            <div class="seal-line"></div>
            <div class="seal-year">2026</div>
          </div>
        </div>

      </div><!-- /.inside-body -->

      <!-- Inside footer -->
      <div class="inside-footer">
        <p>
          NB Yaseen ADVOCATES &nbsp;|&nbsp; Diamond Plaza, Nairobi &nbsp;|&nbsp; P.O Box 38556-00623, Kenya<br>
          +254 732 355 157 &nbsp;|&nbsp; info@nbyadvocates.com &nbsp;|&nbsp; www.nbyadvocates.com
        </p>
        <div class="if-mark">Kenya &amp;<br>East Africa</div>
      </div>

    </div><!-- /.inside -->

  </div><!-- /.cards-wrap -->

  <!-- Help modal -->
  <div id="help" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.82);z-index:9999;align-items:center;justify-content:center;">
    <div style="background:#fff;border-radius:14px;padding:32px 36px;max-width:420px;width:92%;position:relative;font-family:Inter,sans-serif;">
      <button onclick="document.getElementById('help').style.display='none'" style="position:absolute;top:12px;right:16px;background:none;border:none;font-size:18px;cursor:pointer;color:#9ca3af;">✕</button>
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:800;color:#0F2441;margin-bottom:14px;">How to Print / Save as PDF</h2>
      <ol style="font-size:13px;color:#374151;line-height:2.2;padding-left:18px;">
        <li>Click <strong>Print / Save as PDF</strong> above</li>
        <li>Set <strong>Paper size → A5</strong></li>
        <li>Set <strong>Margins → None</strong> (or Minimum)</li>
        <li>Enable <strong>"Background graphics"</strong></li>
        <li>Choose <strong>Save as PDF</strong> or your printer</li>
        <li>Print both pages on opposite sides of card stock</li>
      </ol>
      <div style="margin-top:14px;padding:10px 14px;background:#FFF1F3;border-radius:8px;border-left:3px solid #C8102E;font-size:12px;color:#7F1D1D;">
        💡 Use <strong>200-300 gsm</strong> card stock for a premium physical feel.
      </div>
    </div>
  </div>
  <script>
    document.getElementById('help').addEventListener('click', function(e) {
      if (e.target === this) this.style.display = 'none';
    });
  </script>
</body>
</html>
