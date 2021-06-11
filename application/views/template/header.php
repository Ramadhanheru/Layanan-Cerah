<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Layanan Cerah App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('asset/'); ?>assets/images/icon/logoo_X3q_icon.ico">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url('asset/'); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="">
                    <a href="#"><img src="<?= base_url('asset/'); ?>bs1.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <?php if($this->session->userdata('role') == 2){ ?>
                                <li <?= $this->uri->segment(2) == 'dashboard' ? 'class="active"' : '' ?>>
                                <a href="<?= base_url('cabang/dashboard') ?>"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li <?= $this->uri->segment(2) == 'briefing' ? 'class="active"' : '' ?>><a href="<?= base_url('cabang/briefing') ?>"><i class="ti-hand-open"></i> <span>Absensi Briefing</span></a></li>
                            <li <?= $this->uri->segment(2) == 'checking_peralatan' ||
                                    $this->uri->segment(2) == 'checking_kenyamanan' ||
                                    $this->uri->segment(2) == 'checking_toilet' ||
                                    $this->uri->segment(2) == 'checking_atm' ? 'class="active"' : '' ?>>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-blackboard"></i>
                                    <span>Implementasi Layanan Cerah</span></a>
                                <ul class="collapse">
                                    <li <?= $this->uri->segment(2) == 'checking_peralatan' ?  'class="active"' : '' ?>><a href="<?= base_url('cabang/checking_peralatan'); ?>">Peralatan Banking Hall</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_kenyamanan' ?  'class="active"' : '' ?>><a href="<?= base_url('cabang/checking_kenyamanan'); ?>">Kenyamanan Banking Hall</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_toilet' ?  'class="active"' : '' ?>><a href="<?= base_url('cabang/checking_toilet'); ?>">Checking Toilet</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_atm' ?  'class="active"' : '' ?>><a href="<?= base_url('cabang/checking_atm'); ?>">Checking Atm</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('Login/logout') ?>"><i class="ti-power-off"></i> <span>Log Out</span></a></li>
                            <?php } ?>
                            <?php if($this->session->userdata('role') == 1){ ?>
                                <li <?= $this->uri->segment(2) == '' || $this->uri->segment(2) == 'dashboard' ? 'class="active"' : '' ?>>
                                <a href="<?= base_url('welcome/dashboard'); ?>"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li <?= $this->uri->segment(2) == 'briefing' ? 'class="active"' : '' ?>><a href="<?= base_url('welcome/briefing') ?>"><i class="ti-hand-open"></i> <span>Absensi Briefing</span></a></li>
                            <li <?= $this->uri->segment(2) == 'checking_peralatan' ||
                                    $this->uri->segment(2) == 'checking_kenyamanan' ||
                                    $this->uri->segment(2) == 'checking_toilet' ||
                                    $this->uri->segment(2) == 'checking_atm' ? 'class="active"' : '' ?>>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-blackboard"></i>
                                    <span>Implementasi Layanan Cerah</span></a>
                                <ul class="collapse">
                                    <li <?= $this->uri->segment(2) == 'checking_peralatan' ?  'class="active"' : '' ?>><a href="<?= base_url('welcome/checking_peralatan'); ?>">Peralatan Banking Hall</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_kenyamanan' ?  'class="active"' : '' ?>><a href="<?= base_url('welcome/checking_kenyamanan'); ?>">Kenyamanan Banking Hall</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_toilet' ?  'class="active"' : '' ?>><a href="<?= base_url('welcome/checking_toilet'); ?>">Checking Toilet</a></li>
                                    <li <?= $this->uri->segment(2) == 'checking_atm' ?  'class="active"' : '' ?>><a href="<?= base_url('welcome/checking_atm'); ?>">Checking Atm</a></li>
                                </ul>
                            </li>
                            <li <?=$this->uri->segment(2) == 'kantor_cabang' || $this->uri->segment(2) == 'tambah_kantor_cabang' ? 'class="active"' : '' ?>>
                                <a href="<?= base_url('welcome/kantor_cabang'); ?>"><i class="ti-user"></i> <span>Kantor Cabang</span></a></li>
                            <li><a href="<?= base_url('Login/logout') ?>"><i class="ti-power-off"></i> <span>Log Out</span></a></li>
                            <?php } ?>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix ">
                            <!-- <h4 class="page-title pull-left" style=""><?= $this->uri->segment(2); ?></h4> -->
                            <ul class="breadcrumbs pull-left">
                                <li style="margin-right: 20px;"><span><h4 class="text-dark"><?= $this->uri->segment(2); ?></h4></span></li>
                                <li><a href="#">Home</a></li>
                                <li><span><?= $this->uri->segment(2); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?= base_url('uploadfile/').$user['foto'];?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $user['nama']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url('Login/e_profile/').$user['id_pengguna']; ?>">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('Login/logout') ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->