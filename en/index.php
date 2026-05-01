<?php
$pageMetaDescription = "Welcome to Insight 91 - Leading business intelligence and ERP solutions. Explore our expertise in Qlik Sense and Power BI.";
$pageTitle = "Welcome to Insight 91";
$lang = 'en';
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
      <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-40" data-image-src="/assets/img/photos/main.webp">
      </div>
      <!--/column -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start " data-cues="slideInDown" data-group="page-title" data-delay="600">
              <h1 id="subtitle" class="display-1 mb-5">Your data, your ERP, your AI — steered together</h1>
              <p id="tagline" class="lead fs-25 lh-sm mb-7 pe-md-10">Insight 91 supports SMBs and larger organizations on three complementary axes: data, ERP and applied AI.</p>
              <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                <span><a href="#snippet-1" class="btn btn-lg btn-primary rounded-pill me-2 scroll">Explore Now</a></span>
                <span><a href="/en/contact" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
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
      <div class="container pt-14 pt-md-16 pb-0">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center mb-3 mb-md-13">
          <div class="col-lg-6 position-relative hide-sm">
            <div class="btn btn-circle btn-primary pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
              <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">10+</span></h3>
              <p id="years_experience">Year Experience</p>
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
            <h3 id="empower_business" class="display-4 mb-5">Empower your business with cutting-edge BI solutions</h3>
            <p id="unlock_potential" class="mb-3">Unlock the full potential of your data, fostering a culture of data literacy within your organization and dive into a transformative journey towards becoming a truly data-driven company.</p>
            <p id="actionable_insights" class="mb-7"> Explore how actionable insights can drive informed decision-making, ensuring your business stays ahead in today's dynamic landscape. </p>

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
                <h4 id="customized_solutions" class="mb-1">Customized Solutions</h4>
                <p id="customized_solutions_description" class="mb-0">Our commitment lies in delivering customized BI solutions, tailoring each aspect to meet your unique requirements while adhering to industry standards.</p>
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
                <h4 id="data_integration" class="mb-1">Data Integration</h4>
                <p id="data_integration_description" class="mb-0">Seamlessly integrating diverse data sources, we provide you with a comprehensive view, ensuring your decision-making is well-informed and agile.</p>
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
                <h4 id="advanced_analytics" class="mb-1">Advanced Analytics</h4>
                <p id="advanced_analytics_description" class="mb-0">Explore advanced analytics, including predictive modeling and machine learning, unlocking hidden insights and predicting future trends.</p>
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
                <h4 id="training_support" class="mb-1">Training and Support</h4>
                <p id="training_support_description" class="mb-0">Empower your team through comprehensive training programs and ongoing support, enhancing data literacy and maximizing the value of BI tools.</p>
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
                <h4 id="user_friendly_interfaces" class="mb-1">User-Friendly Interfaces</h4>
                <p id="user_friendly_interfaces_description" class="mb-0">Prioritize user experience with our user-friendly interfaces, ensuring that interacting with data is intuitive and efficient for your team.</p>
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
                <h4 id="data_security" class="mb-1">Data Security</h4>
                <p id="data_security_description" class="mb-0">Rest easy with robust data security measures in place, instilling confidence in the protection of your sensitive business information.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <hr class="my-5 my-md-9" />
        <div class="row gy-10 gy-sm-13 gx-lg-8 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-4 offset-md-2 align-self-end hide-sm">
                <figure class="rounded"><img src="/assets/img/photos/home1.webp" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end hide-sm">
                <figure class="rounded"><img src="/assets/img/photos/home2.webp" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 offset-md-1">
                <figure class="rounded hide-sm"><img src="/assets/img/photos/home3.webp" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-4 align-self-start">
                <figure class="rounded"><img src="/assets/img/photos/home4.webp" alt=""></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 id="reasons_to_choose_us" class="display-4 mb-7">A few reasons why our valued customers choose us</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button id="cutting_edge_tools" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Cutting-Edge Analytical Tools </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Our customers choose us for our advanced BI tools that transform complex data into clear, actionable insights, enabling them to make smarter, data-driven decisions.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingTwo">
                  <button id="top_customized_solutions" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Customized Solutions and Expert Support </button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p id="top_customized_solutions_description">We stand out by offering personalized Business Intelligence solutions tailored to each client's unique needs, accompanied by expert guidance and support, ensuring seamless integration and maximized value.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingThree">
                  <button id="business_growth_impact" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Proven Impact on Business Growth </button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Clients trust us because of our proven track record in driving business growth and efficiency. Our BI strategies have consistently delivered measurable improvements in performance, productivity, and profitability for our clients.</p>
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
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Our services</h2>
        <h3 class="display-4 mb-10 text-center">Three areas of expertise</h3>
        <div class="row gx-md-6 gx-xl-8 gy-8 i91-service-grid">

          <div class="col-md-4">
            <a href="/en/services/data" class="i91-service-card">
              <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/data.webp')">
                <span class="i91-service-icon"><i class="uil uil-database"></i></span>
              </div>
              <div class="i91-service-body">
                <h4 class="mb-2">Data</h4>
                <p class="mb-4">Warehouse, ETL, dashboarding, data quality. Hands-on experience with large groups.</p>
                <span class="i91-service-cta">Discover <i class="uil uil-arrow-right"></i></span>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="/en/services/erp" class="i91-service-card">
              <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/erp.webp')">
                <span class="i91-service-icon"><i class="uil uil-suitcase"></i></span>
                <span class="i91-service-pill">Odoo Partner</span>
              </div>
              <div class="i91-service-body">
                <h4 class="mb-2">ERP</h4>
                <p class="mb-4">Odoo implementation and support for SMBs — from diagnosis to post go-live.</p>
                <span class="i91-service-cta">Discover <i class="uil uil-arrow-right"></i></span>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="/en/services/ia" class="i91-service-card">
              <div class="i91-service-image" style="background-image:url('/assets/img/photos/services/ia.webp')">
                <span class="i91-service-icon"><i class="uil uil-brain"></i></span>
              </div>
              <div class="i91-service-body">
                <h4 class="mb-2">AI</h4>
                <p class="mb-4">AI applied to business: public tenders, administrative management, automation.</p>
                <span class="i91-service-cta">Discover <i class="uil uil-arrow-right"></i></span>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

    <style>
      .i91-service-grid .i91-service-card {
        display: flex; flex-direction: column;
        background: #fff; border-radius: 18px; overflow: hidden;
        height: 100%; color: inherit; text-decoration: none;
        box-shadow: 0 10px 30px -8px rgba(15,18,24,.08);
        transition: transform .35s ease, box-shadow .35s ease;
      }
      .i91-service-grid .i91-service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 50px -12px rgba(15,18,24,.18);
        color: inherit;
      }
      .i91-service-image {
        position: relative; aspect-ratio: 16 / 10;
        background-size: cover; background-position: center;
      }
      .i91-service-image::after {
        content: ""; position: absolute; inset: 0;
        background: linear-gradient(180deg, rgba(15,18,24,0) 50%, rgba(15,18,24,.55) 100%);
        opacity: .6; transition: opacity .3s;
      }
      .i91-service-card:hover .i91-service-image::after { opacity: .85; }
      .i91-service-icon {
        position: absolute; left: 1.5rem; bottom: -28px;
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
        position: absolute; top: 1rem; right: 1rem;
        background: rgba(255,255,255,.95);
        color: var(--bs-primary); font-weight: 600;
        padding: .35rem .75rem; border-radius: 999px;
        font-size: .8rem; backdrop-filter: blur(4px);
        z-index: 2;
      }
      .i91-service-body { padding: 2.5rem 1.75rem 1.75rem; }
      .i91-service-body h4 { font-weight: 700; }
      .i91-service-body p  { color: #6e7d8c; font-size: .98rem; margin-bottom: 1.25rem; }
      .i91-service-cta {
        display: inline-flex; align-items: center; gap: .35rem;
        color: var(--bs-primary); font-weight: 600;
        transition: gap .25s;
      }
      .i91-service-cta i { transition: transform .25s; }
      .i91-service-card:hover .i91-service-cta { gap: .65rem; }
      .i91-service-card:hover .i91-service-cta i { transform: translateX(2px); }
    </style>
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <h2 class="fs-16 text-uppercase text-muted mb-3 text-center">Our partners</h2>
        <h3 class="display-4 mb-13 text-center">The solutions that make a difference</h3>

        <div class="i91-zigzag">

          <article class="i91-zigzag-row">
            <div class="i91-zigzag-visual i91-visual-odoo">
              <span class="i91-zigzag-num">01</span>
              <img src="/assets/img/brands/odoo_logo.svg" alt="Odoo" class="i91-zigzag-logo" />
            </div>
            <div class="i91-zigzag-body">
              <span class="i91-zigzag-tag">Official Partner</span>
              <h3 class="display-5 mb-4">Odoo</h3>
              <p class="lead fs-lg mb-5">The open-source ERP that covers your entire SMB. One platform for sales, accounting, inventory, HR, e-commerce — modular, scalable, no lock-in.</p>
              <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                <li><span><i class="uil uil-check"></i></span><span>Covers 80% of an SMB's standard processes</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Partner pricing and direct vendor support</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Open-source: no proprietary lock-in</span></li>
              </ul>
              <a href="/en/solutions/odoo" class="btn btn-primary rounded-pill">Discover Odoo <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
          </article>

          <article class="i91-zigzag-row reverse">
            <div class="i91-zigzag-visual i91-visual-qlik">
              <span class="i91-zigzag-num">02</span>
              <img src="/assets/img/brands/qlik.svg" alt="Qlik Sense" class="i91-zigzag-logo" />
            </div>
            <div class="i91-zigzag-body">
              <span class="i91-zigzag-tag">Augmented analytics</span>
              <h3 class="display-5 mb-4">Qlik Sense</h3>
              <p class="lead fs-lg mb-5">The next-generation analytics platform. Interactive visualisations, embedded AI, free data exploration — to transform your strategic decisions.</p>
              <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                <li><span><i class="uil uil-check"></i></span><span>Dynamic interaction and free exploration</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Embedded AI and smart automation</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Adaptable, scalable solutions</span></li>
              </ul>
              <a href="/en/solutions/qlik" class="btn btn-primary rounded-pill">Discover Qlik Sense <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
          </article>

          <article class="i91-zigzag-row">
            <div class="i91-zigzag-visual i91-visual-powerbi">
              <span class="i91-zigzag-num">03</span>
              <img src="/assets/img/brands/power-bi.svg" alt="Power BI" class="i91-zigzag-logo i91-zigzag-logo-pbi" />
            </div>
            <div class="i91-zigzag-body">
              <span class="i91-zigzag-tag">Microsoft ecosystem</span>
              <h3 class="display-5 mb-4">Power BI</h3>
              <p class="lead fs-lg mb-5">Microsoft's BI tool, natively integrated with your 365 ecosystem. Interactive dashboards, collaborative reports, insight sharing at scale.</p>
              <ul class="icon-list bullet-bg bullet-soft-primary mb-5">
                <li><span><i class="uil uil-check"></i></span><span>Native integration with Microsoft 365</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Connectors to hundreds of data sources</span></li>
                <li class="mt-2"><span><i class="uil uil-check"></i></span><span>Quick adoption for Excel users</span></li>
              </ul>
              <a href="/en/solutions/powerbi" class="btn btn-primary rounded-pill">Discover Power BI <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <style>
      .i91-zigzag { display: flex; flex-direction: column; gap: 5rem; }
      .i91-zigzag-row {
        display: grid; grid-template-columns: 1fr 1fr;
        gap: 4rem; align-items: center;
      }
      .i91-zigzag-row.reverse > .i91-zigzag-visual { order: 2; }
      .i91-zigzag-visual {
        position: relative; aspect-ratio: 4 / 3;
        border-radius: 22px; overflow: hidden;
        background-color: #fff;
        background-size: cover; background-position: center;
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
        position: absolute; top: 1.5rem; left: 1.5rem;
        font-size: 2rem; font-weight: 800; letter-spacing: .05em;
        color: rgba(15,18,24,.18);
        background: rgba(255,255,255,.85);
        padding: .25rem .75rem; border-radius: 10px;
        backdrop-filter: blur(4px);
      }
      .i91-zigzag-body { padding: 1rem 0; }
      .i91-zigzag-tag {
        display: inline-block;
        padding: .4rem .9rem;
        background: rgba(var(--bs-primary-rgb), .12);
        color: var(--bs-primary);
        font-size: .8rem; font-weight: 600;
        border-radius: 999px; letter-spacing: .03em;
        margin-bottom: 1.25rem;
        text-transform: uppercase;
      }
      .i91-zigzag-body p.lead { color: #4d5862; }
      @media (max-width: 991px) {
        .i91-zigzag { gap: 3.5rem; }
        .i91-zigzag-row, .i91-zigzag-row.reverse {
          grid-template-columns: 1fr; gap: 1.75rem;
        }
        .i91-zigzag-row.reverse > .i91-zigzag-visual { order: 0; }
      }
    </style>
    <!-- /section -->

  </div>
  <!-- /.content-wrapper -->

  <?php
      include(__DIR__ . '/../shared/footer.php');
  ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>

</body>

</html>