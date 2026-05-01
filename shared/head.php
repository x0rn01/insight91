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
</head>
