<?php 

require '/var/www/html/listeCourse/classes/Produit.php';
require '/var/www/html/listeCourse/classes/ProduitManager.php';
require '/var/www/html/listeCourse/bdd/bdd.php';


    if(!empty($_POST['produit']) && !empty($_POST['quantite']) && !empty($_POST['categorie'])){
        $produitAjoute = new Produit([
            'produit' => $_POST['produit'],
            'quantite'=> $_POST['quantite'],
            'categorie'=> $_POST['categorie']
        ]);
    
        $produitManager = new ProduitManager($pdo);
        $produitManager->add($produitAjoute);
        
        
        header('Location: ../index.php');
        exit();
    }

?>