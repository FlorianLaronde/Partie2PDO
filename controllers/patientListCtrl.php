<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Patient.php');

$patient = new Patient();
$patients = $patient-> PatientList();

include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/patientList.php');

include(dirname(__FILE__).'/../views/templates/footer.php');