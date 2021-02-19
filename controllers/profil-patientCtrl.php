<?php 

require_once(dirname(__FILE__).'/../models/Patient.php');

$errorsArray = array();

$profilPatient = new Patient ();
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

if ($id <= 0) {
    header('location: /index.php');
} else {
    $patient = $profilPatient->profilPatient($id);
    if (!$patient) {
        header('location: /index.php');
    }
}



include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/profil-patient.php');

include(dirname(__FILE__).'/../views/templates/footer.php');