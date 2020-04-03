<?php
    class Produit{
        private $_produit;
        private $_quantite;
        private $_id;
        private $_categorie;

        public function __construct(array $tableauDonnees){
            $this->hydrate($tableauDonnees);
        }

        public function hydrate(array $tableauDonnees){
            foreach ($tableauDonnees as $key => $value){
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }
         // GETTER 

        public function getProduit(){
            return $this->_produit;
        }
        public function getQuantite(){
            return $this->_quantite;
        }
        public function getId(){
            return $this->_id;
        }
        public function getCategorie(){
            return $this->_categorie;
        }
        // SETTER

        public function setProduit($produit){
            $this->_produit =$produit;
        }
        public function setQuantite($quantite){
            $this->_quantite = $quantite;
        }
        public function setId($id){
            $this->_id = $id;
        }
        public function setCategorie($categorie){
            $this->_categorie =$categorie;
        }
    }