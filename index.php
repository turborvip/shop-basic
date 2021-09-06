<?php

// include_once './database/DB.php';

// $db = new DB();
// var_dump($db);

// $db->query("INSERT INTO banner (title, sologan, image) VALUES ('tieu de', 'sologan ', 'image')");


// Định nghĩa hằng Path của file index.php
define('PATH_ROOT', __DIR__);
define('SITE_ROOT', 'http://localhost/maneger_shop_basic1');
define('CSS_DIR', SITE_ROOT . '/static/css/');
define('JS_DIR', SITE_ROOT . '/static/js');
define('IMG_DIR', SITE_ROOT . '/static/img');

// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . '\\' . $class_name . '.php';
});

// load class Route
$router = new Core\Http\Route();
include_once PATH_ROOT . './routes.php';
// var_dump($router);
// die;

// Lấy url hiện tại của trang web. Mặc định la /
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// map URL
$router->map($request_url, $method_url);
