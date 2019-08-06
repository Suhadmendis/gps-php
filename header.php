<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="css/skins/skin-blue.min.css">
        <link rel="stylesheet" href="css/home.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/info.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet" type="text/css"/>
        
        
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->


        <style>
            .kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar .file-input {
                display: table-cell;
                max-width: 220px;
            }
            img {
                width: 120px;
                height: 120px;
            }
        </style>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="header.php" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>C</b>AB</span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b>Cab</b>Control</span> </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->

                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php
                                echo $_SESSION['UserName']
                                ?>
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button> </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">
                            Control
                        </li>

                        <li class="treeview">
                            <a href="#"> <i class="fa fa-dashboard"></i> <span>Menu</span> <i class="fa fa-angle-left pull-right active"></i> </a>
                            <ul class="treeview-menu">

                                <?php
                                if (isset($_GET['url'])) {
                                    $murl = $_GET['url'];
                                } else {
                                    $murl = "";
                                }
                                ?>

                                <?php
                                if ($murl == "driver") {
                                    echo "<li class='active'>";
                                } else {
                                    echo "<li>";
                                }
                                ?>
                                <a href="home.php?url=driver"><i class="fa fa-circle-o"></i>Driver</a></li>
                        <?php
                        if ($murl == "view_p") {
                            echo "<li class='active'>";
                        } else {
                            echo "<li>";
                        }
                        ?>
                        <a href="home.php?url=view_p"><i class="fa fa-circle-o"></i>Unassigned Hires</a></li>

                        <?php
                        if ($murl == "view_fleet") {
                            echo "<li class='active'>";
                        } else {
                            echo "<li>";
                        }
                        ?>
                        <a href="home.php?url=view_fleet"><i class="fa fa-circle-o"></i>Unassigned Drivers</a></li>

                        <?php
                        if ($murl == "new") {
                            echo "<li class='active'>";
                        } else {
                            echo "<li>";
                        }
                        ?>
                        <a href="home.php?url=new"><i class="fa fa-circle-o"></i>new</a></li>


                    </ul>

                    </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">