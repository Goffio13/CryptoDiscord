<?php
session_start();

include ("logger.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logomini.png" />
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/script.js"></script>
    <title>Direct Msg</title>
</head>
<body>
    <div class="content">
        <div class="tools">
            <button onclick="erreur()">Erreur</button>
            <button onclick="attention()">Attention</button>
            <button onclick="connexion()">Connexion</button>
            <button onclick="alll()">Afficher tout</button>
        </div>
        <div class="console">
            <div class="erreur" id="erreur">
                <strong>erreur :<?php 
                    $recup = file_get_contents("log.json"); // on récup
                    $decode = json_decode($recup);
                    echo json_encode($decode);

                ?>
                </strong>
            </div>
            <div class="attention" id="attention">
                <strong>attention :
                    <?php 
                    $recup = file_get_contents("log.json"); // on récup
                    $decode = json_decode($recup,false);
                    echo json_encode($decode);
                ?></strong>
            </div>
            <div class="connexion" id="connexion">
                <strong>connexion :
                <?php 
                    $recup = file_get_contents("log.json"); // on récup
                     //Afficher le tableau au format JSON
                    $decode = json_decode($recup);
                    $confirmation = json_encode($decode);
                    $connexion = "Connexion";
                    if (strpos($confirmation,$connexion)) {  // vérifie si y a bien une connexion
                        echo $confirmation->severite;
                        } else {
                        echo "Errreur dans le code";
                        }
                        ;

                ?>
                </strong>
            </div>
        </div>
    </div>
</body>
</html>