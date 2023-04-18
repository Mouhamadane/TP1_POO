<?php

class Employe extends Personne {
    // attributs 
    public $salaire;

    public function __construct($nom, $prenom, $age, $salaire){
        parent::__construct($nom, $prenom, $age);
        $this->salaire = $salaire;

    }
    // Getter
    public function getSalaire(){
        return $this->salaire;
    }
    // Setter
     public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

}