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
                        <li class="<?php if($page=='karyawan_dashboard'){echo 'active';}?>">
                            <a class="js-arrow" href="karyawan.html">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow open" href="#">
                                <i class="fas fa-copy"></i>Training</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" >
                                <li>
                                    <a href="karyawan_training_penugasan.html">Penugasan Training</a>
                                </li>
                                <li>
                                    <a href="karyawan_training_request.html">Training Request</a>
                                </li>
                                <li>
                                    <a href="karyawan_training_hasil.html">Hasil Training</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fas fa-arrow-alt-circle-left"></i>Logout</a>
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
                        <li class="<?php if($page=='karyawan_dashboard'){echo 'active';}?>">
                            <a class="js-arrow" href="karyawan_dashboard.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Training</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list pl-5" style="display:block;">
                                <li class="<?php if($page=='karyawan_training_penugasan'){echo 'active';}?>">
                                    <a href="karyawan_training_penugasan.php">Penugasan Training</a>
                                </li>
                                <li class="<?php if($page=='karyawan_training_request'){echo 'active';}?>">
                                    <a href="karyawan_training_request.php">Training Request</a>
                                </li>
                                <li class="<?php if($page=='karyawan_training_hasil'){echo 'active';}?>">
                                    <a href="karyawan_training_hasil.php">Hasil Training</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fas fa-arrow-alt-circle-left"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->