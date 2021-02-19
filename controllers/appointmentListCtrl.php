<?php 

require_once(dirname(__FILE__).'/../utils/regex.php');
require_once(dirname(__FILE__).'/../models/Appointment.php');

$appointment = new Appointment();
$appointments = $appointment-> appointmentList();

include(dirname(__FILE__).'/../views/templates/header.php');

require_once(dirname(__FILE__). '/../views/appointmentList.php');

include(dirname(__FILE__).'/../views/templates/footer.php');