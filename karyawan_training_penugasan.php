<?php 
    $title = "Penugasan Training | Karyawan";
    $page = "karyawan_training_penugasan";
 ?>
<?php include 'header.php'; ?>
    
    <div class="page-wrapper">

        <!-- Navbar Admin -->
        <?php include 'nav_karyawan.php' ?>
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Karyawan</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="karyawan_profile.php">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="karyawan_profile.php">Karyawan</a>
                                                    </h5>
                                                    <span class="email">What a good day, Karyawan</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="Karyawan-profile.html">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-5">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Penugasan Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-data3" id="tabelPenugasan">
                                                    <thead>
                                                        <tr>
                                                            <th>Kompetensi</th>
                                                            <th>Nomor Training</th>
                                                            <th>Durasi (hari)</th>
                                                            <th>Trainer</th>
                                                            <th>Lokasi</th>
                                                            <th>Standar Kompetensi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Marketing</td>
                                                            <td>TR331</td>
                                                            <td>15</td>
                                                            <td>Dr. Nonim</td>
                                                            <td>Jakarta</td>
                                                            <td>Junior Marketer</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marketing</td>
                                                            <td>TR331</td>
                                                            <td>15</td>
                                                            <td>Dr. Nonim</td>
                                                            <td>Jakarta</td>
                                                            <td>Junior Marketer</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marketing</td>
                                                            <td>TR331</td>
                                                            <td>15</td>
                                                            <td>Dr. Nonim</td>
                                                            <td>Jakarta</td>
                                                            <td>Junior Marketer</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>