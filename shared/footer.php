<?php
$L = ($lang === 'fr') ? 'fr' : 'en';
$T = function ($fr, $en) use ($L) { return $L === 'fr' ? $fr : $en; };
$year = date('Y');
?>
<footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="/assets/img/logo-light.svg" alt="Insight 91" style="height:84px;" />
                    <p class="mb-4"><?php echo $T(
                        'Partenaire data, ERP et IA pour PME et grandes organisations.',
                        'Data, ERP and AI partner for SMBs and larger organizations.'
                    ); ?></p>
                    <p class="mb-0">© <?php echo $year; ?> Insight 91</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Services</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="/<?php echo $L; ?>/services/data">Data</a></li>
                        <li><a href="/<?php echo $L; ?>/services/erp">ERP</a></li>
                        <li><a href="/<?php echo $L; ?>/services/ia"><?php echo $T('IA', 'AI'); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Solutions</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="/<?php echo $L; ?>/solutions/odoo">Odoo</a></li>
                        <li><a href="/<?php echo $L; ?>/solutions/qlik">Qlik Sense</a></li>
                        <li><a href="/<?php echo $L; ?>/solutions/powerbi">Power BI</a></li>
                    </ul>
                    <h4 class="widget-title text-white mb-3 mt-5"><?php echo $T('Plus', 'More'); ?></h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="/<?php echo $L; ?>/blog">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo $T('Nous joindre', 'Contact us'); ?></h4>
                    <address class="mb-3">Rue Devant l’Abbaye, 36<br />4042 Liers, Belgique</address>
                    <p class="mb-1"><a href="mailto:info@insight91.be">info@insight91.be</a></p>
                    <p class="mb-3"><a href="tel:+32498659711">0498/65.97.11</a></p>
                    <a href="/<?php echo $L; ?>/contact" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
