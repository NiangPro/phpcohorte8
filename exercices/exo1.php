<?php 

$note = -0;

if (is_numeric($note)) {
    if($note < 0){
        echo "La doit etre superieur ou egal a 0";
    }else if($note>=0 && $note < 10){
        echo "Echec";
    }else if($note >= 10 && $note <= 12){
        echo "Passable";
    }else if($note >= 13 && $note <= 15){
        echo "Assez bien";
    }else if($note >= 16 && $note <= 18){
        echo "Bien";
    }else if($note >= 19 && $note <= 20){
        echo "Tres bien";
    }else{
        echo "La doit etre inferieur ou egale a 20";
    }
}else{
    echo "Veuillez mettre une valeur entiere comprise entre 0 et 20";
}