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
                    <figure class="rounded"><img src="/assets/img/photos/crop-1.webp" loading="lazy" alt="BI"></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-12">
                    <figure class="rounded"><img src="/assets/img/photos/crop-2.webp" loading="lazy" alt="BI"></figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
              <div class="col-md-6">
                <figure class="rounded"><img src="/assets/img/photos/crop-3.webp" loading="lazy"  alt="BI"></figure>
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
            <figure class="rounded"><img src="/assets/img/photos/customer-1.webp" loading="lazy" alt="Relations commerciales" /></figure>
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
      <section class="wrapper bg-light">
        <div class="container pt-6 pb-14 pt-md-8 pb-md-16">
          <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Nos partenaires</h2>
          <h3 class="display-4 mb-13 text-center">Les solutions qui font la différence</h3>

          <?php
            $partners = [
              [
                'id' => 'odoo',
                'badge' => 'Partenaire officiel',
                'logo' => '/assets/img/brands/odoo_logo.svg',
                'logoAlt' => 'Odoo',
                'title' => 'Odoo',
                'subtitle' => 'ERP open-source · modulaire',
                'lede' => "L'ERP open-source qui couvre toute votre PME. Une solution unique pour ventes, comptabilité, stocks, RH, e-commerce — modulaire, évolutive, sans lock-in.",
                'stats' => [
                  ['80%', 'des besoins PME'],
                  ['20+', 'modules natifs'],
                  ['0',   'lock-in'],
                ],
                'bullets' => [
                  "Couvre 80% des besoins standards d'une PME",
                  'Tarification partenaire et support direct éditeur',
                  "Open-source : pas de lock-in propriétaire",
                ],
                'href' => '/fr/solutions/odoo',
                'cta' => 'Découvrir Odoo',
              ],
              [
                'id' => 'qlik',
                'badge' => 'Analytique augmentée',
                'logo' => '/assets/img/brands/qlik.svg',
                'logoAlt' => 'Qlik Sense',
                'title' => 'Qlik Sense',
                'subtitle' => 'Analytique nouvelle génération',
                'lede' => 'La plateforme analytique nouvelle génération. Visualisations interactives, IA intégrée, exploration libre des données — pour transformer vos décisions stratégiques.',
                'stats' => [
                  ['100%', 'interactif'],
                  ['AI',   'intégrée'],
                  ['∞',    'exploration libre'],
                ],
                'bullets' => [
                  'Interaction dynamique et exploration libre',
                  'IA et automatisation intelligente intégrées',
                  'Solutions adaptables et scalables',
                ],
                'href' => '/fr/solutions/qlik',
                'cta' => 'Découvrir Qlik Sense',
              ],
              [
                'id' => 'powerbi',
                'badge' => 'Écosystème Microsoft',
                'logo' => '/assets/img/brands/power-bi.svg',
                'logoAlt' => 'Power BI',
                'title' => 'Power BI',
                'subtitle' => 'BI Microsoft · Tableaux de bord',
                'lede' => "L'outil BI de Microsoft qui s'intègre nativement à votre écosystème 365. Tableaux de bord interactifs, rapports collaboratifs, partage d'insights à grande échelle.",
                'stats' => [
                  ['365', 'intégration native'],
                  ['500+', 'connecteurs'],
                  ['Excel', 'adoption rapide'],
                ],
                'bullets' => [
                  'Intégration native à Microsoft 365',
                  'Connecteurs vers des centaines de sources',
                  'Adoption rapide pour utilisateurs Excel',
                ],
                'href' => '/fr/solutions/powerbi',
                'cta' => 'Découvrir Power BI',
              ],
            ];
            $total = count($partners);
          ?>
          <div class="partner-cards">
            <?php foreach ($partners as $i => $p): ?>
              <article class="partner-card partner-card--<?php echo $p['id']; ?>" aria-labelledby="pc-<?php echo $p['id']; ?>-title">
                <div class="partner-card__brand">
                  <svg class="partner-card__rings" viewBox="0 0 100 100" aria-hidden="true">
                    <circle cx="50" cy="50" r="48"></circle>
                    <circle cx="50" cy="50" r="36"></circle>
                    <circle cx="50" cy="50" r="24"></circle>
                  </svg>
                  <div class="partner-card__brand-top">
                    <span class="partner-card__badge">
                      <span class="partner-card__badge-dot" aria-hidden="true"></span>
                      <?php echo $p['badge']; ?>
                    </span>
                    <span class="partner-card__index"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?> / <?php echo str_pad($total, 2, '0', STR_PAD_LEFT); ?></span>
                  </div>
                  <div class="partner-card__logo">
                    <img src="<?php echo $p['logo']; ?>" alt="<?php echo $p['logoAlt']; ?>" loading="lazy" />
                  </div>
                  <dl class="partner-card__stats">
                    <?php foreach ($p['stats'] as $s): ?>
                      <div class="partner-card__stat">
                        <dt class="partner-card__stat-value"><?php echo $s[0]; ?></dt>
                        <dd class="partner-card__stat-label"><?php echo $s[1]; ?></dd>
                      </div>
                    <?php endforeach; ?>
                  </dl>
                </div>
                <div class="partner-card__body">
                  <h3 id="pc-<?php echo $p['id']; ?>-title" class="partner-card__title"><?php echo $p['title']; ?></h3>
                  <div class="partner-card__subtitle"><?php echo $p['subtitle']; ?></div>
                  <p class="partner-card__lede"><?php echo $p['lede']; ?></p>
                  <ul class="partner-card__list">
                    <?php foreach ($p['bullets'] as $b): ?>
                      <li>
                        <span class="partner-card__tick" aria-hidden="true">
                          <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M4 10.5 L8.2 14.5 L16 6.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <?php echo $b; ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                  <div class="partner-card__actions">
                    <a href="<?php echo $p['href']; ?>" class="pc-btn pc-btn--primary">
                      <?php echo $p['cta']; ?>
                      <svg width="16" height="16" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10 H15 M11 6 L15 10 L11 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                    <a href="/fr/contact" class="pc-btn pc-btn--ghost">Parler à un expert</a>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <style>
        /* Brand-forward partner card — left panel branded, right panel content */
        .partner-cards { display: flex; flex-direction: column; gap: 3rem; }
        .partner-card {
          --pc-ink: #0f1a2e;
          --pc-ink-2: #3b455a;
          --pc-muted: #7b8597;
          --pc-line: #d8dde6;
          display: grid;
          grid-template-columns: 1.1fr 1fr;
          background: #fff;
          border-radius: 20px;
          overflow: hidden;
          border: 1px solid rgba(15,26,46,.08);
          box-shadow: 0 1px 0 rgba(15,26,46,.04), 0 30px 60px -40px rgba(15,26,46,.18);
          color: var(--pc-ink);
        }
        /* Per-brand palette */
        .partner-card--odoo {
          --pc-brand: #714B67;
          --pc-brand-bright: #8e6481;
          --pc-brand-deep: #4a2f41;
          --pc-brand-soft: #f3edf1;
        }
        .partner-card--qlik {
          --pc-brand: #1A8754;
          --pc-brand-bright: #2BBE4E;
          --pc-brand-deep: #0e4b2d;
          --pc-brand-soft: #e6f5ee;
        }
        .partner-card--powerbi {
          /* Palette amber/brown : assez foncée pour que les jaunes natifs du
             logo (paint0/1/2_linear : #F9E589 → #C87E0E) ressortent, tout en
             gardant un fond chaud "Power BI" lisible avec du texte blanc. */
          --pc-brand: #A86E0A;
          --pc-brand-bright: #F2C811;
          --pc-brand-deep: #2E1A03;
          --pc-brand-soft: #fff3cc;
        }
        /* Logo Power BI : on garde les couleurs natives du SVG (pas de filter) */
        .partner-card--powerbi .partner-card__logo img {
          filter: none;
          opacity: 1;
        }

        /* Alternance : cartes paires inversées (panneau brand à droite) */
        .partner-cards > .partner-card:nth-child(even) .partner-card__brand { order: 2; }
        .partner-cards > .partner-card:nth-child(even) .partner-card__body  { order: 1; }

        /* Left panel */
        .partner-card__brand {
          position: relative;
          padding: 40px;
          color: #fff;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          gap: 32px;
          background: radial-gradient(120% 90% at 100% 0%, var(--pc-brand-bright) 0%, var(--pc-brand) 45%, var(--pc-brand-deep) 100%);
          overflow: hidden;
        }
        .partner-card__rings {
          position: absolute;
          top: -120px; right: -120px;
          width: 420px; height: 420px;
          opacity: .18;
          pointer-events: none;
        }
        .partner-card__rings circle { fill: none; stroke: #fff; stroke-width: .4; }
        .partner-card__brand-top,
        .partner-card__logo,
        .partner-card__stats { position: relative; }
        .partner-card__brand-top {
          display: flex; justify-content: space-between; align-items: center;
        }
        .partner-card__badge {
          display: inline-flex; align-items: center; gap: 8px;
          padding: 6px 12px 6px 8px;
          background: rgba(255,255,255,.12);
          border: 1px solid rgba(255,255,255,.22);
          border-radius: 999px;
          font-size: 11px;
          font-weight: 500;
          letter-spacing: .14em;
          text-transform: uppercase;
          color: #fff;
        }
        .partner-card__badge-dot {
          width: 6px; height: 6px;
          border-radius: 999px;
          background: #a8e6c6;
          box-shadow: 0 0 8px #a8e6c6;
        }
        .partner-card__index {
          font-family: 'JetBrains Mono', ui-monospace, monospace;
          font-size: 12px;
          opacity: .7;
          letter-spacing: .12em;
          color: #fff;
        }
        .partner-card__logo {
          display: flex; align-items: center; justify-content: center;
          min-height: 140px;
        }
        .partner-card__logo img {
          width: 320px; max-width: 80%; height: auto;
          filter: brightness(0) invert(1);
          opacity: .97;
        }
        .partner-card__stats {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
        }
        .partner-card__stat { padding-right: 16px; }
        .partner-card__stat + .partner-card__stat {
          padding-left: 16px;
          border-left: 1px solid rgba(255,255,255,.22);
        }
        .partner-card__stat-value {
          font-size: 28px;
          font-weight: 600;
          line-height: 1;
          letter-spacing: -.02em;
          color: #fff;
        }
        .partner-card__stat-label {
          margin: 6px 0 0;
          font-size: 11px;
          opacity: .75;
          letter-spacing: .04em;
          color: #fff;
        }

        /* Right panel */
        .partner-card__body {
          padding: 44px 44px 36px;
          display: flex;
          flex-direction: column;
        }
        .partner-card__title {
          margin: 0;
          font-size: 44px;
          font-weight: 700;
          letter-spacing: -.025em;
          line-height: 1;
          color: var(--pc-ink);
        }
        .partner-card__subtitle {
          margin-top: 6px;
          font-size: 13px;
          color: var(--pc-muted);
          letter-spacing: .02em;
        }
        .partner-card__lede {
          margin: 24px 0 0;
          font-size: 16px;
          line-height: 1.55;
          color: var(--pc-ink-2);
        }
        .partner-card__list {
          margin: 28px 0 0;
          padding: 0;
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 10px;
        }
        .partner-card__list li {
          display: flex; align-items: center; gap: 12px;
          font-size: 14px;
          color: var(--pc-ink);
        }
        .partner-card__tick {
          flex-shrink: 0;
          width: 22px; height: 22px;
          border-radius: 999px;
          background: var(--pc-brand-soft);
          color: var(--pc-brand);
          display: inline-flex; align-items: center; justify-content: center;
        }
        .partner-card__actions {
          margin-top: auto;
          padding-top: 28px;
          display: flex;
          gap: 12px;
          flex-wrap: wrap;
        }
        .pc-btn {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          padding: 14px 22px;
          border-radius: 999px;
          font-size: 14px;
          font-weight: 600;
          text-decoration: none;
          border: 1px solid transparent;
          cursor: pointer;
          transition: transform 120ms ease, background-color 120ms ease, border-color 120ms ease;
        }
        .pc-btn:hover { transform: translateY(-1px); }
        .pc-btn--primary {
          background: var(--pc-brand);
          color: #fff;
        }
        .pc-btn--primary:hover { background: var(--pc-brand-deep); color: #fff; }
        .pc-btn--ghost {
          background: transparent;
          color: var(--pc-ink);
          border-color: var(--pc-line);
          font-weight: 500;
          padding: 14px 18px;
        }
        .pc-btn--ghost:hover { border-color: var(--pc-ink); color: var(--pc-ink); }

        /* Responsive */
        @media (max-width: 880px) {
          .partner-card { grid-template-columns: 1fr; border-radius: 16px; }
          .partner-card__brand { padding: 32px; gap: 24px; }
          .partner-card__logo img { width: 240px; }
          .partner-card__body { padding: 32px; }
          .partner-card__title { font-size: 36px; }
          .partner-card__stat-value { font-size: 24px; }
        }
        @media (max-width: 480px) {
          .partner-card__stats { grid-template-columns: 1fr 1fr; gap: 16px 0; }
          .partner-card__stat:nth-child(3) {
            grid-column: 1 / -1;
            padding-left: 0;
            border-left: none;
            border-top: 1px solid rgba(255,255,255,.22);
            padding-top: 16px;
            margin-top: 4px;
          }
          .partner-cards { gap: 2rem; }
        }
      </style>

      <!-- CTA FINAL -->
      <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <div class="i91-cta-section">
            <div class="i91-cta-section-img"></div>
            <div class="i91-cta-section-block">
              <p class="i91-cta-section-eyebrow">Prêt à passer à l'action ?</p>
              <h2 class="i91-cta-section-title">Un projet data ou ERP ? Parlons-en.</h2>
              <a href="/fr/contact" class="i91-cta-section-btn">Planifier un rendez-vous <i class="uil uil-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </section>
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