<?php 
    $title = "Training Form Penilaian | Admin";
    $page = "admin_training_form_penilaian";
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
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
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
                                            <i class="zmdi zmdi-account-calendar"></i>Form Penilaian Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="positions" class=" form-control-label">Spesifikasi Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                <button class="dropdown-item" type="button">Action</button>
                                                                <button class="dropdown-item" type="button">Another action</button>
                                                                <button class="dropdown-item" type="button">Something else here</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nomor" class=" form-control-label">Nomor Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                <button class="dropdown-item" type="button">001</button>
                                                                <button class="dropdown-item" type="button">002</button>
                                                                <button class="dropdown-item" type="button">003</button>
                                                            </div>
                                                        </div>
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
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                <button class="dropdown-item" type="button">Karyawan 1</button>
                                                                <button class="dropdown-item" type="button">Karyawan 2</button>
                                                                <button class="dropdown-item" type="button">Karyawan 3</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nilai" class=" form-control-label">Nilai Training</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nilai" name="nilai" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
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