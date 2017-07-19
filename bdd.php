<?php //page de connexion a la Base de données
    $HOTE='mysql-genysix.alwaysdata.net';
    $PORT='3306';
    $NOM_BD='genysix_admin';
    $USER='genysix';
    $MDP='Pass1234';
    $OPTION = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try{
        $connexion = new PDO('mysql:host='.$HOTE.';port='.$PORT.';dbname='.$NOM_BD,$USER,$MDP,$OPTION);
    }catch(Exception $e){
        echo $e->getMessage()." code: ".$e->getCode();
        die();
    }
?>