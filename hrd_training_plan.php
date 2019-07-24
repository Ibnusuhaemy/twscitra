<?php 
    $title = "Training plan | hrd";
    $sub_training = true;
    $page = "hrd_training_plan";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Request Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <div class="pl-1 mb-4">
                                                <a href="#" class="btn btn-md btn-primary">Request Training</a>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-data3" id="tabelPenugasan">
                                                    <thead>
                                                        <tr>
                                                            <th>Nomor Training</th>
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
                                                            <td>125</td>
                                                            <td>Training Marketing</td>
                                                            <td>15 hari</td>
                                                            <td>Yantz</td>
                                                            <td>Malang</td>
                                                            <td>4 Agustus 2019</td>
                                                            <td>Status</td>
                                                            <td>
                                                                <button type="button" data-toggle="modal" data-target="#detailModal" class="btn btn-sm btn-primary">Penugasan</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Detail -->
                <div class="modal fade show" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true" style="display: none;" >
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Penugasan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                   <div class="col-12">
                                        <div>
                                            <p>
                                                <strong>Daftar Nama Karyawan yang ditugaskan :</strong>  
                                            </p>
                                            <p>Suyantz, Yanto, Dearmadi</p>
                                        </div>
                                        <hr>
                                        <form action="">
                                        <div>
                                            <p class="mb-2">
                                                Nama Karyawan
                                            </p>
                                            <p>
                                                <select name="select" id="select" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                                <button type="submit" class="btn btn-success mt-3">Tambah</button>
                                            </p>
                                        </div>
                                   </div>
                               </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Detail -->
                <!-- Cancel Modal -->
                <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body px-5 py-3 text-center">
                                <p class="lead">
                                    Apakah anda ingin membatalkan training ini?
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
                <!-- Request Modal -->
                <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body px-5 py-3 text-center">
                                <p class="lead">
                                    Apakah anda yakin ingin <strong>request</strong> training ini?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Request</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Request Modal -->
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>