<?php
@session_start(); // on demare la session


// appele de la base donné
require_once("../core/dbClient.php");
  $id_rv=!isset($_SESSION['user']['id']) ? $_GET["id_rv_get"] : $_SESSION['user']['id'];
  
$sql="SELECT *,TIME_FORMAT(heure_convocation,'%Hh:%Imn') AS heure_convocations ,DATE_FORMAT(date_debut,'%d-%m-%Y') AS date_debuts,DATE_FORMAT(date_expiration,'%d-%m-%Y') AS date_expirations
       FROM infos_exiger_du_rv 
       WHERE id_rv=$id_rv  OR id_rv=3 ORDER BY id ";
$query=$db->prepare($sql);
$query->execute();
 $liste_rv= $query->fetchAll(PDO::FETCH_ASSOC);

?>