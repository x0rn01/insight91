<?php
require_once __DIR__ . '/../lib/blog.php';

$blog = new Blog('en');
$posts = $blog->list();

$pageMetaDescription = "Insight 91 blog — concrete cases, lessons learned, data, ERP and AI news.";
$pageTitle = "Blog";
$lang = 'en';
$currentPage = 'blog';
include(__DIR__ . '/../shared/head.php');
?>
<body>
  <div class="content-wrapper" role="main">
    <?php $navbar = 'navbar-dark'; $logo = 'logo-light'; include(__DIR__ . '/../shared/header.php'); ?>

    <section class="wrapper image-wrapper bg-cover bg-image bg-overlay i91-overlay-strong" data-image-src="/assets/img/photos/business.avif">
      <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
          <div class="col-md-9 col-lg-8 col-xl-7 text-center text-md-start" data-cues="slideInDown" data-group="page-title" data-delay="500">
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">The Insight 91 blog</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">Concrete cases, lessons learned, data, ERP and AI news.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <?php if (empty($posts)): ?>
          <p class="lead text-center">No posts yet. Check back soon!</p>
        <?php else: ?>
          <div class="row gx-lg-8 gx-xl-12 gy-10">
            <?php foreach ($posts as $post): ?>
              <article class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg h-100">
                  <?php if (!empty($post['cover'])): ?>
                    <a href="/en/blog/<?php echo htmlspecialchars($post['slug']); ?>"><figure class="overlay overlay-1 hover-scale rounded-top mb-0"><img src="<?php echo htmlspecialchars($post['cover']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" /></figure></a>
                  <?php endif; ?>
                  <div class="card-body p-6">
                    <div class="post-header">
                      <div class="post-category text-line text-primary fw-bold mb-3 fs-14 text-uppercase"><?php echo $post['tags'] ? htmlspecialchars($post['tags'][0]) : 'Article'; ?></div>
                      <h2 class="post-title h3 mb-3"><a class="link-dark" href="/en/blog/<?php echo htmlspecialchars($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h2>
                    </div>
                    <div class="post-content"><p><?php echo htmlspecialchars($post['excerpt']); ?></p></div>
                  </div>
                  <div class="card-footer p-6 bg-transparent">
                    <ul class="post-meta d-flex mb-0 list-unstyled fs-14">
                      <li class="post-date me-3"><i class="uil uil-calendar-alt me-1"></i><?php echo htmlspecialchars(format_post_date($post['date'], 'en')); ?></li>
                      <li><i class="uil uil-clock me-1"></i><?php echo (int)$post['reading_minutes']; ?> min</li>
                    </ul>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

  </div>

  <?php include(__DIR__ . '/../shared/footer.php'); ?>
  <div class="progress-wrap"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /></svg></div>
  <script src="/assets/js/plugins.js" defer></script>
  <script src="/assets/js/theme.js" defer></script>
</body>
</html>
