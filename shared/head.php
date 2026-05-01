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
      /* Stronger dark overlay for heroes that use light background photos
         (default bg-overlay is only 50% black, not enough on light images). */
      .image-wrapper.i91-overlay-strong::before {
        background: linear-gradient(180deg, rgba(15,18,24,0.72) 0%, rgba(15,18,24,0.55) 100%);
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
