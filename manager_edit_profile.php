<?php 
    $title = "Profil | Manager";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Profil
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="manager_edit_profile.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nama-manager" class=" form-control-label">Nama</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nama-manager" name="nama-manager" class="form-control" pattern="[A-Za-z]{1,}" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="jabatan" class=" form-control-label">Jabatan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <label class=" form-control-label">HRD</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="tanggal" class=" form-control-label">Tanggal Direkrut</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <!-- <input type="date" id="tanggal" name="tanggal" placeholder="" class="form-control" required> -->
                                                        <label class=" form-control-label">3 Januari 2018</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="alamat" class=" form-control-label">Alamat</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="alamat" id="alamat" rows="9" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="nik" class=" form-control-label">NIK</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <!-- <input type="text" id="nik" name="nik" placeholder="" class="form-control" title="hanya angka" pattern="[A-Za-z]{1,}" required> -->
                                                        <label class=" form-control-label">2498855684354684</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="npwp" class=" form-control-label">NPWP</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <!-- <input type="text" id="npwp" name="npwp" placeholder="" class="form-control" title="hanya angka" pattern="[A-Za-z]{1,}" required> -->
                                                        <label class=" form-control-label">2498.85.56843.54684</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="softskills" class=" form-control-label">Softskills</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <!-- <input type="text" id="softskills" name="softskills" placeholder="" class="form-control" required> -->
                                                        <label class=" form-control-label">Some Softskills here</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="hardskills" class=" form-control-label">Hardskills</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <label class=" form-control-label">Some Hardskills here</label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="email-manager" class=" form-control-label">Email</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="email" id="email-manager" name="email-manager" class="form-control" required>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                                <i class="fa fa-pencil-square"></i> Edit Profil
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <label for="recipient-name" class="col-form-label">Yakin edit profil?</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>