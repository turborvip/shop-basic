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
                        <a class="text_order_complete" href="/maneger_shop_basic1/account-page/order-completed">Order completed</a>
                    </ul>
                    <ul class="order_complete">
                        <img class="icon_user_menuleft" src="/maneger_shop_basic1/static/img/logo/order_controller.png" alt="">
                        <a class="text_order_complete" href="/maneger_shop_basic1/complete-page">Order controller</a>
                    </ul>
                </div>
            </div>
            <div class="right_profile">
                <div class="all-about-profile">
                    <div class="header_right_profile">
                        <h5>My Profile</h5>
                        <h6>Manage profile information for account security.</h6>
                        <hr>
                    </div>
                    <form action="/maneger_shop_basic1/account-page/save" method="post">
                        <div class="body_right_profile">
                            <div class="left_body">
                                <div class="information">
                                    <div><label for="username">User :</label></div>
                                    <div><label for="fullname">Fullname :</label></div>
                                    <div><label for="email">Email :</label></div>
                                    <div><label for="address">Address :</label></div>
                                    <div><label for="phonenumber">Phonenumber :</label></div>
                                </div>
                                <div class="all_input">
                                    <input type="text" name="username" id="username" value="">
                                    <input type="text" name="fullname" id="fullname" value="">
                                    <input type="text" name="email" id="email" value="">
                                    <input type="text" name="address" id="address" value="">
                                    <input type="text" name="phonenumber" id="phonenumber" value="">
                                </div>
                                <div class="information2">
                                    <label class="label2" for="gender">Gender :</label>
                                    <select name="gender" id="gender">
                                        <option id="gender" ></option>
                                        <option >Male</option>
                                        <option >Female</option>
                                        <option >LGPT</option>
                                    </select>
                                    <div class="birthday_input">
                                        <label class="label3"  for="date">Birthday :</label>
                                        <input type="date" name="birthday" id="date" value="">
                                    </div>
                                </div>
                                <div class="footer_profile">
                                    <button class="btn btn-success save_profile">SAVE</button>
                                </div>
                            </div>
                            <div class="right_body">
                                <div class="hr"></div>
                                <div class="change_avatar">
                                    <div class="border_avatar">
                                        <div class="change_avatar_2">
                                            <label class="lable-avartar2" for="image2" style="cursor:pointer;width:fit-content;">
                                                <img style="width:155px" src="/maneger_shop_basic1/static/img/logo/add-img2.png" >
                                            </label>
                                        </div>
                                    </div>
                                    <label class="lableimg"  style="cursor:pointer" for="image2">Click to update avatar</label>
                                    <input type="file" id="image2" name="image" class="d-none" value="">
                                    <input type="number" id="id" name="id" class="d-none" value="">
                                </div>
                            </div>
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