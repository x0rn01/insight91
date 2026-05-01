<?php
$pageMetaDescription = "Insight 91 vous accompagne avec des solutions BI et ERP sur mesure. Bénéficiez de notre expertise en Qlik Sense et Power BI pour améliorer vos décisions d'affaires.";
$pageTitle = "Bienvenue chez Insight 91";
$lang = 'fr';
$currentPage = 'index';
include(__DIR__ . '/../shared/head.php');
?>
<body data-theme="light">
  <div class="content-wrapper">

    <?php
    function isMobileDevice() {
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        // Common keywords for popular mobile devices
        return strpos($userAgent, 'mobile') !== false ||
               strpos($userAgent, 'android') !== false ||
               strpos($userAgent, 'iphone') !== false ||
               strpos($userAgent, 'ipod') !== false ||
               strpos($userAgent, 'ipad') !== false ||
               strpos($userAgent, 'windows phone') !== false;
    }

    // Default values for desktop
    $navbar = 'navbar-light';
    $logo = 'logo-dark';

    // Check if the device is mobile
    if (isMobileDevice()) {
        $navbar = 'navbar-dark';
        $logo = 'logo-light';
    }

    include(__DIR__ . '/../shared/header.php');
    ?>

    <section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center mt-lg-20">
      <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-40" data-image-src="./../assets/img/photos/main.jpg">
      </div>
      <!--/column -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start " data-cues="slideInDown" data-group="page-title" data-delay="600">
              <h1 id="subtitle" class="display-1 mb-5">Changez vos données en résultats concrets</h1>
              <p id="tagline" class="lead fs-25 lh-sm mb-7 pe-md-10">Votre futur, illuminé par nos analyses. Utilisez l'information pour surpasser vos concurrents grâce à notre expertise.</p>
              <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                <span><a id="explore_now_button" href="#snippet-1" class="btn btn-lg btn-primary rounded-pill me-2 scroll">En savoir plus</a></span>
                  <span><button id="contact_us_button" data-target="section-contact" class="btn btn-lg btn-outline-primary rounded-pill scroll scroll-button">Contactez nous</button></span>
              </div>
            </div>
            <!--/div -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section id="snippet-1" class="wrapper bg-light">
      <div class="container py-10 py-md-18">
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
                    <figure class="rounded"><img src="./../assets/img/photos/crop-1.jpg" alt="BI"></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-12">
                    <figure class="rounded"><img src="./../assets/img/photos/crop-2.webp" alt="BI"></figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
              <div class="col-md-6">
                <figure class="rounded"><img src="./../assets/img/photos/crop-3.webp"  alt="BI"></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h3 class="display-4 mb-5">Créez des stratégies de BI pour moderniser votre entreprise</h3>
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
                <img src="./../assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="customized_solutions" class="mb-1">Solutions personnalisées</h4>
                <p id="customized_solutions_description" class="mb-0">Notre objectif est de créer des solutions BI sur mesure, développées selon toutes vos exigences, mais aussi selon les normes du secteur.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./../assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="data_integration" class="mb-1">Intégration des données</h4>
                <p id="data_integration_description" class="mb-0">Avec une intégration en douceur entre les nombreuses sources de données, nous vous présentons une vue unifiée afin que vous puissiez prendre des décisions éclairées basées sur des informations précises et récentes.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./../assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="advanced_analytics" class="mb-1">Analyses avancées</h4>
                <p id="advanced_analytics_description" class="mb-0">Explorez des analyses avancées, y compris la modélisation prédictive et l'apprentissage automatique, dévoilant des insights cachées et prédisant les tendances futures.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./../assets/img/icons/lineal/headphone.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="training_support" class="mb-1">Formation et support</h4>
                <p id="training_support_description" class="mb-0">Donnez de la puissance à votre équipe avec des programmes de formation complets et un soutien continu qui améliorent la littératie des données et assurent que la valeur des outils BI est extraite.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./../assets/img/icons/lineal/laptop.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="user_friendly_interfaces" class="mb-1">Expériences utilisateur conviviales</h4>
                <p id="user_friendly_interfaces_description" class="mb-0">Mettez l'expérience utilisateur en premier plan avec nos interfaces intuitives et interagissez avec les données de manière transparente et efficace pour votre équipe.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="./../assets/img/icons/lineal/secure.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-primary me-4" alt="" />
              </div>
              <div>
                <h4 id="data_security" class="mb-1">Sécurité des données</h4>
                <p id="data_security_description" class="mb-0">Ayez la tranquillité d'esprit que des mesures de sécurité des données très robustes sont en place pour établir la confiance dans la sécurité de vos informations commerciales sensibles.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <hr class="my-7 my-md-17" />

        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
          <div class="col-md-8 col-lg-5 position-relative">
            <div class="shape bg-line green rounded-circle rellax w-18 h-18" data-rellax-speed="1" style="top: -2.2rem; left: -2.4rem;"></div>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="./../assets/img/photos/customer-1.jpg" alt="Relations commerciales" /></figure>
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
      <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="./../assets/img/photos/home-banner.jpg">
          <div class="container py-18 text-center">
              <div class="row">
                  <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
                      <h2 id="discover_bi_expertise" class="display-4 px-lg-10 px-xl-13 px-xxl-10 text-white pb-10">Découvrez nos expertises</h2>
                      <span><a id="sport_button" href="sport.php" class="btn btn-lg btn-white rounded-pill me-2">Sport</a></span>
                      <span><a id="business_button" href="business.php" class="btn btn-lg btn-outline-white rounded-pill">Entreprises</a></span>
                  </div>
                  <!--/column -->
              </div>
              <!--/.row -->
          </div>
          <!-- /.container -->
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
  <script src="./../assets/js/plugins.js"></script>
  <script src="./../assets/js/theme.js"></script>

</body>

</html>