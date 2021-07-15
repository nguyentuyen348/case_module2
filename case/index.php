


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->

</head>
<body style="background: #5bb3cb">
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
    <div class="top-header-content">
        <header class="tophny-header">
            <div class="container-fluid">
                <div class="top-right-strip row">
                                <!--//login-form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light" style="background: #3931af">
                <div class="container-fluid serarc-fluid">
                    <a class="navbar-brand" href="index.php">
                        Jayce<span class="lohny">S</span>tore</a>
                    <!-- if logo is image enable this
                            <a class="navbar-brand" href="#index.html">
                                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                            </a> -->
                    <!--/search-right-->
                    <div style="position: absolute;left: 200px" class="" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Contact</a>
                            </li>

                        </ul>
                    </div>

                    <div id="navbarSupportedContent" style="position: absolute;right: 150px">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                             <a class="nav-link" href="login.php">login</a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-right">
                        <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                            <span class="search-text">Search here</span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <form action="#" method="post" class="search-box">
                                    <input type="search" placeholder="Keyword" name="search"
                                           autofocus="">
                                    <button type="submit" class="btn">Search</button>
                                </form>
                            </div>
                            <a class="close" href="#">×</a>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa fa-bars"> </span>
                    </button>
                </div>
            </nav>
            <!--//nav-->
        </header>
</section>


<section style="position: absolute; top: 150px;left: 100px ">
<?php
require __DIR__ . '/vendor/autoload.php';
use App\Controller;
use App\Model\DBConnect;
$dbconnect = new DBConnect();
$controller = new Controller\ProductController();
$controller->showToHome();

?>
