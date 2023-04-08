<?php
 @session_start(); //on demarr la session

 // empecher l'acces a ce fichier tempsqu'on est pas connecter
if(empty($_SESSION['user'] )|| empty($_SESSION['admin'])  ){
    header("Location: ../view/index.php");
  } 
// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$id=htmlspecialchars(trim(strip_tags($_POST["id"])));
$nom_entreprise_or_utilisaterur=htmlspecialchars(trim(strip_tags($_POST["nomEntUser"])));
$domaine=htmlspecialchars(trim(strip_tags($_POST["domaine"])));
$pays=htmlspecialchars(trim(strip_tags($_POST["pays"])));
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));


//on verifie si les champs existes
if (isset($nom_entreprise_or_utilisaterur) && isset($domaine) && isset($pays)  && isset($mail) ) {

    //on verifie si les champs sont  vide
    if (empty($nom_entreprise_or_utilisaterur) || empty($domaine) || empty($pays) 
                || empty($mail) ) {
        $_SESSION['erreur']="Information  non modifier : informations non complet";
        header("Location: ../view/profile.php");
    }else{
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $_SESSION['erreur']="Information  non modifier  : E-mail incorect.";
            header("Location: ../view/profile.php");
        }else{
           $sql="UPDATE client SET  nom_entreprise_ou_user=:nom,domaine=:dom,pays=:pay,email=:mail
                WHERE id=:idd";
           $req=$db->prepare($sql);
           $req->bindParam(":idd",$id);
           $req->bindParam(":nom",$nom_entreprise_or_utilisaterur);
           $req->bindParam(":dom",$domaine);
           $req->bindParam(":pay",$pays);
           $req->bindParam(":mail",$mail);
            if ($req->execute()!=false) {
                // on choisit la page ou rediriger le client en cas la requete est traiter
                if (!empty($_SESSION["user"])) {
                    header("Location: ../view/profile.php?t&id_rv_get=$id&name=$nom_entreprise_or_utilisaterur");
                }else  {
                    header("Location: ../view/dasboard_admin.php?t");
                }
                
            } else {
                // on choisit la page ou rediriger le client en cas la requete echou
                if (!empty($_SESSION["user"])) {
                    header("Location: ../view/profile.php?f");
                }else  {
                    header("Location: ../view/dasboard_admin.php?f");
                }
            }
        }
    }
}

?>