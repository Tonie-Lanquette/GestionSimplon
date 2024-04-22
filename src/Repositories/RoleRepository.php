<?php

namespace src\Repositories;

use src\Models\Database;

class RoleRepository{
    private $DB;

    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        require_once __DIR__ . '/../../config.php';
    }

    
}