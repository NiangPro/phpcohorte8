<?php 
$ch = "  ma chaine de caracteres  ";

$ch = trim($ch);
echo "le nombre de caracteres est de ".strlen($ch);

echo "<br> Premier caractere: ".$ch[0];

// $ch = ;

echo "<br>".strtoupper($ch);
echo "<br>".strtolower($ch);
echo "<br>".ucfirst($ch);
echo "<br>".ucwords($ch);
$ch = str_replace("m", "b", $ch);
echo "<br>".$ch;
$ch = strrev($ch);
echo "<br>".$ch;

$mot = "mataM";
if (strcmp(strtolower($mot), strrev(strtolower($mot))) == 0) {
    echo "<br>$mot est palyndrome";
}else{
    echo "<br>$mot n'est pas palyndrome";
}

$cara = "é";

if (ctype_alpha($cara)) {
    echo "<br>exact";
}else{
    echo "<br>different";
}
