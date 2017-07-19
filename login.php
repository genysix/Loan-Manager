<?php
include("bdd.php");
$Username = $_POST['username'];
$Password = $_POST['password'];
$sql = "SELECT id, pseudo, email FROM users WHERE pseudo = :param1 AND password = :param2";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $Username);
$res->bindValue(':param2', $Password);
$res->execute();
$res->SetFetchMode(PDO::FETCH_OBJ);
$info = $res->fetch();
if ($info != null) {
    echo json_encode($info);
}