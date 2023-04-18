<?php
class Personne {
    // Atrributs
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    // Getter
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAge(){
        return $this->age;
    }

    //Setter
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($nom){
        $this->nom = $nom;
    }
    public function setAge($nom){
        $this->nom = $nom;
    }
    // fonction qui retourne le nom complet
    public function getNomComplet(){
        return $this->prenom." ".$this->nom;
    }
}