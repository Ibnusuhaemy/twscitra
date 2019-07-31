<?php 
    $title = "Training Form Plan | Admin";
    $page = "admin_training_form_plan";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Form Training Plan
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="forget_pass.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nomor" class=" form-control-label">Nomor Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="nomor" name="nomor" placeholder="" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="spesifikasi" class=" form-control-label">Spesifikasi Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="spesifikasi" id="spesifikasi" class="form-control" required>
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">Spesifikasi Training 1</option>
                                                            <option value="2">Spesifikasi Training 2</option>
                                                            <option value="3">Spesifikasi Training 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="durasi" class=" form-control-label">Durasi (bulan)</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="durasi" name="durasi" placeholder="" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="trainer" class=" form-control-label">Nama Trainer</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="trainer" name="trainer" placeholder="" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="lokasi" class=" form-control-label">Lokasi Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="lokasi" id="lokasi" rows="9" placeholder="" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="tanggal" class=" form-control-label">Tanggal Mulai</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="date" id="tanggal" name="tanggal" placeholder="" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="namaKaryawan" class=" form-control-label">Nama Karyawan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="namaKaryawan" id="namaKaryawan" class="form-control">
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">Nama Karyawan 1</option>
                                                            <option value="2">Nama Karyawan 2</option>
                                                            <option value="3">Nama Karyawan 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="status" class=" form-control-label">Status</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="status" id="status" class="form-control">
                                                            <option disabled selected value> -- select an option -- </option>
                                                            <option value="1">Belum Berlangsung</option>
                                                            <option value="2">Sedang Berlangsung</option>
                                                            <option value="3">Sudah Berlangsung</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </div>
                                            </form>
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