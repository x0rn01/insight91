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
      <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-40" data-image-src="./../assets/img/photos/main.jpg">
      </div>
      <!--/column -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start " data-cues="slideInDown" data-group="page-title" data-delay="600">
              <h1 id="subtitle" class="display-1 mb-5">From Insights to Impact.</h1>
              <p id="tagline" class="lead fs-25 lh-sm mb-7 pe-md-10">Elevate your Business with Smart Analytics.</p>
              <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                <span><a id="explore_now_button" href="#snippet-1" class="btn btn-lg btn-primary rounded-pill me-2 scroll">Explore Now</a></span>
                <span><button id="contact_us_button" data-target="section-contact" class="btn btn-lg btn-outline-primary rounded-pill scroll scroll-button">Contact Us</button></span>
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
              <p id="years_experience">Year Experience</p>
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
                <img src="./../assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
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
                <img src="./../assets/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
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
                <img src="./../assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
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
                <img src="./../assets/img/icons/lineal/headphone.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
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
                <img src="./../assets/img/icons/lineal/laptop.svg" class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
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
                <img src="./../assets/img/icons/lineal/secure.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-primary me-4" alt="" />
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
        <hr class="my-7 my-md-17" />
        <div class="row gy-10 gy-sm-13 gx-lg-8 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-4 offset-md-2 align-self-end hide-sm">
                <figure class="rounded"><img src="./../assets/img/photos/home1.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end hide-sm">
                <figure class="rounded"><img src="./../assets/img/photos/home2.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 offset-md-1">
                <figure class="rounded hide-sm"><img src="./../assets/img/photos/home3.jpg" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-4 align-self-start">
                <figure class="rounded"><img src="./../assets/img/photos/home4.jpg" alt=""></figure>
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
    <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="./../assets/img/photos/home-banner.jpg">
      <div class="container py-18 text-center">
        <div class="row">
          <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
            <h2 id="discover_bi_expertise" class="display-4 px-lg-10 px-xl-13 px-xxl-10 text-white pb-10">Discover how our Business Intelligence expertise can elevate your sector to new heights of performance and insight</h2>
            <span><a id="sport_button" href="sport.php" class="btn btn-lg btn-white rounded-pill me-2">Sport</a></span>
            <span><a id="business_button" href="business.php" class="btn btn-lg btn-outline-white rounded-pill">Business</a></span>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
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
  <script src="./../assets/js/plugins.js"></script>
  <script src="./../assets/js/theme.js"></script>

</body>

</html>