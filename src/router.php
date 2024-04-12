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
            echo "vous n'êtes pas connecté";
            die;
        } else {
            header("location:" . HOME_URL . "dashboard");
            die;
        };
        break;

    case HOME_URL . 'login':

        if ($HomeController->login()) {
            header("location:" . HOME_URL . "dashboard");
            die;
        } else {
            header("location:" . HOME_URL . "erreur=connexion");
            die;
        };
        break;

    case HOME_URL . 'dashboard':
        $HomeController->pageDashboard();
        break;

        
}
