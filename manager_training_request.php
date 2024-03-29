<?php 
    $title = "Training Request | Manager";
    $page = "manager_training_request";
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
                                                    <a href="manager_profile.php">
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
                                            <i class="zmdi zmdi-account-calendar"></i>Jabatan
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <!-- <a href="#" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data
                                            </a> -->

                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3" id="tabelManagerTraining">
                                                        <thead>
                                                            <tr>
                                                                <th>Kompetensi</th>
                                                                <th>Nama Training</th>
                                                                <th>Nama Karyawan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>...</td>
                                                                <td>Training 1</td>
                                                                <td>Karyawan 1</td>
                                                                <td>
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Detail
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kompetensi" class=" form-control-label">Kompetensi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">...</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nomor" class=" form-control-label">Nomor Training</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">Nomor Training 1</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="namaTraining" class=" form-control-label">Nama Training</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">Nama Training 1</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="durasi" class=" form-control-label">Durasi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">...</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="namaTrainer" class=" form-control-label">Nama Trainer</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">Nama Trainer 1</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="lokasi" class=" form-control-label">Lokasi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">...</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="namaKaryawan" class=" form-control-label">Nama Karyawan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label for="" class=" form-control-label">Nama Karyawan 1</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak Setuju</button>
                    <button type="button" class="btn btn-primary">Setuju</button>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>