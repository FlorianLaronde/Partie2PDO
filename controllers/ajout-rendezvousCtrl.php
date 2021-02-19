<?php

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Appointment.php');
require_once(dirname(__FILE__).'/../models/Patient.php');

$patient = new Patient();
$patients = $patient-> patientList();

$errorsArray = array();

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  //   Date du rendez-vous
  $dateHour = trim(filter_input(INPUT_POST, 'dateHour', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

  //On test si le champ n'est pas vide
  if(!empty($dateHour)){
      $testRegex = preg_match(REGEXP_DATEHOUR,$dateHour);

      if($testRegex == false){
          $errorsArray['dateHour_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
      }
  }else{
      $errorsArray['dateHour_error'] = 'Le champ n\'est pas rempli';
  }



    // ************************************************************************************

      //   id du patient
  $idPatients = trim(filter_input(INPUT_POST, 'idPatients', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

  //On test si le champ n'est pas vide
  if(!empty($idPatients)){
      $testRegex = preg_match(REGEXP_DATE,$idPatients);

      if($testRegex == false){
          $errorsArray['idPatients_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
      }
  }else{
      $errorsArray['idPatients_error'] = 'Le champ n\'est pas rempli';
  }


  // *****************************************************************************************

    // ***************************************************************
    // Création de l'instance du rendez-vous

    if(empty($errorsArray)) {

        $appointment = new Appointment ($dateHour, $idPatients);
        
        $testRegister =  $appointment->createAppointment();

       if ($testRegister) {
        header('location: /controllers/appointmentListCtrl.php?id=' . $id);
        
        echo 'Données enregistrées';



       } else {
            echo 'Données non enregistrées';

            $errorsArray ['Bdd_error'] = 'Mauvaises données enregistrées dans la base';

            include(dirname(__FILE__).'/../views/templates/header.php');

            require_once(dirname(__FILE__).'/../views/ajout-rendezvous.php');

            include(dirname(__FILE__).'/../views/templates/footer.php');

       }
    }


}

if (empty($errorsArray)) {
    include(dirname(__FILE__).'/../views/templates/header.php');


    require_once(dirname(__FILE__).'/../views/ajout-rendezvous.php');


    include(dirname(__FILE__).'/../views/templates/footer.php');

} 

?>



