<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

$sql="SELECT * FROM rv_$id";

$requete=$db->prepare($sql);
$requete->execute();
$listes=$requete->fetchAll();


$sql0 = "SHOW COLUMNS FROM rv_$id";
$requet = $db->prepare($sql0);
$requet->execute();
$columns = $requet->fetchAll(PDO::FETCH_COLUMN);




