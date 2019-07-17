<?php 
    $title = "Training Penilaian | Admin";
    $page = "admin_training_penilaian";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Daftar Penilaian Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <a href="admin_training_form_penilaian.php" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data
                                            </a>

                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3" id="tabelDaftarModul">
                                                        <thead>
                                                            <tr>
                                                                <th>Spesifikasi Training</th>
                                                                <th>Training Plan ID</th>
                                                                <th>Training yang diperlukan</th>
                                                                <th>Nama Karyawan</th>
                                                                <th>Nilai Training</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <th>...</th>
                                                                <th>Karyawan 1</th>
                                                                <th>...</th>
                                                                <td>

                                                                    <a type="submit" class="btn btn-primary btn-sm" href="admin_training_form_penilaian.php">
                                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> Edit
                                                                    </a>
                                                                    <!-- <button type="submit" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-dot-circle-o"></i> Hapus
                                                                    </button>
                                                                    

                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
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
                                <h5 class="modal-title" id="exampleModalCenterTitle">Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                Hapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>