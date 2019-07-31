<?php 
    $title = "Training Form Sertifikat | Admin";
    $page = "admin_training_form_sertifikat";
?>

<?php include 'header.php'; ?>
    
    <div class="page-wrapper">

        <!-- Navbar Admin -->
        <?php include 'nav_admin.php' ?>
        
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
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="admin_profile.php">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="admin_profile.php">Admin</a>
                                                    </h5>
                                                    <span class="email">What a good day, Admin</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="admin_profile.php">
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
                                            <i class="zmdi zmdi-account-calendar"></i>Form Sertifikat Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="kompetensi" class=" form-control-label">Kompetensi</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="kompetensi" id="kompetensi" class="form-control" required>
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">Kompetensi 1</option>
                                                            <option value="2">Kompetensi 2</option>
                                                            <option value="3">Kompetensi 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nomor" class=" form-control-label">Nomor Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="nomor" id="nomor" class="form-control" required>
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">001</option>
                                                            <option value="2">002</option>
                                                            <option value="3">003</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nama" class=" form-control-label">Nama Training</label>
                                                    </div>
                                                    <!-- <div class="col-12 col-md-9">
                                                        <input type="text" id="username" name="username" placeholder="" class="form-control">
                                                    </div> -->
                                                    <div class="col-12 col-md-9">
                                                        <label for="nama" class=" form-control-label">Nama Training 1</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="namaKaryawan" class=" form-control-label">Nama Karyawan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="namaKaryawan" id="namaKaryawan" class="form-control" required>
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">Nama Karyawan 1</option>
                                                            <option value="2">Nama Karyawan 2</option>
                                                            <option value="3">Nama Karyawan 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="file" class=" form-control-label">File Sertifikat</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="file" name="file" class="form-control-file" required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <a href="admin_training_sertifikat.php" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Kembali
                                            </a>
                                            </form>
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