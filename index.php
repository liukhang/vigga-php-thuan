<?php
    require 'lib/dbCon.php';
    require 'lib/trangchu.php';
    
    if (isset($_GET["p"])) 
        $p = $_GET["p"];
    else
        $p = "";
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Vigga</title>
        <meta name="viewport" content="width=device-width">

        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/jquery.mCustomScrollbar.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/responsive.css"/>
        <!-- End Include All CSS -->


        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicona.png">
        <!-- Favicon Icon -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]--> 
    </head>
    <body class="animat">

        <div id="page">
            <?php require 'blocks/header.php'; ?>
            <!--Header End-->
            <section class="mainContent">
                <div class="container">
                    <div class="row">
                        <?php 
                            switch ($p) {
                                case 'tintrongloai': require 'pages/tintrongloai.php';
                                    # code...
                                    break;
                                case 'tintheotheloai': require 'pages/tintheotheloai.php';
                                    # code...
                                    break;
                                case 'chitiettin': require 'pages/chitiettin.php';
                                    # code...
                                    break;
                                case 'timkiem': require 'pages/timkiem.php';
                                    # code...
                                    break;
                                
                                default: require 'pages/trangchu.php';
                                    # code...
                                    break;
                            }
                         ?>

                       <?php require 'blocks/slidebar.php'; ?>
                    </div>
                </div>
            </section>
            <section class="paginations">
                <div class="container">
                    <div class="row">
                       
                    </div>
                </div>
            </section>
            <?php require 'blocks/footer.php'; ?>
            <a href="#" class="back-to-top">Back to Top</a>
        </div>

        <!-- Include All JS -->
        <script type="text/javascript" src="public/js/jquery.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.js"></script>
        <script type="text/javascript" src="public/js/owl.carousel.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="public/js/gmaps.js"></script>
		<script type="text/javascript" src="public/js/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="public/js/theme.js"></script>
        <script>
            var amountScrolled = 300;
                $(window).scroll(function() {
                    if ( $(window).scrollTop() > amountScrolled ) {
                        $('a.back-to-top').fadeIn('slow');
                    } else {
                        $('a.back-to-top').fadeOut('slow');
                    }
                });
                $('a.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 700);
                return false;
            });
        </script>
    </body>
</html>