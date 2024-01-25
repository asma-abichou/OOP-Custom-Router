<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\Router;

$router = new Router();

$router->get('/' , function(){
    echo 'Home Page ';
});
$router->get('/about' , function(){
    echo 'About Page ';
});
$router->run();