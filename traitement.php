<?php 

if (isset($_POST["register"])) {
    extract($_POST);
    // redirection 
    header("Location:profil.php?p=$prenom&n=$nom");
    // arreter l'execution d'un programme 
    die("Page traitement");
}else{
    echo "Veuillez d'abord vous inscrire";
}

