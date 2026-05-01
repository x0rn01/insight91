<?php
$pageMetaDescription = "Insight 91 — a Belgian data, ERP and AI consultancy. Meet our team and discover our story.";
$pageTitle = "About";
$lang = 'en';
$currentPage = 'about';
include(__DIR__ . '/../shared/head.php');
?>
<body>
  <div class="content-wrapper">
    <?php $navbar = 'navbar-dark'; $logo = 'logo-light'; include(__DIR__ . '/../shared/header.php'); ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-dark" data-image-src="/assets/img/photos/business.avif">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-7 text-center text-md-start" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">About us</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">A team of data, ERP and AI experts based in Belgium, putting technology at the service of business.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3">Our mission</h2>
            <h3 class="display-4 mb-5">Turn data into <span class="underline-3 style-2 yellow">decisions</span></h3>
            <p class="lead fs-lg mb-3">We believe every organisation, from local shops to large groups, deserves data and ERP tools that actually work — without jargon and without unnecessary complexity.</p>
            <p class="mb-0">Our approach: deeply understand your business, pick technologies that fit your context, and walk your teams through to autonomy.</p>
          </div>
          <div class="col-lg-6"><figure class="rounded"><img src="/assets/img/photos/about-1.webp" alt="Our mission" /></figure></div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Our values</h2>
        <h3 class="display-5 mb-10 text-center">What guides us</h3>
        <div class="row gx-md-8 gx-xl-12 gy-8">
          <div class="col-md-4"><div class="text-center"><i class="uil uil-bullseye text-primary fs-50 mb-3"></i><h4>Pragmatism</h4><p>No hype. Solutions that work, measured by real impact.</p></div></div>
          <div class="col-md-4"><div class="text-center"><i class="uil uil-handshake text-primary fs-50 mb-3"></i><h4>Closeness</h4><p>A dedicated point of contact, a trusted relationship that lasts.</p></div></div>
          <div class="col-md-4"><div class="text-center"><i class="uil uil-graduation-cap text-primary fs-50 mb-3"></i><h4>Knowledge transfer</h4><p>Our goal: your autonomy. We train, document, and step back.</p></div></div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">The team</h2>
        <h3 class="display-5 mb-10 text-center">The founders</h3>
        <p class="lead text-center text-muted mb-10">Founder portraits and bios coming soon.</p>

        <div class="row gx-md-8 gx-xl-12 gy-8 justify-content-center">
          <div class="col-md-6 col-lg-4"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7 text-center">
            <div class="rounded-circle bg-soft-primary mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;"><i class="uil uil-user text-primary" style="font-size: 80px;"></i></div>
            <h4 class="mb-1">Founder 1</h4><p class="text-muted mb-3">Co-founder</p><p class="mb-0 fs-15">Bio coming soon.</p>
          </div></div></div>
          <div class="col-md-6 col-lg-4"><div class="card border-0 shadow-lg h-100"><div class="card-body p-7 text-center">
            <div class="rounded-circle bg-soft-primary mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;"><i class="uil uil-user text-primary" style="font-size: 80px;"></i></div>
            <h4 class="mb-1">Founder 2</h4><p class="text-muted mb-3">Co-founder</p><p class="mb-0 fs-15">Bio coming soon.</p>
          </div></div></div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <h2 class="display-5 mb-7">Want to meet us?</h2>
        <a href="/en/contact" class="btn btn-lg btn-primary rounded-pill">Get in touch</a>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../shared/footer.php'); ?>
  <div class="progress-wrap"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg></div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>
</html>
