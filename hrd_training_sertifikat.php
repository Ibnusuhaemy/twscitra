<?php 
    $title = "Training Sertifikat | HRD";
    $sub_training = true;
    $page = "hrd_training_sertifikat";
?>

<?php include 'header.php'; ?>
    
    <div class="page-wrapper">

        <!-- Navbar Admin -->
        <?php include 'nav_hrd.php' ?>
        
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
                                            <a class="js-acc-btn" href="#">HRD</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="hrd_profile.php">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="hrd_profile.php">HRD</a>
                                                    </h5>
                                                    <span class="email">What a good day, HRD</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="hrd_profile.php">
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
                                            <i class="zmdi zmdi-account-calendar"></i>Daftar Sertifikat Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <!-- <a href="admin_training_form_sertifikat.php" type="submit" class="btn btn-primary btn-sm mb-3">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data
                                            </a> -->

                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3" id="tabelDaftarSertifikat">
                                                        <thead>
                                                            <tr>
                                                                <th>Kompetensi</th>
                                                                <th>Nama Training</th>
                                                                <th>Nama Karyawan</th>
                                                                <th>Link File Sertifikat</th>
                                                                <!-- <th>Action</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>...</td>
                                                                <td>nama training 1</td>
                                                                <td>nama karyawan 1</td>
                                                                <td>
                                                                    <!-- Trigger the modal with a button -->
                                                                    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
                                                                   
                                                                    <a href="vendor/ViewerJS/#../../content/sertif.pdf" target="_blank" class="btn btn-sm btn-primary">Open Document</a>
                                                                </td>
                                                                <!-- <td>
                                                                
                                                                    <a type="submit" class="btn btn-primary btn-sm" href="admin_training_form_sertifikat.php">
                                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> Edit
                                                                    </a>
                                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-dot-circle-o"></i> Hapus
                                                                    </button>
                                                                    
                                                                
                                                                    Button trigger modal
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                                                    </button>
                                                                
                                                                
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>...</td>
                                                                <td>nama training 1</td>
                                                                <td>nama karyawan 1</td>
                                                                <td>
                                                                    <!-- Trigger the modal with a button -->
                                                                    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
                                                                   
                                                                    <a href="vendor/ViewerJS/#../../content/sertif.pdf" target="_blank" class="btn btn-sm btn-primary">Open Document</a>
                                                                </td>
                                                                <!-- <td>
                                                                
                                                                    <a type="submit" class="btn btn-primary btn-sm" href="admin_training_form_sertifikat.php">
                                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i> Edit
                                                                    </a>
                                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-dot-circle-o"></i> Hapus
                                                                    </button>
                                                                    
                                                                
                                                                    Button trigger modal
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                                                                    </button>
                                                                
                                                                
                                                                </td> -->
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
                <!-- Cancel Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body px-5 py-3 text-center">
                                <p class="lead">
                                    Hapus Data ini?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Cancel Modal -->
            </div>

        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>