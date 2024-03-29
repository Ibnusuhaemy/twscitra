<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="<?php if($page=='hrd_karyawan'){echo 'active';}?>">
                    <a href="#"><i class="fas fa-chart-bar"></i>Karyawan</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#"><i class="fas fa-copy"></i>Training</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list" <?php if (isset($sub_training)) {
                            echo 'style="display: block;"';}?>>
                        <li class="<?php if($page=='hrd_training_plan'){echo 'active';}?>">
                            <a href="hrd_training_plan.php">Plan</a>

                        </li>
                        <li class="<?php if($page=='hrd_training_modul'){echo 'active';}?>">
                            <a href="hrd_training_modul.php">Modul</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_sertifikat'){echo 'active';}?>">
                            <a href="hrd_training_sertifikat.php">Sertifikat</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_request'){echo 'active';}?>">
                            <a href="hrd_training_sertifikat.php">Request</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_hasil'){echo 'active';}?>">
                            <a href="hrd_training_hasil.php">Hasil Training</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_laporan'){echo 'active';}?>">
                            <a href="hrd_training_laporan.php">Laporan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-power"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img style="max-width: 150px;" src="images/logo-cls.png" alt="Logo PT. CLS" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="<?php if($page=='hrd_dashboard'){echo 'active';}?>">
                    <a class="js-arrow" href="hrd_dashboard.php">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="<?php if($page=='hrd_karyawan'){echo 'active';}?>">
                    <a href="hrd_karyawan.php">
                        <i class="fas fa-chart-bar"></i>Karyawan</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Training</a>

                    <ul class="list-unstyled navbar__sub-list js-sub-list pl-5" <?php if (isset($sub_training)) {
                            echo 'style="display: block;"';}?>>
                        <li class="<?php if($page=='hrd_training_plan'){echo 'active';}?>">
                            <a href="hrd_training_plan.php">Plan</a>

                        </li>
                        <li class="<?php if($page=='hrd_training_modul'){echo 'active';}?>">
                            <a href="hrd_training_modul.php">Modul</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_sertifikat'){echo 'active';}?>">
                            <a href="hrd_training_sertifikat.php">Sertifikat</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_request'){echo 'active';}?>">
                            <a href="hrd_training_sertifikat.php">Request</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_hasil'){echo 'active';}?>">
                            <a href="hrd_training_hasil.php">Hasil Training</a>
                        </li>
                        <li class="<?php if($page=='hrd_training_laporan'){echo 'active';}?>">
                            <a href="hrd_training_laporan.php">Laporan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-power"></i>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
