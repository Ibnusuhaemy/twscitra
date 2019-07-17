<?php 
    $title = "Training Plan | Admin";
    $page = "admin_training_plan";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Training Plan
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <a href="admin_training_form_plan.php" type="submit" class="btn btn-primary btn-sm m-b-20">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data
                                            </a>

                                            <form action="" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3"
                                                        id="tabelKaryawan">
                                                        <thead>
                                                            <tr>
                                                                <th>No. Training</th>
                                                                <th>Spesifikasi Training</th>
                                                                <th>Durasi</th>
                                                                <th>Trainer</th>
                                                                <th>Lokasi</th>
                                                                <th>Tanggal Mulai</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Belajar ngoding</td>
                                                                <td>2 jam</td>
                                                                <td>Rizky</td>
                                                                <td>cafe brewok, Jl.Suhat</td>
                                                                <td>08 Agustus 2019</td>
                                                                <td>Pending</td>
                                                                <td>
                                                                    <a type="submit" class="btn btn-primary btn-sm  m-b-10"
                                                                        href="admin_training_form_plan.php">
                                                                        <i class="fa fa-pencil-square"
                                                                            aria-hidden="true"></i> Edit
                                                                    </a>
                                                                    <!-- Button trigger modal hapus-->
                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                        data-toggle="modal" data-target="#staticModal">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                         Hapus
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
                <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
                    aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Are you sure delete this data?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal static -->
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- modal static -->
        

    </div>

<?php include 'footer.php'; ?>