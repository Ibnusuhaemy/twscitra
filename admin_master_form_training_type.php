<?php 
    $title = "Master Form Tipe Training | Admin";
    $page = "admin_master_form_training_type";
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
                                            <i class="zmdi zmdi-account-calendar"></i>Form Tipe Training
                                        </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="id" class=" form-control-label">ID Training Type</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="id" name="id" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="trainingType" class=" form-control-label">Training Type</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="trainingType" name="trainingType" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="positions" class=" form-control-label">Positions</label>
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
                                                        <label for="kompetensi" class=" form-control-label">Kompetensi</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="kompetensi" name="kompetensi" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label">Aspek Penting</label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check">
                                                            <div class="checkbox">
                                                                <label for="checkbox1" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1"
                                                                        class="form-check-input">Safety
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="checkbox2" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2"
                                                                        class="form-check-input">Environment
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="checkbox3" class="form-check-label ">
                                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3"
                                                                        class="form-check-input">Quality
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="perlu" class=" form-control-label">Training yang diperlukan</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="perlu" name="perlu" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="standar" class=" form-control-label">Standar Kompetensi</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="standar" name="standar" placeholder="" class="form-control">
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