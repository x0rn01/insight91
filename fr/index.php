<?php
$pageMetaDescription = "Insight 91 vous accompagne avec des solutions BI et ERP sur mesure. Bénéficiez de notre expertise en Qlik Sense et Power BI pour améliorer vos décisions d'affaires.";
$pageTitle = "Bienvenue chez Insight 91";
$lang = 'fr';
$currentPage = 'index';
include(__DIR__ . '/../shared/head.php');
?>
<body data-theme="light">
  <div class="content-wrapper" role="main">

    <?php
    $navbar = 'navbar-light';
    $logo = 'logo-dark';
    include(__DIR__ . '/../shared/header.php');
    ?>

    <!-- Hero desktop (split layout, lg+) -->
    <section class="wrapper bg-light position-relative min-vh-70 d-none d-lg-flex align-items-center mt-lg-20">
      <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-40" data-image-src="/assets/img/photos/main.webp"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-lg-n10 ps-lg-0 pe-lg-13 text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
              <h1 class="display-1 mb-5">Vos données, votre ERP, votre IA — pilotés ensemble</h1>
              <p class="lead fs-25 lh-sm mb-7 pe-md-10">Insight 91 accompagne PME et grandes organisations sur trois axes complémentaires : la donnée, la gestion ERP et l'intelligence artificielle appliquée au métier.</p>
              <a href="/fr/contact" class="i91-cta">Contactez-nous <i class="uil uil-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hero mobile (editorial layout, <lg) -->
    <section class="d-lg-none wrapper bg-light position-relative overflow-hidden i91-m-hero">
      <div class="i91-m-hero-blob"></div>
      <div class="container pt-13 pb-10 position-relative">
        <span class="i91-eyebrow">Partenaire Data · ERP · IA</span>
        <h1 class="i91-m-hero-title mb-5">
          Vos données.<br>
          Votre ERP.<br>
          Votre <span class="i91-highlight">IA</span>.
        </h1>
        <p class="i91-m-hero-sub mb-8">Pilotés ensemble. Une équipe, trois axes complémentaires pour PME et grandes organisations.</p>
        <a href="/fr/contact" class="i91-cta i91-cta-block">Contactez-nous <i class="uil uil-arrow-right"></i></a>
      </div>
    </section>
    <section id="snippet-1" class="wrapper bg-light">
      <div class="container pt-14 pt-md-16 pb-0">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center mb-3 mb-md-13">
          <div class="col-lg-6 position-relative hide-sm">
            <div class="btn btn-circle btn-primary pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
              <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">10+</span></h3>
              <p id="years_experience">Années d'expérience</p>
            </div>
            <div class="row gx-md-5 gy-5 align-items-center">
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-10 offset-md-2">
                    <figure class="rounded"><img src="/assets/img/photos/crop-1.webp" alt="BI"></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-12">
                    <figure class="rounded"><img src="/assets/img/photos/crop-2.webp" alt="BI"></figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
              <div class="col-md-6">
                <figure class="rounded"><img src="/assets/img/photos/crop-3.webp"  alt="BI"></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-4 mb-5">Créez des stratégies de BI pour moderniser votre entreprise</h2>
            <p class="mb-3">Libérez le potentiel infini de vos données, créez une culture de la littératie des données parmi vos employés, et initiez un voyage visionnaire pour faire de votre entreprise une véritable entreprise guidée par les données.</p>
            <p class="mb-7">Découvrez comment les informations exploitables permettent de guider les décisions et à maintenir votre organisation comme le leader dans le monde bruyant et turbulent d'aujourd'hui.</p>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="customized_solutions" class="mb-1">Solutions personnalisées</h3>
                <p id="customized_solutions_description" class="mb-0">Notre objectif est de créer des solutions BI sur mesure, développées selon toutes vos exigences, mais aussi selon les normes du secteur.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="data_integration" class="mb-1">Intégration des données</h3>
                <p id="data_integration_description" class="mb-0">Avec une intégration en douceur entre les nombreuses sources de données, nous vous présentons une vue unifiée afin que vous puissiez prendre des décisions éclairées basées sur des informations précises et récentes.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="advanced_analytics" class="mb-1">Analyses avancées</h3>
                <p id="advanced_analytics_description" class="mb-0">Explorez des analyses avancées, y compris la modélisation prédictive et l'apprentissage automatique, dévoilant des insights cachées et prédisant les tendances futures.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/headphone.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="training_support" class="mb-1">Formation et support</h3>
                <p id="training_support_description" class="mb-0">Donnez de la puissance à votre équipe avec des programmes de formation complets et un soutien continu qui améliorent la littératie des données et assurent que la valeur des outils BI est extraite.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/laptop.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="user_friendly_interfaces" class="mb-1">Expériences utilisateur conviviales</h3>
                <p id="user_friendly_interfaces_description" class="mb-0">Mettez l'expérience utilisateur en premier plan avec nos interfaces intuitives et interagissez avec les données de manière transparente et efficace pour votre équipe.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="/assets/img/icons/lineal/secure.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-primary me-4" alt="" />
              </div>
              <div>
                <h3 id="data_security" class="mb-1">Sécurité des données</h3>
                <p id="data_security_description" class="mb-0">Ayez la tranquillité d'esprit que des mesures de sécurité des données très robustes sont en place pour établir la confiance dans la sécurité de vos informations commerciales sensibles.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <hr class="my-5 my-md-9" />

        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
          <div class="col-md-8 col-lg-5 position-relative">
            <div class="shape bg-line green rounded-circle rellax w-18 h-18" data-rellax-speed="1" style="top: -2.2rem; left: -2.4rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="/assets/img/photos/customer-1.webp" alt="Relations commerciales" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5 col-xl-6 offset-lg-1">
            <h3 id="reasons_to_choose_us" class="display-4 mb-7">Pourquoi nos clients nous choisissent</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button id="cutting_edge_tools" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Compétences en technologie émergente</button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Nous, à Insight91, sommes experts dans les technologies d'analyse commerciale les plus récentes, y compris Qlik et PowerBI. <br /><br />Notre capacité à appliquer de tels outils est rendue au service de l'analyse substantielle et de la visualisation immersive qui transforment les données en décisions stratégiques éclairées.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingTwo">
                  <button id="top_customized_solutions" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Une intégration personnalisée</button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p id="top_customized_solutions_description">Les clients ont confiance en nous pour intégrer des solutions BI avec leurs données de manière efficace.<br /><br />Notre approche de collaboration nous aidera à analyser précisément les informations complexes pour en tirer des conclusions utiles et pratiques qui pourront aider l'entreprise à prendre des décisions précises.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingThree">
                  <button id="business_growth_impact" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Un impact sur le développement de votre entreprise</button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Ils nous font confiance parce que nous avons fait nos preuves dans la fourniture de résultats de croissance et d'efficacité commerciale.<br /><br /> Notre solution BI a continuellement livré des améliorations mesurables en termes de performances, de productivité et de rentabilité pour nos clients.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
      <section class="wrapper bg-light">
          <div class="container py-14 py-md-16">
              <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Nos services</h2>
              <h3 class="display-4 mb-10 text-center">Trois axes d'expertise</h3>
              <div class="row gx-md-6 gx-xl-8 gy-8 i91-service-grid">

                <div class="col-md-4">
                  <a href="/fr/services/data" class="i91-service-card">
                    <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/data.webp')">
                      <span class="i91-service-icon"><i class="uil uil-database"></i></span>
                    </div>
                    <div class="i91-service-body">
                      <h4 class="mb-2">Data</h4>
                      <p class="mb-4">Datawarehouse, ETL, dashboarding, data quality. Une expertise éprouvée auprès de grands groupes.</p>
                      <span class="i91-service-cta">Découvrir <i class="uil uil-arrow-right"></i></span>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="/fr/services/erp" class="i91-service-card">
                    <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/erp.webp')">
                      <span class="i91-service-icon"><i class="uil uil-suitcase"></i></span>
                      <span class="i91-service-pill">Partenaire Odoo</span>
                    </div>
                    <div class="i91-service-body">
                      <h4 class="mb-2">ERP</h4>
                      <p class="mb-4">Implémentation et support Odoo pour PME — du diagnostic au support post go-live.</p>
                      <span class="i91-service-cta">Découvrir <i class="uil uil-arrow-right"></i></span>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="/fr/services/ia" class="i91-service-card">
                    <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/ia.webp')">
                      <span class="i91-service-icon"><i class="uil uil-brain"></i></span>
                    </div>
                    <div class="i91-service-body">
                      <h4 class="mb-2">IA</h4>
                      <p class="mb-4">L'IA appliquée au métier : marchés publics, gestion administrative, automatisation.</p>
                      <span class="i91-service-cta">Découvrir <i class="uil uil-arrow-right"></i></span>
                    </div>
                  </a>
                </div>

              </div>
          </div>
      </section>

      <style>
        .i91-service-grid .i91-service-card {
          display: flex;
          flex-direction: column;
          background: #fff;
          border-radius: 18px;
          overflow: hidden;
          height: 100%;
          color: inherit;
          text-decoration: none;
          box-shadow: 0 10px 30px -8px rgba(15,18,24,.08);
          transition: transform .35s ease, box-shadow .35s ease;
        }
        .i91-service-grid .i91-service-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 22px 50px -12px rgba(15,18,24,.18);
          color: inherit;
        }
        .i91-service-image {
          position: relative;
          aspect-ratio: 16 / 10;
          background-size: cover;
          background-position: center;
        }
        .i91-service-image::after {
          content: "";
          position: absolute; inset: 0;
          background: linear-gradient(180deg, rgba(15,18,24,0) 50%, rgba(15,18,24,.55) 100%);
          opacity: .6;
          transition: opacity .3s;
        }
        .i91-service-card:hover .i91-service-image::after { opacity: .85; }
        .i91-service-icon {
          position: absolute;
          left: 1.5rem; bottom: -28px;
          width: 56px; height: 56px;
          background: var(--bs-primary);
          background-image: linear-gradient(135deg, rgba(255,255,255,.18), transparent 60%);
          border-radius: 14px;
          display: flex; align-items: center; justify-content: center;
          color: #fff; font-size: 1.5rem;
          box-shadow: 0 10px 24px -6px rgba(var(--bs-primary-rgb), .55);
          z-index: 2;
        }
        .i91-service-pill {
          position: absolute;
          top: 1rem; right: 1rem;
          background: rgba(255,255,255,.95);
          color: var(--bs-primary);
          font-weight: 600;
          padding: .35rem .75rem;
          border-radius: 999px;
          font-size: .8rem;
          backdrop-filter: blur(4px);
          z-index: 2;
        }
        .i91-service-body { padding: 2.5rem 1.75rem 1.75rem; }
        .i91-service-body h4 { font-weight: 700; }
        .i91-service-body p  { color: #4d5862; font-size: .98rem; margin-bottom: 1.25rem; }
        .i91-service-cta {
          display: inline-flex; align-items: center; gap: .35rem;
          color: var(--bs-primary);
          font-weight: 600;
          transition: gap .25s;
        }
        .i91-service-cta i { transition: transform .25s; }
        .i91-service-card:hover .i91-service-cta { gap: .65rem; }
        .i91-service-card:hover .i91-service-cta i { transform: translateX(2px); }
      </style>
      <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
          <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Nos partenaires</h2>
          <h3 class="display-4 mb-13 text-center">Les solutions qui font la différence</h3>

          <div class="i91-zigzag">

            <!-- Odoo -->
            <article class="i91-zigzag-row">
              <div class="i91-zigzag-visual i91-visual-odoo">
                <span class="i91-zigzag-num">01</span>
                <img src="/assets/img/brands/odoo_logo.svg" alt="Odoo" class="i91-zigzag-logo" />
              </div>
              <div class="i91-zigzag-body">
                <span class="i91-zigzag-tag">Partenaire Officiel</span>
                <h3 class="display-5 mb-4">Odoo</h3>
                <p class="lead fs-lg mb-5">L'ERP open-source qui couvre toute votre PME. Une solution unique pour ventes, comptabilité, stocks, RH, e-commerce — modulaire, évolutive, sans lock-in.</p>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                  <li><span><i class="uil uil-check"></i></span><span>Couvre 80% des besoins standards d'une PME</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Tarification partenaire et support direct éditeur</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Open-source : pas de lock-in propriétaire</span></li>
                </ul>
                <a href="/fr/solutions/odoo" class="btn btn-primary rounded-pill">Découvrir Odoo <i class="uil uil-arrow-right ms-1"></i></a>
              </div>
            </article>

            <!-- Qlik Sense -->
            <article class="i91-zigzag-row reverse">
              <div class="i91-zigzag-visual i91-visual-qlik">
                <span class="i91-zigzag-num">02</span>
                <img src="/assets/img/brands/qlik.svg" alt="Qlik Sense" class="i91-zigzag-logo" />
              </div>
              <div class="i91-zigzag-body">
                <span class="i91-zigzag-tag">Analytique augmentée</span>
                <h3 class="display-5 mb-4">Qlik Sense</h3>
                <p class="lead fs-lg mb-5">La plateforme analytique nouvelle génération. Visualisations interactives, IA intégrée, exploration libre des données — pour transformer vos décisions stratégiques.</p>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                  <li><span><i class="uil uil-check"></i></span><span>Interaction dynamique et exploration libre</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>IA et automatisation intelligente intégrées</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Solutions adaptables et scalables</span></li>
                </ul>
                <a href="/fr/solutions/qlik" class="btn btn-primary rounded-pill">Découvrir Qlik Sense <i class="uil uil-arrow-right ms-1"></i></a>
              </div>
            </article>

            <!-- Power BI -->
            <article class="i91-zigzag-row">
              <div class="i91-zigzag-visual i91-visual-powerbi">
                <span class="i91-zigzag-num">03</span>
                <img src="/assets/img/brands/power-bi.svg" alt="Power BI" class="i91-zigzag-logo i91-zigzag-logo-pbi" />
              </div>
              <div class="i91-zigzag-body">
                <span class="i91-zigzag-tag">Écosystème Microsoft</span>
                <h3 class="display-5 mb-4">Power BI</h3>
                <p class="lead fs-lg mb-5">L'outil BI de Microsoft qui s'intègre nativement à votre écosystème 365. Tableaux de bord interactifs, rapports collaboratifs, partage d'insights à grande échelle.</p>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                  <li><span><i class="uil uil-check"></i></span><span>Intégration native à Microsoft 365</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Connecteurs vers des centaines de sources</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Adoption rapide pour utilisateurs Excel</span></li>
                </ul>
                <a href="/fr/solutions/powerbi" class="btn btn-primary rounded-pill">Découvrir Power BI <i class="uil uil-arrow-right ms-1"></i></a>
              </div>
            </article>

          </div>
        </div>
      </section>

      <style>
        .i91-zigzag { display: flex; flex-direction: column; gap: 5rem; }
        .i91-zigzag-row {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 4rem;
          align-items: center;
        }
        .i91-zigzag-row.reverse > .i91-zigzag-visual { order: 2; }
        .i91-zigzag-visual {
          position: relative;
          aspect-ratio: 4 / 3;
          border-radius: 22px;
          overflow: hidden;
          background-color: #fff;
          background-size: cover;
          background-position: center;
          box-shadow: 0 30px 60px -20px rgba(15,18,24,.18);
          display: flex; align-items: center; justify-content: center;
        }
        .i91-zigzag-visual.i91-visual-odoo {
          background: linear-gradient(135deg, #f5f0fa 0%, #ede4f5 100%);
        }
        .i91-zigzag-visual.i91-visual-qlik {
          background: linear-gradient(135deg, #e8f7ee 0%, #c4ebd2 100%);
        }
        .i91-zigzag-visual.i91-visual-powerbi {
          background: linear-gradient(135deg, #fff8e1 0%, #fde9a8 100%);
        }
        .i91-zigzag-logo { max-width: 60%; max-height: 50%; }
        .i91-zigzag-logo-pbi { max-width: 32%; max-height: 65%; }
        .i91-zigzag-num {
          position: absolute;
          top: 1.5rem; left: 1.5rem;
          font-size: 2rem;
          font-weight: 800;
          letter-spacing: .05em;
          color: rgba(15,18,24,.18);
          background: rgba(255,255,255,.85);
          padding: .25rem .75rem;
          border-radius: 10px;
          backdrop-filter: blur(4px);
        }
        .i91-zigzag-row:not(.reverse) .i91-zigzag-num { /* over photo: lighter bg */ }
        .i91-zigzag-body { padding: 1rem 0; }
        .i91-zigzag-tag {
          display: inline-block;
          padding: .4rem .9rem;
          background: rgba(var(--bs-primary-rgb), .1);
          color: #073a55;
          font-size: .8rem;
          font-weight: 600;
          border-radius: 999px;
          letter-spacing: .03em;
          margin-bottom: 1.25rem;
          text-transform: uppercase;
        }
        .i91-zigzag-body p.lead { color: #4d5862; font-size: 1.05rem; line-height: 1.6; }
        @media (max-width: 991px) {
          .i91-zigzag { gap: 3.5rem; }
          .i91-zigzag-row, .i91-zigzag-row.reverse {
            grid-template-columns: 1fr;
            gap: 1.75rem;
          }
          .i91-zigzag-row.reverse > .i91-zigzag-visual { order: 0; }
        }
      </style>
  </div>

  <?php
      include(__DIR__ . '/../shared/footer.php');
  ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js" defer></script>
  <script src="/assets/js/theme.js" defer></script>

</body>

</html>