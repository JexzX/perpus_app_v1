<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpus TI | <?php $judul ?> </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('AdminLTE') ?>/dist/img/logohmps.png" alt="HMPS Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Perpustakaan TI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('AdminLTE') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Staff</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Stats
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Admin Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <?php
            if ($page) {
                echo view($page);
            }
            ?>

                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="control-sidebar">
                <div class="sidebar-header">
                    <h3>Online User</h3>
                </div>

                <div class="sidebar-section">
                    <div class="user-group">
                        <span class="group-title">Deputy Head Admin</span>
                        <div class="user-item">
                            <span class="user-avatar">P</span>
                            <div class="user-info">
                                <span class="username">Paijo Mangkuwanito</span>
                                <span class="user-status">Playing Visual Studio Code</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="user-group">
                        <span class="group-title">Manager</span>
                        <div class="user-item">
                            <span class="user-avatar">M</span>
                            <div class="user-info">
                                <span class="username">Muadz</span>
                                <span class="user-status">Playing Odin: Valhalla Rising</span>
                            </div>
                        </div>
                    </div>

                    <div class="user-group">
                        <span class="group-title">Supports Manager</span>
                        <div class="user-item">
                            <span class="user-avatar">Z</span>
                            <div class="user-info">
                                <span class="username">Zidan</span>
                                <span class="user-status">Playing Blender 3D</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="user-group">
                        <span class="group-title">ONLINE - 8</span>
                        <div class="user-item">
                            <span class="user-avatar">I</span>
                            <div class="user-info">
                                <span class="username">Ifan</span>
                                <span class="user-status">Playing AKU PATRIOT SMC</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">R</span>
                            <div class="user-info">
                                <span class="username">Renald</span>
                                <span class="user-status">Playing Gym Simulator</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">F</span>
                            <div class="user-info">
                                <span class="username">Farid</span>
                                <span class="user-status">Playing Spotify</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">T</span>
                            <div class="user-info">
                                <span class="username">TI_PERPUS APP</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">T</span>
                            <div class="user-info">
                                <span class="username">TI_PERPUS_STATS APP</span>
                                <span class="user-status">Playing /changelog</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">U</span>
                            <div class="user-info">
                                <span class="username">Uin_Support App</span>
                                <span class="user-status">Playing /stats</span>
                            </div>
                        </div>

                        <div class="user-item">
                            <span class="user-avatar">T</span>
                            <div class="user-info">
                                <span class="username">TI_B APP</span>
                                <span class="user-status">Playing /rules</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="user-group">
                        <span class="group-title">OFFLINE - 2025</span>
                        <div class="user-item offline">
                            <span class="user-avatar">R</span>
                            <div class="user-info">
                                <span class="username">Riza</span>
                            </div>
                        </div>

                        <div class="user-item offline">
                            <span class="user-avatar">E</span>
                            <div class="user-info">
                                <span class="username">Erlangga</span>
                            </div>
                        </div>

                        <div class="user-item offline">
                            <span class="user-avatar">P</span>
                            <div class="user-info">
                                <span class="username">Pida Dania</span>
                            </div>
                        </div>

                        <div class="user-item offline">
                            <span class="user-avatar">S</span>
                            <div class="user-info">
                                <span class="username">Siluman Ular</span>
                            </div>
                        </div>

                        <div class="user-item offline">
                            <span class="user-avatar">P</span>
                            <div class="user-info">
                                <span class="username">PACA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
            .control-sidebar {
                width: 240px;
                background-color: #2f3136;
                color: #dcddde;
                font-family: 'Whitney', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                height: 100vh;
                overflow-y: auto;
                padding: 10px 0;
            }

            .sidebar-header {
                padding: 0 10px 10px;
                border-bottom: 1px solid #202225;
                margin-bottom: 10px;
            }

            .sidebar-header h3 {
                margin: 0;
                font-size: 15px;
                font-weight: 600;
                text-transform: uppercase;
                color: #8e9297;
            }

            .sidebar-section {
                margin-bottom: 20px;
            }

            .user-group {
                padding: 0 10px;
            }

            .group-title {
                display: block;
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
                color: #8e9297;
                margin: 15px 0 5px;
                cursor: pointer;
            }

            .user-item {
                display: flex;
                align-items: center;
                padding: 5px 8px;
                border-radius: 3px;
                margin: 1px 0;
            }

            .user-item:hover {
                background-color: #393c43;
            }

            .user-item.offline {
                opacity: 0.5;
            }

            .user-avatar {
                width: 32px;
                height: 32px;
                background-color: #7289da;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 10px;
                font-weight: 600;
                color: white;
                flex-shrink: 0;
            }

            .user-info {
                display: flex;
                flex-direction: column;
                overflow: hidden;
            }

            .username {
                font-size: 14px;
                font-weight: 500;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .user-status {
                font-size: 12px;
                color: #a3a6aa;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            </style>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Teknologi Informasi
            </div>
            <!-- Default to the left -->
            <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved. -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>