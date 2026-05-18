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
            <figure class="rounded"><img src="/assets/img/photos/data-screen.webp" loading="lazy" alt="Cas concrets data" /></figure>
          </div>
        </div>

        <p class="i91-clients-label">Ils nous ont fait confiance</p>
        <div class="i91-clients-wall">
          <div class="i91-client"><img src="/assets/img/clients/ethias.webp" alt="Ethias" loading="lazy" /></div>
          <div class="i91-client"><img src="/assets/img/clients/securex.svg" alt="Securex" loading="lazy" /></div>
          <div class="i91-client i91-client-tall"><img src="/assets/img/clients/rolls-royce.svg" alt="Rolls-Royce" loading="lazy" /></div>
        </div>
      </div>
    </section>

    <style>
      .i91-clients-label {
        text-align: center;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: #6e7d8c;
        margin: 2rem 0 1.5rem;
      }
      .i91-clients-wall {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 3rem;
      }
      .i91-client {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        opacity: .7;
        transition: opacity .25s ease, filter .25s ease;
      }
      .i91-client:hover { opacity: 1; }
      .i91-client img {
        max-height: 100%;
        max-width: 180px;
        height: auto;
        width: auto;
      }
      .i91-client-tall img { max-height: 80px; max-width: 60px; }
      @media (max-width: 575.98px) {
        .i91-clients-wall { gap: 2rem; }
        .i91-client { height: 48px; }
        .i91-client-tall img { max-height: 64px; max-width: 48px; }
      }

      /* Logos partenaires dans la card overlay : sans cette contrainte, la
         règle globale `figure { display: inline-block }` laisse l'image s'afficher
         à sa taille naturelle (280×280) au lieu de remplir sa colonne Bootstrap.
         Le .container des logos est SŒUR de .post-content (pas enfant), donc on
         cible directement .card-body > .container. */
      .projects-overflow .card-body > .container figure {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        height: 72px;
      }
      .projects-overflow .card-body > .container figure img {
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
      }

      /* Restaure les règles projects-overflow purgées du style.css minifié.
         Le pattern dépend de .project-details en position:absolute (>=992px) +
         d'une max-width pour que la carte flotte correctement sur la photo.
         Note : .item DOIT avoir position:relative pour que `left/right/top`
         de .project-details soient relatifs à l'item et non au viewport. */
      .projects-overflow .project-details { width: 100%; }
      .projects-overflow .item { position: relative; }
      @media (min-width: 1200px) {
        .projects-overflow .project-details { max-width: 30rem; }
      }
      @media (min-width: 992px) and (max-width: 1199.98px) {
        .projects-overflow .project-details { max-width: 20rem; }
      }
      @media (min-width: 992px) {
        .projects-overflow .project-details { position: absolute; }
        .projects-overflow .item { margin-top: 10rem; }
      }
      @media (max-width: 991.98px) {
        /* Espace entre la section "Cas concrets" et la première image du
           bloc projects-overflow (sinon les deux sections se collent en
           mobile car .item margin-top: 10rem n'est appliqué qu'à ≥992px). */
        .projects-overflow { margin-top: 2.5rem; }
        .projects-overflow .project {
          box-shadow: 0 0 1.25rem rgba(30,34,40,.04) !important;
          border-radius: .4rem !important;
        }
        .projects-overflow .project figure img {
          border-bottom-left-radius: 0 !important;
          border-bottom-right-radius: 0 !important;
        }
        .projects-overflow .project-details .card {
          border-top-left-radius: 0 !important;
          border-top-right-radius: 0 !important;
          box-shadow: none !important;
        }
      }
    </style>

    <!-- SECTEURS — pattern projects-overflow (image grande + carte décalée) -->
    <section class="wrapper bg-light">
      <div class="container pt-9 pt-md-11 pb-14 pb-md-16">
        <div class="projects-overflow mt-md-10 mb-10 mb-lg-15">

          <!-- PME -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-7 rounded"><img src="/assets/img/photos/smb.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 0; top: 5%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-purple mb-3">Petites et moyennes entreprises</div>
                      <h2 class="post-title mb-3">Identifiez vos meilleurs clients</h2>
                    </div>
                    <div class="post-content">
                      <p>Si vous souhaitez connaître les produits qui génèrent les meilleures marges et obtenir des insights sur la rentabilité globale. Analysez les dépenses, gérez les carnets de commandes et maintenez la santé financière de votre entreprise avec précision.</p>
                      <p>Naviguez avec clarté dans le paysage financier de votre entreprise et prenez des décisions éclairées qui amélioreront votre efficacité opérationnelle et votre rentabilité.</p>
                    </div>
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/odoo-vector-logo-small.png" alt="Odoo" /></figure></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Industrie -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-7 ms-lg-auto rounded"><img src="/assets/img/photos/industry.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 0; top: 5%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-leaf mb-3">Industrie</div>
                      <h2 class="post-title mb-3">Maximisez le potentiel de votre entreprise</h2>
                    </div>
                    <div class="post-content">
                      <p>Plongez dans l'analyse des ventes, l'évaluation du portefeuille de clients, les achats, la gestion des stocks et les insights financiers.</p>
                      <p>Nos solutions de Business Intelligence transforment les données complexes issues de vos systèmes d'entreprise en insights actionnables, vous permettant d'optimiser vos opérations et de renforcer votre rentabilité.</p>
                    </div>
                    <div class="container">
                      <div class="row gy-3">
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/odoo-vector-logo-small.png" alt="Odoo" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/sap-vector-logo-small.png" alt="SAP" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/salesforce-vector-logo-small.png" alt="Salesforce" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/dynamics-vector-logo-small.webp" alt="Dynamics" /></figure></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Finance -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-7 rounded"><img src="/assets/img/photos/finance.jpg" alt="Finance" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="right: 0; top: 5%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-violet mb-3">Finance</div>
                      <h2 class="post-title mb-3">Renforcement de la gestion financière</h2>
                    </div>
                    <div class="post-content">
                      <p>Nous offrons des solutions innovantes pour les bureaux de gestion de patrimoine et les cabinets comptables, permettant la gestion aisée des finances des clients, l'analyse des revenus, des dépenses, la prévision et la budgétisation.</p>
                      <p>Notre service comprend la fourniture de rapports automatisés aux clients, garantissant qu'ils disposent d'insights financiers précis et opportuns à portée de main.</p>
                    </div>
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-md-4"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/bob-vector-logo-small.webp" alt="Bob" /></figure></div>
                        <div class="col-md-4"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/horus-vector-logo-small.webp" alt="Horus" /></figure></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- E-Commerce -->
          <div class="project item">
            <div class="row">
              <figure class="col-lg-8 col-xl-7 ms-lg-auto rounded"><img src="/assets/img/photos/ecommerce.jpg" alt="" /></figure>
              <div class="project-details d-flex justify-content-center flex-column" style="left: 0; top: 5%;">
                <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line text-yellow mb-3">E-Commerce</div>
                      <h2 class="post-title mb-3">Solutions d'analitiques sur-mesure</h2>
                    </div>
                    <div class="post-content">
                      <p>Nous proposons des solutions clé en main et des services de développement sur mesure pour exploiter les logiciels de e-commerce afin d'améliorer la performance web et la gestion financière.</p>
                      <p>Nos services sont conçus pour optimiser les opérations de votre entreprise en ligne et l'efficacité financière grâce à des analyses avancées et une intégration logicielle adaptée à vos besoins.</p>
                    </div>
                    <div class="container">
                      <div class="row gy-3">
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/google-vector-logo-small.webp" alt="Google Analytics" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/prestashop-vector-logo-small.webp" alt="Prestashop" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/paypal-vector-logo-small.webp" alt="Paypal" /></figure></div>
                        <div class="col-6"><figure class="px-3 px-md-0 px-xxl-2"><img src="/assets/img/brands/zencart-vector-logo-small.webp" alt="ZenCart" /></figure></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="i91-cta-section">
          <div class="i91-cta-section-img"></div>
          <div class="i91-cta-section-block">
            <p class="i91-cta-section-eyebrow">Démarrez votre projet</p>
            <h2 class="i91-cta-section-title">Vous avez un projet data ?</h2>
            <a href="/fr/contact" class="i91-cta-section-btn">Discutons-en <i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
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
