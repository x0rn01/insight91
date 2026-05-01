<?php
$pageMetaDescription = "Insight 91 — un cabinet belge d'expertise data, ERP et IA. Découvrez notre équipe et notre histoire.";
$pageTitle = "Qui sommes-nous";
$lang = 'fr';
$currentPage = 'about';
include(__DIR__ . '/../shared/head.php');
?>
<body>
  <div class="content-wrapper">
    <?php
        $navbar = 'navbar-dark';
        $logo = 'logo-light';
        include(__DIR__ . '/../shared/header.php');
    ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay i91-overlay-strong" data-image-src="/assets/img/photos/business.avif">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-7 text-center text-md-start" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">Qui sommes-nous</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">Une équipe d'experts data, ERP et IA, basée en Belgique, qui met la technologie au service du métier.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Notre mission</h2>
            <h3 class="display-4 mb-5">Transformer la donnée en <span class="underline-3 style-2 yellow">décisions</span></h3>
            <p class="lead fs-lg mb-3">Nous croyons que toute organisation, du commerce de proximité au grand groupe, mérite des outils data et ERP qui fonctionnent réellement — sans jargon, sans complexité inutile.</p>
            <p class="mb-0">Notre approche : comprendre votre métier en profondeur, sélectionner les technologies qui correspondent à votre contexte, et accompagner vos équipes jusqu'à l'autonomie.</p>
          </div>
          <div class="col-lg-6">
            <figure class="rounded"><img src="/assets/img/photos/about-1.webp" alt="Notre mission" /></figure>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Nos valeurs</h2>
        <h3 class="display-5 mb-10 text-center">Ce qui nous guide</h3>
        <div class="row gx-md-8 gx-xl-12 gy-8">
          <div class="col-md-4">
            <div class="text-center">
              <i class="uil uil-bullseye text-primary fs-50 mb-3"></i>
              <h4>Pragmatisme</h4>
              <p>Pas de hype. Des solutions qui marchent, mesurées sur leur impact réel.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="uil uil-handshake text-primary fs-50 mb-3"></i>
              <h4>Proximité</h4>
              <p>Un interlocuteur dédié, une relation de confiance qui s'inscrit dans la durée.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <i class="uil uil-graduation-cap text-primary fs-50 mb-3"></i>
              <h4>Transmission</h4>
              <p>Notre objectif : votre autonomie. Nous formons, documentons, et nous nous effaçons.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">L'équipe</h2>
        <h3 class="display-5 mb-10 text-center">Les fondateurs</h3>

        <div class="row gx-md-8 gx-xl-12 gy-8 justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7 text-center">
                <!-- Placeholder portrait -->
                <div class="rounded-circle bg-soft-primary mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;">
                  <i class="uil uil-user text-primary" style="font-size: 80px;"></i>
                </div>
                <h4 class="mb-1">Fondateur 1</h4>
                <p class="text-muted mb-3">Co-fondateur</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7 text-center">
                <div class="rounded-circle bg-soft-primary mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;">
                  <i class="uil uil-user text-primary" style="font-size: 80px;"></i>
                </div>
                <h4 class="mb-1">Fondateur 2</h4>
                <p class="text-muted mb-3">Co-fondateur</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <h2 class="display-5 mb-7">Envie de nous rencontrer ?</h2>
        <a href="/fr/contact" class="btn btn-lg btn-primary rounded-pill">Prenez contact</a>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../shared/footer.php'); ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>
</html>
