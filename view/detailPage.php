<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="<?php echo CSS_DIR ?>/detail-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
<body >
    <!-- Header -->
    <?php include __DIR__.'../menutopPage.php' ?>
    <div class="containerhaha">
        <h6 class="href">
            <a href="./homepage.php">Home/</a>
            <a href="#phone">Phone/</a>
            <a href="#phone">Apple (iPhone)</a>
        </h6>
        <h3 class="name-product" id="nameProduct"  ><?php echo $data["product_name"]; ?></h3>
        <hr>
    
        <div class="row">
            <div class="col-md-6" id="col6">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <img class="imgproduct" id="imgproduct" src="<?php echo IMG_DIR ?>/category-img/product/phone/<?php echo $data["image"]?>" />
                        <input type="text" value="<?php echo $data["image"]?> " class="d-none"  id="img-product-modal">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <ul class="info">
                    <li class="info-child">
                        <i class='fas fa-mobile-alt'></i>
                        <a href="#a" data-toggle="tooltip" data-placement="right" title="Screen" id="info-text">6.7", Super Retina XDR, OLED, 2778 x 1284 Pixel</a>
                    </li>
                     <li class="info-child">
                        <i class="material-icons">&#xe3af;</i>
                        <a href="#a" data-toggle="tooltip" data-placement="right" title="Camera ahead" id="info-text">12.0 MP + 12.0 MP + 12.0 MP</a>
                    </li>
                     <li class="info-child">
                        <i class="material-icons">&#xe3b1;</i>
                        <a href="#a" data-toggle="tooltip" data-placement="right" title="Camera below" id="info-text">12.0 MP</a>
                    </li>
                     <li class="info-child">
                        <i class='fas fa-microchip'></i>
                        <a href="#a" data-toggle="tooltip" data-placement="right" title="CPU" id="info-text">A14 Bionic</a>
                    </li>
                     <li class="info-child">
                        <i class='far fa-hdd'></i>
                        <a href="#a" data-toggle="tooltip" data-placement="right" title="HHD" id="info-text">128 GB</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <span class="price" id="price"><?php echo number_format($data["price"], 0, ',', '.') ; ?></span> <span class="price"> VND</span>
                    <hr>
                <!-- Trigger/Open The Modal -->
                <button type="button" name="btn" id="buynow"  class="btn-card"  data-toggle="modal" data-target="#myModal"  >Buy now</button>
                <input type="text" class="d-none idinput" value="<?php echo $data["id"] ?>" ?>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Your cart :</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="th">#</th>
                                    <th class="th">Image</th>
                                    <th class="th">Product</th>
                                    <th class="th">Quantity</th>
                                    <th class="th">Price</th>
                                    <th class="th">Action</th>
                                </tr>
                                </thead>
                                <tbody class="bodyModal">
                                <!-- <tr>
                                    <td><img id="imgproduct"> </td>
                                    <td id="nameProductModal"></td>
                                    <td><input class="amount" type="number" value="0" id="quantity" min="0" max="99" onchange="change_quantity()" ></td>
                                    <td id="priceModal">  </td>
                                    <td>VND</td>
                                    <td><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <h5 class="total">ToTal :</h5> <h5 class="totalPrice"></h5><h5>VND</h5>
                            <a href="<?php echo SITE_ROOT ?>/cart-page"><h3><button type="button" class="btn btn-warning">Go to cart</button></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buy-tragop">
                    <div class="buy-tragop1">
                        <span class="buy-now1">Installment 0%</span>
                        <span class="buy-now2">Quick browsing by phone</span>
                    </div>
                    <div class="buy-tragop2">
                        <span class="buy-now1">Installment via card</span>
                        <span class="buy-now2">Visa, Master Card, JCB</span>
                </div>
                </div>
                 <div class="phonenumber-nearshop">
                    <span>Call  -</span><span class="phonenumber">19000019  -</span><span>For a free consultation</span>
                    <a href="shop">Find the nearest store </a>
                </div>
                <div class="table">
                    
                    <a href="buy">Buy second hand: IPhone 12 pro max 128GB.....vv</a>
                    <span>Price from 24,134,000 VND</span>
                <div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>
</html>
<script src="<?php echo JS_DIR ?>/detail.js"></script> 

