<?php

class PatientManager{
    private $bdd;

    public function __construct($pdo){
        $this->bdd = $pdo;
    }

    public function add(Patient $entrant){
        $query = $this->bdd->prepare('INSERT INTO patient (id, idChambre, pathologie, etatConscience,	isolement, appareillage) 
        VALUES (:id, :idChambre, :pathologie, :etatConscience, :isolement, :appareillage) ');
        $query->execute([
            'pathologie'=>$entrant->getPathologie(),
            'id'=>$entrant->getId(),
            'idChambre'=>$entrant->getIdChambre(),
            'etatConscience'=>$entrant->getEtatConscience(),
            'isolement'=>$entrant->getIsolement(),
            'appareillage'=>$entrant->getAppareillage()

        ]);
    }

    public function getList(){
        $query = $this->bdd->prepare('SELECT * FROM patient ');
        $query->execute();
        $data = $query->fetchAll();
        print_r($data);
            foreach($data as $value){
                $tableauReturn[] = new Patient($value);
            }
        return $tableauReturn;
    }
    public function get($id){
        $query = $this->bdd->prepare('SELECT * FROM patient WHERE id = :id');
        $query->execute(['id' => $id]);
        $data = $query->fetchAll();
        return new Patient($data);
      }
    public function update(Patient $entrant){
        $query = $this->bdd->prepare('UPDATE patient SET  idChambre = :idChambre, pathologie = :pathologie, etatConscience = :etatConscience, isolement = :isolement, appareillage = :appareillage WHERE id = :id');
        $query->execute([
            'id' => $entrant->getId(),
            'idChambre'=>$entrant->getIdChambre(),
            'pathologie'=> $entrant->getPathologie(),
            'etatConscience'=> $entrant->getEtatConscience(),
            'isolement'=> $entrant->getIsolement(),
            'appareillage'=>$entrant->getAppareillage()
            ]);
            error_log(print_r('idest'.$query->getPathologie(), TRUE));
        
        
    }

}