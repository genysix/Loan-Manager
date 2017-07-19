<?php
include("bdd.php");
$idUser = $_POST["idUser"];
$sql = "SELECT relationpersonne.Date, relationpersonne.idAmis, relationpersonne.id, relationpersonne.Montant, typemondial.TypeMonnaie, relationpersonne.rendu, relationpersonne.isLend FROM relationpersonne LEFT JOIN typemondial ON relationpersonne.idMonnaie=typemondial.id WHERE idPersonne = :param1 ORDER BY relationpersonne.Date DESC";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $idUser); 
$res->execute();
$res->SetFetchMode(PDO::FETCH_OBJ);
$reponse = $res->fetchAll();
if ($reponse != null) {
    echo json_encode($reponse);
}