<?php

use src\Controllers\HomeController;
use src\Services\Routing;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController;

$routeComposee = Routing::routeComposee($route);

var_dump($routeComposee);
switch ($route) {
    case HOME_URL:

        header("location:" . HOME_URL . "Dashboard.php");
        die;
}
