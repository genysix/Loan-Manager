<?php
include("bdd.php");
$idUser = $_POST["idUser"];
$idAmis = $_POST["idAmis"];
$montant = $_POST["montant"];
$idMonnaie = $_POST["idMonnaie"];
$isLend = $_POST["isLend"];
$Date = $_POST["Date"];
$sql = "INSERT INTO `relationpersonne`(`idPersonne`, `idAmis`, `montant`, `idMonnaie`, `isLend`, `Date`) VALUES (:param1,:param2,:param3,:param4,:param5,:param6)";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $idUser); 
$res->bindValue(':param2', $idAmis); 
$res->bindValue(':param3', $montant); 
$res->bindValue(':param4', $idMonnaie); 
$res->bindValue(':param5', $isLend); 
$res->bindValue(':param6', $Date); 
$res->execute();