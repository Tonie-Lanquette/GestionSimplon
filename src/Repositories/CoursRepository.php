<?php

namespace src\Repositories;

use src\Models\Cours;
use src\Models\Database;

class CoursRepository{
    private $DB;

    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        require_once __DIR__ . '/../../config.php';
    }

    public function createPromo(Cours $cours)
    {
        $sql = "INSERT INTO " . PREFIXE . "cours VALUES (NULL,?,?,?,?,?);";
        $statement = $this->DB->prepare($sql);
        $retour = $statement->execute([

            $cours->getNom(),
            $cours->getDebut(),
            $cours->getFin(),
            $cours->getCode(),
            $cours->getIdPromo(),
        ]);
        return $retour;
    }
}
