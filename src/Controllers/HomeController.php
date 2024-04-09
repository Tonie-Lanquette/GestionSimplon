<?php

namespace src\Controllers;

use src\Services\Reponse;

class HomeController
{

    use Reponse;

    public function index(): void
    {
        $erreur = isset($_GET["erreur"]) ? $_GET["erreur"] : '';
        $this->render("login", ["erreur" => $erreur]);
    }

   

    public function page404(): void
    {

        header("HTTP/1.1 404 Not Found");
        $this->render('404');
    }
}
