<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

$reponse=strip_tags(htmlspecialchars(trim($_POST["reponse"])));
$id=strip_tags(htmlspecialchars(trim($_POST["id"])));
$traiter=1;
if (isset($reponse) ) {
    if (empty($reponse) ) {
        $_SESSION["error"]="Reponse non enregister Veillez reessayer.";
        header("Location: ../view/repond_message.php");
    }else{
        $sql="UPDATE  assistance SET reponse_admin=:reponse,traiter=:traite WHERE id=:idd";
        $stmt=$db->prepare($sql);
        $stmt->bindParam(":reponse",$reponse);
        $stmt->bindParam(":traite",$traiter);
        $stmt->bindParam(":idd",$id);
       if($stmt->execute()){
            $_SESSION["succe"]="Reponse enregister.";
            header("Location: ../view/repond_message.php");
       }else {
            $_SESSION["error"]="Reponse non enregister Veillez reessayer.";
            header("Location: ../view/repond_message.php");
       }

    }
}

?>