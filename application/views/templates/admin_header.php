<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Kalkulus </title>
    <!-- Bootstrap core CSS-->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() . 'assets/img/kalkuluss.png' ?>">
    <link href="<?php echo base_url() . 'assets/admin/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/admin/vendor/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url() . 'assets/admin/vendor/datatables/dataTables.bootstrap4.css' ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/admin/css/sb-admin.css' ?>" rel="stylesheet">
    <style>
        .card-img {
            width: 51px;
            height: 51px;
            border-radius: 120px;
        }

        .card-img:hover {
            width: 50px;
            height: 50px;
            border-radius: 120px;
            box-shadow: 2px 1px 1px 1px;
        }


        .card-title {
            font-size: medium;
            margin-bottom: 1px;
            color: white;
        }

        .card-text {
            font-size: small;
            color: white;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">Admin Kalkulus</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
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

                    <a class="nav-link" href="<?= base_url(''); ?>">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="<?= base_url('blocked'); ?>">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Components</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="<?= base_url('blocked'); ?>">Data</a>
                        </li>
                        <li>
                            <a href="<?= base_url('blocked'); ?>">History</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                    <a class="nav-link" href="<?= base_url('blocked'); ?>">
                        <i class="fa fa-fw fa-link"></i>
                        <span class="nav-link-text">Link</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>