<?php

$a = [1,13,17,5];

echo "2eme elements " .$a[1]. "\n" ;

$a[] = 28;
$a[5] = 32;
$a[7] = 32;
$a[] = 90;

//pour supprimer un element du tableau
unset($a[7]);

echo "Nombre elements " .count($a). "\n" ;

print_r($a);

// foreach, for, while
$i = 0;

echo "boucle while \n";
while ($i < count($a)) {
  echo "acces direct ".$i." element : ".$a[$i]. "\n";
  $i++; //$i += 1, $i = $i + 1
}

echo "\n";
echo "boucle for \n";
for ($i=0; $i < count($a) ; $i++) {
  echo "acces direct ".$i." element : ".$a[$i]. "\n";
}

echo "\n";
echo "boucle foreach \n";
foreach ($a as $key => $value) {
  echo "acces direct ".$key." element : ".$value. "\n";
}


/*------------- tableau associatif -------------------------------------------*/

$b = [];
$b["nom"] = "Dupont";
$b["prenom"] = "Pierre";
$b["age"] = 20;

echo "\n";
echo "boucle foreach \n";
foreach ($b as $key => $value) {
  echo "acces direct ".$key." element : ".$value. "\n";
}
