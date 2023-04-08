<?php 
 session_start(); // demarer la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if(empty($_SESSION['user'] )|| empty($_SESSION['admin'])  ){
     header("Location: ../view/index.php");
   } 

require_once("../core/dbClient.php"); //appel  de la base de donnée

$rv_id= $_POST["rv_id"];
$choix=htmlspecialchars(trim(strip_tags( $_POST["choix"])));
$sql="UPDATE `infos_exiger_du_rv` SET `acces`=$choix WHERE `id`=$rv_id;";
    $requet=$db->prepare($sql);
    if ($requet->execute()) {
      $_SESSION['success']=" Visiblité Rendez-Vous Modfier Avec succé. ";
    }else{
         $_SESSION['erreur3']="Veillez réessayez une erreure c'est produite.";
    }

     $sessionId=$_SESSION['user']['id'];
     $nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
     header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
     $db->close();
?>