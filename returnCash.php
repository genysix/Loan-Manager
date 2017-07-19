<?php include("bdd.php");
$idRelation = $_POST["idRelation"];
$sql = "UPDATE relationpersonne SET rendu = 1 WHERE id = :param1";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $idRelation);
$res->execute();