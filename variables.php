<?php 

// les variables 
    $age = 34;
    $prenom = "Bassirou";
    $nom = "Dia";
    $trouve = false;
    $decimal = 45.890;
    $chaine = "34";
// une constante 
    define("PI", 3.14);

//affichage

    echo "Prenom:$prenom";
    echo '<br>Nom:'.$nom;
    echo '<br>Pi:'.PI;
// le type des variables 
settype($chaine, "integer");
echo gettype($chaine);

// les conditions 
    if (is_numeric($chaine)) {
        echo "La variable contient uniquement des chiffres";
    }else{
        echo "c'est pas le cas";
    }
    if ($age >= 18) {
        echo "<br> Vous etes majeur";
    }else if($age < 18){
        echo "<br> Vous etes mineur";
    }
// existence d'une variable 
    unset($age);
    if (isset($age)) {
        echo "la variable existe";
    }else{
        echo "La variable n'existe plus";
    }


?>