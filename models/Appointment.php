<?php

require_once(dirname(__FILE__).'/../utils/Database.php');

// Classe au singulier et avec majuscule, pareil pour nommer le fichier
class Appointment {

    // attribut privée donc _
    // private $_id;
    private $_dateHour;
    private $_idPatients;
    private $_pdo;

    // méthode magique (start avec __) = appellé de manière automatique
    // méthode = fonction dans une classe
    public function __construct($dateHour = NULL, $idPatients = NULL) {

        // $this->_id = $id;
        $this->_dateHour = $dateHour;
        $this->_idPatients = $idPatients;
        $this->_pdo = Database::connect();
        
    }


    // Création d'un rendez-vous
    public function createAppointment() {
        try {
            $sql1 = "INSERT INTO `appointments` (`dateHour`, `idPatients`)
            VALUES (:dateHour, :idPatients)";
    
            // Prépare une requête à l'exécution et retourne un objet
            $stmt = $this->_pdo->prepare($sql1);
            // Associe une valeur à un paramètre (marqueur nominatif)
            $stmt -> bindValue (':dateHour', $this->_dateHour, PDO::PARAM_STR);
            $stmt -> bindValue (':idPatients', $this->_idPatients, PDO::PARAM_STR);
    
            // Exécute une requête préparée
           return($stmt ->execute());


        } catch (PDOException $e) {

            return false;
        }
    }


    // Liste des rendez-vous des patients
    public function appointmentList() {
        try {
            $sql2 = "SELECT * FROM `appointments`";

            $sth = $this->_pdo->query($sql2);

            // Retourne un tableau contenant toutes les lignes du jeu d'enregistrements
            $appointments = $sth->fetchAll();
            return $appointments;

        } catch (PDOException $e) {

            echo 'La requête a échouée: '.$e->getMessage();
        }
    }


      // Méthode qui affiche le(s) rende-vous de chaque patient
      public function appointmentPatient($id) {

        try {
            $sql3 = "SELECT * FROM `appointments` WHERE `id` = :id;";

            $sth = $this->_pdo->prepare($sql3);
            $sth->bindValue(':id', $id, PDO::PARAM_INT);
            $sth->execute();

            $appointmentPatient = $sth->fetch(PDO::FETCH_OBJ);
            return $appointmentPatient;
            
        } catch (PDOException $e) {
            
            echo 'La requête a échouée: '.$e->getMessage();
        }
    }

}