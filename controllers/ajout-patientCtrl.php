<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Patient.php');

$errorsArray = array();

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

     // Nom
     // On verifie l'existance et on nettoie
     $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

     //On test si le champ n'est pas vide
     if(!empty($name)){
         // On test la valeur
         $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$name);
 
         if($testRegex == false){
             $errorsArray['name_error'] = 'Le nom n\'est pas valide';
         }
     }else{
         $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
     }
 
    // ***************************************************************

    //  Prénom
      $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

      if(!empty($firstName)){
          $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$firstName);
  
          if($testRegex == false){
              $errorsArray['firstName_error'] = 'Le nom n\'est pas valide';
          }
      }else{
          $errorsArray['firstName_error'] = 'Le champ n\'est pas rempli';
      }
  
    // ***************************************************************

    //   Birthday
    $birthDate = trim(filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($birthDate)){
        $testRegex = preg_match(REGEXP_DATE,$birthDate);

        if($testRegex == false){
            $errorsArray['birthDate_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['birthDate_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************

    // TELEPHONE
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    if(!empty($phone)){
        $testRegex = preg_match(REGEXP_PHONE,$phone);

        if($testRegex == false){
            $errorsArray['phone_error'] = 'Le numero n\'est pas valide, les séparateur sont - . /';
        }
    }

    // ***************************************************************
    
    // EMAIL
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));

    if(!empty($mail)){
        $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        if($testMail == false){
            $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
        }
    }else{
        $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
    }

    // ***************************************************************
    // Création de l'instance de patient

    if(empty($errorsArray)) {
        
        $patient = new Patient ($name, $firstName, $birthDate, $phone, $mail);

        $testRegister =  $patient->addPatient();

       if ($testRegister) {
        header('location: /controllers/patientListCtrl.php?id=' . $id);
        
        echo 'Données enregistrées';



       } else {
            echo 'Données non enregistrées';

            $errorsArray ['Bdd_error'] = 'Mauvaises données enregistrées dans la base';

            include(dirname(__FILE__).'/../views/templates/header.php');

            require_once(dirname(__FILE__).'/../views/ajout-patient.php');

            include(dirname(__FILE__).'/../views/templates/footer.php');

       }
    }


}

if (empty($errorsArray)) {
    include(dirname(__FILE__).'/../views/templates/header.php');


    require_once(dirname(__FILE__).'/../views/ajout-patient.php');


    include(dirname(__FILE__).'/../views/templates/footer.php');

} 

?>