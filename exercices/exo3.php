<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
    
    <div class="container col-md-4 mt-3 mb-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Veuillez entrer votre âge</label>
                <input type="number" name="age" min="1" class="form-control">
                <button name="valider" type="submit" class="btn btn-outline-success mt-3">Valider</button>
            </div>
        </form>
    </div>

    <?php 

        function message($msg, $couleur = "success"){
            echo "<div class='container col-md-6 alert alert-$couleur'>$msg</div>";
        }

        if (isset($_POST["valider"])) {
            extract($_POST);

            if ($age) {
                if ($age >= 18) {
                    message("Vous êtes majeur");
                }else{
                    message("Vous êtes mineur", "warning");
                }
            }else{
                message("Veuillez d'abord saisir", "danger");
            }
        }

        $tab = [
            "prenom" => "modou",
            "nom" => "modou",
            "age" => 3
        ];

        extract($tab);

        echo $prenom;

    ?>
    <script src="../bootstrap.bundle.min.js"></script>
</body>
</html>