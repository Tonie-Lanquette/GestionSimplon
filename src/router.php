<?php

use src\Controllers\HomeController;
use src\Services\Routing;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController;

$routeComposee = Routing::routeComposee($route);

switch ($route) {
    case HOME_URL:

        if (!$HomeController->login()) {
            $HomeController->index();
        } else {
            header("location:" . HOME_URL . "dashboard");
            die;
        };
        break;
}
