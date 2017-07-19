<?php
include("bdd.php");
$sql = "SELECT * FROM `typemondial`";
$res = $connexion->prepare($sql);
$res->execute();
$res->SetFetchMode(PDO::FETCH_OBJ);
$reponse = $res->fetchAll();
if ($reponse != null) {
    echo json_encode($reponse);
}