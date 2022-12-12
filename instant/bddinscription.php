<?php
session_start();
$hote = 'mysql-goffiomengh.alwaysdata.net';
$utilisateur = '288239';
$mdp = 'Conan13600_';
$nombdd = 'goffiomengh_bdd';
$bdd = new PDO("mysql:host=$hote;dbname=$nombdd", $utilisateur, $mdp);

if (isset($_POST['inscription'])) {
    if (!empty($_POST['username']) and !empty($_POST['mot_de_passe'])) {
        $username = htmlspecialchars($_POST['username']);
        $mot_de_passe = sha1(htmlspecialchars($_POST['mot_de_passe']));
        $mail = htmlspecialchars($_POST['mail']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $age = htmlspecialchars($_POST['age']);

        $insertUser = $bdd->prepare("INSERT INTO utilisateur(nom,prenom,mail,age, pseudo, mdp) VALUES (?,?,?,?,?,?)");
        $insertUser->bindParam(1, $nom);
        $insertUser->bindParam(2, $prenom);
        $insertUser->bindParam(3, $mail);
        $insertUser->bindParam(4, $age);
        $insertUser->bindParam(5, $username);
        $insertUser->bindParam(6, $mot_de_passe);
        $insertUser->execute();

        echo "Utilisateur créé";
        header("Location: page_connexion.php");
    } else {
        echo "Veuillez compléter les champs";
    }
}
?>