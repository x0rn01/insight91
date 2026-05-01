<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute <?php echo $navbar; ?>">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <!-- Logo -->
            <div class="navbar-brand w-100">
                <a href="<?php echo ($lang === 'fr') ? '/fr/index.php' : '/en/index.php'; ?>">
                    <img class="logo-header" id="logoImage"
                         src="../assets/img/<?php echo htmlspecialchars($logo); ?>.svg"
                         alt="Logo Insight91" />
                </a>
            </div>

            <!-- Mobile navbar header -->
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="<?php echo ($lang === 'fr') ? '/fr/index.php' : '/en/index.php'; ?>">
                        <img class="logo-header" src="../assets/img/logo-dark.svg" alt="Logo Insight91" />
                    </a>
                    <button type="button"
                            class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Navbar Body -->
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="navbar_home" class="nav-link" href="<?php echo ($lang === 'fr') ? '/fr/index.php' : '/en/index.php'; ?>">
                                <?php echo ($lang === 'fr') ? 'Accueil' : 'Home'; ?>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <?php echo ($lang === 'fr') ? 'Services' : 'Services'; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="<?php echo ($lang === 'fr') ? '/fr/sport.php' : '/en/sport.php'; ?>">
                                        <?php echo ($lang === 'fr') ? 'Sports' : 'Professional Sports'; ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="<?php echo ($lang === 'fr') ? '/fr/business.php' : '/en/business.php'; ?>">
                                        <?php echo ($lang === 'fr') ? 'Entreprises' : 'Business'; ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <?php echo ($lang === 'fr') ? 'Solutions' : 'Solutions'; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="<?php echo ($lang === 'fr') ? '/fr/qlik.php' : '/en/qlik.php'; ?>">
                                        <?php echo ($lang === 'fr') ? 'Qlik Sense' : 'Qlik Sense'; ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="<?php echo ($lang === 'fr') ? '/fr/powerbi.php' : '/en/powerbi.php'; ?>">
                                        <?php echo ($lang === 'fr') ? 'Microsoft PowerBI' : 'Microsoft PowerBI'; ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Offcanvas Footer (Mobile) -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:info@insight91.be" class="link-inverse">info@insight91.be</a>
                            <br /> 0498/65.97.11 <br />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Language and Contact Buttons -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="currentLang">
                            <?php echo ($lang === 'fr') ? 'Fr' : 'En'; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="dropdown-item" href="/en/index.php">
                                    <img src="../assets/img/flags/uk.png" alt="UK Flag" style="height:20px;padding-right:5px"> En
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="/fr/index.php">
                                    <img src="../assets/img/flags/france.png" alt="FR Flag" style="height:20px;padding-right:5px"> Fr
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <button data-target="section-contact" class="btn btn-sm btn-primary rounded-pill scroll-button">
                            <?php echo ($lang === 'fr') ? 'Contact' : 'Contact'; ?>
                        </button>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>