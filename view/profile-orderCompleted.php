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
<body class="body_profile">
    <!-- Header -->
    <?php include __DIR__.'../menutopPage.php' ?>
    <!-- Body_Main -->
        <div class="container_profile">
            <div class="menu_left_profile">
                <div class="header_menu">
                    <div class="left_header avartar-img">
                        <label for="image" style="cursor:pointer;width:fit-content;">
                            <img style="width:80px" src="/maneger_shop_basic1/static/img/logo/add-img2.png" >
                        </label>
                    </div>
                    <div class="right_header">
                        <div class="username_profile"></div>
                        <div class="change_file">
                            <img class="icon_pencil" src="/maneger_shop_basic1/static/img/logo/pencil.png" >
                            <span class="text_change_profile">Change profile</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="body_menu">
                    <ul class="my_account">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/user.png" alt="">
                        <a class="text_user" href="/maneger_shop_basic1/account-page">My account</a>
                        <li class="li_user"><a href="/maneger_shop_basic1/account-page" class="text_profile" >Profile</a></li>
                        <li class="li_user"><a href="/maneger_shop_basic1/account-page/change-password" class="change_password" >Change password</a></li>
                    </ul>
                    <ul class="order_complete">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/order_complete.png" alt="">
                        <a class="text_order_complete" href="#">Order completed</a>
                    </ul>
                    <ul class="order_complete">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/order_controller.png" alt="">
                        <a class="text_order_complete" href="/maneger_shop_basic1/complete-page">Order controller</a>
                    </ul>
                </div>
            </div>
            <div class="right_profile">
                <div class="history-order-completed">
                    <div class="header_right_profile">
                        <h5>My history</h5>
                        <h6>The more you accumulate, the bigger the discount.</h6>
                        <hr>
                    </div>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="th">#</th>
                                <th class="th">Product</th>
                                <th class="th">Name product</th>
                                <th class="th">Quantity</th>
                                <th class="th">Price</th>
                            </tr>
                            </thead>
                            <tbody class="bodyCart">
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
                </div>
            </div>
        </div>
    <!-- Footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>

<script src="<?php echo JS_DIR ?>/account-page.js"></script>
<script>
        var dataCard = JSON.parse(localStorage.getItem("orderHistory"))  ;
        console.log(dataCard);
        var HTMLListItem = '';
        for (var i = 0; i < dataCard.length; i++) {
            var item = dataCard[i];
            var html = "";
            html += '<tr class="parent">'
            html += '<td>' + (i + 1) + '</td>'
            html += '<td><img id="imgModal" src="/maneger_shop_basic1/static/img/category-img/product/phone/' + item.image + '" alt=""></td>'
            html += '<td id="nameProductModal">' + item.product_name + '</td>'
            html += '<td >' + item.quantity + '</td>'
            html += '<td id="priceProductModal" class="priceModal"> ' + parseInt(item.price).toLocaleString('VND', { style: 'currency', currency: 'vnd' }) + ' </td>'
            html += '</tr>'
            var htmlItem = html;
            var HTMLListItem = HTMLListItem + htmlItem;
        }
        $(".bodyCart").html(HTMLListItem);
    
</script>
</html>