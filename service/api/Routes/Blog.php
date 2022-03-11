<?php 
/*
|--------------------------------------------------------------------------
| API Route Blog
|--------------------------------------------------------------------------
*/
$router->get('/blog', 'BlogController@index');
$router->get('/blog/detail', 'BlogController@show');