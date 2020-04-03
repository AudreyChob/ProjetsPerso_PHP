<?php
require '../inc/header.php';
require_once '../bdd/bdd.php';
require_once '../Classes/Patient.php';
require_once '../Classes/PatientManager.php';
?>

<div class="containe-fluid">
    <div class="row">
        <div class="col-md-12" >
            <h2 style="text-align:center;">Informations patient entrant : </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin:2%;">
            <form action="../function/patientAjouter.php" method="post">
                Chambre: <select name="idChambre">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>

                </select>
                <input type ="text" name="id" placeholder="Numero de dossier">
                <input type ="text" name="pathologie" placeholder="Motif d'entrée">
                <input type="text" name="etatConscience" placeholder="Sedation">
                <select name="isolement">
                    <option value="aucun">Pas d'isolement</option>
                    <option value="BMR"> BMR </option>
                    <option value="BHR"> BHR </option>
                    <option value="goutellette"> Goutelette </option>
                    <option value="contact"> Contact</option>
                    <option value="clostridium"> Clostridium </option>
                    <option value="covid_19"> COVID 19</option>
                    <option value="autre"> Autre</option>
                </select>
                <input type="text" name="appareillage" placeholder="Appareillage"><br><br>
                <button type="submit" name="entrer" class="btn btn-success" style="margin-left: 35%"> Entrer données patient</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>