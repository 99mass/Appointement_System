<?php
@session_start(); // on demare la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if( empty($_SESSION['admin'])  ){
        header("Location: ../view/admin.php");
      } 
// appele de la base donné
require_once("../core/dbClient.php");

$sql="SELECT * FROM client";
$query=$db->prepare($sql);
        // Exécution de la requête
$query->execute();
$clients=$query->fetchAll(PDO::FETCH_ASSOC);