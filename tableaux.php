<?php 
echo "<pre>";
$tableau = ["Pathe", "Dia", 34, 90];

$entiers = [34, -5,120, 7, 90];

echo $tableau[1]."<br>";
echo "Le nombre d'elements du tableau est ".count($tableau)."<br>";

$tableau[] = "Last";
echo $tableau[count($tableau) - 1]."<br>";
array_unshift($tableau, "First");
echo $tableau[0]."<br>";

echo "L'element supprime:".array_pop($tableau)."<br>";
echo "L'element supprime:".array_shift($tableau)."<br>";

$tableau = array_reverse($tableau);

// die();

print_r($tableau);
// var_dump()
echo min($entiers)."<br>";
echo max($entiers)."<br>";

sort($entiers);
$entiers = array_reverse($entiers);
// ksort($entiers);
print_r($entiers);

$val = 5.6;
echo intval($val);
echo floor($val);


echo "</pre>";
