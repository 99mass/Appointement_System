<?php 

@session_start(); // on demare la session

$sessionId=$_SESSION['user']['id'];
  $nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
// appele de la base donné
require_once("../core/dbClient.php");
$rv_id=htmlspecialchars(trim(strip_tags($_POST["rv_id"])));
$nom_strutu=$_SESSION['user']['nom_entreprise_ou_user'];
if (isset($rv_id)) {
    // on supprime le rendez vous
    $db->query("Delete from `infos_exiger_du_rv`  WHERE `id`= $rv_id;");
     $db->query("DROP TABLE rv_".$rv_id.";");
      $_SESSION['success']="Rendez-Vous Supprimer avec succé ";
       header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
}
else {
     $_SESSION['erreur3']="Rendez-Vous non supprimer veillez réessayer.";
      header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
}    
 // fermer la connexion à la base de données
 $db->close();
?>