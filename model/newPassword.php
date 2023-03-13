<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");
  
$newPassword=htmlspecialchars(trim(strip_tags($_POST["newPassword"])));
$mail=$_SESSION['user']['email'];
if (isset($newPassword) ) {
    $newPassword_hashed=password_hash($newPassword,PASSWORD_ARGON2ID);  
    $sql="UPDATE `client` SET `mot_de_passe`=:mot_de_passes WHERE `email`=:mail;";
    $requet=$db->prepare($sql);
    $requet->bindValue(":mail",$mail);
    $requet->bindValue(":mot_de_passes",$newPassword_hashed);
    if ($requet->execute()) {
         $_SESSION['success']="Mot de passe Modfier avec succé ";
         // il reste sur sa page de profile
           header("Location: ../view/dasboard.php");
    }else {
        $_SESSION['erreur3']="Veillez réessayez une erreure c'est produit!";
        header("Location: ../view/dasboard.php");
    }
    

}

?>