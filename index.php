<?php
require_once("Personne.php");
require_once("Employe.php");

$personne = new Personne("Sall", "Abdou", 23);
// J'affiche le nom complet
echo $personne->getNomComplet();

// Je modifie l'age en utilisant la methode setAge
$personne->setAge(45);
// J'affiche à nouveau l'age
echo $personne->getAge();

//Employe
$employe = new Employe("Sall", "Abdou", 23, 5000);

// Pour afficher le nom de l'employe
echo $employe ->getPrenom();
echo $employe ->getNom();
echo $employe ->getSalaire();














