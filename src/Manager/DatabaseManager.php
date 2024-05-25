<?php

namespace Src\Manager;

use PDO;
use PDOException;


// Connexion à la BDD 
class DatabaseManager{
    
    private PDO $connection;

// Utilisation d'un constructeur 
    public function __construct(){
    
        try {
            $host = "localhost";
            $databaseName = "moto_concession";
            $user = "root";
            $password = "";
            
            // parametres pour la connexion
            $this->connection = new PDO("mysql:host=" . $host . ";port=3306;dbname=" . $databaseName . ";charset=utf8", $user, $password);
            
            //connexion avec méthode privée 
            $this->configPdo();
    
        //Test Erreur
        } catch (PDOException $e) {
            //Ici nous affichons simplement le message d'erreur et coupons le code
            echo ("Erreur à la connexion : " .  $e->getMessage());
            exit();
        }
    }   

    private function configPdo(): void
    {
        // Recevoir les erreurs PDO ( coté SQL )
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Choisir les indices dans les fetchs
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    // Utilisation du get car connexion privée
    public function getConnection()
    {
        return $this->connection;
    }
    
}


