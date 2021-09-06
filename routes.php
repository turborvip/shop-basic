<?php

// action là callback
$router->get('/dashboard', 'HomeController@index');

$router->get('/danh-sach-san-pham', 'ProductController@listProduct');

$router->get('/them-moi-san-pham', 'ProductController@CreateProduct');

$router->get('/danh-sach-danh-muc', 'CategoryControler@listCategory');

$router->get('/them-moi-danh-muc', 'CategoryControler@creatCategory');

$router->get('/dashboard', 'HomeController@index');

$router->get('/doi-mat-khau', 'HomeController@changpass');

$router->post('/doi-mat-khau', 'HomeController@changpass_controller');

$router->get('/sua-tai-khoan-admin', 'HomeController@changacc');

$router->post('/sua-tai-khoan-admin', 'HomeController@changacc_controller');

$router->get('/permission', 'SystemController@permission');

$router->get('/menu', 'SystemController@menu');

$router->get('/danh-sach-tai-khoan', 'AccountController@listAccount');

$router->get('/them-moi-tai-khoan', 'AccountController@viewCreateAccount');

$router->get('/danh-sach-don-hang', 'AccountController@listOrder');


// signup-signin-signout

$router->get('/sign-up', 'SignUpSignInSignOutController@signUp');

$router->get('/sign-in', 'SignUpSignInSignOutController@signIn');

$router->post('/register-user', 'SignUpSignInSignOutController@registerUser');

$router->post('/login', 'SignUpSignInSignOutController@loginUser');

$router->get('/sign-out', 'SignUpSignInSignOutController@signOut');

//page-view
$router->get('/home-page', 'ViewClientController@homePage');

$router->get('/category-page', 'ViewClientController@indexCategory');

$router->get('/category-page/phone', 'ViewClientController@indexCategoryPhone');

$router->get('/category-page/laptop', 'ViewClientController@indexCategoryLaptop');

$router->get('/category-page/tablet', 'ViewClientController@indexCategoryTablet');

$router->get('/detail-page', 'ViewClientController@detailPage');

$router->post('/detail-page/detail-product', 'ViewClientController@indexDetail');

$router->get('/login-page', 'ViewClientController@loginPage');

$router->post('/logincontroller-page', 'ViewClientController@controllerLogin');

$router->get('/cart-page', 'ViewClientController@cartPage');

$router->get('/payment-page', 'ViewClientController@paymentPage');

$router->post('/complete-page', 'ViewClientController@completePage');

$router->get('/complete-page', 'ViewClientController@completePage1');

$router->post('/completecontroller', 'ViewClientController@controllerCompletePage');

$router->post('/complete-page/cancel', 'ViewClientController@delete_OrderPage');

$router->post('/complete-page/received', 'ViewClientController@received_order');

$router->get('/signout-page', 'ViewClientController@signOut');

$router->get('/account-page', 'ViewClientController@accountPage');

$router->post('/account-page/save', 'ViewClientController@accountPageController');

$router->post('/account-page/changepass', 'ViewClientController@changePass');

$router->get('/account-page/change-password', 'ViewClientController@changePassPage');

$router->post('/menutopPage', 'ViewClientController@menutopPageController');

$router->get('/account-page/order-completed', 'ViewClientController@orderCompletedPage');

$router->post('/account-page/order-completed', 'ViewClientController@orderCompleted');

$router->post('/payment-page/choose-province', 'ViewClientController@choose_province');

$router->post('/payment-page/choose-district', 'ViewClientController@choose_district');

$router->post('/payment-page/choose-ward', 'ViewClientController@choose_ward');


// category
$router->get('/danh-muc', 'CategoryControler@index');

$router->get('/danh-muc/tao-moi', 'CategoryControler@viewCreateCategory');

$router->post('/danh-muc/tao-moi/luu', 'CategoryControler@CreateCategory');

$router->get('/danh-muc/sua/{id}', 'CategoryControler@viewChangeCategory');

$router->post('/danh-muc/sua/luu', 'CategoryControler@controllerChangeCategory');

$router->post('/danh-muc/tim-kiem', 'CategoryControler@search_category');

$router->get('/danh-muc/xoa/{id}', 'CategoryControler@delete_category');

//Product
$router->get('/san-pham', 'ProductController@index');

$router->get('/san-pham/xoa/{id}', 'ProductController@delete_Product');

$router->get('/san-pham/sua/{id}', 'ProductController@view_change_Product');

$router->post('/san-pham/sua/luu', 'ProductController@change_Product');

$router->get('/san-pham/tao-moi', 'ProductController@viewCreateProduct');

$router->post('/san-pham/tao-moi/luu', 'ProductController@CreateProduct');

$router->post('/san-pham/tim-kiem', 'ProductController@search_product');

//Order
$router->get('/don-hang', 'OrderController@index');

$router->get('/don-hang/chi-tiet/{id}', 'OrderController@detailorder');

$router->get('/don-hang/xu-ly/{id}', 'OrderController@complete_order');

$router->get('/don-hang/xoa/{id}', 'OrderController@delete_order');

$router->post('/don-hang/tim-kiem', 'OrderController@search_order');



//Account
$router->get('/tai-khoan', 'AccountController@index');

$router->get('/tai-khoan/tao-moi', 'AccountController@viewCreateAccount');

$router->post('/tai-khoan/tao-moi/luu', 'AccountController@createAccount');

$router->get('/tai-khoan/xoa/{id}', 'AccountController@delete_Account');

$router->post('/tai-khoan/tim-kiem', 'AccountController@search_account');




