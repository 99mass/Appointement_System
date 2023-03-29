<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");
$email=$_SESSION['user']['email'];
$sql="SELECT * FROM client WHERE `email`=:mail  ";
$query=$db->prepare($sql);
$query->bindParam(":mail",$email);
// Exécution de la requête
$query->execute();
$user=$query->fetch(PDO::FETCH_ASSOC);




?>