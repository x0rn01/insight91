<?php
$pageMetaDescription = "Services Data d'Insight 91 : datawarehouse, ETL, dashboarding, data quality. Une expertise éprouvée auprès de grands groupes (Ethias, Securex, Rolls Royce, administrations).";
$pageTitle = "Services Data";
$lang = 'fr';
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
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">Vos données, votre avantage compétitif</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">De la collecte à la décision : nous structurons, fiabilisons et valorisons votre patrimoine de données.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-14">
          <div class="col-lg-6 order-lg-2">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Notre approche</h2>
            <h3 class="display-4 mb-7">De l'<span class="underline-3 style-2 yellow">audit</span> à l'adoption</h3>
            <p class="lead fs-lg mb-7">Nous accompagnons votre projet data sur l'ensemble du cycle : compréhension du métier, modélisation, mise en production, formation des équipes.</p>
          </div>
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <div class="card border-0 shadow-lg h-100">
                  <div class="card-body p-7">
                    <img src="/assets/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4>Audit data</h4>
                    <p class="mb-0">Cartographie de vos sources, qualité, gouvernance.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-md-10">
                <div class="card border-0 shadow-lg h-100">
                  <div class="card-body p-7">
                    <img src="/assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4>Modélisation</h4>
                    <p class="mb-0">Datawarehouse, lakes, modèles dimensionnels.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-0 shadow-lg h-100">
                  <div class="card-body p-7">
                    <img src="/assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4>Visualisation</h4>
                    <p class="mb-0">Dashboards Qlik / Power BI, indicateurs métier.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-md-10">
                <div class="card border-0 shadow-lg h-100">
                  <div class="card-body p-7">
                    <img src="/assets/img/icons/lineal/headphone.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                    <h4>Adoption</h4>
                    <p class="mb-0">Formation, accompagnement au changement.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Domaines d'expertise</h2>
        <h3 class="display-5 mb-10 text-center">Une stack moderne, des fondations solides</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-6">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-database text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">Datawarehouse & Data Lakes</h4>
                <p class="mb-0">Snowflake, BigQuery, Postgres, Azure Synapse — selon votre contexte.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-exchange text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">ETL / ELT</h4>
                <p class="mb-0">Fivetran, Airbyte, dbt, Talend — pipelines fiables et observables.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-chart-line text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">Dashboarding</h4>
                <p class="mb-0">Qlik Sense, Power BI, Tableau — visualisations interactives et performantes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-shield-check text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">Data Quality & Gouvernance</h4>
                <p class="mb-0">Tests, documentation, lineage, RGPD.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-brain text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">Analytique avancée</h4>
                <p class="mb-0">Modèles prédictifs, segmentation, scoring.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-graph-bar text-primary fs-30 me-3"></i></div>
              <div>
                <h4 class="mb-1">KPIs métier</h4>
                <p class="mb-0">Définition et industrialisation des indicateurs clés.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 mb-10 align-items-center">
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Cas concrets</h2>
            <h3 class="display-5 mb-5">Une expertise forgée auprès de <span class="underline-3 style-2 yellow">grands groupes</span></h3>
            <p class="lead fs-lg mb-3">Notre équipe a piloté des projets data au sein de structures exigeantes :</p>
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Ethias</b> — assurance, dashboarding et reporting réglementaire</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Securex</b> — RH/payroll, data analytics</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Rolls Royce</b> — industrie, gestion de données techniques</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Administrations publiques</b> — pilotage de la performance</span></li>
            </ul>
          </div>
          <div class="col-lg-6 position-relative">
            <figure class="rounded"><img src="/assets/img/photos/data-screen.webp" width="1535" height="1024"/></figure>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16 text-center">
        <h2 class="display-5 mb-7">Vous avez un projet data ?</h2>
        <a href="/fr/contact" class="btn btn-lg btn-primary rounded-pill">Discutons-en</a>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../../shared/footer.php'); ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js" defer></script>
  <script src="/assets/js/theme.js" defer></script>
</body>
</html>
