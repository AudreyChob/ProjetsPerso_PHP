<?php
require '../inc/header.php';
require_once '../bdd/bdd.php';
require_once '../Classes/Patient.php';
require_once '../Classes/PatientManager.php';


if(!empty($_POST)){
    $entrant = new Patient([
      'idChambre'=>$_POST['idChambre'],
      'id' => $_POST['id'],
      'pathologie' => $_POST['pathologie'],
      'etatConscience' => $_POST['etatConscience'],
      'isolement' => $_POST['isolement'],
      'appareillage' => $_POST['appareillage']
    ]);
  
    $patientManager = new PatientManager($pdo);
    $patientManager->add($entrant);
  
    header('Location: ../index.php');
    exit();
  }