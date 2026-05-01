<?php
require_once __DIR__ . '/../../lib/blog.php';

$slug = $_GET['slug'] ?? '';
$blog = new Blog('en');
$post = $blog->get($slug);

if (!$post) {
    http_response_code(404);
    $pageMetaDescription = "Article not found.";
    $pageTitle = "Article not found";
    $lang = 'en';
    $currentPage = 'blog';
    include(__DIR__ . '/../../shared/head.php');
    ?>
    <body>
      <div class="content-wrapper">
        <?php $navbar = 'navbar-light'; $logo = 'logo-dark'; include(__DIR__ . '/../../shared/header.php'); ?>
        <section class="wrapper bg-light">
          <div class="container py-20 text-center">
            <h1 class="display-1 mb-7">404</h1>
            <p class="lead mb-7">This article does not exist or has been moved.</p>
            <a href="/en/blog" class="btn btn-primary rounded-pill">Back to blog</a>
          </div>
        </section>
      </div>
      <?php include(__DIR__ . '/../../shared/footer.php'); ?>
      <script src="/assets/js/plugins.js"></script>
      <script src="/assets/js/theme.js"></script>
    </body>
    </html>
    <?php
    exit;
}

$pageMetaDescription = $post['excerpt'] !== '' ? $post['excerpt'] : 'Insight 91 blog article';
$pageTitle = $post['title'];
$lang = 'en';
$currentPage = 'blog/' . $post['slug'];
include(__DIR__ . '/../../shared/head.php');
?>
<body>
  <div class="content-wrapper">
    <?php $navbar = 'navbar-dark'; $logo = 'logo-light'; include(__DIR__ . '/../../shared/header.php'); ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay i91-overlay-strong" data-image-src="<?php echo !empty($post['cover']) ? htmlspecialchars($post['cover']) : '/assets/img/photos/business.avif'; ?>">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-10 col-lg-9 col-xl-8 mx-auto text-center" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <div class="post-meta mb-4">
              <ul class="d-flex justify-content-center mb-0 list-unstyled fs-14 text-white">
                <li class="me-3"><i class="uil uil-calendar-alt me-1"></i><?php echo htmlspecialchars(format_post_date($post['date'], 'en')); ?></li>
                <li><i class="uil uil-clock me-1"></i><?php echo (int)$post['reading_minutes']; ?> min read</li>
              </ul>
            </div>
            <h1 class="display-1 text-white fs-46 mb-4"><?php echo htmlspecialchars($post['title']); ?></h1>
            <?php if ($post['excerpt']): ?>
              <p class="lead fs-23 text-white lh-sm mb-0"><?php echo htmlspecialchars($post['excerpt']); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-lg-8 col-xl-7 mx-auto">
            <article class="post-content"><?php echo $post['html']; ?></article>
            <hr class="my-10" />
            <div class="d-flex justify-content-between align-items-center">
              <a href="/en/blog" class="btn btn-soft-primary rounded-pill">← All articles</a>
              <a href="/en/contact" class="btn btn-primary rounded-pill">Let's talk</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../../shared/footer.php'); ?>
  <div class="progress-wrap"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg></div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>
</html>
