<?php
@session_start(); // on demare la session

$sessionId=$_SESSION['user']['id'];
$nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
// appele de la base donné
require_once("../core/dbClient.php");
  
$newPassword=htmlspecialchars(trim(strip_tags($_POST["newPassword"])));
$mail=$_SESSION['user']['email'];
if (isset($newPassword) ) {
    $newPassword_hashed=password_hash($newPassword,PASSWORD_ARGON2ID);  
    if (!empty($_SESSION['user'])) {
        // client
        $sql="UPDATE `client` SET `mot_de_passe`=:mot_de_passes WHERE `email`=:mail;";
    }else {
        // admin
        $sql="UPDATE `admins` SET `password_admin`=:mot_de_passes WHERE `email`=:mail;";
    }
    
    $requet=$db->prepare($sql);
    $requet->bindValue(":mail",$mail);
    $requet->bindValue(":mot_de_passes",$newPassword_hashed);
    if ($requet->execute()) {
         $_SESSION['success']="Mot de passe Modfier ";
         // il reste sur sa page de profile
         if (!empty($_SESSION['user'])) {
           header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
         }else {
            header("Location: ../view/dasboard_admin.php");
         }
    }else {
        $_SESSION['erreur3']="Veillez réessayez une erreure c'est produit!";
        if (!empty($_SESSION['user'])) {
            header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
          }else {
             header("Location: ../view/dasboard_admin.php");
          }
    }
    

}

$db->close();
?>