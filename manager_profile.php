<?php 
    $title = "Profile | Manager";
    $page = "manager_profile";
?>
<?php include 'header.php'; ?>
    
    <div class="page-wrapper">

        <!-- Navbar Admin -->
        <?php include 'nav_manager.php' ?>
        
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
                                            <a class="js-acc-btn" href="#">Manager</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="manager_profile.php">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="manager_profile.php">Manager</a>
                                                    </h5>
                                                    <span class="email">What a good day, Manager</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="manager-profile.html">
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
                                            <i class="zmdi zmdi-account-calendar"></i>Profile
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="username" class=" form-control-label">Nama</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="text" id="username" name="username" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="username" class=" form-control-label">Veroo</label>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Jabatan</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">Manager</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Tanggal Direkrut</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">08 Desember 2019</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Alamat</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">Jalan Kenangan Abadi no.1</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">NIK</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">789261849212</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Tanggal Direkrut</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">08 Desember 2019</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">NPWP</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">09.254.231.1-503.000</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Softskills</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">Rasa ingin tahu, kreatif, inovatif, Kemampuan beradaptasi, Kerja sama dan kolaborasi</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Hardskills</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">Bahasa inggris, jerman, jepang, dan Up To Date Terhadap Teknologi Software</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="password-input" class=" form-control-label">Email</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="password-input" class=" form-control-label">veroo00@gmail.com</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer">
                                            <a href="manager_edit_profile.php" class="btn btn-primary">
                                                <i class="fa fa-pencil-square"></i> Edit Profile
                                            </a>
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