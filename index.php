<?php
    // à quel endroit on se trouve puis comment accèder à header.php
    include(dirname(__FILE__).'/views/templates/header.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
        require_once(dirname(__FILE__).'/controllers/ajout-patientCtrl.php');
     } else {
         include(dirname(__FILE__).'/views/home.php');
     }


    include(dirname(__FILE__).'/views/templates/footer.php');

