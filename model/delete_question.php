<?php 

@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");
$id_question=htmlspecialchars(trim(strip_tags($_POST["id_question"])));
if (isset($id_question)) {
    // on supprime le rendez vous
    $db->query("Delete from `assistance`  WHERE id=".$id_question."");
      $_SESSION['succe']="Question Supprimer ";
       header("Location: ../view/repond_message.php");
}
else {
     $_SESSION['error']="Question non supprimer veillez réessayer.";
      header("Location: ../view/repond_message.php");
}    
 // fermer la connexion à la base de données
 $db->close();
?>