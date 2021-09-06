<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/homepage-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
<body>
    <!-- Header -->
    <?php include __DIR__.'../menutopPage.php' ?>
    <!-- Body_Main -->
    <div class = "container-fluid introduct-container">
        <img class="background-intro" src="/maneger_shop_basic1/static/img/homepage-img/slide/avenger.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <p style="cursor:default;" class="content-intro">
                    If you sincerely want to know, we are happy to answer.
                    To prevent the world from being destroyed, to protect world peace.
                    We represent villains, likable and ecstatic.
                    Musha - Kochiro
                    We are Rocket Squadron,
                    Protect the Milky Way,
                    A bright future is waiting for us.
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div id="introduct"></div>
        <div class="container" >
            <div class="row introduct-row" >
                <div class="col-md-4 introduct-card1">
                    <div class="header-intro-card1">
                        <img class="icon-header-intro" src="/maneger_shop_basic1/static/img/logo/chat-luong.png" alt="">
                    </div>
                    <div class="body-intro-card">
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  100% imported</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Original stamp</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  International standard</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Superior strength</span>
                        </div>
                    </div>
                    <div class="footer-intro-cart1">
                        <div class="iso-icon">
                            <img src="/maneger_shop_basic1/static/img/logo/chung-chi.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 introduct-card2">
                    <div class="header-intro-card1">
                        <img class="icon-header-intro" src="/maneger_shop_basic1/static/img/logo/shipped.png" alt="">
                    </div>
                    <div class="body-intro-card">
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Nationwide Delivery</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Check your order</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Check the delivery route</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Safe delivery</span>
                        </div>
                    </div>
                    <div class="footer-intro-cart1">
                        <div class="iso-icon">
                            <img class="transport-icon" src="/maneger_shop_basic1/static/img/logo/jt.png" alt="">
                            <img class="transport-icon" src="/maneger_shop_basic1/static/img/logo/ninjavan.png" alt="">
                            <img class="transport-icon"src="/maneger_shop_basic1/static/img/logo/viettel.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 introduct-card3">
                    <div class="header-intro-card1">
                        <img class="icon-header-intro" src="/maneger_shop_basic1/static/img/logo/support.png" alt="">
                    </div>
                    <div class="body-intro-card">
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  24/7 consultation</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Enthusiasm</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Return policy</span>
                        </div>
                        <div>
                            <i class="fa fa-check icon-body-intro"></i><span class="icon-body-intro">  Card payment</span>
                        </div>
                    </div>
                    <div class="footer-intro-cart1">
                        <div class="iso-icon">
                            <img class="card-icon" src="/maneger_shop_basic1/static/img/logo/unnamed.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="product">
        <!-- This is a lot of products -->
        <img class="banner1" src="<?php echo IMG_DIR ?>/homepage-img/banner/banner1.jpg" alt="banner1">
        <h2 id="title-phone"><a href="./category.php"> PHONE </a></h2>
        <div class="phone">
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/1.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Iphone 12 128Gb</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/2.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO 320</div>
                <div class="price_product">12.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/3.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung Note 10</div>
                <div class="price_product">9.900.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/4.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Nokia 1280</div>
                <div class="price_product">3.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/5.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO A37</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/6.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung 3D</div>
                <div class="price_product">32.000.000.000VND</div>
            </div>     
        </div>
        <a class="see_more" href="/maneger_shop_basic1/category-page/phone">Xem thêm</a>
        <img class="banner2" src="<?php echo IMG_DIR ?>/homepage-img/banner/banner2.jpg" alt="banner2">
        <img class="banner3" src="<?php echo IMG_DIR ?>/homepage-img/banner/banner3.jpg" alt="banner3">
        <h2 id="title-phone"><a href="#phone"> LAPTOP </a></h2>
        
        <div class="phone">
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop1.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Iphone 12 128Gb</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop2.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO 320</div>
                <div class="price_product">12.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop3.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung Note 10</div>
                <div class="price_product">9.900.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop4.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Nokia 1280</div>
                <div class="price_product">3.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop5.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO A37</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product img_laptop" src="<?php echo IMG_DIR ?>/category-img/product/phone/laptop6.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung 3D</div>
                <div class="price_product">32.000.000.000VND</div>
            </div>     
        </div>
        <a class="see_more" href="/maneger_shop_basic1/category-page/laptop">Xem thêm</a>
        <img class="banner1" src="<?php echo IMG_DIR ?>/homepage-img/banner/banner4.jpg" alt="banner4">
        <h2 id="title-phone"><a href="#phone"> TABLET </a></h2>
        <div class="phone">
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet1.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Iphone 12 128Gb</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet2.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO 320</div>
                <div class="price_product">12.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet3.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung Note 10</div>
                <div class="price_product">9.900.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet4.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Nokia 1280</div>
                <div class="price_product">3.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet5.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">OPPO A37</div>
                <div class="price_product">39.000.000.000VND</div>
            </div>
            <div class="card_product">
                <div class="header_card_product">
                    <img class="img_product" src="<?php echo IMG_DIR ?>/category-img/product/phone/tablet6.jpg" alt="phone">
                    <img class="logo_product" src="<?php echo IMG_DIR ?>/logo/logoupdate1.png" alt="logo">
                </div>
                <div class="name_product">Samsung 3D</div>
                <div class="price_product">32.000.000.000VND</div>
            </div>     
            
        </div>
        <a class="see_more" href="/maneger_shop_basic1/category-page/tablet">Xem thêm</a>
    </div>
    <div class="container-fluid all-item-new" id="news">
        <div class="row">
            <div class="col-md-3 new-card1">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new1.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card1">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new2.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card2">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new3.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card2">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new5.jpg"  alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 new-card1">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new8.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card1">
                <img class="img-news  " src="/maneger_shop_basic1/static/img/homepage-img/slide/new11.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card2">
                <img class="img-news "  src="/maneger_shop_basic1/static/img/homepage-img/slide/new10.jpg"  alt="">
            </div>
            <div class="col-md-3 new-card2">
                <img class="img-news" src="/maneger_shop_basic1/static/img/homepage-img/slide/new6.jpg"  alt="">
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>
</html>
<script>
    let user =  <?php echo isset($user) ? json_encode($user) : -1 ?>;
    if (user != -1) {
        localStorage.setItem("user", JSON.stringify(user));
        window.location.replace("/maneger_shop_basic1/home-page");
    }
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
    });

    $(window).scroll(function() {
        var hT = $('#introduct').offset().top,
        hH = $('#introduct').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
        if (wS > (hT+hH-wH)){
            $(".introduct-card1").attr('style','animation-name:introduct;animation-duration:2s;animation-fill-mode:forwards');
            $(".introduct-card2").attr('style','animation-name:introduct;animation-duration:3s;animation-fill-mode:forwards');
            $(".introduct-card3").attr('style','animation-name:introduct;animation-duration:4s;animation-fill-mode:forwards');
        }
    });
    $(window).scroll(function() {
        var hT = $('#news').offset().top,
        hH = $('#news').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
        if (wS > (hT+hH-wH)){
            $(".new-card1").attr('style','animation-name:news1;animation-duration:3s;animation-fill-mode:forwards');
            
            $(".new-card2").attr('style','animation-name:news2;animation-duration:3s;animation-fill-mode:forwards');
        }
    });
</script>
<script src="<?php echo JS_DIR ?>/homepage.js"></script>


