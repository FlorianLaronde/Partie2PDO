<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

// Classe au singulier et avec majuscule, pareil pour nommer le fichier
class Patient {

    // attribut privée donc _
    private $_name;
    private $_firstName;
    private $_birthDate;
    private $_phone;
    private $_mail;
    private $_pdo;

    // méthode magique (start avec __) = appellé de manière automatique
    public function __construct($name = NULL, $firstName = NULL, $birthDate = NULL, $phone = NULL, $mail = NULL) {
        $this->_name = $name;
        $this->_firstName = $firstName;
        $this->_birthDate = $birthDate;
        $this->_phone = $phone;
        $this->_mail = $mail;
        $this->_pdo = Database::connect();
    }

    // méthode = fonction à l'intérieur d'une classe
    public function addPatient() {

        try {
            $sql1 = "INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
            VALUES (:name, :firstName, :birthDate, :phone, :mail)";
    
            // Prépare une requête à l'exécution et retourne un objet
            $stmt = $this->_pdo->prepare($sql1);
            // Associe une valeur à un paramètre
            $stmt -> bindValue (':name', $this->_name, PDO::PARAM_STR);
            $stmt -> bindValue (':firstName', $this->_firstName, PDO::PARAM_STR);
            $stmt -> bindValue (':birthDate', $this->_birthDate, PDO::PARAM_STR);
            $stmt -> bindValue (':phone', $this->_phone, PDO::PARAM_STR);
            $stmt -> bindValue (':mail', $this->_mail, PDO::PARAM_STR);
    
            // Exécute une requête préparée
           return( $stmt ->execute());


        } catch (PDOException $e) {
            return false;
        }
   
    }


    public function patientList() {
            $sql = "SELECT * FROM `patients`";
            $sth = $this->_pdo->query($sql);
            // Retourne un tableau contenant toutes les lignes du jeu d'enregistrements
            $patients = $sth->fetchAll();
            return $patients;

    }
}

?>