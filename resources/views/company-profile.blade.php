<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NB Yaseen ADVOCATES – Company Profile</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <style>
    /* ===== RESET ===== */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }


    :root {
      --red: #C8102E;
      --red-light: #E5193A;
      --red-faint: #FFF1F3;
      --red-border: #FECDD6;
      --navy: #0F2441;
      --navy-mid: #1E3A5F;
      --gold: #C9A84C;
      --gold-light: #F5E6C0;
      --dark: #0D1117;
      --gray-700: #374151;
      --gray-500: #6B7280;
      --gray-200: #E5E7EB;
      --gray-100: #F3F4F6;
      --gray-50: #F9FAFB;
      --white: #FFFFFF;
    }

    html {
      font-size: 10pt;
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--dark);
      background: var(--white);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    /* ===== PDF PAGE SETUP ===== */
    @page {
      size: A4;
      margin: 0;
    }

    @media print {
      body {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
      }

      .page {
        page-break-after: always;
      }

      .page:last-child {
        page-break-after: avoid;
      }

      .no-print {
        display: none !important;
      }

      @media screen {
        body {
          padding-top: 0;
        }
      }
    }

    /* ===== LAYOUT ===== */
    .page {
      width: 210mm;
      min-height: 297mm;
      position: relative;
      overflow: hidden;
      background: var(--white);
    }

    @media screen {
      body {
        background: #94A3B8;
        padding: 48px 0 40px;
      }

      .page {
        max-width: 210mm;
        margin: 0 auto 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.28), 0 4px 16px rgba(0, 0, 0, 0.12);
      }
    }

    /* ===== PRINT BAR ===== */
    .print-bar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
      background: var(--navy);
      padding: 10px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 2px solid var(--gold);
    }

    .print-bar .pb-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .print-bar .pb-logo {
      height: 26px;
      width: auto;
      filter: brightness(0) invert(1);
    }

    .print-bar span {
      color: rgba(255, 255, 255, 0.85);
      font-size: 12px;
      font-weight: 400;
    }

    .print-bar strong {
      color: #fff;
      font-size: 14px;
      font-weight: 800;
      letter-spacing: 0.5px;
    }

    .print-bar button {
      background: var(--red);
      color: #fff;
      border: none;
      padding: 8px 24px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 0.5px;
      transition: background 0.2s;
    }

    .print-bar button:hover {
      background: var(--red-light);
    }

    @media print {
      .print-bar {
        display: none !important;
      }
    }

    /* ===== SHARED UTILITY ===== */
    .accent-line {
      width: 48px;
      height: 3px;
      background: linear-gradient(90deg, var(--red), var(--gold));
      border-radius: 2px;
      margin: 8px 0 16px;
    }

    .accent-line.wide {
      width: 64px;
    }

    .section-chip {
      display: inline-block;
      background: var(--red-faint);
      color: var(--red);
      font-size: 7pt;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 4px 12px;
      border-radius: 50px;
      margin-bottom: 8px;
    }

    /* ============================================================
       PAGE 1 — COVER
    ============================================================ */
    .cover {
      display: flex;
      flex-direction: column;
      min-height: 297mm;
      background: var(--navy);
      position: relative;
    }

    /* Geometric background shapes */
    .cover::before {
      content: '';
      position: absolute;
      top: -60px;
      right: -60px;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(200, 16, 46, 0.18) 0%, transparent 70%);
    }

    .cover::after {
      content: '';
      position: absolute;
      bottom: 100px;
      left: -80px;
      width: 280px;
      height: 280px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 168, 76, 0.10) 0%, transparent 70%);
    }

    /* Diagonal red sash */
    .cover-sash {
      position: absolute;
      top: 0;
      right: 0;
      width: 260px;
      height: 260px;
      overflow: hidden;
      z-index: 0;
    }

    .cover-sash::before {
      content: '';
      position: absolute;
      top: -40px;
      right: -40px;
      width: 260px;
      height: 260px;
      background: linear-gradient(135deg, var(--red) 0%, #8B0000 100%);
      clip-path: polygon(100% 0, 100% 100%, 0 100%);
      opacity: 0.85;
    }

    /* Gold horizontal rule */
    .cover-gold-rule {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(90deg, var(--gold) 0%, var(--red) 55%, transparent 100%);
    }

    .cover-content {
      position: relative;
      z-index: 1;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 60px 50px 40px;
      text-align: center;
    }

    .cover-logo-card {
      background: rgba(255, 255, 255, 0.97);
      border-radius: 18px;
      padding: 24px 36px 20px;
      margin-bottom: 42px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.45), 0 4px 16px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(201, 168, 76, 0.35);
      position: relative;
    }

    .cover-logo-card::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 20%;
      right: 20%;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      border-radius: 1px;
    }

    .cover-logo-card img {
      height: 120px;
      width: auto;
      display: block;
    }

    .cover-firm-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 46pt;
      font-weight: 800;
      color: #fff;
      letter-spacing: 4px;
      text-transform: uppercase;
      line-height: 1.1;
      text-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .cover-firm-name em {
      font-style: normal;
      color: var(--gold);
    }

    .cover-tagline {
      font-size: 10pt;
      color: var(--gold);
      letter-spacing: 6px;
      text-transform: uppercase;
      font-weight: 700;
      margin-top: 14px;
    }

    .cover-divider {
      display: flex;
      align-items: center;
      gap: 14px;
      margin: 28px auto;
      width: 260px;
    }

    .cover-divider-line {
      flex: 1;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(201, 168, 76, 0.6));
    }

    .cover-divider-line.rev {
      background: linear-gradient(270deg, transparent, rgba(201, 168, 76, 0.6));
    }

    .cover-divider-diamond {
      width: 8px;
      height: 8px;
      background: var(--gold);
      transform: rotate(45deg);
      flex-shrink: 0;
    }

    .cover-doc-label {
      font-size: 11pt;
      color: rgba(255, 255, 255, 0.85);
      font-weight: 300;
      letter-spacing: 6px;
      text-transform: uppercase;
    }

    .cover-pills {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      margin-top: 36px;
    }

    .pill {
      border: 1px solid rgba(201, 168, 76, 0.45);
      color: rgba(255, 255, 255, 0.8);
      border-radius: 4px;
      padding: 5px 14px;
      font-size: 7.5pt;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
    }

    .cover-footer {
      position: relative;
      z-index: 1;
      background: rgba(0, 0, 0, 0.5);
      border-top: 1px solid rgba(201, 168, 76, 0.25);
      padding: 18px 44px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .cover-footer-contact p {
      color: rgba(255, 255, 255, 0.75);
      font-size: 8.5pt;
      line-height: 1.65;
    }

    .cover-footer-contact p strong {
      color: #fff;
      font-size: 9pt;
      display: block;
      margin-bottom: 2px;
    }

    .cover-footer-mark {
      font-family: 'Cormorant Garamond', serif;
      font-size: 11pt;
      color: var(--gold);
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 600;
    }

    /* ============================================================
       INNER PAGE HEADER
    ============================================================ */
    .page-header {
      height: 58px;
      background: var(--navy);
      display: flex;
      align-items: stretch;
      position: relative;
      overflow: hidden;
    }

    /* red left accent stripe */
    .page-header::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 5px;
      background: linear-gradient(180deg, var(--gold), var(--red));
    }

    .page-header-text {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 0 24px 0 28px;
    }

    .ph-firm {
      font-family: 'Cormorant Garamond', serif;
      font-size: 15pt;
      font-weight: 800;
      color: #fff;
      letter-spacing: 2px;
      text-transform: uppercase;
      line-height: 1;
    }

    .ph-section {
      font-size: 8.5pt;
      color: var(--gold);
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 700;
      margin-top: 5px;
    }

    .page-header-logo-wrap {
      background: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 18px;
    }

    .page-header-logo-wrap img {
      height: 36px;
      width: auto;
    }

    /* ============================================================
       INNER PAGE FOOTER
    ============================================================ */
    .page-footer {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 40px;
      background: var(--dark);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 28px;
      border-top: 2px solid var(--red);
    }

    .page-footer p {
      font-size: 8.5pt;
      color: rgba(255, 255, 255, 0.85);
      letter-spacing: 1px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .page-footer .pf-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 15pt;
      font-weight: 700;
      color: rgba(255, 255, 255, 0.12);
      line-height: 1;
    }

    .page-footer .pf-dot {
      width: 6px;
      height: 6px;
      background: var(--gold);
      border-radius: 50%;
    }

    /* ============================================================
       CONTENT
    ============================================================ */
    .content {
      padding: 24px 34px 56px;
    }

    /* Section headings */
    .sec-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20pt;
      font-weight: 700;
      color: var(--navy);
      letter-spacing: 0.5px;
      line-height: 1.1;
    }

    .sec-title.sm {
      font-size: 15pt;
    }

    /* ============================================================
       PAGE 2 – ABOUT US
    ============================================================ */
    .about-grid {
      display: grid;
      grid-template-columns: 3fr 2fr;
      gap: 26px;
      margin-top: 18px;
    }

    .about-text p {
      font-size: 9.5pt;
      color: var(--gray-700);
      margin-bottom: 11px;
      text-align: justify;
      line-height: 1.75;
    }

    .about-text p .hl {
      color: var(--red);
      font-weight: 700;
    }

    .about-text p .hl-navy {
      color: var(--navy-mid);
      font-weight: 700;
    }

    /* Fact cards */
    .fact-stack {
      display: flex;
      flex-direction: column;
      gap: 11px;
    }

    .fact-card {
      background: var(--navy);
      border-radius: 10px;
      padding: 13px 16px;
      position: relative;
      overflow: hidden;
    }

    .fact-card::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: var(--gold);
    }

    .fact-card h4 {
      font-size: 7pt;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: var(--gold);
      margin-bottom: 4px;
      padding-left: 10px;
    }

    .fact-card p {
      font-size: 8.5pt;
      color: rgba(255, 255, 255, 0.8);
      line-height: 1.5;
      padding-left: 10px;
    }

    /* Values section */
    .values-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      margin-top: 18px;
    }

    .val-card {
      text-align: center;
      background: var(--white);
      border: 1px solid var(--gray-200);
      border-radius: 10px;
      padding: 14px 8px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.055);
      position: relative;
      overflow: hidden;
    }

    .val-card::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 20%;
      right: 20%;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--red), transparent);
    }

    .val-card .icon-wrap {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 8px;
    }

    .val-card h5 {
      font-size: 8pt;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--navy);
    }

    .val-card p {
      font-size: 7.5pt;
      color: var(--gray-500);
      margin-top: 3px;
      line-height: 1.45;
    }

    /* ============================================================
       PAGE 3 – MVV + WHY US
    ============================================================ */
    .mvv-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
      margin-top: 18px;
    }

    .mvv-card {
      border-radius: 12px;
      padding: 20px 16px 16px;
      position: relative;
      overflow: hidden;
    }

    .mvv-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
    }

    .mvv-card.blue {
      background: #EFF6FF;
      border: 1px solid #BFDBFE;
    }

    .mvv-card.blue::before {
      background: linear-gradient(90deg, #1D4ED8, #60A5FA);
    }

    .mvv-card.green {
      background: #F0FDF4;
      border: 1px solid #BBF7D0;
    }

    .mvv-card.green::before {
      background: linear-gradient(90deg, #15803D, #4ADE80);
    }

    .mvv-card.maroon {
      background: var(--red-faint);
      border: 1px solid var(--red-border);
    }

    .mvv-card.maroon::before {
      background: linear-gradient(90deg, var(--red), var(--gold));
    }

    .mvv-badge {
      font-size: 6.5pt;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 6px;
      display: block;
    }

    .mvv-card.blue .mvv-badge {
      color: #1D4ED8;
    }

    .mvv-card.green .mvv-badge {
      color: #15803D;
    }

    .mvv-card.maroon .mvv-badge {
      color: var(--red);
    }

    .mvv-card h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 14pt;
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 10px;
    }

    .mvv-card>p {
      font-size: 8.5pt;
      color: var(--gray-700);
      line-height: 1.65;
    }

    .mvv-sep {
      height: 1px;
      background: rgba(0, 0, 0, 0.08);
      margin: 12px 0 8px;
    }

    .mvv-tag {
      font-size: 7.5pt;
      font-weight: 700;
      font-style: italic;
    }

    .mvv-card.blue .mvv-tag {
      color: #1D4ED8;
    }

    .mvv-card.green .mvv-tag {
      color: #15803D;
    }

    .mvv-card.maroon .mvv-tag {
      color: var(--red);
    }

    /* Why Us */
    .why-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-top: 16px;
    }

    .why-item {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      background: var(--gray-50);
      border-radius: 8px;
      padding: 10px 12px;
      border: 1px solid var(--gray-200);
    }

    .why-num {
      flex-shrink: 0;
      width: 26px;
      height: 26px;
      background: linear-gradient(135deg, var(--red), #8B0000);
      color: #fff;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 8pt;
      font-weight: 800;
    }

    .why-item h4 {
      font-size: 8.5pt;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 2px;
    }

    .why-item p {
      font-size: 7.5pt;
      color: var(--gray-500);
      line-height: 1.5;
    }

    /* ============================================================
       PAGE 4 – PRACTICE AREAS
    ============================================================ */
    .pa-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 11px;
      margin-top: 18px;
    }

    .pa-card {
      background: var(--white);
      border: 1px solid var(--gray-200);
      border-radius: 10px;
      padding: 13px 13px 11px;
      position: relative;
      overflow: hidden;
    }

    .pa-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--red), var(--navy-mid));
    }

    .pa-card h4 {
      font-size: 8.5pt;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 5px;
    }

    .pa-card p {
      font-size: 7.5pt;
      color: var(--gray-500);
      line-height: 1.55;
    }

    /* ============================================================
       PAGE 5 – TEAM & DIASPORA
    ============================================================ */
    .team-pull-quote {
      background: var(--navy);
      border-radius: 12px;
      padding: 20px 24px;
      margin-bottom: 14px;
      position: relative;
      overflow: hidden;
    }

    .team-pull-quote::before {
      content: '"';
      position: absolute;
      top: -14px;
      left: 12px;
      font-family: 'Cormorant Garamond', serif;
      font-size: 90pt;
      color: rgba(201, 168, 76, 0.12);
      line-height: 1;
    }

    .team-pull-quote p {
      font-size: 9.5pt;
      font-style: italic;
      color: rgba(255, 255, 255, 0.88);
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }

    .team-para {
      font-size: 9pt;
      color: var(--gray-700);
      line-height: 1.75;
      margin-bottom: 10px;
      text-align: justify;
    }

    .team-para .hl {
      color: var(--red);
      font-weight: 700;
    }

    .team-para:last-child {
      margin-bottom: 0;
    }

    .approach-box {
      background: linear-gradient(135deg, #F9FAFB 0%, #FFF1F3 100%);
      border: 1px solid var(--red-border);
      border-radius: 10px;
      padding: 14px 18px;
      margin: 16px 0;
    }

    .approach-box p {
      font-size: 8.5pt;
      color: var(--gray-700);
      line-height: 1.7;
      font-style: italic;
    }

    .diaspora-box {
      background: linear-gradient(135deg, #EFF6FF 0%, #F0FFFE 100%);
      border: 1px solid #BFDBFE;
      border-radius: 12px;
      padding: 18px 20px;
      margin-top: 6px;
    }

    .diaspora-box p {
      font-size: 9pt;
      color: var(--gray-700);
      line-height: 1.75;
      margin-bottom: 9px;
      text-align: justify;
    }

    .diaspora-box p:last-child {
      margin-bottom: 0;
    }

    .diaspora-box .hl-r {
      color: var(--red);
      font-weight: 700;
    }

    .diaspora-box .hl-b {
      font-weight: 700;
    }

    /* ============================================================
       PAGE 6 – CONTACT
    ============================================================ */
    .contact-hero {
      background: linear-gradient(135deg, var(--navy) 0%, #152B4A 100%);
      border-radius: 14px;
      padding: 26px 28px;
      margin-top: 16px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      position: relative;
      overflow: hidden;
    }

    .contact-hero::before {
      content: '';
      position: absolute;
      top: -40px;
      right: -40px;
      width: 180px;
      height: 180px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(200, 16, 46, 0.18) 0%, transparent 70%);
    }

    .c-item {
      position: relative;
      z-index: 1;
    }

    .c-icon {
      width: 34px;
      height: 34px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(201, 168, 76, 0.35);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 8px;
    }

    .c-item h5 {
      font-size: 7pt;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 5px;
    }

    .c-item p,
    .c-item a {
      font-size: 8.5pt;
      color: rgba(255, 255, 255, 0.82);
      text-decoration: none;
      line-height: 1.6;
      display: block;
    }

    .c-item a:hover {
      color: #fff;
    }

    /* CTA banner */
    .cta-banner {
      background: linear-gradient(90deg, var(--red) 0%, #8B0000 100%);
      border-radius: 10px;
      padding: 18px 24px;
      margin-top: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      position: relative;
      overflow: hidden;
    }

    .cta-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 4px;
      background: var(--gold);
    }

    .cta-text h4 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 14pt;
      font-weight: 700;
      color: #fff;
      margin-bottom: 2px;
    }

    .cta-text p {
      font-size: 8pt;
      color: rgba(255, 255, 255, 0.75);
    }

    .cta-badge {
      border: 1.5px solid rgba(201, 168, 76, 0.6);
      color: var(--gold);
      border-radius: 6px;
      padding: 8px 20px;
      font-size: 8pt;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      white-space: nowrap;
      background: rgba(201, 168, 76, 0.08);
    }

    /* Confidentiality */
    .conf-box {
      background: #FFF7F7;
      border: 1px solid var(--red-border);
      border-radius: 10px;
      padding: 13px 16px;
      margin-top: 14px;
    }

    .conf-box h5 {
      font-size: 7.5pt;
      font-weight: 800;
      color: #7F1D1D;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 4px;
    }

    .conf-box p {
      font-size: 7.5pt;
      color: #991B1B;
      line-height: 1.6;
    }

    /* Regional grid */
    .region-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-top: 14px;
    }

    .region-card {
      background: var(--gray-50);
      border: 1px solid var(--gray-200);
      border-radius: 10px;
      padding: 13px 14px;
    }

    .region-card h5 {
      font-size: 8pt;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 5px;
    }

    .region-card p {
      font-size: 7.5pt;
      color: var(--gray-500);
      line-height: 1.55;
    }

    /* Cover closing mark */
    .closing-mark {
      text-align: center;
      margin-top: 22px;
      padding-top: 18px;
      border-top: 1px solid var(--gray-200);
    }

    .closing-mark .cm-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20pt;
      font-weight: 800;
      color: var(--navy);
      letter-spacing: 3px;
      text-transform: uppercase;
    }

    .closing-mark .cm-tag {
      font-size: 9pt;
      color: var(--red);
      font-weight: 800;
      letter-spacing: 5px;
      text-transform: uppercase;
      margin-top: 4px;
    }

    .cm-rule {
      width: 50px;
      height: 2px;
      background: linear-gradient(90deg, var(--red), var(--gold));
      border-radius: 1px;
      margin: 8px auto 0;
    }
  </style>
</head>

<body>

  <!-- PRINT BAR -->
  <div class="print-bar no-print">
    <div class="pb-left">
      <img class="pb-logo" src="{{ asset('logo.png') }}" alt="Logo" />
      <div>
        <strong>NB Yaseen ADVOCATES</strong>
        <span>&nbsp;— Company Profile &nbsp;|&nbsp; File → Print → Save as PDF</span>
      </div>
    </div>
    <button onclick="window.print()">🖨&nbsp;&nbsp;Save as PDF</button>
  </div>


  <!-- ============================================================
     PAGE 1 – COVER
============================================================ -->
  <div class="page">
    <div class="cover">
      <div class="cover-gold-rule"></div>
      <div class="cover-sash"></div>

      <div class="cover-content">
        <!-- Logo card -->
        <div class="cover-logo-card">
          <img src="{{ asset('logo.png') }}" alt="NB Yaseen ADVOCATES" />
        </div>

        <div class="cover-firm-name">NB Yaseen<br /><em>Advocates</em></div>
        <div class="cover-tagline">Digital &nbsp;·&nbsp; Fast &nbsp;·&nbsp; Diligent</div>

        <div class="cover-divider">
          <div class="cover-divider-line"></div>
          <div class="cover-divider-diamond"></div>
          <div class="cover-divider-line rev"></div>
        </div>

        <div class="cover-doc-label">Company Profile</div>

        <div class="cover-pills">
          <div class="pill">Commercial Law</div>
          <div class="pill">Family Law</div>
          <div class="pill">Conveyancing</div>
          <div class="pill">Corporate</div>
          <div class="pill">Criminal Litigation</div>
          <div class="pill">Mediation</div>
          <div class="pill">Islamic Law</div>
          <div class="pill">Due Diligence</div>
        </div>
      </div>

      <div class="cover-footer">
        <div class="cover-footer-contact">
          <p><strong>NB Yaseen ADVOCATES</strong>
            Diamond Plaza, Nairobi, Kenya &nbsp;|&nbsp; P.O Box 38556-00623<br />
            +254 732 355 157 &nbsp;|&nbsp; info@nbyadvocates.com &nbsp;|&nbsp; www.nbyadvocates.com</p>
        </div>
        <div class="cover-footer-mark">Cutting Edge Legal Services</div>
      </div>
    </div>
  </div>


  <!-- ============================================================
     PAGE 2 – ABOUT US
============================================================ -->
  <div class="page">
    <div class="page-header">
      <div class="page-header-text">
        <div class="ph-firm">NB Yaseen ADVOCATES</div>
        <div class="ph-section">About Us</div>
      </div>
      <div class="page-header-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
    </div>

    <div class="content">
      <div class="section-chip">WHO WE ARE</div>
      <div class="sec-title">About the Firm</div>
      <div class="accent-line wide"></div>

      <div class="about-grid">
        <div class="about-text">
          <p>
            <span class="hl">NB Yaseen ADVOCATES</span> is a forward-thinking law firm committed to
            delivering strategic, innovative, and client-centric legal services.
            With our offices in Diamond Plaza, Nairobi, Kenya, we pride ourselves
            with being exceptionally <span class="hl">DIGITAL, FAST</span> and
            <span class="hl">DILIGENT.</span>
          </p>
          <p>
            To address the growing need for both efficient and effective legal
            support, we leverage cutting-edge digital tools and technologies to
            enhance our service delivery, ensuring that our clients receive timely,
            accurate, and exceptional legal solutions, whether online or in-office.
          </p>
          <p>
            What's more? We understand that the world is constantly evolving, and
            with it, the legal landscape. For clients with interests in the wider
            East African region, we have a vast and reliable network of partner law
            firms across the region to serve you.
          </p>
        </div>

        <div class="fact-stack">
          <div class="fact-card">
            <h4>Our Office</h4>
            <p>Diamond Plaza, Nairobi<br />P.O Box 38556-00623, Kenya</p>
          </div>
          <div class="fact-card">
            <h4>Jurisdiction</h4>
            <p>Kenya &amp; East African Region</p>
          </div>
          <div class="fact-card">
            <h4>Practice Areas</h4>
            <p>12 specialist practice areas across civil, commercial and personal law</p>
          </div>
          <div class="fact-card">
            <h4>Approach</h4>
            <p>Digital-first · Personalised · Cross-border</p>
          </div>
        </div>
      </div>

      <!-- Core Values -->
      <div style="margin-top:20px;">
        <div class="section-chip">OUR VALUES</div>
        <div class="sec-title sm">Core Values</div>
        <div class="accent-line"></div>
      </div>

      <div class="values-row">
        <div class="val-card">
          <div class="icon-wrap" style="background:#FEE2E2;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h5>Trusted</h5>
          <p>Reliable legal representation you can count on</p>
        </div>
        <div class="val-card">
          <div class="icon-wrap" style="background:#DBEAFE;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1D4ED8" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <line x1="12" y1="8" x2="12" y2="12" />
              <line x1="12" y1="16" x2="12.01" y2="16" />
            </svg>
          </div>
          <h5>Focused</h5>
          <p>Dedicated attention to every case detail</p>
        </div>
        <div class="val-card">
          <div class="icon-wrap" style="background:#D1FAE5;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
          </div>
          <h5>Connected</h5>
          <p>International legal expertise &amp; reach</p>
        </div>
        <div class="val-card">
          <div class="icon-wrap" style="background:#EDE9FE;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round">
              <polyline points="20 6 9 17 4 12" />
            </svg>
          </div>
          <h5>Results</h5>
          <p>Proven track record of successful outcomes</p>
        </div>
      </div>
    </div>

    <div class="page-footer">
      <p>NB Yaseen ADVOCATES &nbsp;—&nbsp; Company Profile</p>
      <div class="pf-dot"></div>
      <div class="pf-num">02</div>
    </div>
  </div>


  <!-- ============================================================
     PAGE 3 – MISSION, VISION & WHY US
============================================================ -->
  <div class="page">
    <div class="page-header">
      <div class="page-header-text">
        <div class="ph-firm">NB Yaseen ADVOCATES</div>
        <div class="ph-section">Corporate Identity</div>
      </div>
      <div class="page-header-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
    </div>

    <div class="content">
      <div class="section-chip">CORPORATE</div>
      <div class="sec-title">Mission, Vision &amp; Statement</div>
      <div class="accent-line wide"></div>

      <div class="mvv-grid">
        <div class="mvv-card blue">
          <span class="mvv-badge">Our Purpose</span>
          <h3>Mission</h3>
          <p>To deliver exceptional digital and physical legal services that exceed client expectations.</p>
          <div class="mvv-sep"></div>
          <div class="mvv-tag">Our Commitment to Excellence</div>
        </div>
        <div class="mvv-card green">
          <span class="mvv-badge">Our Pledge</span>
          <h3>Mission Statement</h3>
          <p>To offer outstanding legal services through dedicated, personalised solutions both digitally and in-person,
            that exceed client expectations, uphold the highest standards of professionalism, and deliver real value
            across every area of practice.</p>
          <div class="mvv-sep"></div>
          <div class="mvv-tag">Guiding Our Every Decision</div>
        </div>
        <div class="mvv-card maroon">
          <span class="mvv-badge">Our Ambition</span>
          <h3>Vision</h3>
          <p>Provide exceptional and client-centric legal services across the East African region.</p>
          <div class="mvv-sep"></div>
          <div class="mvv-tag">Shaping the Future of Law</div>
        </div>
      </div>

      <div style="margin-top:24px;">
        <div class="section-chip">OUR PROPOSITION</div>
        <div class="sec-title sm">Why NB Yaseen ADVOCATES?</div>
        <div class="accent-line"></div>
      </div>

      <div class="why-grid">
        <div class="why-item">
          <div class="why-num">1</div>
          <div>
            <h4>Digital-First Approach</h4>
            <p>We leverage cutting-edge digital tools and technology-powered analytics to accelerate service delivery.
            </p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-num">2</div>
          <div>
            <h4>Fast &amp; Diligent</h4>
            <p>Our team operates with urgency and precision, combining speed with thoroughness at every turn.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-num">3</div>
          <div>
            <h4>Regional Network</h4>
            <p>A vast and reliable network of partner firms across East Africa provides comprehensive cross-border
              coverage.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-num">4</div>
          <div>
            <h4>Client-Centric Service</h4>
            <p>You will not be just another file on the desk — you have a dedicated legal partner at your service.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-num">5</div>
          <div>
            <h4>Multi-Disciplinary Expertise</h4>
            <p>Our team covers 12 specialised practice areas, ensuring expert advice regardless of complexity.</p>
          </div>
        </div>
        <div class="why-item">
          <div class="why-num">6</div>
          <div>
            <h4>Integrity &amp; Professionalism</h4>
            <p>We uphold the highest standards guided by a proud history of delivering results and a passion for
              advocacy.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="page-footer">
      <p>NB Yaseen ADVOCATES &nbsp;—&nbsp; Company Profile</p>
      <div class="pf-dot"></div>
      <div class="pf-num">03</div>
    </div>
  </div>


  <!-- ============================================================
     PAGE 4 – PRACTICE AREAS
============================================================ -->
  <div class="page">
    <div class="page-header">
      <div class="page-header-text">
        <div class="ph-firm">NB Yaseen ADVOCATES</div>
        <div class="ph-section">Our Expertise</div>
      </div>
      <div class="page-header-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
    </div>

    <div class="content">
      <div class="section-chip">OUR EXPERTISE</div>
      <div class="sec-title">Practice Areas</div>
      <div class="accent-line wide"></div>
      <p style="font-size:9pt; color:var(--gray-500); margin-bottom:2px;">
        Comprehensive legal solutions tailored to your unique needs, delivered with expertise and dedication.
      </p>

      <div class="pa-grid">
        <div class="pa-card">
          <h4>Commercial Law</h4>
          <p>We advise businesses of all sizes — start-ups, SMEs and corporations — on the full spectrum of commercial
            matters including contracts, regulatory compliance, data protection and franchising.</p>
        </div>
        <div class="pa-card">
          <h4>Conveyancing</h4>
          <p>Residential and commercial property transactions — from sale and purchase to transfer of leases, mortgages,
            lease extensions and title investigations through to registration.</p>
        </div>
        <div class="pa-card">
          <h4>Probate &amp; Administration</h4>
          <p>Supporting executors, beneficiaries and families through probate and estate administration, including
            validating wills, grants of probate and estate valuation &amp; distribution.</p>
        </div>
        <div class="pa-card">
          <h4>Family Law</h4>
          <p>Full-spectrum family law covering divorce &amp; financial settlements, children matters, cohabitation
            disputes, domestic violence and pre/post-nuptial agreements.</p>
        </div>
        <div class="pa-card">
          <h4>Criminal Litigation</h4>
          <p>From minor offences to serious indictable matters — traffic, assault, fraud, drug-related charges, public
            order offences and trans-national &amp; organised crimes.</p>
        </div>
        <div class="pa-card">
          <h4>Employment Disputes</h4>
          <p>Deep insights into national and international labour laws support both employers and employees in
            individual and collective employment disputes.</p>
        </div>
        <div class="pa-card">
          <h4>Civil Litigation</h4>
          <p>Comprehensive litigation across civil matters — debt recovery, professional negligence, landlord-tenant
            disputes, breach of contract, personal injury and property disputes.</p>
        </div>
        <div class="pa-card">
          <h4>Company Law</h4>
          <p>Assisting start-ups and established companies with incorporation, corporate governance, due diligence,
            restructuring, shareholder agreements and regulatory compliance.</p>
        </div>
        <div class="pa-card">
          <h4>Mediation</h4>
          <p>Early dispute resolution through professionally-mediated negotiation in family, commercial, employment and
            civil disputes by trained and accredited mediators.</p>
        </div>
        <div class="pa-card">
          <h4>Islamic Law</h4>
          <p>Expert guidance before the Kadhis Courts covering personal status, marriage, divorce and inheritance under
            the Constitution of Kenya (2010).</p>
        </div>
        <div class="pa-card">
          <h4>General Practice</h4>
          <p>Your primary legal resource — serving as your legal equivalent of a family doctor for individuals, groups
            or businesses of any size.</p>
        </div>
        <div class="pa-card">
          <h4>Legal Due Diligence</h4>
          <p>In-depth Legal Due Diligence Audit and Risk Management services to give your business clarity, confidence
            and control over operations and exposures.</p>
        </div>
      </div>
    </div>

    <div class="page-footer">
      <p>NB Yaseen ADVOCATES &nbsp;—&nbsp; Company Profile</p>
      <div class="pf-dot"></div>
      <div class="pf-num">04</div>
    </div>
  </div>


  <!-- ============================================================
     PAGE 5 – OUR TEAM & DIASPORA
============================================================ -->
  <div class="page">
    <div class="page-header">
      <div class="page-header-text">
        <div class="ph-firm">NB Yaseen ADVOCATES</div>
        <div class="ph-section">Our Team &amp; Overseas Clients</div>
      </div>
      <div class="page-header-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
    </div>

    <div class="content">
      <div class="section-chip">THE TEAM</div>
      <div class="sec-title">Our Legal Team</div>
      <div class="accent-line wide"></div>

      <div class="team-pull-quote">
        <p>Once you make contact, you will not be just another file on the desk; you will have a dedicated legal partner
          at your service.</p>
      </div>

      <div class="team-para">
        At <span class="hl">NB Yaseen ADVOCATES</span>, our legal team is testimony to our vision and commitment
        to deliver exceptional digital and physical services that exceed client expectations. Comprised of highly
        skilled and experienced young and not-so-young advocates, our team brings a diverse range of expertise
        across multiple practice areas of law, ensuring that we effectively address the unique needs of each client.
      </div>

      <div class="team-para">
        Sharp-minded and unwaveringly dedicated, our lawyers are not only up-to-date with the latest legal and
        regulatory regimes and developments, but also possess a deep understanding of both the common and unique
        environment and settings in which our clients operate. This mix of legal knowledge and industry insight
        enables us to provide strategic and practical legal services that drive outcomes.
      </div>

      <div class="approach-box">
        <p>
          Teamwork is the backbone of our practice. Our attorneys work collaboratively, sharing insights and experience
          to craft tailored strategies — whether navigating complex legal disputes, diligently facilitating contracts
          and agreements, or simply guiding a client through the maze of legal and regulatory issues to achieve the
          best possible results.
        </p>
      </div>

      <!-- Diaspora -->
      <div style="margin-top:18px;">
        <div class="section-chip">OVERSEAS CLIENTS</div>
        <div class="sec-title sm">Diasporans &amp; Overseas Investors</div>
        <div class="accent-line"></div>
      </div>

      <div class="diaspora-box">
        <p>
          If you are <span class="hl-b">OVERSEAS</span>, you can't afford to take risks with your money or investment.
          Reach out to an established law firm to whom <span class="hl-b">TRUST</span> is a core value.
          Contact <span class="hl-r">NB Yaseen ADVOCATES</span> for special, dedicated and personalised
          legal services in Kenya and the larger East African region.
        </p>
        <p>
          Whether you are buying property, setting up a company, buying or selling, turn to
          <span class="hl-r">NB Yaseen ADVOCATES</span> for all the legal advice, practical help and protection
          you require. <span class="hl-b">AVOID RISK.</span> Contact or instruct us.
          We are <span class="hl-b">DIGITAL, FAST</span> and <span class="hl-b">DILIGENT</span>.
        </p>
      </div>
    </div>

    <div class="page-footer">
      <p>NB Yaseen ADVOCATES &nbsp;—&nbsp; Company Profile</p>
      <div class="pf-dot"></div>
      <div class="pf-num">05</div>
    </div>
  </div>


  <!-- ============================================================
     PAGE 6 – CONTACT & CLOSE
============================================================ -->
  <div class="page">
    <div class="page-header">
      <div class="page-header-text">
        <div class="ph-firm">NB Yaseen ADVOCATES</div>
        <div class="ph-section">Contact &amp; Regional Presence</div>
      </div>
      <div class="page-header-logo-wrap">
        <img src="{{ asset('logo.png') }}" alt="Logo" />
      </div>
    </div>

    <div class="content">
      <div class="section-chip">GET IN TOUCH</div>
      <div class="sec-title">Contact Us</div>
      <div class="accent-line wide"></div>
      <p style="font-size:9pt; color:var(--gray-500); margin-bottom:2px;">
        We are ready to provide you with exceptional legal support. Reach out today.
      </p>

      <div class="contact-hero">
        <div class="c-item">
          <div class="c-icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <h5>Our Office</h5>
          <p>Diamond Plaza, Nairobi<br />P.O Box 38556-00623<br />Kenya</p>
        </div>
        <div class="c-item">
          <div class="c-icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 10.23 19.79 19.79 0 0 1 1.61 1.6 2 2 0 0 1 3.6 0h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 7.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <h5>Phone / WhatsApp</h5>
          <a href="tel:+254732355157">+254 732 355 157</a>
          <p style="margin-top:4px; color:rgba(255,255,255,0.45); font-size:7.5pt;">Available on WhatsApp</p>
        </div>
        <div class="c-item">
          <div class="c-icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
          </div>
          <h5>Email</h5>
          <a href="mailto:info@nbyadvocates.com">info@nbyadvocates.com</a>
          <p style="margin-top:4px; color:rgba(255,255,255,0.45); font-size:7.5pt;">www.nbyadvocates.com</p>
        </div>
      </div>

      <!-- CTA -->
      <div class="cta-banner">
        <div class="cta-text">
          <h4>Ready to instruct us?</h4>
          <p>Contact our team today for expert, personalised legal advice — online or in-office.</p>
        </div>
        <div class="cta-badge">Instruct Us</div>
      </div>

      <!-- Confidentiality -->
      <div class="conf-box">
        <h5>Confidentiality Notice</h5>
        <p>All communications and information shared with NB Yaseen ADVOCATES are treated with the highest degree of
          confidentiality and professional privilege. Our engagement is governed by the Advocates Act (Cap. 16) and the
          applicable professional guidelines of the Law Society of Kenya.</p>
      </div>

      <!-- Regional -->
      <div style="margin-top:18px;">
        <div class="section-chip">PRESENCE</div>
        <div class="sec-title sm">Regional Presence &amp; Network</div>
        <div class="accent-line"></div>
      </div>

      <div class="region-grid">
        <div class="region-card">
          <h5>🇰🇪 Kenya — Primary Office</h5>
          <p>Our main office is based at Diamond Plaza, Nairobi. We appear before all courts in Kenya, including the
            Supreme Court, Court of Appeal, High Court and Magistrates Courts.</p>
        </div>
        <div class="region-card">
          <h5>🌍 East African Region — Partner Network</h5>
          <p>We maintain a vast and reliable network of partner law firms across the East African region, ensuring
            comprehensive cross-border legal coverage wherever our clients operate.</p>
        </div>
      </div>

      <!-- Closing mark -->
      <div class="closing-mark">
        <div class="cm-name">NB Yaseen ADVOCATES</div>
        <div class="cm-tag">Digital &nbsp;·&nbsp; Fast &nbsp;·&nbsp; Diligent</div>
        <div class="cm-rule"></div>
      </div>
    </div>

    <div class="page-footer">
      <p>NB Yaseen ADVOCATES &nbsp;—&nbsp; Company Profile</p>
      <div class="pf-dot"></div>
      <div class="pf-num">06</div>
    </div>
  </div>

</body>

</html>
