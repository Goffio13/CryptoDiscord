<?php
$hote = 'mysql-goffiomengh.alwaysdata.net';
$utilisateur = '288239';
$mdp = 'Conan13600_';
$nombdd = 'goffiomengh_bdd';
$bdd = new PDO("mysql:host=$hote;dbname=$nombdd", $utilisateur, $mdp);


if ($test= file_exists("log.json")){
} else {
    fopen('log.json','a+'); // bouffon redemande toujours 2 fois la consigne pour éviter de perdre 8h pour r 
}

  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }


class Logger {

    public static function Warn() {
        $ligneLog = array();
        $ligneLog["severite"] = "Warning ".getIP();
        $recup = file_get_contents("log.json"); // on récup
        $decode = json_decode($recup);
        array_push($decode,$severite);
        $JsonData = json_encode($decode);
        file_put_contents("log.json",$JsonData); // on renvoie 
    }

    public static function Info() {
        $ligneLog = array();
        $ligneLog["severite"] = "Connexion ".getIP();
        $recup = file_get_contents("log.json"); // on récup
        $decode = json_decode($recup);
        array_push($decode,$ligneLog);
        $JsonData = json_encode($decode);
        file_put_contents("log.json",$JsonData); // on renvoie 
    } 
    
    public static function Error() {
        $ligneLog = array();
        $ligneLog["severite"] = "Erreur ".getIP();
        $recup = file_get_contents("log.json"); // on récup
        $decode = json_decode($recup);
        array_push($decode, $severite);
        $JsonData = json_encode($decode);
        file_put_contents("log.json",$JsonData); // on renvoie 
    }

}
?>