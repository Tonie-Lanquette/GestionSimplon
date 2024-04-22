<?php

use src\Controllers\HomeController;
use src\Services\Routing;



$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController;
$routeComposee = Routing::routeComposee($route);

switch ($route) {
    case HOME_URL:

        // if (!$HomeController->login()) {
            $HomeController->index();
        // } else {
        //     header("location:" . HOME_URL . "dashboard");
        // };
        // break;

    case HOME_URL . 'login':
        if ($methode === "POST") {
            $data = file_get_contents("php://input");
            $user = json_decode($data, true);

            $email = htmlspecialchars(strip_tags(trim($user["Mail"])));
            $password = htmlspecialchars(strip_tags(trim($user["Password"])));
            $HomeController->login($email, $password);
            // mes ajouts

            echo json_encode($HomeController);

            // echo 'dashboard';
        }
        break;

    case HOME_URL . 'dashboard':
        $HomeController->pageDashboard();
        break;
}
