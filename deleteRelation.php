<?php
include("bdd.php");
$idRelation = $_POST["idRelation"];
$sql = "DELETE FROM relationpersonne WHERE id = :param1";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $idRelation); 
$res->execute();