<?php
require_once("function.php");

$sdb["piece"] = "Salle de bain";
$sdb["largeur"] = 5;
$sdb["longueur"] = 3;
$sdb["surface"] = calculSurface($sdb["largeur"],$sdb["longueur"]);

//print_r($sdb);

$salon["piece"] = "Salon";
$salon["largeur"] = 7;
$salon["longueur"] = 8;
$salon["surface"] = calculSurface($salon["largeur"],$salon["longueur"]);

//print_r($salon);

$cuisine["piece"] = "Cuisine";
$cuisine["largeur"] = 6;
$cuisine["longueur"] = 9;
$cuisine["surface"] = calculSurface($cuisine["largeur"],$cuisine["longueur"]);

//print_r($cuisine);

$listePieces = [];
$listePieces[0] = $sdb;
$listePieces[1] = $salon;
$listePieces[2] = $cuisine;

//print_r($listePieces);


afficheEntete();

/*afficheLigne("Salon", 4 , 3);
afficheLigne("salle de bains", 2.5, 5);
afficheLigne("Cuisine", 6, 2);
*/

foreach ($listePieces as $key => $value) {
  //print_r($value);
  //afficheLigne($value["piece"], $value["longueur"], $value["largeur"]);
  afficheLigne($value);
}

/*
//differente ecriture
$tab["prenom"] = "Marcel";
$tab["nom"] = "Pagnol";*/

$tab = ["prenom" => "Marcel" , "nom" => "Pagnol"];

/*if (isset($tab["age"])) {
  echo "La variable est definie \n";
} else {
  echo "La variable n'est pas definie\n";
}
*/
afficheLigne($tab);
