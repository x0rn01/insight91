<?php
$pageMetaDescription = "Insight 91 Data services: data warehouse, ETL, dashboarding, data quality. Hands-on experience with large groups (Ethias, Securex, Rolls Royce, public administrations).";
$pageTitle = "Data Services";
$lang = 'en';
$currentPage = 'services/data';
include(__DIR__ . '/../../shared/head.php');
?>
<body>
  <div class="content-wrapper" role="main">
    <?php
        $navbar = 'navbar-dark';
        $logo = 'logo-light';
        include(__DIR__ . '/../../shared/header.php');
    ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay i91-overlay-strong" data-image-src="/assets/img/photos/business.avif">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-7 text-center text-md-start" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">Your data, your competitive edge</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">From collection to decision — we structure, harden and unlock the value of your data assets.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-14">
          <div class="col-lg-6 order-lg-2">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Our approach</h2>
            <h3 class="display-4 mb-7">From <span class="underline-3 style-2 yellow">audit</span> to adoption</h3>
            <p class="lead fs-lg mb-7">We support your data project end-to-end: business understanding, modelling, productionisation, team enablement.</p>
          </div>
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7"><img src="/assets/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" /><h4>Data audit</h4><p class="mb-0">Source mapping, quality, governance.</p></div></div></div>
              <div class="col-md-6 mt-md-10"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7"><img src="/assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" /><h4>Modelling</h4><p class="mb-0">Warehouses, lakes, dimensional models.</p></div></div></div>
              <div class="col-md-6"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7"><img src="/assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" /><h4>Visualisation</h4><p class="mb-0">Qlik / Power BI dashboards, business KPIs.</p></div></div></div>
              <div class="col-md-6 mt-md-10"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7"><img src="/assets/img/icons/lineal/headphone.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" /><h4>Adoption</h4><p class="mb-0">Training, change management.</p></div></div></div>
            </div>
          </div>
        </div>

        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Areas of expertise</h2>
        <h3 class="display-5 mb-10 text-center">A modern stack on solid foundations</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-6">
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-database text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">Warehouse & Data Lakes</h4><p class="mb-0">Snowflake, BigQuery, Postgres, Azure Synapse — fitting your context.</p></div></div></div>
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-exchange text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">ETL / ELT</h4><p class="mb-0">Fivetran, Airbyte, dbt, Talend — observable, reliable pipelines.</p></div></div></div>
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-chart-line text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">Dashboarding</h4><p class="mb-0">Qlik Sense, Power BI, Tableau — fast, interactive insights.</p></div></div></div>
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-shield-check text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">Quality & Governance</h4><p class="mb-0">Tests, documentation, lineage, GDPR.</p></div></div></div>
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-brain text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">Advanced analytics</h4><p class="mb-0">Predictive models, segmentation, scoring.</p></div></div></div>
          <div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><i class="uil uil-graph-bar text-primary fs-30 me-3"></i></div><div><h4 class="mb-1">Business KPIs</h4><p class="mb-0">Definition and industrialisation of key metrics.</p></div></div></div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 mb-10 align-items-center">
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Track record</h2>
            <h3 class="display-5 mb-5">Expertise built with <span class="underline-3 style-2 yellow">large groups</span></h3>
            <p class="lead fs-lg mb-3">Our team has driven data projects in demanding environments:</p>
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Ethias</b> — insurance, dashboarding and regulatory reporting</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Securex</b> — HR/payroll, data analytics</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Rolls Royce</b> — industrial, technical data management</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Public administrations</b> — performance steering</span></li>
            </ul>
          </div>
          <div class="col-lg-6 position-relative">
            <figure class="rounded"><img src="/assets/img/photos/data-screen.webp" loading="lazy" alt="Track record" /></figure>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16 text-center">
        <h2 class="display-5 mb-7">Got a data project?</h2>
        <a href="/en/contact" class="btn btn-lg btn-primary rounded-pill">Let's talk</a>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../../shared/footer.php'); ?>
  <div class="progress-wrap"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg></div>
  <script src="/assets/js/plugins.js" defer></script>
  <script src="/assets/js/theme.js" defer></script>
</body>
</html>
