<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->

    <!-- <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation"> -->

    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>Solo Travel | Find your perfect stranger for your perfect travelling experience</title>

        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">

        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/hans.css">
        <!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>
    <?php
    require('connection.php'); 
    session_start();
    ?>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top" style="background-color: rgba( 0, 0, 0, 0.8);">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="index.php">
                            <img src="img/logosolotravel H.png" alt="Solo Travel Logo" style="height: 50px;">
                        </a>
                    </h1>
                    <!-- /logo -->

                </div>

                <!-- main nav -->
                <div id="navbar-search">
                    <form action="room.php" method="get" id="search">
                            <input type="text" placeholder="Search" name="room_name">
                    </form>
                </div>
                <button type="submit" class="btn btn-default" form="search" id="searchButton"><i class="fa fa-search" aria-hidden="true"></i></button>
                <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">

                        <li <?php if($current == 1) echo 'class="current"' ?> ><a href="index.php">Home</a></li>
                        <li <?php if($current == 2) echo 'class="current"' ?> ><a href="about.php">About</a></li>
                        <li <?php if($current == 3) echo 'class="current"' ?> ><a href="destination.php">Destination</a></li>
                        <li <?php if($current == 4) echo 'class="current"' ?> ><a href="gallery.php">Gallery</a></li>
                        <li <?php if($current == 5) echo 'class="current"' ?> ><?php if(isset($_SESSION['user'])) { ?> <a href=""> <?php echo $_SESSION["user"]['name'] ?> </a>
                            <ul>
                                <li><a href="edit_profile.php?user_id=<?php echo $_SESSION['user']['id'] ?>">Edit Profile</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                            <?php 
                        } else{
                            ?> 
                            <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            <?php }
                            ?> 
                        </li>
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>

        </div>
    </header>
        <!--
        End Fixed Navigation
        ==================================== -->