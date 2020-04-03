<?php
require '/var/www/html/listeCourse/classes/Produit.php';
require '/var/www/html/listeCourse/classes/ProduitManager.php';
require '/var/www/html/listeCourse/bdd/bdd.php';


    if(!empty($_GET['id'])){
        $produitManager = new ProduitManager($pdo);
        $produitManager->delete($_GET['id']);
        
        header('Location: ../index.php');
        exit();
    }


?>
