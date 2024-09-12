<?php require_once("entete.php"); ?>

    <div class="card container mt-3 col-md-5">
        <div class="card-header text-center bg-warning">
            Formulaire d'inscription
        </div>
        <div class="card-body">
            <form action="traitement.php" method="post">
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control">
                </div>
                <button class="btn btn-success" name="register" type="submit">S'inscrire</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </form>
        </div>
    </div>

    <?php 

        if (isset($_POST["register"])) {
            echo"Prenom:".$_POST["prenom"]."<br>";
            echo"Nom:".$_POST["nom"]."<br>";
            echo"Email:".$_POST["email"]."<br>";
            echo"Mot de passe:".$_POST["mdp"]."<br>";
        }else{
            echo "Veuillez d'abord vous inscrire";
        }

    ?>


<?php require_once("pied.php"); ?>