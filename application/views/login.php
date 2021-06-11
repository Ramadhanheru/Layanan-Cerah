<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Layanan Cerah App </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('asset/') ?>assets/images/icon/logoo_X3q_icon.ico">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url('asset/') ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area" style="background-color: #BABBFF;">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="<?= base_url('login/loginn'); ?>" method="post">
                    <div class="login-form-head" style="background-color: #56369E;">
                        <h4>layanan cerah </h4><p>by</p>
                        <div>
                            <img src="<?= base_url('asset/logo1.png') ?>">
                        </div>
                    </div>
                    <div class="login-form-body">
                        <?= $this->session->flashdata('message');?>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" id="username" name="username">
                            <?= form_error('username','<small class="text-danger pl-3 ">','</small>');?>
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="password" name="password">
                            <?= form_error('password','<small class="text-danger pl-3 ">','</small>');?>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">LOG IN <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?= base_url('asset/') ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('asset/') ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?= base_url('asset/') ?>assets/js/plugins.js"></script>
    <script src="<?= base_url('asset/') ?>assets/js/scripts.js"></script>
</body>

</html>