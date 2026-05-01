<?php
// Default meta description
$defaultDescription = "Insight 91 - Leading business intelligence and ERP solutions. Expertise in Qlik Sense and Power BI.";
$metaDescription = isset($pageMetaDescription) ? $pageMetaDescription : $defaultDescription;

// Dynamic language and URL handling
$lang = isset($lang) ? $lang : 'en'; // Fallback to English if no language is set
$currentPage = isset($currentPage) ? $currentPage : 'index'; // Fallback to index page if not set

// Define base URL
$baseUrl = "https://insight91.be";
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="keywords" content="business intelligence, qlik sense, power BI, ERP, Odoo, data, IA">
    <meta name="robots" content="index, follow">
    <title>Insight 91 - <?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Open Graph (og) tags for social media sharing -->
    <meta property="og:title" content="Insight 91 - <?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:image" content="https://insight91.be/favicon/android-chrome-512x512.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $baseUrl . '/' . htmlspecialchars($lang) . '/' . htmlspecialchars($currentPage) . '.php'; ?>">

    <!-- Favicon and icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

    <!-- Dynamic alternate and canonical links -->
    <link rel="alternate" hreflang="en" href="<?php echo $baseUrl; ?>/en/<?php echo htmlspecialchars($currentPage); ?>.php">
    <link rel="alternate" hreflang="fr-be" href="<?php echo $baseUrl; ?>/fr/<?php echo htmlspecialchars($currentPage); ?>.php">
    <link rel="canonical" href="<?php echo $baseUrl; ?>/<?php echo htmlspecialchars($lang); ?>/<?php echo htmlspecialchars($currentPage); ?>.php">

    <!-- Use absolute paths for CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/aqua.css">
</head>
