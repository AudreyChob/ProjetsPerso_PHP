<?php
require 'inc/header.php';
require_once 'bdd/bdd.php';
require_once 'Classes/Patient.php';
require_once 'Classes/PatientManager.php';



$patientManager = new PatientManager($pdo);
$arrayPatient = $patientManager->getList();


?>
 <!-- NOM SERVICE -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="nomService">
            <h1>Service de réanimation Fondation Chobert</h1>
        </div>
    </div>

<!-- PROFESSIONNELS -->
    <div class="row">
        <div class="col-md-6">
            <h4> Poste de soin </h4>
        </div>
        <div class="col-md-3">
            <h4> Chariot d'urgence </h4>
        </div>
        <div class="col-md-3">
            <h4> Bureau médecin </h4>
        </div>
    </div>


<!-- CHAMBRES  -->
    <div class="row">
        <div class="col-md-12" style="border:solid 1px black">
            <div class="boutonPatient">
                <button class= "btn btn-success" type="submit" name="ajout"><a href="pages/vue.patientEntrant.php">+ </a></button>
                <button class= "btn btn-danger" type="submit" name="supprimer">-</button>
                <button class= "btn btn-warning" type="submit" name="modifier"><a href="pages/vue.patientModifier.php"> &#8635 </a> </button>
            </div>
                <?php foreach ($arrayPatient as $value){ ?>
                    <div class="patient">
                        <h4> Chambre  :<?= $value->getIdChambre(); ?> </h4>
                        <br>n° Dossier : <?= $value->getId(); ?> <br>
                        Pathologie : <?= $value->getPathologie(); ?><br>
                        Isolement: <?= $value->getIsolement(); ?><br>
                        Etat de conscience: <?= $value->getEtatConscience(); ?><br>
                        Appareillage : <?= $value->getAppareillage(); ?><br>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>