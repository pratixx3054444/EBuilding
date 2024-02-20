<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            border-radius: 20px;
        }
    </style>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>E-Building</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="asset/img/favicon.png" rel="icon">
        <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">        
        <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="asset/vendor/aos/aos.css" rel="stylesheet">
        <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="asset/css/style.css" rel="stylesheet">
        <script>
            function preventBack()
            {
                window.history.forward();
                window.onbeforeunload=function(){
                    alert("You won't be able get back");
                };
            }
            setTimeout("preventBack()",0);
            window.onunload()=function (){null;};
        </script>
    </head>
    <body>
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex justify-content-between align-items-center">

                <div class="logo">
                    <h1 class="text-light"><img src="images/E-Building_image.jpg">&emsp;<span>E-BUILDING</span></h1>
                </div>
                    <nav id='navbar' class='navbar'><ul><li><a href='Registration.php'>Registration</a></li> 
          <li><a href='Login.php'>Login</a></li></ul>
                </ul>   
                <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>E-BUILDING</span></h2>
                        <p class="animate__animated animate__fadeInUp">
                            The E-Building system which provides the facility to manage the maintenance,complaints and events of the residential's, and delivers important reminders to flat owner.
                        </p>
                
                    </div>
                </div>
                
                <div class="words" contenteditable> 
        <p id="p"></p> 
    </div> 
  
        </section>

        <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="asset/vendor/aos/aos.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="asset/vendor/php-email-form/validate.js"></script>
        <script src="asset/js/main.js"></script>

    </body>

</html>