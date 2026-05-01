<?php
session_start();

$errors = [];
$success = false;
$values = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot — bots fill this hidden field
    if (!empty($_POST['website'] ?? '')) {
        // Silent drop
        $success = true;
    } else {
        // CSRF
        if (empty($_POST['csrf']) || empty($_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
            $errors[] = "Session expirée. Merci de réessayer.";
        }

        $values['name']    = trim($_POST['name'] ?? '');
        $values['email']   = trim($_POST['email'] ?? '');
        $values['subject'] = trim($_POST['subject'] ?? '');
        $values['message'] = trim($_POST['message'] ?? '');

        if ($values['name'] === '' || mb_strlen($values['name']) < 2) {
            $errors[] = "Merci d'indiquer votre nom.";
        }
        if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Adresse email invalide.";
        }
        if (mb_strlen($values['message']) < 10) {
            $errors[] = "Le message doit contenir au moins 10 caractères.";
        }

        if (!$errors) {
            $to = "info@insight91.be";
            $subject = "[insight91.be] " . ($values['subject'] !== '' ? $values['subject'] : 'Nouveau message');
            $body  = "Nouveau message depuis le formulaire de contact insight91.be\n\n";
            $body .= "Nom    : " . $values['name'] . "\n";
            $body .= "Email  : " . $values['email'] . "\n";
            $body .= "Sujet  : " . ($values['subject'] !== '' ? $values['subject'] : '(non précisé)') . "\n";
            $body .= "\n--- Message ---\n" . $values['message'] . "\n";

            $headers  = "From: no-reply@insight91.be\r\n";
            $headers .= "Reply-To: " . $values['email'] . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            $sent = @mail($to, $subject, $body, $headers);
            if ($sent) {
                $success = true;
                $values = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
            } else {
                $errors[] = "L'envoi a échoué. Merci de nous contacter directement par email à info@insight91.be.";
            }
        }
    }
}

// Refresh CSRF token after each request
$_SESSION['csrf'] = bin2hex(random_bytes(32));

$pageMetaDescription = "Contactez Insight 91 — projet data, ERP, IA. Une réponse sous 48h.";
$pageTitle = "Contact";
$lang = 'fr';
$currentPage = 'contact';
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
            <h1 class="display-1 text-white fs-46 mb-4 mt-lg-5">Discutons de votre projet</h1>
            <p class="lead fs-23 text-white lh-sm mb-7">Data, ERP, IA — racontez-nous votre besoin, on revient vers vous sous 48h.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10">
          <div class="col-lg-7">
            <h2 class="display-5 mb-7">Envoyez-nous un message</h2>

            <?php if ($success): ?>
              <div class="alert alert-success">
                <strong>Merci !</strong> Votre message a bien été envoyé. Nous reviendrons vers vous rapidement.
              </div>
            <?php endif; ?>

            <?php if ($errors): ?>
              <div class="alert alert-danger">
                <ul class="mb-0">
                  <?php foreach ($errors as $err): ?>
                    <li><?php echo htmlspecialchars($err); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <form method="post" action="/fr/contact" novalidate>
              <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($_SESSION['csrf']); ?>">
              <!-- Honeypot -->
              <div style="position:absolute;left:-9999px;" aria-hidden="true">
                <label>Site web (laisser vide)<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required value="<?php echo htmlspecialchars($values['name']); ?>">
                    <label for="name">Nom *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($values['email']); ?>">
                    <label for="email">Email *</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" value="<?php echo htmlspecialchars($values['subject']); ?>">
                    <label for="subject">Sujet</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" style="height: 160px;" required><?php echo htmlspecialchars($values['message']); ?></textarea>
                    <label for="message">Message *</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary rounded-pill btn-send">Envoyer le message</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-5">
            <h2 class="display-5 mb-7">Coordonnées</h2>
            <div class="d-flex flex-row mb-5">
              <div><div class="icon text-primary fs-28 me-4"><i class="uil uil-location-pin-alt"></i></div></div>
              <div><h5 class="mb-1">Adresse</h5><address>Rue Devant l’Abbaye, 36<br />4042 Liers</address></div>
            </div>
            <div class="d-flex flex-row mb-5">
              <div><div class="icon text-primary fs-28 me-4"><i class="uil uil-phone-volume"></i></div></div>
              <div><h5 class="mb-1">Téléphone</h5><p>0498/65.97.11</p></div>
            </div>
            <div class="d-flex flex-row mb-5">
              <div><div class="icon text-primary fs-28 me-4"><i class="uil uil-envelope"></i></div></div>
              <div><h5 class="mb-1">E-mail</h5><p><a href="mailto:info@insight91.be" class="link-body">info@insight91.be</a></p></div>
            </div>
          </div>
        </div>
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
