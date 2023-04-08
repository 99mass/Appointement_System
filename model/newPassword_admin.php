<?php
@session_start(); // on demare la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if( empty($_SESSION['admin'])  ){
    header("Location: ../view/index.php");
  } 
// appele de la base donné
require_once("../core/dbClient.php");
  
$newPassword=htmlspecialchars(trim(strip_tags($_POST["newPassword"])));
$mail=$_SESSION['admin']['email'];
if (!empty($newPassword) ) {
    $newPassword_hashed=password_hash($newPassword,PASSWORD_DEFAULT);  

        // admin
    $sql="UPDATE `admins` SET `password_admin`=:mot_de_passes WHERE `email`=:mail;";
    $requet=$db->prepare($sql);
    $requet->bindValue(":mail",$mail);
    $requet->bindValue(":mot_de_passes",$newPassword_hashed);
    if ($requet->execute()) {
         $_SESSION['success']="Mot de passe Modfier ";
         // il reste sur sa page de profile
            header("Location: ../view/dasboard_admin.php");
    }else {
        $_SESSION['erreur3']="Veillez réessayez une erreure c'est produit!";
             header("Location: ../view/dasboard_admin.php");
    }
    

}

$db->close();
?>