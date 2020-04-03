<?php

class Patient {
    private $_id;
    private $_idChambre;
    private $_pathologie;
    private $_etatConscience;
    private $_isolement;
    private $_appareillage;

    function __construct(array $tableauPatient){
        $this->hydrate($tableauPatient);
    }

    public function hydrate(array $tableauPatient){
        foreach($tableauPatient as $key=>$value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    //=========SETTERS==========\\

    public function setId($id){
        $this->_id = $id;
    }

    public function setIdChambre($idChambre){
        $this->_idChambre = $idChambre;
    }

    public function setPathologie($pathologie){
        $this->_pathologie = $pathologie;
    }
    
    public function setEtatConscience($etatConscience){
        $this->_etatConscience = $etatConscience;
    }

    public function setIsolement($isolement){
        $this->_isolement = $isolement;
    }

    public function setAppareillage($appareillage){
        $this->_appareillage = $appareillage; 
    }

    //=========GETTERS==========\\

    public function getId(){
        return $this->_id;
    }
    public function getIdChambre(){
        return $this->_idChambre;
    }
    public function getPathologie(){
        return $this->_pathologie;
    }

    public function getEtatConscience(){
        return $this->_etatConscience;
    }

    public function getIsolement(){
        return $this->_isolement;
    }

    public function getAppareillage(){
        return $this->_appareillage;
    }
}
