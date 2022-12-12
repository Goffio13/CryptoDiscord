<?php
session_start();
$hote = 'mysql-goffiomengh.alwaysdata.net';
$utilisateur = '288239';
$mdp = 'Conan13600_';
$nombdd = 'goffiomengh_bdd';
$bdd = new PDO("mysql:host=$hote;dbname=$nombdd", $utilisateur, $mdp);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logomini.png" />
    <link rel="stylesheet" href="css/default.css">
    <title>Page d'inscription - Direct Msg</title>
</head>
<body>
    <div class="content">
        <form action="bddinscription.php" method="POST">
            <div class="in_content">
                <input type="text" class="z-input" placeholder="Pseudo" name="username" value="<?php if(isset($username)){ echo $username; }?>" required>
                <input type="text" class="z-input" placeholder="Nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
                <input type="text" class="z-input" placeholder="Prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>
                <a href="page_ajouter_un_avatar.php" id="addicon">Ajouter un avatar</a>
                <input type="text" class="z-input" placeholder="Age" name="age" value="<?php if(isset($age)){ echo $age; }?>" required>
                <input type="email" class="z-input" placeholder="Mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
                <input type="password" class="z-input" placeholder="Mot de passe" name="mot_de_passe" value="<?php if(isset($mot_de_passe)){ echo $mot_de_passe; }?>" required>
                <input type="password" class="z-input" placeholder="Confirmer le mot de passe" name="confmdp" required>
                <button type="submit" name="inscription" id="submit1">S'inscrire</button>
                <a href="page_connexion.php" id="seco">se connecter</a>
            </div>
        </form>
    </div>
</body>
</html>