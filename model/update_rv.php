<?php
@session_start(); // on demare la session

ini_set('display_errors', 1);
error_reporting(~0);

// appele de la base donné
require_once("../core/dbClient.php");
  
$id=htmlspecialchars(trim(strip_tags($_POST["idd"])));
$prenom=htmlspecialchars(trim(strip_tags($_POST["prenoms"])));
$nom=htmlspecialchars(trim(strip_tags($_POST["nom"])));
$date_de_naissance=htmlspecialchars(trim(strip_tags($_POST["dateNaissance"])));
$lieu_de_naissance=htmlspecialchars(trim(strip_tags($_POST["lieuNaissance"])));
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));
$autres_infos=htmlspecialchars(trim(strip_tags($_POST["autreInfos"])));
$heure_convocation=htmlspecialchars(trim(strip_tags($_POST["heurConvocation"])));

$date_debut=htmlspecialchars(trim(strip_tags($_POST["dateDebut"])));
$date_expiration=htmlspecialchars(trim(strip_tags($_POST["dateExpiration"])));
$lieu_rv=htmlspecialchars(trim(strip_tags($_POST["lieuRV"])));
$total_places=htmlspecialchars(trim(strip_tags($_POST["totalPersonne"])));
if (isset($prenom) && isset($nom) && isset($date_de_naissance) && isset($lieu_de_naissance) && isset($mail) && isset($autres_infos) && isset($heure_convocation) 
    && isset($date_debut) && isset($date_expiration) && isset($lieu_rv) && isset($total_places)  ) {
  
    $sql="UPDATE `infos_exiger_du_rv` SET `prenom`=:prenoms,`nom`=:noms,`date_de_naissance`=:date_de_naissances,`lieu_de_naissance`=:lieu_de_naissances
                                        `mail`=:mails,`autres_infos`=:autres_infoss,`heure_convocation`=:heure_convocations,
                                        `date_debut`=:date_debuts,`date_expiration`=:date_expirations,`lieu_rv`=:lieu_rvs,`total_places`=:total_placess
         WHERE `id`=:idd;";
    //  $sql="UPDATE infos_exiger_du_rv SET prenom=$prenom ,nom=$nom ,date_de_naissance=$date_de_naissance,lieu_de_naissance=$lieu_de_naissance
    //                                     mail=$mail,autres_infos=$autres_infos ,heure_convocation=$heure_convocation,
    //                                     date_debut=$date_debut ,date_expiration=$date_expiration ,lieu_rv=$lieu_rv ,total_places=$total_places
    //      WHERE id=$id";
    $requet=$db->prepare($sql);

    $requet->bindValue(":idd",$id);
    $requet->bindValue(":prenoms",$prenom);
    $requet->bindValue(":noms",$nom);
    $requet->bindValue(":date_de_naissances",$date_de_naissance);
    $requet->bindValue(":lieu_de_naissances",$lieu_de_naissance);
    $requet->bindValue(":mails",$mail);
    $requet->bindValue(":autres_infoss",$autres_infos);
    $requet->bindValue(":heure_convocations",$heure_convocation);

    $requet->bindValue(":date_debuts",$date_debut);
    $requet->bindValue(":date_expirations",$date_expiration);
    $requet->bindValue(":lieu_rvs",$lieu_rv);
    $requet->bindValue(":total_placess",$total_places);
    // $requet->execute();
    if ($requet->execute()) {
         $_SESSION['success']="Rendez Vous Modfier Avec reussit ";
         // il reste sur sa page de profile
    }else {
        $_SESSION['erreur']="nooooooooooooooooooooooooooooo!";
    }
     header("Location: ../view/page_definition_rv.php");

}

?>