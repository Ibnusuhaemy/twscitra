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
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Karyawan</a>
                        </li>
                        <li class="has-sub <?php if($page=='hrd_karyawan'){echo 'active';}?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Training</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Plan</a>
                                </li>
                                <li>
                                    <a href="#">Modul</a>
                                </li>
                                <li>
                                    <a href="#">Sertifikat</a>
                                </li>
                                <li>
                                    <a href="#">Request</a>
                                </li>
                                <li>
                                    <a href="#">Laporan</a>
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
                            <ul class="list-unstyled navbar__sub-list js-sub-list pl-5" style="display: block;">
                                <li>
                                    <a href="#">Plan</a>
                                </li>
                                <li>
                                    <a href="#">Modul</a>
                                </li>
                                <li>
                                    <a href="#">Sertifikat</a>
                                </li>
                                <li>
                                    <a href="#">Request</a>
                                </li>
                                <li>
                                    <a href="#">Laporan</a>
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