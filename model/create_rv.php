<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

$nom_structure=$_SESSION['user']['nom_entreprise_ou_user'];
$id_rv=$_SESSION['user']['id'];
$prenom= !isset($_POST["prenoms"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["prenoms"]))) ;
$noms= !isset($_POST["nom"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["nom"])));
$date_de_naissances= !isset($_POST["dateNaiss"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["dateNaiss"])));
$lieu_de_naissances= !isset($_POST["lieuNaiss"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["lieuNaiss"])));
$mail= !isset($_POST["mail"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["mail"])));
$autres_infos=htmlspecialchars(trim(strip_tags($_POST["autreInfoss"])));
$heure_convocation=htmlspecialchars(trim(strip_tags($_POST["heurConvocations"])));

$date_debut=htmlspecialchars(trim(strip_tags($_POST["dateDebuts"])));
$date_expiration=htmlspecialchars(trim(strip_tags($_POST["dateExpirations"])));
$lieu_rv=htmlspecialchars(trim(strip_tags($_POST["lieuRVs"])));
$total_places=htmlspecialchars(trim(strip_tags($_POST["totalPersonnes"])));
if (isset($_POST))  {
  

    $sql="INSERT INTO infos_exiger_du_rv(id,id_rv,prenom,nom,date_de_naissance,lieu_de_naissance,mail,autres_infos,heure_convocation,date_debut,date_expiration,lieu_rv,total_places)
          VALUES (null,:id_rvs,:prenoms,:noms,:date_de_naissances,:lieu_de_naissances,:mails,:autres_infoss,:heure_convocations,:date_debuts,:date_expirations,:lieu_rvs,:total_placess)";
    $requet=$db->prepare($sql);

    $requet->bindParam(":id_rvs",$id_rv);
    $requet->bindParam(":prenoms",$prenom);
    $requet->bindParam(":noms",$noms,);
    $requet->bindParam(":date_de_naissances",$date_de_naissances);
    $requet->bindParam(":lieu_de_naissances",$lieu_de_naissances);
    $requet->bindParam(":mails",$mail);
    $requet->bindParam(":autres_infoss",$autres_infos);
    $requet->bindParam(":heure_convocations",$heure_convocation);
    $requet->bindParam(":date_debuts",$date_debut);
    $requet->bindParam(":date_expirations",$date_expiration);
    $requet->bindParam(":lieu_rvs",$lieu_rv);
    $requet->bindParam(":total_placess",$total_places);
    if ($requet->execute()) {

         $lastId=$db->lastInsertId();
         $sql2="SELECT * FROM infos_exiger_du_rv WHERE id=$lastId";
         $requet2=$db->prepare($sql2);
         $requet2->execute();
        $laste_rv= $requet2->fetch(PDO::FETCH_ASSOC);

          $lastPrenom=!( $laste_rv["prenom"] ==="0" )? "prenom_d" : "vide1";
          $lastNom= $laste_rv["nom"]==1 ? "nom_d" : "vide2";
          $lastDateDeNaissance= $laste_rv["date_de_naissance"]==1 ? "date_naissance_d" : "vide3";
          $lastLieuDeNaissance= $laste_rv["lieu_de_naissance"]==1 ? "lieu_naissance_d" : "vide4";
          $lastMail= $laste_rv["mail"]==1 ? "mail_d" : "vide5";
          $lastAutreInfos= $laste_rv["autres_infos"]!="" ? $laste_rv["autres_infos"] : "Avide6";

          // requete pour creer une table d'utlisateur on fonction du rendez vous
          $sql3="CREATE TABLE rv_".$lastId." (id int(11)  NOT NULL AUTO_INCREMENT,
                    fk_from_table_infos_$lastId int(11) NOT NULL,
                    A$lastPrenom varchar(100) NOT NULL,
                    A$lastNom varchar(100) NOT NULL,
                    A$lastDateDeNaissance varchar(255) NOT NULL,
                    A$lastLieuDeNaissance varchar(255) NOT NULL,
                    $lastAutreInfos varchar(255) NOT NULL,
                    PRIMARY KEY (id),
                    CONSTRAINT teste_ibfk_$lastId FOREIGN KEY (fk_from_table_infos_$lastId) REFERENCES infos_exiger_du_rv(id)
              )";
           if( ($db->exec($sql3)) !==false  ){
            //on supprimer les donnes non demader pour le rendez vous
                $sql4="ALTER TABLE rv_".$lastId."
                         DROP COLUMN  IF EXISTS Avide1,
                         DROP COLUMN  IF EXISTS Avide2,
                         DROP COLUMN  IF EXISTS Avide3,
                         DROP COLUMN  IF EXISTS Avide4,
                         DROP COLUMN  IF EXISTS Avide5,
                         DROP COLUMN  IF EXISTS Avide6 ";
                if( ($db->exec($sql4)) !==false  ){
                 $_SESSION['success']="Rendez Vous Crèer avec succé. ";
                }
                else{ $_SESSION['erreur3']="Rendez Vous non crèer veillez réessayer.";}


           }else {
               $_SESSION['erreur3']="Rendez Vous non crèer veillez réessayer.";
           }
    }else {
        $_SESSION['erreur3']="Rendez Vous non crèer veillez réessayer.";
    }
    
    header("Location: ../view/dasboard.php");
}

?>