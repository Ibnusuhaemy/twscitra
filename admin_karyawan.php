<?php 
    $title = "Karyawan | Admin";
    $page = "admin_karyawan";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Karyawan
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <a href="admin_form_karyawan.php" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data
                                            </a>

                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3" id="tabelKaryawan">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nama</th>
                                                                <th>NIK</th>
                                                                <th>Email</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Veroooooooooooooo</td>
                                                                <td>098723806739872</td>
                                                                <td>veroooo@gmail.com</td>
                                                                <td>
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Detail
                                                                    </button>

                                                                    <!-- <button type="submit" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Detail
                                                                    </button> -->

                                                                    <a type="submit" class="btn btn-primary btn-sm" href="admin_form_karyawan.php">
                                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> Edit
                                                                    </a>
                                                                    <!-- <button type="submit" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-dot-circle-o"></i> Hapus
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-dot-circle-o"></i> Reset Password
                                                                    </button> -->

                                                                    <!-- Button trigger modal hapus-->
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleHapus">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                                                    </button>

                                                                    <!-- Button trigger modal reset password-->
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleReset">
                                                                        <i class="fa fa-undo" aria-hidden="true"></i> Atur Ulang Kata Sandi
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
                <!-- Modal -->
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
                                        <label for="namaKaryawan" class=" form-control-label">Nama Karyawan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">Nama Karyawan 1</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="jabatan" class=" form-control-label">Jabatan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="tanggal" class=" form-control-label">Tanggal Direkrut</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nik" class=" form-control-label">NIK</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="npwp" class=" form-control-label">NPWP</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="softskills" class=" form-control-label">Softskills</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hardskills" class=" form-control-label">Hardskills</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <label for="" class=" form-control-label">...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal hapus-->
                <div class="modal fade" id="exampleHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Hapus data ini?
                            </div>
                            <div class="modal-footer">
                                <form action="">
                                    <input type="hidden" name="id_delete" value="set pakai jquery">
                                <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal reset password -->
                <div class="modal fade" id="exampleReset" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Atur Ulang Kata Sandi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                Atur Ulang Kata Sandi user ini?
                            </div>
                            <div class="modal-footer">
                                <form action="">
                                    <input type="hidden" name="id_reset_pw" value="set pakai jquery">
                                <button type="submit" class="btn btn-primary">Atur ulang kata sandi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>