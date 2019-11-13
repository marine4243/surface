<?php

$a = [1,13,17,5];

echo "2eme elements " .$a[1]. "\n" ;

echo "Nombre elements " .count($a). "\n" ;

$a[] = 28;
$a[5] = 32;
//$a[7] = 32;

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
