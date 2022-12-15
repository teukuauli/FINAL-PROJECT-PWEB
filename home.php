<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ITSNEWS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ITSNEWS" name="keywords">
        <meta content="ITSNEWS" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>itsnews@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="includes/logout.inc.php" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="sport.php" class="nav-item nav-link">Sports</a>
                            <a href="Entertaiment.php" class="nav-item nav-link">Entertaiment</a>
                            <a href="Politics.php" class="nav-item nav-link">Politics</a>
                            <a href="Technology.php" class="nav-item nav-link">Technology</a>
                        </div>
                        <div class="social ml-auto">
                            <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        
        <!-- Nav Bar End -->

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/rkuhp.jpeg" />
                                    <div class="tn-title">
                                        <a href="rkuhp.php">RKUHP Disahkan RI, Amerika hingga Australia Teriak</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/australia alert ri.jpeg" />
                                    <div class="tn-title">
                                        <a  href="australia.php">Alert! Australia Resmi Keluarkan 'Travel Warning' untuk RI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/outside sex.webp" />
                                    <div class="tn-title">
                                        <a href="outside sex.php">Indonesia passes criminal code banning sex outside marriage</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/avert arail.webp" />
                                    <div class="tn-title">
                                        <a href="avertrail.php">Congress Moved to Avert a Rail Strike. Here’s How and Why</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/new criminal code.webp" />
                                    <div class="tn-title">
                                        <a href="newcriminal.php">Indonesia: New Criminal Code Disastrous for Rights</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/lawmaker pass.jpg" />
                                    <div class="tn-title">
                                        <a href="lawmakerpass.php">Lawmakers pass revised Criminal Code despite protests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2><a href="sport.php" class="nav-item nav-link">Sports</a></h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/ronaldo world cup.jpg" />
                                    <div class="cn-title">
                                        <a href="sport.php">Cristiano Ronaldo a 'total genius' for winning Portugal penalty</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/messidodo.webp" />
                                    <div class="cn-title">
                                        <a href="lastdance.php">Last dance</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/lauren.jpg" />
                                    <div class="cn-title">
                                        <a href="lauren.php">‘I run to find peace,’ says Marvel actress Lauren Ridloff after finishing her first marathon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><a href="Technology.php" class="nav-item nav-link">Technology</a></h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="img/airpods.jpeg" />
                                        <div class="cn-title">
                                            <a href="airpods.php">Hidden specs in apple airpods</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/iphone kabel c.jpeg" />
                                    <div class="cn-title">
                                    <a href="iptypeC.php">Iphone will use type c cable</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="img/logo apple.jpg" />
                                    <div class="cn-title">
                                        <a href="appletrack.php">Apple can track users even if the location setting is off</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2><a href="Entertaiment.php" class="nav-item nav-link">Entertaiment</a></h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="img/film wondering.jpg" />
                                        <div class="cn-title">
                                            <a href="filmmoon.php">Film The Wondering Moon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="img/lary exo.jpeg" />
                                        <div class="cn-title">
                                            <a href="layexo.php">Lay exo balik ke Korea. Exo Bakal comeback</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="img/raffi ahmad.webp" />
                                        <div class="cn-title">
                                            <a href="raffi.php">Raffi Ahmad Sekeluarga Nonton pildun di Qatar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><a href="Politics.php" class="nav-item nav-link">Politics</a></h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/razman.webp" />
                                    <div class="cn-title">
                                        <a href="Politics.php">Sidang Razman Arif Nasution Vs Richard Lee Berlangsung Ricuh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/senate.jpg" />
                                    <div class="cn-title">
                                        <a href="senate.php">Schumer: Senate will not leave without a freight rail agreement</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="img/cool trump.jpg" />
                                    <div class="cn-title">
                                        <a href="trumpdefeat.php">Trump’s rough day in court ends with a double defeat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="popular" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/senate.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="senate.php">Schumer: Senate will not leave without a freight rail agreement</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/instagram.jpeg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="instagram.php">Instagram's New Feature, Short Tweets But Not Tweets</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/billie.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="billieellish.php">Billie Eilish really happy about relationship with Jesse Rutherford</a>
                                    </div>
                                </div>
                            </div>
                            <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/kim.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="kimkadarshian.php">Kim Kardashian and Kanye West reach divorce settlement</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/ponselthnair.jpeg" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="tahanair.php">some waterproof cellphones ready to be taken out in the rain</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/cool trump.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Trump’s rough day in court ends with a double defeat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/trumpdoc.jpg" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="trumpdoc.php">Lawmaker explains what Democrats are planning to do with Trump's tax documents</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/logo apple.jpg" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="appletrack.php">Apple can track users even if the location setting is off</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/arab team news.webp" />
                                    </div>
                                    <div class="tn-title">
                                       <a href="arabteam.php">Arab teams turn Qatar World Cup into a ‘home’ tournament</a></a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/WCGROUP.webp" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="worldgroup.php">What are the World Cup 2022 groups?</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/airpods.jpeg" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="airpods.php">Hidden specs in apple airpods</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/biden meet prince and princess.jpg" />
                                    </div>
                                    <div class="tn-title">
                                    <a href="biden.php">Biden to greet Prince and Princess of Wales while in Boston</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/speedtest.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="internet.php">comparison of internet speed in RI and Singapore</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/meteor.jpeg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="meteor.php">Geminid Meteor Shower Will Soon Reach Its Peak, How Much Can It Be?</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/tvanalog.jpeg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="tvanalog.php">analog tv will stop operating on december 20th</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        
                    
                </div>
            </div>
        </div>
        <!-- Main News End-->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Kampus ITS Sukolilo, Surabaya 60111</p>
                                <p><i class="fa fa-envelope"></i>itsnews@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                                <div class="social">
                                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        
        <!-- Footer Menu End -->

        
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
