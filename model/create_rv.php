<?php
@session_start(); // on demare la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if(empty($_SESSION['user'] ) ){
    header("Location: ../view/index.php");
  } 
// appele de la base donné
require_once("../core/dbClient.php");

$nom_structure=$_SESSION['user']['nom_entreprise_ou_user'];
$id_rv=$_SESSION['user']['id'];
$prenom= !isset($_POST["prenoms"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["prenoms"]))) ;
$noms= !isset($_POST["nom"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["nom"])));
$date_de_naissances= !isset($_POST["dateNaiss"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["dateNaiss"])));
$lieu_de_naissances= !isset($_POST["lieuNaiss"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["lieuNaiss"])));
$genre= !isset($_POST["genre"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["genre"])));
$mail= !isset($_POST["mail"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["mail"])));
$pays= !isset($_POST["pays"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["pays"])));
$CNI= !isset($_POST["cni"]) ? "0" : htmlspecialchars(trim(strip_tags($_POST["cni"])));

$heure_convocation=htmlspecialchars(trim(strip_tags($_POST["heurConvocations"])));
$dateConvocation=htmlspecialchars(trim(strip_tags($_POST["dateConvocation"])));

$date_debut=htmlspecialchars(trim(strip_tags($_POST["dateDebuts"])));
$date_expiration=htmlspecialchars(trim(strip_tags($_POST["dateExpirations"])));
$lieu_rv=htmlspecialchars(trim(strip_tags($_POST["lieuRVs"])));
$total_places=htmlspecialchars(trim(strip_tags($_POST["totalPersonnes"])));

$autre_1=!isset($_POST["info1"]) || empty($_POST["info1"])? '' : htmlspecialchars(trim(strip_tags($_POST["info1"])));
$autre_2=!isset($_POST["info2"]) || empty($_POST["info2"])? '' : htmlspecialchars(trim(strip_tags($_POST["info2"])));
$autre_3=!isset($_POST["info3"]) || empty($_POST["info3"])? '' : htmlspecialchars(trim(strip_tags($_POST["info3"])));
$autre_4=!isset($_POST["info4"]) || empty($_POST["info4"])? '' : htmlspecialchars(trim(strip_tags($_POST["info4"])));
$autre_5=!isset($_POST["info5"]) || empty($_POST["info5"])? '' : htmlspecialchars(trim(strip_tags($_POST["info5"])));
$autre_6=!isset($_POST["info6"]) || empty($_POST["info6"])? '' : htmlspecialchars(trim(strip_tags($_POST["info6"])));
$autre_7=!isset($_POST["info7"]) || empty($_POST["info7"])? '' : htmlspecialchars(trim(strip_tags($_POST["info7"])));
$autre_8=!isset($_POST["info8"]) || empty($_POST["info8"])? '' : htmlspecialchars(trim(strip_tags($_POST["info8"])));
$autre_9=!isset($_POST["info9"]) || empty($_POST["info9"])? '' : htmlspecialchars(trim(strip_tags($_POST["info9"])));
$autre_10=!isset($_POST["info10"]) || empty($_POST["info10"])? '' : htmlspecialchars(trim(strip_tags($_POST["info10"])));

$autre1=str_replace(" ","_",$autre_1);
$autre2=str_replace(" ","_",$autre_2);
$autre3=str_replace(" ","_",$autre_3);
$autre4=str_replace(" ","_",$autre_4);
$autre5=str_replace(" ","_",$autre_5);
$autre6=str_replace(" ","_",$autre_6);
$autre7=str_replace(" ","_",$autre_7);
$autre8=str_replace(" ","_",$autre_8);
$autre9=str_replace(" ","_",$autre_9);
$autre10=str_replace(" ","_",$autre_10);
if (isset($_POST))  {
  
  $sql="INSERT INTO infos_exiger_du_rv(id,id_rv,prenom,nom,date_de_naissance,lieu_de_naissance,genre,pays,cni,mail,heure_convocation,date_convocation,date_debut,date_expiration,lieu_rv,total_places,acces,
                                        autre1,autre2,autre3,autre4,autre5,autre6,autre7,autre8,autre9,autre10)
          VALUES (null,:id_rvs,:prenoms,:noms,:date_de_naissances,:lieu_de_naissances,:genres,:pays,:cni,:mails,:heure_convocations,:date_convocations,:date_debuts,:date_expirations,:lieu_rvs,:total_placess,'1',
                    :autre_1,:autre_2,:autre_3,:autre_4,:autre_5,:autre_6,:autre_7,:autre_8,:autre_9,:autre_10)";
    $requet=$db->prepare($sql);

    $requet->bindParam(":id_rvs",$id_rv);
    $requet->bindParam(":prenoms",$prenom);
    $requet->bindParam(":noms",$noms,);
    $requet->bindParam(":date_de_naissances",$date_de_naissances);
    $requet->bindParam(":lieu_de_naissances",$lieu_de_naissances);
    $requet->bindParam(":genres",$genre);
    $requet->bindParam(":pays",$pays);
    $requet->bindParam(":cni",$CNI);
    $requet->bindParam(":mails",$mail);
    $requet->bindParam(":heure_convocations",$heure_convocation);
    $requet->bindParam(":date_convocations",$dateConvocation);
    
    $requet->bindParam(":date_debuts",$date_debut);
    $requet->bindParam(":date_expirations",$date_expiration);
    $requet->bindParam(":lieu_rvs",$lieu_rv);
    $requet->bindParam(":total_placess",$total_places);

    $requet->bindParam(":autre_1",$autre1);
    $requet->bindParam(":autre_2",$autre2);
    $requet->bindParam(":autre_3",$autre3);
    $requet->bindParam(":autre_4",$autre4);
    $requet->bindParam(":autre_5",$autre5);
    $requet->bindParam(":autre_6",$autre6);
    $requet->bindParam(":autre_7",$autre7);
    $requet->bindParam(":autre_8",$autre8);
    $requet->bindParam(":autre_9",$autre9);
    $requet->bindParam(":autre_10",$autre10);
    if ($requet->execute()) {

         $lastId=$db->lastInsertId();
         $sql2="SELECT * FROM infos_exiger_du_rv WHERE id=$lastId";
         $requet2=$db->prepare($sql2);
         $requet2->execute();
        $laste_rv= $requet2->fetch(PDO::FETCH_ASSOC);

          $lastPrenom=!( $laste_rv["prenom"] ==="0" )? "prenom" : "vide1";
          $lastNom= $laste_rv["nom"]==1 ? "nom" : "vide2";
          $lastDateDeNaissance= $laste_rv["date_de_naissance"]==1 ? "dateNaissance" : "vide3";
          $lastLieuDeNaissance= $laste_rv["lieu_de_naissance"]==1 ? "lieuNaissance" : "vide4";
          $lastGenre= $laste_rv["mail"]==1 ? "mail" : "vide5";
          $lastMail= $laste_rv["genre"]==1 ? "genre" : "vide6";
          $lastPays= $laste_rv["pays"]==1 ? "pays" : "vide7";
          $lastCni= $laste_rv["cni"]==1 ? "cni" : "vide8";
          $autre1= $laste_rv["autre1"]!="" ? $laste_rv["autre1"] : "autre1";
          $autre2= $laste_rv["autre2"]!="" ? $laste_rv["autre2"] : "autre2";
          $autre3= $laste_rv["autre3"]!="" ? $laste_rv["autre3"] : "autre3";
          $autre4= $laste_rv["autre4"]!="" ? $laste_rv["autre4"] : "autre4";
          $autre5= $laste_rv["autre5"]!="" ? $laste_rv["autre5"] : "autre5";
          $autre6= $laste_rv["autre6"]!="" ? $laste_rv["autre6"] : "autre6";
          $autre7= $laste_rv["autre7"]!="" ? $laste_rv["autre7"] : "autre7";
          $autre8= $laste_rv["autre8"]!="" ? $laste_rv["autre8"] : "autre8";
          $autre9= $laste_rv["autre9"]!="" ? $laste_rv["autre9"] : "autre9";
          $autre10= $laste_rv["autre10"]!="" ? $laste_rv["autre10"] : "autre10";
          // requete pour creer une table d'utlisateur on fonction du rendez vous
           // fk_from_table_infos_$lastId int(11) NOT NULL,
          $sql3="CREATE TABLE rv_".$lastId." (id int(11)  NOT NULL AUTO_INCREMENT,
                    code int(11) NOT NULL,
                    _$lastPrenom varchar(255) NOT NULL,
                    _$lastNom varchar(255) NOT NULL,
                    _$lastDateDeNaissance date NOT NULL,
                    _$lastLieuDeNaissance varchar(255) NOT NULL,
                    _$lastGenre varchar(255) NOT NULL,
                    _$lastMail varchar(255) NOT NULL,
                    _$lastPays varchar(255) NOT NULL,
                    _$lastCni varchar(255) NOT NULL,
                    $autre1 varchar(255) NOT NULL,
                    $autre2 varchar(255) NOT NULL,
                    $autre3 varchar(255) NOT NULL,
                    $autre4 varchar(255) NOT NULL,
                    $autre5 varchar(255) NOT NULL,
                    $autre6 varchar(255) NOT NULL,
                    $autre7 varchar(255) NOT NULL,
                    $autre8 varchar(255) NOT NULL,
                    $autre9 varchar(255) NOT NULL,
                    $autre10 varchar(255) NOT NULL,
                    PRIMARY KEY (id),
                    UNIQUE KEY `code` (`code`)
                    
              )";
               // CONSTRAINT teste_ibfk_$lastId FOREIGN KEY (fk_from_table_infos_$lastId) REFERENCES infos_exiger_du_rv(id)
           if( ($db->exec($sql3)) !==false  ){
            //on supprimer les donnes non demader pour le rendez vous
                $sql4="ALTER TABLE rv_".$lastId."
                         DROP COLUMN  IF EXISTS _vide1,
                         DROP COLUMN  IF EXISTS _vide2,
                         DROP COLUMN  IF EXISTS _vide3,
                         DROP COLUMN  IF EXISTS _vide4,
                         DROP COLUMN  IF EXISTS _vide5,
                         DROP COLUMN  IF EXISTS _vide6,
                         DROP COLUMN  IF EXISTS _vide7,
                         DROP COLUMN  IF EXISTS _vide8,
                         DROP COLUMN  IF EXISTS autre1,
                         DROP COLUMN  IF EXISTS autre2,
                         DROP COLUMN  IF EXISTS autre3,
                         DROP COLUMN  IF EXISTS autre4,
                         DROP COLUMN  IF EXISTS autre5,
                         DROP COLUMN  IF EXISTS autre6,
                         DROP COLUMN  IF EXISTS autre7,
                         DROP COLUMN  IF EXISTS autre8,
                         DROP COLUMN  IF EXISTS autre9,
                         DROP COLUMN  IF EXISTS autre10
                    ";
                if( ($db->exec($sql4)) !==false  ){
                 $_SESSION['success']="Rendez-Vous Crèer avec succé. ";
                }
                else{ $_SESSION['erreur3']="Rendez-Vous non crèer veillez réessayer.";}


           }else {
               $_SESSION['erreur3']="Rendez-Vous non crèer veillez réessayer.";
           }
    }else {
        $_SESSION['erreur3']="Rendez-Vous non crèer veillez réessayer.";
    }
     $nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
    $sessionId=$_SESSION['user']['id'];
    header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
    
}
 // fermer la connexion à la base de données
 $db->close();
?>