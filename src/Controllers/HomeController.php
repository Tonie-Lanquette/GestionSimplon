<?php

namespace src\Controllers;

use src\Models\Database;
use src\Models\User;
use src\Repositories\UserRepository;
use src\Services\Reponse;

class HomeController
{

    use Reponse;

    public function index(): void
    {
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }
        $this->render("login", ["erreur" => $erreur]);
    }

    public function login($email, $password)
    {
        $data = file_get_contents("php://input");
        $user = (json_decode($data, true));

        if (!empty($email && !empty($password))) {

            $obj = new User($user);
            $mail = $obj->getMail();

            if (isset($mail) && !empty($mail)) {
                $mail = htmlspecialchars($mail);
            }

            $password = $obj->getPassword();

            if (isset($password) && !empty($password)) {
                $password = hash("whirlpool", $password);
            }

            $DbConnexion = new Database();

            $UserRepository = new UserRepository($DbConnexion);


            if ($UserRepository->login($mail, $password)) {
                $_SESSION["connected"] = TRUE;
                $_SESSION["user"] = serialize($UserRepository->getThisUserByMail($mail));
                echo $_SESSION["user"];
                echo 'dashboard';

                header('location: ' . HOME_URL . 'dashboard');
                // die;
                // echo json_encode($_POST);
                // die();
            }
            // else {

            //     header('location: ' . HOME_URL . '?erreur=connexion');
            //     die();
            // }
        } else {
            echo json_encode("No data");
        }
    }

    public function pageDashboard(): void
    {
        $erreur = isset($_GET["erreur"]) ? $_GET["erreur"] : '';
        $user = unserialize($_SESSION['user']);
        $this->render("dashboard", ["section" => 'direction', "action" => "connexion"]);
    }

    public function page404(): void
    {

        header("HTTP/1.1 404 Not Found");
        $this->render('404');
    }

    public function quit()
    {
        session_destroy();
        header('location: ' . HOME_URL);
        die();
    }
}
