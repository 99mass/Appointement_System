<?php
@session_start(); // on demare la session

ini_set('display_errors', 1);
error_reporting(~0);

// appele de la base donné
require_once("../core/dbClient.php");
  $id_rv=$_SESSION['user']['id'];

$sql="SELECT * FROM infos_exiger_du_rv WHERE id_rv=$id_rv ORDER BY id DESC";
$query=$db->prepare($sql);
$query->execute();
 $liste_rv= $query->fetchAll(PDO::FETCH_ASSOC);


?>