<?php
    require_once("./mvc/Bridge.php");
    // $myApp = new App();

    // Định nghĩa hằng Path của file index.php
    define('PATH_ROOT', __DIR__);

    // Autoload class trong PHP
    spl_autoload_register(function (string $class_name) {
        // print_r(include_once PATH_ROOT . '/' . $class_name . '.php');die();
        include_once PATH_ROOT . '/' . $class_name . '.php';
    });

    // load class Route
    $router = new Mvc\Core\Route();
    include_once PATH_ROOT . '/mvc/routes/web.php';

    // Lấy url hiện tại của trang web. Mặc định la /
    $request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

    // Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
    $method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

    // map URL
    $router->map($request_url, $method_url);
?>