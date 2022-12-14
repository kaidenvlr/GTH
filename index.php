<?php
session_start();
include('./db/dbConnect.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green Tech Hub</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>
                                            <script
                                                src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                                            <script
                                                src="//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"
                                                type="text/javascript"></script>
                                            <div><span id="user-city"></span></div>
                                        </li>

                                        <li><script language="javascript" type="text/javascript">
                                            var d = new Date();
                                            
                                            var day=new Array("??????????????????????","??????????????????????","??????????????",
                                            "??????????","??????????????","??????????????","??????????????");
                                            
                                            var month=new Array("????????????","??????????????","??????????","????????????","??????","????????",
                                            "????????","??????????????","????????????????","??????????????","????????????","??????????????");
                                            
                                            document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]
                                            + " " + d.getFullYear() + " ??.");
                                            //--></script>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.jpg" alt="logo"></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">??????????????</a></li>
                                            <li><a href="about.html">?? ??????</a></li>
                                            <li><a href="news.php">??????????????</a></li>
                                            <li><a href="projects.php">??????????????</a></li>
                                            <li><a href="services.php">????????????</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="??????????">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                    <div class="trend-top-cap">
                                        <span>?????????????????? 1</span>
                                        <h2><a href="#">?????????????????? ?????????????? ?????????????? 1<br>????????-????????????????</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">?????????????????? 2</span>
                                                <h4><a href="#">?????????????????? ?????????????? ?????????????? 2</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">?????????????????? 3</span>
                                                <h4>
                                                    <h4><a href="#">?????????????????? ?????????????? ?????????????? 3</a></h4>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom3.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">?????????????????? 4</span>
                                                <h4><a href="#">?????????????????? ?????????????? ?????????????? 4</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right1.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">?????????????????? 1</span>
                                    <h4><a href="#">?????????????? 1</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right2.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color3">?????????????????? 4</span>
                                    <h4><a href="#">?????????????? 2</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right3.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color2">?????????????????? 3</span>
                                    <h4><a href="#">?????????????? 3</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right4.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color4">?????????????????? 3</span>
                                    <h4><a href="#">?????????????? 4</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="assets/img/trending/right5.jpg" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">?????????????????? 2</span>
                                    <h4><a href="#">?????????????? 5</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="timeline-section-2" class="timeline-section grey-section">
                        <!-- Section Container -->
                        <div class="section-container">
                            <div class="container">
                                <!-- News -->
                                <div class="container">
                                    <!-- Title and Top Buttons Start -->
                                    <div class="page-title-container">
                                        <div class="col ">
                                            <!-- Title Start -->
                                            <div class="col-auto mb-3 mb-md-0 me-auto">
                                                <div class="w-auto sw-md-30">
                                                </div>
                                            </div>
                                            <!-- Title End -->
                                        </div>
                                    </div>
            
                                    <!-- news image -->
                                    <div class="row justify-content-center">
            
                                    </div>
            
                                    <!-- Order List Start -->
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <?php
                                            $sqlNews = "select * from `news`";
                                            $resNews = $conn->query($sqlNews);
                                            if ($resNews->num_rows > 0) {
                                                while ($dataNews = mysqli_fetch_assoc($resNews)) {
                                                    $sqlImage = "select * from `newsimage` where nid=" . $dataNews['nid'];
                                                    $resImage = $conn->query($sqlImage);
                                                    $dataImage = mysqli_fetch_assoc($resImage);
                                            ?>
                                                    <div id="checkboxTable">
                                                        <div class="card bg-light col-md-4 col-sm-4 col-xs-4 counter-block">
                                                            <img class="card-img-top" src="./adminpanel/uploads/<?php echo $dataImage['nimgname']; ?>" width="300" height="200" alt="image">
                                                            <div class="card-title"><?php echo $dataNews['ntitle']; ?></div>
                                                            <div class="card-body">
                                                                <h5 class="card-header"><?php echo $dataNews['nslogan']; ?><a href="./newsdetail.php?id=<?php echo $dataNews['nid']; ?>" class="btn btn-light">???????????? ??????????</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php }
                                            } else {
                                                echo "?????? ???????????? ?? ???????????????????????? ????????????????";
                                            } ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- End news -->
                            </div>
                        </div>
                        <!-- /End Section Container -->
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Trending Area End -->

        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>????????????????????</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent1.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1"></span>
                                        <h4><a href="#">???????????? ???????????????????? 1</a></h4>
                                    </div>
                                </div>



                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">???????????????????? 2</span>
                                        <h4><a href="#">???????????? ???????????????????? 2</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent3.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">???????????????????? 3</span>
                                        <h4><a href="#">???????????? ???????????????????? 3</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">???????????????????? 4</span>
                                        <h4><a href="#">???????????? ???????????????????? 4</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->

        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>????????????????????????</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent1.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">?????????????? 1</span>
                                        <h4><a href="#">???????????? ?? ???????????????? 1</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">?????????????? 2</span>
                                        <h4><a href="#">???????????? ?? ???????????????? 2</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent3.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">?????????????? 3</span>
                                        <h4><a href="#">???????????? ?? ???????????????? 3</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">?????????????? 4</span>
                                        <h4><a href="#">???????????? ?? ???????????????? 4</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>????????????????</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/partners/??????.png" alt="">
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/partners/??????.png" alt="">
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/partners/??????.png" alt="">
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/partners/??????.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.jpg" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>??????????-???????????????????? ?? ??????????????</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>?????????????????? ????????????????</h4>
                                <p>?????????????????????? ???? ??????????????</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>????????????????</h4>
                            </div>
                            <div>
                                lorem ipsum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> ?????? ??????????
                                    ???????????????????????????????? | ?????????????????? <a href="https://ecomeken.kz"
                                        target="_blank">Ecomeken</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">?????????????? ??????????????????????????</a></li>
                                    <li><a href="#">???????????????? ????????????????????????????????????</a></li>
                                    <li><a href="#">????????????????</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->
    <script>
        window.onload = function () {
            jQuery("#user-city").text(ymaps.geolocation.city);
            jQuery("#user-region").text(ymaps.geolocation.region);
            jQuery("#user-country").text(ymaps.geolocation.country);
        }
    </script>
    <script>
        console.clear();

        var baseUrl = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/106114/logo-";

        var logos = [];
        var names = ["google", "intel", "aol", "amazon", "ford", "cocacola", "mcdonalds", "samsung", "microsoft", "youtube", "nike", "fox", "motorola", "ea", "adobe"];

        var companies = $(".company-logo").toArray().map(createCompany);
        var current;

        var interval = TweenLite.delayedCall(1.5, function () {
            swapLogo();
            interval.restart(true);
        });

        function createCompany(element) {

            var company = {
                animate: animate,
                element: element,
                logo: getLogo()
            };

            var leave,
                enter = getImage(company);

            function animate() {

                leave = enter;
                enter = getImage(company);

                TweenLite.from(enter, 0.75, { autoAlpha: 0, delay: 0.25 });
                TweenLite.to(leave, 0.75, { autoAlpha: 0, onComplete: removeImage });
            }

            function removeImage() {
                element.removeChild(leave);
            }

            return company;
        }

        function swapLogo() {
            var last = current;
            current = sample(companies.filter(function (company) {
                return company !== last;
            }));

            current.logo = getLogo(current);
            current.animate();
        }

        function getImage(company) {
            var image = new Image();
            image.src = baseUrl + company.logo + ".png";
            company.element.appendChild(image);
            return image;
        }

        function getLogo(company) {
            if (!logos.length) logos = shuffle(names.splice(0));
            if (company) names.push(company.logo);
            return logos.shift();
        }

        function sample(array) {
            var index = Math.floor(Math.random() * array.length);
            return array[index];
        }

        function shuffle(array) {
            for (var i = array.length - 1; i > 0; i--) {
                if (window.CP.shouldStopExecution(1)) { break; } if (window.CP.shouldStopExecution(1)) { break; } if (window.CP.shouldStopExecution(1)) { break; } if (window.CP.shouldStopExecution(1)) { break; } if (window.CP.shouldStopExecution(1)) { break; }
                var j = Math.floor(Math.random() * (i + 1));
                var temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
            window.CP.exitedLoop(1);
            window.CP.exitedLoop(1);
            window.CP.exitedLoop(1);
            window.CP.exitedLoop(1);
            window.CP.exitedLoop(1);
            return array;
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./assets/js/jquery.ticker.js"></script>
    <script src="./assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>