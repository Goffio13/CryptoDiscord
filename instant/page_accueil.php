<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logomini.png" />
    <link rel="stylesheet" href="css/default.css">
    <title>Direct Msg</title>
</head>
<body>
    <div class="top_content">
        <h1>Bonjour "Pseudo".</h1>
    </div>
    <div class="mid_content">
        <div class="create_room">
            <button type="submit" name="create" id="submit">Créer un salon</button>
        </div>
        <div class="join_room">
            <button type="submit" name="join" id="submit2">Rejoindre un salon</button>
        </div>
    </div>
    <div class="bottom_content">
        <div class="private_room">
            <span>Privés</span>
        </div>
        <div class="public_room">
            <span>Publique</span>
        </div>
    </div>
</body>
</html>