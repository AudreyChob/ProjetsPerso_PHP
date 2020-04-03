<?php

class ProduitManager {
    private $bdd;
   
    public function __construct($pdo){
        //objet pdo
        $this->bdd = $pdo;
    }

    //AJoute un objet produit à la BDD
    public function add(Produit $objet){
       $query =$this->bdd->prepare('INSERT INTO liste (produit, quantite, categorie) VALUES ( :produit,:quantite, :categorie)');
       $query->execute ([
           'quantite'=> $objet->getQuantite(),
           'produit' =>$objet->getProduit(),
           'categorie' => $objet->getCategorie()
       ]);
    }
    //FONCTION QUI RECUPERE LA LISTE D OBJET
    public function getList(){
        $query = $this->bdd->prepare('SELECT * FROM liste ');
        $query->execute();
        $data = $query->fetchAll();
            foreach($data as $key=>$value){
                 $tableauReturn[] = new Produit($value);
             }
            return $tableauReturn;
    }
    public function delete($id){
        $query = $this->bdd->prepare('DELETE FROM liste WHERE id = :id');
        $query->execute(['id'=>$id]);
    }

}




?>