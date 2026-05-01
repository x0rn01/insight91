<?php
$pageMetaDescription = "Services IA d'Insight 91 : intelligence artificielle appliquée aux marchés publics et à la gestion administrative. Du POC à l'industrialisation.";
$pageTitle = "Services IA";
$lang = 'fr';
$currentPage = 'services/ia';
include(__DIR__ . '/../../shared/head.php');
?>
<body>
  <div class="content-wrapper">
    <?php
        $navbar = 'navbar-dark';
        $logo = 'logo-light';
        include(__DIR__ . '/../../shared/header.php');
    ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-dark" data-image-src="/assets/img/photos/business.avif">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-7 text-center text-md-start" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">L'IA appliquée à votre métier</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">Pas de hype. Des cas d'usage concrets, mesurables, qui libèrent du temps à vos équipes.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Cas d'usage</h2>
        <h3 class="display-5 mb-10 text-center">Là où l'IA apporte une vraie valeur</h3>
        <div class="row gx-md-8 gx-xl-12 gy-10">
          <div class="col-lg-6">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7">
                <i class="uil uil-file-search-alt text-primary fs-50 mb-4"></i>
                <h3 class="mb-3">Marchés publics</h3>
                <p class="lead fs-lg mb-3">L'analyse d'appels d'offres prend du temps. L'IA peut le diviser par dix.</p>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Détection automatique des opportunités pertinentes</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Synthèse des cahiers des charges</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Aide à la rédaction des réponses</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Analyse de conformité réglementaire</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7">
                <i class="uil uil-folder-network text-primary fs-50 mb-4"></i>
                <h3 class="mb-3">Gestion administrative</h3>
                <p class="lead fs-lg mb-3">Automatisez les tâches répétitives qui pèsent sur vos équipes.</p>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Classification automatique de documents</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Extraction de données (factures, contrats, formulaires)</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Routage intelligent des emails</span></li>
                  <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Assistants conversationnels métier</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Notre méthode</h2>
        <h3 class="display-5 mb-10 text-center">Du POC à la production</h3>
        <div class="row gx-md-8 gx-xl-12 gy-10">
          <div class="col-md-4">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7 text-center">
                <span class="display-3 text-primary fw-bold">1</span>
                <h4 class="mt-3 mb-3">POC</h4>
                <p class="mb-0">Validation rapide de la valeur métier sur un périmètre contrôlé. Quelques semaines.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7 text-center">
                <span class="display-3 text-primary fw-bold">2</span>
                <h4 class="mt-3 mb-3">MVP</h4>
                <p class="mb-0">Mise en production sur un cas d'usage cible, mesure des gains, ajustements.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-lg h-100">
              <div class="card-body p-7 text-center">
                <span class="display-3 text-primary fw-bold">3</span>
                <h4 class="mt-3 mb-3">Industrialisation</h4>
                <p class="mb-0">Déploiement à l'échelle, monitoring, gouvernance, formation des équipes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Notre stack</h2>
        <h3 class="display-5 mb-10 text-center">Des technologies éprouvées</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-6">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-brain text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">LLM</h4><p class="mb-0">GPT-5, Claude, Gemini, modèles open-source.</p></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-search text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">RAG</h4><p class="mb-0">Recherche augmentée sur vos documents internes.</p></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-cog text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">Automatisation</h4><p class="mb-0">Workflows IA intégrés à vos outils existants.</p></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-shield-check text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">Conformité</h4><p class="mb-0">RGPD, AI Act, hébergement européen au besoin.</p></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-chart text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">Évaluation</h4><p class="mb-0">Métriques de qualité, A/B testing, monitoring.</p></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div><i class="uil uil-users-alt text-primary fs-30 me-3"></i></div>
              <div><h4 class="mb-1">Adoption</h4><p class="mb-0">Formation utilisateurs, conduite du changement.</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <h2 class="display-5 mb-7">Une idée de cas d'usage IA ?</h2>
        <p class="lead fs-lg mb-7">On vous aide à valider sa faisabilité et son ROI en quelques semaines.</p>
        <a href="/fr/contact" class="btn btn-lg btn-primary rounded-pill">Lancer la conversation</a>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../../shared/footer.php'); ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>
</html>
