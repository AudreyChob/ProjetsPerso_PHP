<?php
require 'inc/header.php';
require '/var/www/html/listeCourse/classes/Produit.php';
require '/var/www/html/listeCourse/classes/ProduitManager.php';
require '/var/www/html/listeCourse/bdd/bdd.php';

    $produitManager = new ProduitManager($pdo);
    $produitArray = $produitManager->getList();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="text-align:center; margin-top: 3%;background: rgba(238,232,170 ,0.8); ">
            <h3 style ="color:cornflowerblue; text-align:center"> Ajout des articles: </h3>
                <form action="function/ajouterProduit.php" method="post" style="margin :2%">
                    Produit :<input type="text" name="produit" placeholder="Ajouter un produit">
                    Quantité :<input type="number" name="quantite">
                    Rayon : <select style="width:5%;" id="catedorie" name="categorie">
                                <option>Epicerie</option>
                                <option>Maraicher</option>
                                <option>Poisson/viande</option>
                                <option>Frais</option>
                                <option>Autre</option>
                            </select>
                    <button type="submit" class="btn btn-success">Ajouter à la liste</button>
                </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-5"></div>
<div class="col-md-2" style=" background: rgba(238,232,170 ,0.8); margin-top:2%">
            <h3 style ="color:cornflowerblue; text-align:center">Liste de courses : </h3><br>
            
                <h4 style="color:green;text-align:center; margin-bottom:2%">Rayon Frais :</h4> <br> 
                <?php
                foreach($produitArray as $value){ 
                    if ($value->getCategorie()== "Frais"){ ?>  
                        <button type="submit" name="supprimer"><a href="function/supprimerProduit.php?id=<?=$value->getId();?>">&#128465</a></button>
                        <?= $value->getProduit();?> : <?= $value->getQuantite();?> 
                        <br> 
                <?php }  
                } ?>
                
                <h4 style="color:green;text-align:center; margin-bottom:2%">Rayon Epicerie :</h4> <br> 
                <?php
                foreach($produitArray as $value){ 
                    if ($value->getCategorie()== "Epicerie"){ ?>  
                        <button type="submit" name="supprimer"><a href="function/supprimerProduit.php?id=<?=$value->getId();?>">&#128465</a></button>
                        <?= $value->getProduit();?> : <?= $value->getQuantite();?> 
                        <br> 
                <?php }  
                } ?>
                
                <h4 style="color:green;text-align:center; margin-bottom:2%">Rayon Poisson /viande :</h4> <br> 
                <?php
                foreach($produitArray as $value){ 
                    if ($value->getCategorie()== "Poisson/viande"){?>
                    <button type="submit" name="supprimer"><a href="function/supprimerProduit.php?id=<?=$value->getId();?>">&#128465</a></button>
                        <?= $value->getProduit();?> : <?= $value->getQuantite();?> 
                        <br> 
                <?php }  
                } ?>
                
                <h4 style="color:green;text-align:center; margin-bottom:2%"> Rayon Maraicher :</h4> <br>
                <?php
                foreach($produitArray as $value){ 
                    if ($value->getCategorie()== "Maraicher"){ ?>  
                        <button type="submit" name="supprimer"><a href="function/supprimerProduit.php?id=<?=$value->getId();?>">&#128465</a></button>
                        <?= $value->getProduit();?> : <?= $value->getQuantite();?> 
                        <br> 
                <?php }  
                } ?>
                                
                <h4 style="color:green;text-align:center; margin-bottom:2%">Rayon Autre :</h4> <br>
                <?php
                foreach($produitArray as $value){ 
                    if ($value->getCategorie()== "Autre"){ ?>  
                        <button type="submit" name="supprimer"><a href="function/supprimerProduit.php?id=<?=$value->getId();?>">&#128465</a></button>
                        <?= $value->getProduit();?> : <?= $value->getQuantite();?> 
                        <br> 
                <?php }  
                } ?>
        </div>
        <div class="col-md-5">
                <button action="function/effacerTout.php" type="submit" name="vider"> Effacer la liste </button>
        </div>
    </div>
</div>




<?php
require 'inc/footer.php';
?>