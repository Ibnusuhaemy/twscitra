<?php 
    $title = "Lupa Kata Sandi";
    $page = "forget_pass";
?>

<?php include 'header.php'; ?>
    
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo-cls.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Alamat Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.php'; ?>