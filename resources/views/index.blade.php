<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EAS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('assets/img/w_80C_icon.ico')}}>

    <!-- CSS here -->
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/slicknav.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/flaticon.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/progressbar_barfiller.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/gijgo.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/animate.min.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/animated-headline.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/magnific-popup.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/fontawesome-all.min.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/themify-icons.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/slick.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/nice-select.css')}}>
    <link rel="stylesheet" href={{ asset('assets/css/style.css')}}>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .header-bottom .logo .logo_nav .logo_nav_img {
            width: 70%;
            height: 70%;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .header-bottom .logo .logo_nav .logo_nav_img {
                width: 20%;
                height: 20%;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .header-bottom .logo .logo_nav .logo_nav_img {
                width: 20%;
                height: 20%;
            }
        }

        @media (max-width: 575px) {
            .header-bottom .logo .logo_nav .logo_nav_img {
                width: 25%;
                height: 25%;
            }
        }
    </style>
</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <img style="width:18%;height:30%;" src="{{ asset('assets/img/logo/as.gif')}}" alt="">
        </div>
    </div>
    <!-- Preloader Start -->



    <!-- Header Start -->

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a class="logo_nav" href="index.html"><img class="logo_nav_img" style="" src="{{ asset('assets/img/logo/logoEAS.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#home">Home</a></li>
                                                <li><a href="#about_us">About</a></li>
                                                <li><a href="#opinions">Opinions</a></li>
                                                <li><a href="#services">Services</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="contact.html" class="btn header-btn"><img src="assets/img/icon/smartphone.svg" alt=""> 01275861736</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- slider Area Start-->
        <div class="container-fluid">
            <div class="slider-area position-relative">
                <div class="slider-active dot-style">
                    <!-- Single Slider -->
                    <div id="home" class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9 col-lg-11 col-md-11">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".2s">Emergency Alert System</h1>
                                        <div class="hero-details">
                                            <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                                <h2>EAS</h2>
                                                <h2>EAS</h2>
                                            </div>
                                            <P data-animation="fadeInUp" data-delay=".4s">Every second saves the life of a person</P>
                                            <!-- Hero-btn -->
                                            <div class="hero__btn">
                                                <a href="industries.html" class="btn mb-10" data-animation="fadeInUp" data-delay=".8s">Our Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Office environment  Start-->
        <section id="about_us" class="office-environments">
            <div class="container">
                <div class="row environments-wrapper section-bg02" data-background="{{ asset('assets/img/gallery/fff.gif')}}" style="background-size:50% ;">
                    <div class="col-11">
                        <div class="col-xl-7 col-lg-8 offset-xl-7 offset-lg-2">
                            <div class="office-pera">
                                <div class="section-tittle">
                                    <h2 class="mb-30">Your life is our responsibility</h2>
                                    <p>
                                        When accidents happen to people who are alone and there is no one to help them .. or an accident occurs in an area out of sight, whether it is land or river .. We provide the service of sending rescue teams quickly to rescue you from anywhere as soon
                                        as we receive the warning</p>
                                    <a href="#" class="btn">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Office environment  End-->
        <!--? Pricing Card Start -->
        <section id="opinions" class="pricing-card-area fix section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="section-tittle text-center mb-90">
                            <h2>What do our clients say?</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="row">
                        <div class="item col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="single-card text-center mb-30">
                                <div class="card-top">
                                    <img style="width: 18%; height: 18%;margin-left: 41%" src="assets/img/icon/client_1_T0K_icon.ico" alt="">
                                    <h4>Sleem Mohamed</h4>
                                    <p>Paramedic</p>
                                </div>
                                <div class="card-mid">
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>"This helps us to </li>
                                        <li>remedy the danger quickly</li>
                                        <li>and save more livess"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="single-card text-center mb-30">
                                <div class="card-top">
                                    <img style="width: 18%; height: 18%;margin-left: 41%" src="assets/img/icon/client_1_T0K_icon.ico" alt="">
                                    <h4>Sleem Mohamed</h4>
                                    <p>Paramedic</p>
                                </div>
                                <div class="card-mid">
                                </div>
                                <div class="card-bottom">
                                    <ul>
                                        <li>"This helps us to </li>
                                        <li>remedy the danger quickly</li>
                                        <li>and save more livess"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="single-card text-center mb-30">
                                <div class="card-top">
                                    <img style="width: 18%; height: 18%;margin-left: 41%" src="assets/img/icon/client_2_6BF_icon.ico" alt="">
                                    <h4>Sara Sameer</h4>
                                    <p>Client</p>
                                </div>
                                <div class="card-mid">
                                </div>
                                <div class="card-bottom">
                                    <ul>

                                        <li>"Thank you for </li>
                                        <li>your services and for</li>
                                        <li> Saving my life"</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--? Services Area Start -->
        <section id="services" class="categories-area section-padding40">
            <div class="container">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-11">
                        <div class="section-tittle mb-60">
                            <h2>Why use our services?</h2>
                            <p>Because your life and the life of your family is important, because you cannot live without a car, and because it is our duty to provide security and protection for you and your family.</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="row">
                        <div class="item col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="cat-icon">
                                    <img style="width: 60%;height: 60%;" src="assets/img/icon/YDP_icon.ico" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5>Civil defense</h5>
                                    <p>Sending civil defense quickly, equipped with everything it needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="cat-icon">
                                    <img style="width: 60%;height: 60%;" src="assets/img/icon/qf_icon.ico" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5>river rescue</h5>
                                    <p>Combine the efforts of the Office of Emergency Medical Services search and rescue team with those of the Office of the River Police Patrol.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="cat-icon">
                                    <img style="width: 60%;height: 60%;" src="assets/img/icon/Be3_icon.ico" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5>firefighter</h5>
                                    <p>Sending a firefighter if there is a suspicion of a car fire.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-3 col-md-6 col-sm-6">
                            <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="cat-icon">
                                    <img style="width: 60%;height: 60%;" src="assets/img/icon/AeO_icon.ico" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5>Ambulances</h5>
                                    <p>Ambulances fully equipped and in a state of permanent readiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Services Area End -->



        <!--- contact-section --------------------->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="contact-title">Contact us</h1>

                        <p class="mb-5">Thank you for contacting us..we will contact you soon if there is a need for that.</p>

                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Write your message, notes , questions here..">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Cairo, Egypt.</h3>
                                <p>cairo, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p> Sunday to Friday 9am to 7pm </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3> support_EAS@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-wrapper section-bg2" data-background="assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/dd_TC4_2.ico" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p> We hope nothing bad will happen to you </p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">(+20)56055664 </a></li>
                                            <li class="number2"><a href="#">contact_EAS@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Opening hour</h4>
                                    <ul>
                                        <li><a href="#">always open</a></li>

                                        <li><a href="#"> to save</a></li>
                                        <li><a href="#"> your  souls </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="col-md-12 text-center py-5">
                                    <p>



                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> This site is made by <i class="fa fa-heart" aria-hidden="true"></i> fifth year Students of the Modern Academy of Engineering and Technology <i class="icon-heart" aria-hidden="true"></i>



                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src={{ asset('assets/js/vendor/modernizr-3.5.0.min.js')}}></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src={{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}></script>
    <script src={{ asset('assets/js/popper.min.js')}}></script>
    <script src={{ asset('assets/js/bootstrap.min.js')}}></script>
    <!-- Jquery Mobile Menu -->
    <script src={{ asset('assets/js/jquery.slicknav.min.js')}}></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src={{ asset('assets/js/owl.carousel.min.js')}}></script>
    <script src={{ asset('assets/js/slick.min.js')}}></script>
    <!-- One Page, Animated-HeadLin -->
    <script src={{ asset('assets/js/wow.min.js')}}></script>
    <script src={{ asset('assets/js/animated.headline.js')}}></script>
    <script src={{ asset('assets/js/jquery.magnific-popup.js')}}></script>

    <!-- Date Picker -->
    <script src={{ asset('assets/js/gijgo.min.js')}}></script>
    <!-- Nice-select, sticky -->
    <script src={{ asset('assets/js/jquery.nice-select.min.js')}}></script>
    <script src={{ asset('assets/js/jquery.sticky.js')}}></script>
    <!-- Progress -->
    <script src={{ asset('assets/js/jquery.barfiller.js')}}></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src={{ asset('assets/js/jquery.counterup.min.js')}}></script>
    <script src={{ asset('assets/js/waypoints.min.js')}}></script>
    <script src={{ asset('assets/js/jquery.countdown.min.js')}}></script>
    <script src={{ asset('assets/js/hover-direction-snake.min.js')}}></script>

    <!-- contact js -->
    <script src={{ asset('assets/js/contact.js')}}></script>
    <script src={{ asset('assets/js/jquery.form.js')}}></script>
    <script src={{ asset('assets/js/jquery.validate.min.js')}}></script>
    <script src={{ asset('assets/js/mail-script.js')}}></script>
    <script src={{ asset('assets/js/jquery.ajaxchimp.min.js')}}></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src={{ asset('assets/js/plugins.js')}}></script>
    <script src={{ asset('assets/js/main.js')}}></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>


</body>

</html>
