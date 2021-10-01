<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Kalkulus - Hitung Keuntunganmu</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link href="<?php echo base_url() . 'assets/admin/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/admin/vendor/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url() . 'assets/admin/vendor/datatables/dataTables.bootstrap4.css' ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/admin/css/sb-admin.css' ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() . 'assets/img/kalkuluss.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() . 'assets/img/kalkuluss.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() . 'assets/home/img/kalkuluss.png' ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . 'assets/home/img/kalkuluss.png' ?>">
    <link rel="manifest" href="<?php echo base_url() . 'assets/home/public/assets/img/favicons/manifest.json' ?>">
    <meta name="msapplication-TileImage" content="<?php echo base_url() . 'assets/home/public/assets/img/favicons/mstile-150x150.png' ?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo base_url() . 'assets/home/public/assets/css/theme.css' ?>" rel="stylesheet" />
    <style>
        .card-img {
            width: 60px;
            height: 60px;
            border-radius: 120px;
        }

        .card-img:hover {
            width: 60px;
            height: 60px;
            border-radius: 120px;
            box-shadow: 2px 1px 1px 1px;
        }


        .card-title {
            font-size: medium;
            margin-bottom: 1px;
        }

        .card-text {
            font-size: small;
        }
    </style>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-bolder fs-2 fst-italic" href="#">
                    <div class="text-info">KALKU</div>
                    <div class="text-warning">LUS</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#project">Project</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#about">About</a></li>
                        <li class="nav-item px-2"></li>

                        <div style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                                </div>
                                <div class="col-md-9">

                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                    <p class="card-text"><?= $user['email']; ?></p>


                                </div>
                            </div>
                        </div>
                        <li class="nav-item px-2"></li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/logout'); ?>" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>