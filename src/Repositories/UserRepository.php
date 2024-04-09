<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\User;

class UserRepository
{

    private $DB;

    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        require_once __DIR__ . '/../../config.php';
    }

    public function createUser(User $user)
    {
        $password = hash("whirlpool", $user->getPassword());
        $sql = "INSERT INTO " . PREFIXE . "simplon VALUES (NULL,?,?,?,?);";
        $statement = $this->DB->prepare($sql);
        $retour = $statement->execute([
            $password,
            $user->getNom(),
            $user->getPrenom(),
            $user->getPassword(),
            $user->getMail(),
        ]);
        return $retour;
    }

    public function getAllUser(): array
    {
        $sql = "SELECT * FROM " . PREFIXE . "user;";
        $statement = $this->DB->prepare($sql);
        $statement->execute();
        $retour = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
        return $retour;
    }

    public function getThisUserById(int $id): User
    {
        $sql = "SELECT * FROM " . PREFIXE . "user WHERE id_user = :id;";
        $statement = $this->DB->prepare($sql);
        $statement->execute([
            ":id" => $id
        ]);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $retour = $statement->fetch();
        return $retour;
    }

    public function getThisUserByMail(string $mail): User|bool
    {
        $sql = "SELECT * FROM " . PREFIXE . "user WHERE mail = :mail;";
        $statement = $this->DB->prepare($sql);
        $statement->execute([
            ":mail" => $mail
        ]);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $retour = $statement->fetch();
        return $retour;
    }
}
