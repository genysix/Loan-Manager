<?php
include("bdd.php");
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$sql = "SELECT * FROM users WHERE pseudo = :param1";
$res = $connexion->prepare($sql);
$res->bindValue(':param1', $Username);
$res->execute();
$res->SetFetchMode(PDO::FETCH_OBJ);
$info = $res->fetch();
if ($info != null) {
    echo json_encode("Error");
} else {
    $req = $connexion->prepare("INSERT INTO users (pseudo, email, password) VALUES (:pseudo, :email, :password)");
    $req->execute(array(
        "pseudo" => $Username, 
        "email" => $Email,
        "password" => $Password
    ));
    echo json_encode(1);
}