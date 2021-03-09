<?php 

// action là callback
// $router->get('/', function(){
//     echo 'home';
// });

// Frontend
$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->get('/product', 'HomeController@product');
$router->get('/service', 'HomeController@service');
$router->get('/pricing', 'HomeController@pricing');
$router->get('/contact', 'HomeController@contact');

// Auth
$router->get('/login', 'Be\Auth\LoginController@index');
$router->post('/login', 'Be\Auth\LoginController@login');
$router->post('/logout', 'Be\Auth\LoginController@logout');


// Dashboard
$router->get('/admin', 'Be\DashboardController@index');

// Media
$router->get('/admin/media', 'Be\GeneralController@media');

// Product Type
$router->get('/admin/product-type', 'Be\ProductTypeController@index');
$router->get('/admin/product-type/list', 'Be\ProductTypeController@list');
$router->post('/admin/product-type/store', 'Be\ProductTypeController@store');
$router->post('/admin/product-type/update', 'Be\ProductTypeController@update');
$router->post('/admin/product-type/change-publish', 'Be\ProductTypeController@updatePublish');
$router->post('/admin/product-type/delete', 'Be\ProductTypeController@delete');

// Product
$router->get('/admin/product', 'Be\ProductController@index');
$router->get('/admin/product/list', 'Be\ProductController@list');
$router->post('/admin/product/store', 'Be\ProductController@store');
$router->post('/admin/product/update', 'Be\ProductController@update');
$router->post('/admin/product/change-publish', 'Be\ProductController@updatePublish');
$router->post('/admin/product/change-highlight', 'Be\ProductController@updateHighlight');
$router->post('/admin/product/delete', 'Be\ProductController@delete');

// News Type
$router->get('/admin/news-type', 'Be\NewsTypeController@index');
$router->get('/admin/news-type/list', 'Be\NewsTypeController@list');
$router->post('/admin/news-type/store', 'Be\NewsTypeController@store');
$router->post('/admin/news-type/update', 'Be\NewsTypeController@update');
$router->post('/admin/news-type/change-publish', 'Be\NewsTypeController@updatePublish');
$router->post('/admin/news-type/delete', 'Be\NewsTypeController@delete');

// News
$router->get('/admin/news', 'Be\NewsController@index');
$router->get('/admin/news/list', 'Be\NewsController@list');
$router->post('/admin/news/store', 'Be\NewsController@store');
$router->post('/admin/news/update', 'Be\NewsController@update');
$router->post('/admin/news/change-publish', 'Be\NewsController@updatePublish');
$router->post('/admin/news/change-highlight', 'Be\NewsController@updateHighlight');
$router->post('/admin/news/delete', 'Be\NewsController@delete');

// Role
$router->get('/admin/role', 'Be\RoleController@index');
$router->get('/admin/role/list', 'Be\RoleController@list');
$router->post('/admin/role/store', 'Be\RoleController@store');
$router->post('/admin/role/update', 'Be\RoleController@update');
$router->post('/admin/role/change-publish', 'Be\RoleController@updatePublish');
$router->post('/admin/role/delete', 'Be\RoleController@delete');

// User
$router->get('/admin/user', 'Be\UserController@index');
$router->get('/admin/user/list', 'Be\UserController@list');
$router->post('/admin/user/store', 'Be\UserController@store');
$router->post('/admin/user/update', 'Be\UserController@update');
$router->post('/admin/user/change-publish', 'Be\UserController@updatePublish');
$router->post('/admin/user/delete', 'Be\UserController@delete');
$router->post('/admin/user/check_email', 'Be\UserController@check_email');

// Slide
$router->get('/admin/slide', 'Be\SlideController@index');
$router->get('/admin/slide/list', 'Be\SlideController@list');
$router->post('/admin/slide/store', 'Be\SlideController@store');
$router->post('/admin/slide/update', 'Be\SlideController@update');
$router->post('/admin/slide/change-publish', 'Be\SlideController@updatePublish');
$router->post('/admin/slide/delete', 'Be\SlideController@delete');
$router->post('/admin/slide/update-sort-order', 'Be\SlideController@updateSortOrder');