<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/theme/assets/images/logocart.png" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Online Shopping Stationery Shop</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="theme/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="theme/assets/css/font-awesome.css">

    <link rel="stylesheet" href="theme/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="theme/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="theme/assets/css/lightbox.css">
    
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky shadow-none  mb-5 bg-light rounded" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="theme/assets/images/logocart.png" width="200px" heigth="100px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" >Home</a></li>
                             <li><a href="/about">About Us</a></li>
                             <li class="">
                                <a href="javascript:;">Category</a>
                            </li>
                           <li><a href="/contact">Contact Us</a></li>
                             @if(Auth::User() && Auth::User()->name)
                             <x-app-layout>
                             </x-app-layout>
                             @else
                         <li style="border:2px solid black; height:40px; border-radius: 10px;"><a href="/register">Register</a></li>
                        <li style="border:2px solid black; width: 110px; padding-left:30px; margin:0px 0px 20px 20px ; height:40px;  border-radius: 10px;"><a href="/login">Login</a></li>
                         @endif
                        </ul> 
                        
                       

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


@yield('content')






     <!-- ***** Footer Start ***** -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                           <h1 class="text-light ">Online Shopping Cart</h1>
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160,karachi</a></li>
                            <li><a href="#">TechVerse@company.com</a></li>
                            <li><a href="#">0333008214</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Beauty Products</a></li>
                        <li><a href="#">Greeting Cards</a></li>
                        <li><a href="#">Stationery Products</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 ArtShop Co., Ltd. All Rights Reserved. 
                        
                        
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="theme/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="theme/assets/js/popper.js"></script>
    <script src="theme/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="theme/assets/js/owl-carousel.js"></script>
    <script src="theme/assets/js/accordions.js"></script>
    <script src="theme/assets/js/datepicker.js"></script>
    <script src="theme/assets/js/scrollreveal.min.js"></script>
    <script src="theme/assets/js/waypoints.min.js"></script>
    <script src="theme/assets/js/jquery.counterup.min.js"></script>
    <script src="theme/assets/js/imgfix.min.js"></script> 
    <script src="theme/assets/js/slick.js"></script> 
    <script src="theme/assets/js/lightbox.js"></script> 
    <script src="theme/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="theme/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>