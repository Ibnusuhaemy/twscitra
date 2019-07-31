<?php 
    $title = "Karyawan | HRD";
    $page = "hrd_karyawan";
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
            <div class="main-content ">
                <div class="section__content section__content--p30 ">
                    <div class="container-fluid ">
                        <div class="row m-t-5 ">
                            <div class="col-lg-12 ">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 ">
                                    <div class="au-card-title " style="background-image:url( 'images/bg-title-01.jpg'); ">
                                        <div class="bg-overlay bg-overlay--blue "></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar "></i>Karyawan
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load ">
                                        <div class="card-body card-block ">
                                            <!-- <a href="form_spesifikasi_training.html" type="submit " class="btn btn-primary btn-sm ">
                                                <i class="fa fa-plus-circle " aria-hidden="true "></i> Tambah Data
                                            </a> -->

                                            <form action=" " method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3" id="tabelKaryawanHrd">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Karyawan</th>
                                                                <th>Jabatan</th>
                                                                <th>Tanggal Direkrut</th>
                                                                <th>NIK</th>
                                                                <th>NPWP</th>
                                                                <th>Softskills</th>
                                                                <th>Hardskills</th>
                                                                <th>Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Karyawan 1</td>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <td>0013453224532</td>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <td>...</td>
                                                                <td>karyawan1@gmail.com</td>
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
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include 'footer.php'; ?>