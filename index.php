<?
require './assets/php/connect.php';
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    $Last_News = $db->query("select * from news limit 1");
    $LastNews = $Last_News->fetch_object();
    $c_jahon = $db->query("select * from news where category_id=(select id from categories where name like '%jahon%' ) order by id desc limit 1");
    $jahon = $c_jahon->fetch_object();
    $c_sports = $db->query("select * from news where category_id=(select id from categories where name like '%Sport%' ) order by id desc limit 1");
    $sport = $c_sports->fetch_object();
    $c_tech = $db->query("select * from news where category_id=(select id from categories where name like '%texnologiya%')  order by id desc limit 1");
    $tech = $c_tech->fetch_object();
    $New = $db->query("select * from news order by id desc limit 5");
    if ($New->num_rows > 0) {
        while ($rows = $New->fetch_object()) {
            $news[] = $rows;
        }
    }
    $New2 = $db->query("select * from news order by id desc");
    if ($New2->num_rows > 0) {
        while ($rows = $New2->fetch_object()) {
            $news2[] = $rows;
        }
    }

    $weklynews = $db->query("SELECT * FROM news WHERE create_time > DATE_SUB(DATE(NOW()), INTERVAL 1 WEEK) ");
    if ($weklynews->num_rows > 0) {
        while ($row = $weklynews->fetch_object()) {
            $weklynew[] = $row;
        }
    }
    $categories = $db->query("select * from categories");
    if ($categories->num_rows > 0) {
        while ($category = $categories->fetch_object()) {
            $cat[] = $category;
        }
    }
}

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AzNews</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/cc9f5ac842261e6ad2e996a4e2dc90af.png">

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
    <style>
        .crop {
            width: 240px;
            height: 140px;
            overflow: hidden;
        }

  
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <? include './assets/php/layouts.php' ?>

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- 1 -->
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="<?= $LastNews->img ?>" alt="">
                                    <div class="trend-top-cap">
                                        <span><?= $LastNews->hour ?></span>
                                        <h2><a href="/details.php?id=<?= $LastNews->id ?>"><?= $LastNews->title ?></a></h2>
                                    </div>
                                </div>
                            </div>

                            <!-- 1.1-->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30 crop">
                                                <img src="<?= $jahon->img ?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"> <?= "Dunyo Yangiliklari" ?> </span>
                                                <h4><a href="/details.php?id=<?= $jahon->id ?>"><?= $jahon->title ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30 crop">
                                                <img src="<?= $sport->img ?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"> <?= "Sport Yangiliklari" ?> </span>
                                                <h4><a href="/details.php?id=<?= $sport->id ?>"><?= $sport->title ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30 crop">
                                                <img src="<?= $tech->img ?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"> <?= "Dunyo Yangiliklari" ?> </span>
                                                <h4><a href="/details.php?id=<?= $tech->id ?>"><?= $tech->title ?></a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- R1.2 -->
                        <div class="col-lg-4">
                            <? foreach ($news as $item) { ?>


                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img style="    width: 120px;
                height: 120px;
                overflow: hidden;" src="<?= $item->img ?>" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span style="margin-bottom: 5px !important;" class="color1 "><?= $item->hour ?></span>
                                        <h4><a style="font-size: 15px ; line-height: 5px;" href="/details.php?id=<?= $item->id ?>"><?= $item->title ?></a></h4>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                <? foreach ($weklynew as $item) { ?>


                                    <div class="weekly-single <?= ($item->top == 1) ? 'active' : '' ?>">
                                        <div class="weekly-img">
                                            <img width="370" height="250" src="<?= $item->img  ?>" alt="">
                                        </div>
                                        <div class="weekly-caption">
                                            <span class="color1"><?
                                                                    $c_ids = $db->query("select name from categories where id = $item->category_id");
                                                                    $c_id = $c_ids->fetch_object();
                                                                    echo $c_id->name;
                                                                    ?></span>
                                            <h4><a href="/details.php?id=<?= $item->id ?>"><?= $item->title ?></a></h4>
                                        </div>
                                    </div>


                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- 3 -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <? foreach ($cat as $item) {

                                            ?>

                                                <a class="nav-item nav-link <?= ($item->selected == 1) ? 'active' : '' ?>" id="<?= $item->id_href ?>-tab" data-toggle="tab" href="#<?= $item->id_href ?>" role="tab" aria-controls="<?= $item->id_href ?>" aria-selected="<?= ($item->selected == 1) ? 'true' : 'false' ?>"><?= $item->name ?></a>

                                            <? } ?>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <? foreach ($cat as $item) {
                                        $n = [];
                                    ?>
                                        <div class="tab-pane fade  <?= ($item->selected == 1) ? 'show active' : '' ?>" id="<?= $item->id_href ?>" role="tabpanel" aria-labelledby="<?= $item->id_href ?>-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <? $news = $db->query("select * from news where category_id = $item->id");


                                                    if ($news->num_rows > 0) {
                                                        while ($new = $news->fetch_object()) {
                                                            $n[] = $new;
                                                        }
                                                    }
                                                    foreach ($n as $items) { ?>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="single-what-news mb-100">
                                                                <div class="what-img">
                                                                    <img src="<?= $items->img ?>" alt="">
                                                                </div>
                                                                <div class="what-cap">
                                                                    <span class="color1"> <?= $items->hour ?></span>
                                                                    <h4><a href="/details.php?id=<?= $items->id ?>"><?= $items->title ?></a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <? } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   4 -->

        <!-- End Weekly-News -->
        <!-- Start Youtube -->

        <!-- End Start youtube -->
        <!--  5 -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">

                                <? foreach ($news2 as $item) { ?>

                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img width="370" height="250" src=" <?= $item->img ?> " alt="">
                                        </div>
                                        <div style="width: 296px !important; height: 164px !important;" class="what-cap">
                                            <span class="color1"> <?= $item->hour ?> </span>
                                            <h4><a href="/details.php?id=<?= $item->id ?>"> <?= $item->title ?> </a></h4>
                                        </div>
                                    </div>

                                <? } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->

        <!-- End pagination  -->
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
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
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
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
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
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
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