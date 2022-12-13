<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ITSNEWS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ITSNEWS" name="keywords">
        <meta content="ITSNEWS" name="description">

        <!-- Favicon -->
        <link href="img/Lambang-ITS-2-300x300.png" rel="icon">

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
                            <a href="Register.php" class="nav-item nav-link">Register</a>
                            <a href="Login.php" class="nav-item nav-link">Login</a>
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
                                
                            </a>
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
                        <div class="social ml-auto">
                            <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        <!-- Single News Start-->
        <form action="includes/Register.inc.php"method="post">
            <section class="register-form">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="Name"><b>Name</b></label>
              <input type="text" placeholder="Enter name" name="name">
            
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" >

              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter username" name="uid">
          
              <label for="pwd"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pwd">
          
              <label for="pwdrepeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="pwdrepeat">
              <hr>
              <button type="submit" name= "submit">Register</button>
            <div class="container signin">
              <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
          </form>
        <!-- Single News End-->        
        
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
                    
                   
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Newsletter</h3>
                            <div class="newsletter">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="">Your Site Name</a>. All Rights Reserved</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="col-md-6 template-by">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
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
