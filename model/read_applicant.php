<?php
@session_start(); // on demare la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if(empty($_SESSION['user'] )  ){
    header("Location: ../view/index.php");
  } 

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




