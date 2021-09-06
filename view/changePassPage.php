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
                        <a class="text_user" href="/maneger_shop_basic1/account-page/change-password">My account</a>
                        <li class="li_user"><a href="/maneger_shop_basic1/account-page" class="text_profile" >Profile</a></li>
                        <li class="li_user"><a href="/maneger_shop_basic1/account-page/change-password" class="change_password" >Change password</a></li>
                    </ul>
                    <ul class="order_complete">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/order_complete.png" alt="">
                        <a class="text_order_complete" href="/maneger_shop_basic1//account-page/order-completed">Order completed</a>
                    </ul>
                    <ul class="order_complete">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/order_controller.png" alt="">
                        <a class="text_order_complete" href="/maneger_shop_basic1/complete-page">Order controller</a>
                    </ul>
                </div>
            </div>
            <div class="right_profile">
                <div class="all-about-changepass">
                    <form class="form-change-pass" method="post" action="/maneger_shop_basic1/account-page/changepass">
                        <h6 class="note">(* New password must be more than 6 characters)</h6>
                        <h6 style="color:red"><?php if(isset($err)){ echo $err ;}?></h6>
                        <span class="errpass" ></span>
                        <input type="number" id="id" name="id" class="d-none" value="">
                        <input type="text" name="username" class="d-none" id="username" value="">
                        <input type="password" class="old-pass" name="old-pass" placeholder="Your password">
                        <input type="password" class="new-pass1" name="new-pass1" placeholder="New password">
                        <input type="password" class="new-pass2" name="new-pass2" placeholder="Re-enter new password">
                        <div class="footer_profile">
                            <button class="btn btn-success save_password">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Footer -->
    <?php include __DIR__.'../footerPage.php' ?>
</body>

<script src="<?php echo JS_DIR ?>/account-page.js"></script>

</html>
