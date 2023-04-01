<?php
@session_start(); // on demare la session

$sessionId=$_SESSION['user']['id'];
$nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
// appele de la base donné
require_once("../core/dbClient.php");
  
$newPassword=htmlspecialchars(trim(strip_tags($_POST["newPassword"])));
$mail=$_SESSION['user']['email'];
if (isset($newPassword) ) {
    $newPassword_hashed=password_hash($newPassword,PASSWORD_DEFAULT);  
        // client
        $sql="UPDATE `client` SET `mot_de_passe`=:mot_de_passes WHERE `email`=:mail;";
    $requet=$db->prepare($sql);
    $requet->bindValue(":mail",$mail);
    $requet->bindValue(":mot_de_passes",$newPassword_hashed);
    if ($requet->execute()) {
         $_SESSION['success']="Mot de passe Modfier ";
         // il reste sur sa page de profile
           header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
        
    }else {
        $_SESSION['erreur3']="Veillez réessayez une erreure c'est produit!";
     
        header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
        
    }
    

}

$db->close();
?>