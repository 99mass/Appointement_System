<?php 

@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");
$id_client=htmlspecialchars(trim(strip_tags($_POST["id_client"])));
$id_rv=htmlspecialchars(trim(strip_tags($_POST["id_rv"])));
if (isset($id_client)) {
    // on supprime le rendez vous
    $db->query("Delete from `infos_exiger_du_rv`  WHERE id_rv=".$id_client."");
    $db->query("DROP TABLE rv_".$id_rv.";");
    $db->query("Delete from `client`  WHERE id=".$id_client."");
      $_SESSION['success']="Client Supprimer ";
       header("Location: ../view/dasboard_admin.php");
}
else {
     $_SESSION['erreur3']="Client non supprimer veillez réessayer.";
      header("Location: ../view/dasboard_admin.php");
}    
 // fermer la connexion à la base de données
 $db->close();
?>