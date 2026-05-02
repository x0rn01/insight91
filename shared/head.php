<?php
// Default meta description
$defaultDescription = "Insight 91 — Partenaire data, ERP et IA. Expertise Odoo, Qlik Sense et Power BI pour PME et grandes organisations.";
$metaDescription = isset($pageMetaDescription) ? $pageMetaDescription : $defaultDescription;

// Dynamic language and URL handling
$lang = isset($lang) ? $lang : 'en';
$currentPage = isset($currentPage) ? $currentPage : 'index';

// Build the public URL path (clean, no .php extension)
// Homepage → /fr/  ;  others → /fr/<page>  (page may contain "/" for nested URLs)
$pagePath = ($currentPage === 'index') ? '' : $currentPage;

$baseUrl = "https://insight91.be";
$pageUrl = $baseUrl . '/' . $lang . '/' . $pagePath;
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="keywords" content="business intelligence, qlik sense, power BI, ERP, Odoo, data, IA, PME, marchés publics">
    <meta name="robots" content="index, follow">
    <title>Insight 91 - <?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Open Graph (og) tags for social media sharing -->
    <meta property="og:title" content="Insight 91 - <?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:image" content="<?php echo $baseUrl; ?>/favicon/android-chrome-512x512.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($pageUrl); ?>">

    <!-- Favicon and icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

    <!-- Dynamic alternate and canonical links -->
    <link rel="alternate" hreflang="en" href="<?php echo $baseUrl; ?>/en/<?php echo htmlspecialchars($pagePath); ?>">
    <link rel="alternate" hreflang="fr-be" href="<?php echo $baseUrl; ?>/fr/<?php echo htmlspecialchars($pagePath); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($pageUrl); ?>">

    <!-- Schema.org Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Insight 91",
      "url": "<?php echo $baseUrl; ?>",
      "logo": "<?php echo $baseUrl; ?>/assets/img/logo-dark.svg",
      "email": "info@insight91.be",
      "telephone": "+32498659711",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rue Devant l’Abbaye, 36",
        "postalCode": "4042",
        "addressLocality": "Liers",
        "addressCountry": "BE"
      }
    }
    </script>

    <!-- Use absolute paths for CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/aqua.css">

    <!-- Insight 91 overrides -->
    <style>
      /* Darker primary for WCAG AA contrast (4.5:1). The aqua palette default
         #54a8c7 only hits 2.69:1 on white, failing accessibility. */
      :root {
        --bs-primary: #0a74aa;
        --bs-primary-rgb: 10, 116, 170;
      }
      /* Override muted gray that also fails contrast (#aab0bc → #6c757d) */
      .text-muted { color: #5a6268 !important; }
      /* Footer is dark — override muted text to a light gray for AA contrast */
      footer .text-muted { color: #cfd5dc !important; }

      /* Stronger dark overlay for heroes that use light background photos
         (default bg-overlay is only 50% black, not enough on light images). */
      .image-wrapper.i91-overlay-strong::before {
        background: linear-gradient(180deg, rgba(15,18,24,0.72) 0%, rgba(15,18,24,0.55) 100%);
      }

      /* Home hero — full-bleed with background image, vertical centering */
      .i91-hero {
        min-height: 70vh;
        display: flex;
        align-items: center;
      }
      .i91-hero.image-wrapper.bg-cover {
        background-position: left center !important;
      }
      .i91-hero > .container { padding-top: 6rem; padding-bottom: 4rem; }
      @media (max-width: 767.98px) {
        .i91-hero { min-height: 60vh; }
        .i91-hero > .container { padding-top: 5rem; padding-bottom: 3rem; }
      }

      /* Modern CTA button — gradient, glow, subtle hover lift, arrow nudge */
      .i91-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: .6rem;
        padding: 1rem 2.25rem;
        font-size: 1.05rem;
        font-weight: 600;
        line-height: 1;
        color: #fff !important;
        background: var(--bs-primary);
        background-image: linear-gradient(135deg, var(--bs-primary) 0%, rgba(0,0,0,.18) 100%);
        border: none;
        border-radius: 999px;
        box-shadow:
          0 12px 28px -6px rgba(var(--bs-primary-rgb), .55),
          0 4px 12px rgba(15,18,24,.10);
        text-decoration: none;
        transition: transform .25s ease, box-shadow .25s ease, gap .25s ease;
      }
      .i91-cta:hover {
        transform: translateY(-2px);
        gap: .9rem;
        box-shadow:
          0 16px 36px -6px rgba(var(--bs-primary-rgb), .65),
          0 6px 16px rgba(15,18,24,.14);
        color: #fff;
      }
      .i91-cta:active {
        transform: translateY(0);
      }
      .i91-cta i { font-size: 1.15rem; line-height: 1; }
      .i91-cta-block { display: flex; width: 100%; }   /* full-width variant */

      /* ==== Mobile editorial hero ==== */
      .i91-m-hero { padding-top: 1rem; }
      .i91-m-hero-blob {
        position: absolute;
        top: -120px; right: -120px;
        width: 340px; height: 340px;
        background: radial-gradient(circle,
          rgba(var(--bs-primary-rgb), .22) 0%,
          rgba(var(--bs-primary-rgb), .05) 50%,
          transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
      }
      .i91-eyebrow {
        display: inline-block;
        padding: .4rem .9rem;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #073a55;       /* darker for AA contrast on light bg */
        background: rgba(var(--bs-primary-rgb), .1);
        border-radius: 999px;
        margin-bottom: 1.5rem;
      }
      .i91-m-hero-title {
        font-size: 2.4rem;
        font-weight: 800;
        line-height: 1.08;
        letter-spacing: -0.01em;
        color: #0f1218;
      }
      @media (max-width: 374px) {
        .i91-m-hero-title { font-size: 2rem; }
      }
      .i91-highlight {
        display: inline-block;
        padding: 0 .15em;
        background: linear-gradient(180deg, transparent 55%, rgba(var(--bs-primary-rgb), .28) 55%);
      }
      .i91-m-hero-sub {
        font-size: 1.05rem;
        line-height: 1.55;
        color: #4d5862;
      }
      .i91-trust-strip {
        padding-top: 1.4rem;
        border-top: 1px solid rgba(15,18,24,.08);
      }
      .i91-trust-label {
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .1em;
        text-transform: uppercase;
        color: rgba(15,18,24,.45);
        margin-bottom: .6rem;
      }
      .i91-trust-logos {
        display: flex;
        flex-wrap: wrap;
        gap: .5rem .65rem;
        align-items: center;
        font-weight: 600;
        color: rgba(15,18,24,.7);
      }
      .i91-trust-logos > span:nth-child(odd) { /* names */ }
      .i91-trust-logos > span:nth-child(even) { /* separators */
        color: rgba(15,18,24,.25);
      }

      /* Header logo — cap height (logo SVG was tightly cropped, default sizing was too large) */
      .navbar .logo-header {
        max-height: 72px !important;
        margin-top: 10px;
        margin-bottom: 10px;
        max-width: none !important;
        width: auto !important;
        height: auto;
      }
      @media (max-width: 767.98px) {
        .navbar .logo-header { max-height: 58px !important; margin-top: 10px; }
      }

      /* ===== Mobile responsive fixes ===== */
      /* Tablet & phone landscape (≤991px) */
      @media (max-width: 991.98px) {
        /* Reduce gap on the zigzag section */
        .i91-zigzag { gap: 3rem !important; }
      }

      /* Phones (≤767px) */
      @media (max-width: 767.98px) {
        /* Tighten hero typography — display-1 default ≈ 5rem is way too large */
        .display-1 { font-size: 2.25rem !important; line-height: 1.15 !important; }
        .display-2 { font-size: 2rem    !important; line-height: 1.15 !important; }
        .display-3 { font-size: 1.85rem !important; line-height: 1.2  !important; }
        .display-4 { font-size: 1.7rem  !important; line-height: 1.2  !important; }
        .display-5 { font-size: 1.5rem  !important; line-height: 1.25 !important; }
        h1, h2, h3 { word-wrap: break-word; }

        /* Custom hero font-size utilities */
        .fs-46 { font-size: 2rem    !important; line-height: 1.15 !important; }
        .fs-25 { font-size: 1.05rem !important; }
        .fs-23 { font-size: 1rem    !important; }
        .lead   { font-size: 1rem !important; line-height: 1.55 !important; }

        /* Section vertical spacing — reduce ≈30% on mobile */
        .container.py-14 {
          padding-top: 3rem    !important;
          padding-bottom: 3rem !important;
        }
        .container.py-15 {
          padding-top: 3rem    !important;
          padding-bottom: 3rem !important;
        }
        .container.py-18 {
          padding-top: 3.5rem    !important;
          padding-bottom: 3.5rem !important;
        }

        /* Hero spacing */
        .pt-17 { padding-top: 4.5rem  !important; }
        .pb-15 { padding-bottom: 2.5rem !important; }

        /* Margins commonly used between section title and content */
        .mb-13 { margin-bottom: 2rem  !important; }
        .mb-10 { margin-bottom: 1.75rem !important; }
        .mb-7  { margin-bottom: 1.25rem !important; }
        .mb-5  { margin-bottom: 1rem !important; }

        /* Footer */
        .py-13 { padding-top: 2.5rem !important; padding-bottom: 2.5rem !important; }

        /* Custom layouts — tighten gaps */
        .i91-zigzag { gap: 2.5rem !important; }
        .i91-zigzag-row { gap: 1.25rem !important; }
        .i91-stepper-list { gap: 1.5rem !important; }

        /* Solution & service cards — slightly tighter padding */
        .i91-service-body { padding: 2rem 1.25rem 1.25rem !important; }

        /* Solutions zigzag visual — smaller on mobile */
        .i91-zigzag-visual { aspect-ratio: 16 / 10 !important; border-radius: 16px !important; }
        .i91-zigzag-num { font-size: 1.4rem !important; padding: .15rem .5rem !important; }
      }

      /* Small phones (≤575px) */
      @media (max-width: 575.98px) {
        .display-1 { font-size: 1.95rem !important; }
        .display-4 { font-size: 1.45rem !important; }
        .display-5 { font-size: 1.3rem  !important; }
        .fs-46     { font-size: 1.7rem  !important; }
        .fs-25, .fs-23, .lead { font-size: .98rem !important; }

        .container.py-14 {
          padding-top: 2.5rem    !important;
          padding-bottom: 2.5rem !important;
        }
        .pt-17 { padding-top: 4rem !important; }
        .pb-15 { padding-bottom: 2rem !important; }
      }
    </style>
</head>
