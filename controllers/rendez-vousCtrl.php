<?php 

require_once(dirname(__FILE__).'/../models/Appointment.php');

$errorsArray = array();

$appointmentPatient = new Appointment ();
$id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));

if ($id <= 0) {
    header('location: /index.php');
} else {
    $appointment = $appointmentPatient->appointmentPatient($id);
    if (!$patient) {
        header('location: /index.php');
    }
}



include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/rendez-vous.php');

include(dirname(__FILE__).'/../views/templates/footer.php');