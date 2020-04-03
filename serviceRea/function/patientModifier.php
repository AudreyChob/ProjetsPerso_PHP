<?php
require '../inc/header.php';
require_once '../bdd/bdd.php';
require_once '../Classes/Patient.php';
require_once '../Classes/PatientManager.php';


if (!empty($_POST)){
    
        
        $patientManager= new PatientManager($pdo);

        $entrant = $patientManager->get($_POST['id']);
        $entrant->setIdChambre($_POST['idChambre']);
        $entrant->setPathologie($_POST['pathologie']);
        $entrant->setEtatConscience($_POST['etatConscience']);
        $entrant->setIsolement($_POST['isolement']);
        $entrant->setAppareillage($_POST['appareillage']);
        error_log(print_r($_POST['pathologie'], TRUE));
        //$patientManager->update($entrant);

        header('Location: ../index.php');
        exit();
     }


?>