<?php
@session_start(); // on demare la session

ini_set('display_errors', 1);
error_reporting(~0);

// appele de la base donné
require_once("../core/dbClient.php");


  $id_rv=$_SESSION['user']['id'];
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
  
    $sql="INSERT INTO infos_exiger_du_rv(id,id_rv,prenom,nom,date_de_naissance,lieu_de_naissance,mail,autres_infos,heure_convocation,date_debut,date_expiration,lieu_rv,total_places)
          VALUES (null,:id_rvs,:prenoms,:noms,:date_de_naissances,:lieu_de_naissances,:mails,:autres_infoss,:heure_convocations,:date_debuts,:date_expirations,:lieu_rvs,:total_placess)";
    $requet=$db->prepare($sql);

    $requet->bindParam(":id_rvs",$id_rv);
    $requet->bindParam(":prenoms",$prenom);
    $requet->bindParam(":noms",$nom);
    $requet->bindParam(":date_de_naissances",$date_de_naissance);
    $requet->bindParam(":lieu_de_naissances",$lieu_de_naissance);
    $requet->bindParam(":mails",$mail);
    $requet->bindParam(":autres_infoss",$autres_infos);
    $requet->bindParam(":heure_convocations",$heure_convocation);

    $requet->bindParam(":date_debuts",$date_debut);
    $requet->bindParam(":date_expirations",$date_expiration);
    $requet->bindParam(":lieu_rvs",$lieu_rv);
    $requet->bindParam(":total_placess",$total_places);
    // $requet->execute();
    if ($requet->execute()) {
         $_SESSION['success']="Rendez Vous Crèer avec reussit ";
         // il reste sur sa page de profile
    }else {
        $_SESSION['erreur']="nooooooooooooooooooooooooooooo!";
    }
     header("Location: ../view/page_definition_rv.php");

}

?>