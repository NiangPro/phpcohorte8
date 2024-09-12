<?php include_once("entete.php"); ?>

<?php if(isset($_GET["p"])){ ?>
    
<h1>Prenom: <?php echo $_GET["p"]; ?></h1>

<?php }else{ ?>

    <p>Veuillez renseigner d'abord le formulaire</p>

<?php } ?>

<?php if(isset($_GET["n"])): ?>

<h1>Nom: <?= $_GET["n"] ?></h1>

<?php else: ?>

<p>Veuillez renseigner d'abord le formulaire</p>

<?php endif; ?>

<?php require_once("pied.php"); ?>

