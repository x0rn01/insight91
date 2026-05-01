<?php
$L = ($lang === 'fr') ? 'fr' : 'en';
$T = function ($fr, $en) use ($L) { return $L === 'fr' ? $fr : $en; };
$home    = "/$L/";
$srvData = "/$L/services/data";
$srvErp  = "/$L/services/erp";
$srvIa   = "/$L/services/ia";
$solOdoo = "/$L/solutions/odoo";
$solQlik = "/$L/solutions/qlik";
$solPbi  = "/$L/solutions/powerbi";
$blog    = "/$L/blog";
$about   = "/$L/about";
$contact = "/$L/contact";
?>
<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute <?php echo $navbar; ?>">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <!-- Logo -->
            <div class="navbar-brand w-100">
                <a href="<?php echo $home; ?>">
                    <img class="logo-header" id="logoImage"
                         src="/assets/img/<?php echo htmlspecialchars($logo); ?>.svg"
                         alt="Logo Insight91" />
                </a>
            </div>

            <!-- Mobile navbar header -->
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="<?php echo $home; ?>">
                        <img class="logo-header" src="/assets/img/logo-dark.svg" alt="Logo Insight91" />
                    </a>
                    <button type="button"
                            class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Navbar Body -->
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $home; ?>"><?php echo $T('Accueil', 'Home'); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $srvData; ?>">Data</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $srvErp; ?>">ERP</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $srvIa; ?>"><?php echo $T('IA', 'AI'); ?></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $solOdoo; ?>">Odoo</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $solQlik; ?>">Qlik Sense</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="<?php echo $solPbi; ?>">Power BI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $blog; ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $about; ?>"><?php echo $T('Qui sommes-nous', 'About'); ?></a>
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
                            <?php echo $T('Fr', 'En'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="dropdown-item" href="/en/">
                                    <img src="/assets/img/flags/uk.png" alt="UK Flag" style="height:20px;padding-right:5px"> En
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="/fr/">
                                    <img src="/assets/img/flags/france.png" alt="FR Flag" style="height:20px;padding-right:5px"> Fr
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="<?php echo $contact; ?>" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
