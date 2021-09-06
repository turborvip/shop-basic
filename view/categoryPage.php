<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/category-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    
    
</head>
<body>
    <!-- Header -->
    <?php include __DIR__.'../menutopPage.php' ?>
    <!-- Body_Main -->
    <div class= container1>
        <h6 class="href">
            <a href="./homepage.php">Home/</a>
            <a href="#phone">Phone</a>
        </h6>
        
        <!-- The slideshow -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
            </ul>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide1.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide2.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide3.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide4.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide5.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                <img src="<?php echo IMG_DIR ?>/category-img/slideshow/phone/slide6.jpg" alt="Los Angeles" >
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        
        <div class="row" id="row-container">
            <div class="col-md-4">
                <div class="brand">
                    <legend>Brand</legend>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6" >
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
                                    <label class="custom-control-label" for="customCheck1">All</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                                    <label class="custom-control-label" for="customCheck2">Samsung</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
                                    <label class="custom-control-label" for="customCheck3">Xiaomi</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
                                    <label class="custom-control-label" for="customCheck4">Realme</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="example1">
                                    <label class="custom-control-label" for="customCheck5">Nokia</label>
                                </div>
                                
                            </div>
                            <div class="col-6" >
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="example1">
                                    <label class="custom-control-label" for="customCheck6">Apple (iPhone)</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="example1">
                                    <label class="custom-control-label" for="customCheck7">OPPO</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="example1">
                                    <label class="custom-control-label" for="customCheck8">Vivo</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="example1">
                                    <label class="custom-control-label" for="customCheck9">Vsmart</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="example1">
                                    <label class="custom-control-label" for="customCheck10">Masstel</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="price-col4">
                    <legend>Price</legend>
                    <form action="" method="post">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="example1">
                            <label class="custom-control-label" for="customCheck11">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="example1">
                            <label class="custom-control-label" for="customCheck12">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="example1">
                            <label class="custom-control-label" for="customCheck13">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14" name="example1">
                            <label class="custom-control-label" for="customCheck14">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck15" name="example1">
                            <label class="custom-control-label" for="customCheck15">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck16" name="example1">
                            <label class="custom-control-label" for="customCheck16">All</label>
                        </div>
                    </form>
                </div>
            
                <div class="special-col4">
                     <legend>Special Features</legend>
                    <form action="" method="post">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck17" name="example1">
                            <label class="custom-control-label" for="customCheck17">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck18" name="example1">
                            <label class="custom-control-label" for="customCheck18">Fingerprint security</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck19" name="example1">
                            <label class="custom-control-label" for="customCheck19">Face recognition</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck20" name="example1">
                            <label class="custom-control-label" for="customCheck20">Water & dust resistant</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck21" name="example1">
                            <label class="custom-control-label" for="customCheck21">Fast charging</label>
                        </div>
                    </form>
                </div>

                <div class="PIN-col4">
                     <legend>Battery Capacity</legend>
                    <form action="" method="post">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck22" name="example1">
                            <label class="custom-control-label" for="customCheck22">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck23" name="example1">
                            <label class="custom-control-label" for="customCheck23">Below 3000 mah</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck24" name="example1">
                            <label class="custom-control-label" for="customCheck24">From 3000 - 4000 mah</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck25" name="example1">
                            <label class="custom-control-label" for="customCheck25">Siêu trâu: trên 4000 mah</label>
                        </div>
                    </form>
                </div>

                 <div class="screen">
                     <legend>Battery Capacity</legend>
                    <form action="" method="post">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck26" name="example1">
                            <label class="custom-control-label" for="customCheck26">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck27" name="example1">
                            <label class="custom-control-label" for="customCheck27">Small screen: less than 5.0 inch</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck28" name="example1">
                            <label class="custom-control-label" for="customCheck28">Less than 6.0 inches, overflowing</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck29" name="example1">
                            <label class="custom-control-label" for="customCheck29">Over 6.0 inches</label>
                        </div>
                    </form>
                </div>

                 <div class="camera">
                     <legend>Camera</legend>
                    <form action="" method="post">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck30" name="example1">
                            <label class="custom-control-label" for="customCheck30">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck32" name="example1">
                            <label class="custom-control-label" for="customCheck32">Slow motion</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck34" name="example1">
                            <label class="custom-control-label" for="customCheck34">Ai camera</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck35" name="example1">
                            <label class="custom-control-label" for="customCheck35">3D</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck36" name="example1">
                            <label class="custom-control-label" for="customCheck36">Beauty camera</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck37" name="example1">
                            <label class="custom-control-label" for="customCheck37">Zoom optics</label>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-8">
                <h2>ALL </h2> <span>: 499 products</span>
                 <!-- Swiper -->
                <!-- <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/1.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/3.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/4.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/5.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/6.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/7.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/8.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand" src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/9.jpg" alt=""></div>
                        <div class="swiper-slide"><img  class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/1.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/2.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/3.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/4.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/5.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/6.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/7.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/8.jpg" alt=""></div>
                        <div class="swiper-slide"><img class="icon-brand"src="<?php echo IMG_DIR ?>/category-img/banner-brand/phone/9.jpg" alt=""></div>
                    </div>
                </div>
                end swiper -->
                    <div class="seclect-product" id="selectproduct" >
                        <?php 
                            // print("<pre>".print_r($data,true)."</pre>");die;
                            if (isset($data) && count($data)) {
                                    for ($i = 0; $i < count($data); $i++) {
                                    
                        ?>
                            <div class="row-child">
                                <div class="col-4-child" >
                                    <form method="post" action="<?php echo SITE_ROOT; ?>/detail-page/detail-product">
                                        <select name="id" class="seclecthidden">
                                            <option><?php echo $data[$i]["id"]; ?></option>
                                        </select>
                                        <div class="cart-top">
                                            <a href="">
                                                <div class="border-product">
                                                    <button class="btn"><img class="img-product" src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data[$i]["image"]?>" alt="phone"></img></button>
                                                    <img class="logo-product" src="<?php echo IMG_DIR ?>/logo/logo-nosloganblack.png"></img>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cart-content">
                                            <a class="name-product" name="name-product" id="nameproduct"href=""><?php echo $data[$i]["product_name"]; ?></a>
                                            <h5 class="price-product" id="price">
                                                <?php
                                                    $a = number_format($data[$i]["price"], 0, ',', '.') ;
                                                    echo $a.$data[$i]["unit"];
                                                    
                                                ?>
                                            </h5>
                                        </div>
                                        <div>
                                            <i class='fas fa-microchip'></i><span> A14 </span>
                                            <i class='fas fa-mobile-alt'></i><span> 6.7"</span>
                                            <i class='far fa-hdd'></i><span> 128 </span>
                                            <i class='fas fa-memory'></i><span> 6GB</span>
                                        </div>
                                        <div class="card-buttom" id="cardbuttom">
                                            <hr>
                                            <button type="button" class="btn btn-danger btn-card <?php echo $i; ?>" data-id="<?php echo $data[$i]["id"] ?>" data-toggle="modal"  data-target="#myModal"  >Add to cart</button>
                                        </div>
                                    </form>  
                                    <input type="text" class="d-none img-<?php echo $data[$i]["id"] ?>" value="<?php echo $data[$i]["image"]  ?>">
                                    <input type="text" class="d-none productName-<?php echo $data[$i]["id"] ?>" value="<?php echo $data[$i]["product_name"]  ?>">
                                    <input type="text" class="d-none priceProduct-<?php echo $data[$i]["id"] ?>" value="<?php echo $data[$i]["price"]  ?>">
                                </div>       
                            </div>   
                        <?php 
                                }
                            } 
                        ?>
                    </div>   

                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header" id="modal-header">
                                <h4 class="modal-title">Your cart :</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="th">#</th>
                                            <th class="th">Product</th>
                                            <th class="th">Name product</th>
                                            <th class="th">Quantity</th>
                                            <th class="th">Price</th>
                                            <th class="th">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="bodyModal">
                                        <!-- <tr>
                                            <td></td>
                                            <td><img src="/category-img/product/phone/" alt=""></td>
                                            <td id="nameProductModal"></td>
                                            <td><input class="amount" type="number" value="1" id="quantity" min="0" max="99"  ></td>
                                            <td id="priceProductModal">  </td>
                                            <td>VND</td>
                                            <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                        </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <h5 class="total">ToTal :</h5> <h5 class="totalPrice"></h5><h5> VND</h5>
                                    <a href="<?php echo SITE_ROOT ?>/cart-page"><h3><button type="button" class="btn btn-warning">Go to cart</button></h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                <div class="pagination">
                        <a href="?page=<?php echo 1; ?>">&laquo;</a>
                        <?php if (isset($pages)) {
                                for ($i = 1; $i <= $pages; $i++) {
                         ?>
                         <?php ?>
                        
                        <a href="?page=<?php echo $i; ?>" class= "<?php  
                            $page = count(explode('?', $_SERVER['REQUEST_URI'], 2)) > 1 ? (int) explode("=", explode('?', $_SERVER['REQUEST_URI'], 2)[1])[1] : 1;
                            if ($page == $i) { echo "active"; }
                        ?>">
                        <?php echo $i; ?></a>
                        <!-- <a href="#" class="active">2</a> -->
                        
                        <?php 
                                }
                            }
                        ?>
                        <a href="?page=<?php echo $pages; ?>">&raquo;</a>
                    </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>
</html>
<script src="<?php echo JS_DIR ?>/categorypage.js"></script>


 
