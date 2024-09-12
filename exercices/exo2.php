<?php 

$tab = [23, 45, -4, 25, 9];

foreach($tab as $valeur){
    if ($valeur > 0) {
        $r = sqrt($valeur);
        if ($r == floor($r)) {
            echo "$valeur - ";
        }
    }
}