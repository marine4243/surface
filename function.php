<?php

function afficheEntete()
{
// echo "  Longueur  |  Largeur  | Surface   |\n";
 printf("| %20s | %9s | %9s | %9s |\n","piece", "Longueur", "Largeur", "Surface");
}


//function afficheLigne($piece,$long, $larg)
function afficheLigne($piece)
{
  if (
    isset($piece["piece"],
          $piece["longueur"],
          $piece["largeur"]) &&
    is_string($piece["piece"]) &&
    is_numeric($piece["longueur"]) &&
    is_numeric($piece["largeur"]) ) {

     printf("| %20s | %9.2f | %9.2f | %9.2f |\n",
     $piece["piece"],
     $piece["longueur"],
     $piece["largeur"],
     calculSurface($piece["longueur"], $piece["largeur"]));
  } else {
//  echo "Erreur données:". var_dump($piece["longueur"]). var_dump($piece["largeur"]) . "\n" ;
    echo "Erreur données:". var_dump($piece). "\n";
  }
//  echo " $long | $larg | ".calculSurface($long, $larg)." \n";
}


function calculSurface($long, $larg)
{
  if ( is_numeric($long) && is_numeric($larg) ) {
    $surface = $long * $larg;
  } else {
    echo "Erreur données:". var_dump($long). var_dump($larg) . "\n" ;
  }
  return($surface);
}
