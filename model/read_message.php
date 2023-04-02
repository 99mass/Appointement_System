<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");
$sql="SELECT id,email,`message`,reponse_admin,DATE_FORMAT(date_message,'Message du : %d/%m/%Y à %Hh%imn%ss') AS date_messages,traiter FROM assistance";
$query=$db->prepare($sql);
 // Exécution de la requête
$query->execute();
$message=$query->fetchAll(PDO::FETCH_ASSOC);
?>