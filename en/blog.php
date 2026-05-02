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
          <div class="i91-blog-list">
            <?php foreach ($posts as $post): ?>
              <?php $url = '/en/blog/' . $post['slug']; ?>
              <article class="i91-blog-card">
                <a href="<?php echo htmlspecialchars($url); ?>" class="i91-blog-card-img" style="background-image:url('<?php echo htmlspecialchars($post['cover']); ?>')" aria-label="<?php echo htmlspecialchars($post['title']); ?>"></a>
                <div class="i91-blog-card-body">
                  <div class="i91-blog-card-meta">
                    <span class="i91-blog-card-tag"><?php echo $post['tags'] ? htmlspecialchars($post['tags'][0]) : 'Article'; ?></span>
                    <span><i class="uil uil-calendar-alt"></i> <?php echo htmlspecialchars(format_post_date($post['date'], 'en')); ?></span>
                    <span><i class="uil uil-clock"></i> <?php echo (int)$post['reading_minutes']; ?> min</span>
                  </div>
                  <h2 class="i91-blog-card-title">
                    <a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                  </h2>
                  <p class="i91-blog-card-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                  <a href="<?php echo htmlspecialchars($url); ?>" class="i91-blog-card-more">Read article <i class="uil uil-arrow-right"></i></a>
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
