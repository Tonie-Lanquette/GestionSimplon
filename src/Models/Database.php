<?php

namespace src\Models;

use PDO;
use PDOException;

final class Database
{
    private $DB;
    private $Config;

    public function __construct()
    {
        $this->Config = __DIR__ . '/../../config.php';
        require_once $this->Config;
        $this->ConnexionDB();
    }

    private function ConnexionDB()
    {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->DB = new PDO($dsn, DB_USER, DB_PWD);
        } catch (PDOException $error) {
            echo "Quelque chose s'est mal passé:" . $error->getMessage();
        }
    }

    public function getDB()
    {
        return $this->DB;
    }

    public function initializeDB(): string
    {
        if ($this->testIfTableExists()) {
            return "La base de données seble déjà remplie.";
            die();
        }

        try {
            $sql = file_get_contents(__DIR__ . "/../Migrations/gestionSimplon.sql");

            $this->DB->query($sql);

            if ($this->MajConfig()) {
                return "installation de la Base de Données terminée !";
                die();
            }
        } catch (PDOException $erreur) {
            return "impossible de remplir la Base de données : " . $erreur->getMessage();
            die();
        }
    }

    private function testIfTableExists(): bool
    {
        $existant = $this->DB->query(' SHOW TABLES FROM ' . DB_NAME . ' LIKE \'' . PREFIXE . 'user\'')->fetch();

        if (
            $existant !== false && $existant[0] ==
            PREFIXE . "user"
        ) {
            return true;
        } else {
            return false;
        }
    }

    private function MajConfig(): bool
    {
        $fconfig = fopen($this->Config, 'w');

        $contenu =
            "<?php
   
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'gestion_simplon');
  define('DB_USER', 'gestion_simplon');
  define('DB_PWD', 'password');
  define('PREFIXE', 'gestion_');
  define('HOME_URL', '/');
    
    
    define('DB_INITIALIZED', TRUE);";

        if (fwrite($fconfig, $contenu)) {
            fclose($fconfig);
            return true;
        } else {
            fclose($fconfig);
            return false;
        }
    }
}
