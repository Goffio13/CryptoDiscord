<?php
include 'logger.php';
session_start();
$hote = 'mysql-goffiomengh.alwaysdata.net';
$utilisateur = '288239';
$mdp = 'Conan13600_';
$nombdd = 'goffiomengh_bdd';
$bdd = new PDO("mysql:host=$hote;dbname=$nombdd", $utilisateur, $mdp);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logomini.png" />
    <link rel="stylesheet" href="css/default.css">
    <title>Direct Msg</title>
</head>

<body>
    <?php
    if ($mail = isset($_POST['mail']) && $mot_de_passe = isset($_POST['mot_de_passe'])) {
          if ($mail !== "" && $mot_de_passe !== "") {
            $mail = htmlspecialchars($_POST['mail']);
            $mot_de_passe = sha1(htmlspecialchars($_POST['mot_de_passe']));
            $requete = $bdd->prepare("SELECT count(*) FROM utilisateur where mail = ? AND mdp = ?");
            $requete->bindParam(1, $mail);
            $requete->bindParam(2, $mot_de_passe);
            $requete->execute();
            $reponseTab = $requete->fetch(PDO::FETCH_ASSOC);
            $conteur = $reponseTab['count(*)'];
            if ($conteur != 0) //   nom d'utilisateur et mot de passe correctes
            {
                $_SESSION['logged in'] = true;
                Logger::Info();

                $admin = $bdd->prepare('SELECT isAdmin FROM utilisateur WHERE mail = ? AND mdp = ?');
                $admin->bindParam(1, $mail);
                $admin->bindParam(2, $mot_de_passe);
                $admin->execute();
                $donnee = $admin -> fetch();


                if ($donnee['isAdmin'] == 1) {
                    header('Location: page_admin.php');
                } else {
                    header('Location: page_accueil.php');

                }


                
            } else {
        
                echo "mail ou mdp incorrect ";
                Logger::Warn();

                //header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }
    }
    ?>
    <div class="content">
        <form action="" method="post">
            <div class="in-content">
                <label><b>Adresse Mail</b></label>
                <input type="text" class="uti" placeholder="Entrer votre adresse mail" name="mail" required>
                <label><b>Mot de passe</b></label>
                <input type="password" class="pass" placeholder="Entrer le mot de passe" name="mot_de_passe" required>
                <input type="submit" id='submit' value='SE CONNECTER'>
                <a href="page_inscription.php">S'inscrire</a>
            </div>
        </form>
    </div>
</body>
</html>