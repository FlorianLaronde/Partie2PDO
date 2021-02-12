<?php

class Database {
    public static function connect() {

// include(dirname(__FILE__).'/config.php');
    $dsn = 'mysql:host=localhost;dbname=hospitale2n';
    $login = 'root';
    $password = '';
    // $login = 'user_hospitale2n';
    // $password = 'PjgOLvantERp1Gsl';

        try{
            $pdo = new PDO($dsn, $login, $password);
            // Permet de fournir des informations complémentaires lors de la capture des exceptions avec try Catch
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Permet de délivrer un jeu de résultats sous forme d'objet.
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
        echo 'erreur de connexion à la BDD : '. $e->getMessage();
        }

            return $pdo;
        }
    
}

?>