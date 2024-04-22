<?php

namespace src\Repositories;

use src\Models\Database;
use src\Models\Promo;

class PromoRepository{
    private $DB;

    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        require_once __DIR__ . '/../../config.php';
    }

    public function createPromo (Promo $promo)
    {
        $sql = "INSERT INTO " . PREFIXE . "promo VALUES (NULL,?,?,?,?);";
        $statement = $this->DB->prepare($sql);
        $retour = $statement->execute([

            $promo->getEleves(),
            $promo->getNom(),
            $promo->getDebut(),
            $promo->getFin(),
        ]);
        return $retour;
    }
}
