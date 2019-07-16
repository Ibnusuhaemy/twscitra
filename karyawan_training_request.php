<?php include 'header.php'; ?>
    
    <div class="page-wrapper">

        <!-- Navbar Admin -->
        <?php include 'nav_karyawan.php' ?>
        
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
                                            <a class="js-acc-btn" href="#">Karyawan</a>
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
                                                        <a href="#">Karyawan</a>
                                                    </h5>
                                                    <span class="email">What a good day, karyawan</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="karyawan-profile.html">
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
                                                            <th>Kompetensi</th>
                                                            <th>Nama Training</th>
                                                            <th>Tanggal Mulai</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Marketing</td>
                                                            <td>Training Marketing</td>
                                                            <td>4 Agustus 2019</td>
                                                            <td><button type="button" data-toggle="modal" data-target="#detailModal" class="btn btn-sm btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#cancelModal" class="btn btn-sm btn-danger">Batal</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marketing</td>
                                                            <td>Training Marketing</td>
                                                            <td>4 Agustus 2019</td>
                                                            <td><button type="button" data-toggle="modal" data-target="#detailModal" class="btn btn-sm btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#cancelModal" class="btn btn-sm btn-danger">Batal</button></td>
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
                                <h5 class="modal-title" id="mediumModalLabel">Detail Training</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                   <div class="col-12">
                                        <div>
                                            <p>
                                                <strong>Kompetensi :</strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aspernatur, modi vel odit perferendis doloribus tempore nobis qui perspiciatis pariatur aut fugit harum in, placeat incidunt hic, atque dolore quidem.
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Nomor Training :</strong> TR331
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Nama Training :</strong> Training Marketing
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Durasi (Hari) :</strong> 15
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Lokasi :</strong> Jakarta
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Tanggal Mulai :</strong> 14 Agustus 2019
                                            </p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>
                                                <strong>Standar Kompetensi :</strong> Detail Standar Kompetensi
                                            </p>
                                        </div>
                                           
                                       </p>
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
            </div>
        </div>
        <!-- END MAIN CONTENT-->

    </div>

<?php include 'footer.php'; ?>