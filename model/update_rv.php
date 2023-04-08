<?php
@session_start(); // on demare la session

// empecher l'acces a ce fichier tempsqu'on est pas connecter
if(empty($_SESSION['user'] )|| empty($_SESSION['admin'])  ){
    header("Location: ../view/index.php");
  } 

// appele de la base donné
require_once("../core/dbClient.php");
  
$id=htmlspecialchars(trim(strip_tags($_POST["idd"])));
$prenom=htmlspecialchars(trim(strip_tags($_POST["prenoms"])));
$nom=htmlspecialchars(trim(strip_tags($_POST["nom"])));
$date_de_naissance= !isset($_POST["NaissDate"]) || empty($_POST["NaissDate"])? '' : htmlspecialchars(trim(strip_tags($_POST["NaissDate"])));
$lieu_de_naissance= !isset($_POST["NaissLieu"]) || empty($_POST["NaissLieu"])? '' : htmlspecialchars(trim(strip_tags($_POST["NaissLieu"])));
$genre=htmlspecialchars(trim(strip_tags($_POST["genre"])));
$pays=htmlspecialchars(trim(strip_tags($_POST["pays"])));
$cni=htmlspecialchars(trim(strip_tags($_POST["cni"])));
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));
$heure_convocation=htmlspecialchars(trim(strip_tags($_POST["heurConvocation"])));
$dateConvocation=htmlspecialchars(trim(strip_tags($_POST["dateConvocation"])));

$date_debut=htmlspecialchars(trim(strip_tags($_POST["dateDebut"])));
$date_expiration=htmlspecialchars(trim(strip_tags($_POST["dateExpiration"])));
$lieu_rv=htmlspecialchars(trim(strip_tags($_POST["lieuRV"])));
$total_places=htmlspecialchars(trim(strip_tags($_POST["totalPersonne"])));

$_noaut1= !isset($_POST["noaut1"]) || empty($_POST["noaut1"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut1"])));
$_noaut2= !isset($_POST["noaut2"]) || empty($_POST["noaut2"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut2"])));
$_noaut3= !isset($_POST["noaut3"]) || empty($_POST["noaut3"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut3"])));
$_noaut4= !isset($_POST["noaut4"]) || empty($_POST["noaut4"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut4"])));
$_noaut5= !isset($_POST["noaut5"]) || empty($_POST["noaut5"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut5"])));
$_noaut6= !isset($_POST["noaut6"]) || empty($_POST["noaut6"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut6"])));
$_noaut7= !isset($_POST["noaut7"]) || empty($_POST["noaut7"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut7"])));
$_noaut8= !isset($_POST["noaut8"]) || empty($_POST["noaut8"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut8"])));
$_noaut9= !isset($_POST["noaut9"]) || empty($_POST["noaut9"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut9"])));
$_noaut10= !isset($_POST["noaut10"]) || empty($_POST["noaut10"])? '' : htmlspecialchars(trim(strip_tags($_POST["noaut10"])));


$autre_1= !isset($_POST["aut1"]) || empty($_POST["aut1"])?  $_noaut1 : htmlspecialchars(trim(strip_tags($_POST["aut1"])));
$autre_2= !isset($_POST["aut2"]) || empty($_POST["aut2"])?  $_noaut2 :  htmlspecialchars(trim(strip_tags($_POST["aut2"])));
$autre_3= !isset($_POST["aut3"]) || empty($_POST["aut3"])?  $_noaut3 :  htmlspecialchars(trim(strip_tags($_POST["aut3"])));
$autre_4= !isset($_POST["aut4"]) || empty($_POST["aut4"])?  $_noaut4 :  htmlspecialchars(trim(strip_tags($_POST["aut4"])));
$autre_5= !isset($_POST["aut5"]) || empty($_POST["aut5"])?  $_noaut5 :  htmlspecialchars(trim(strip_tags($_POST["aut5"])));
$autre_6= !isset($_POST["aut6"]) || empty($_POST["aut6"])?  $_noaut6 :  htmlspecialchars(trim(strip_tags($_POST["aut6"])));
$autre_7= !isset($_POST["aut7"]) || empty($_POST["aut7"])?  $_noaut7 :  htmlspecialchars(trim(strip_tags($_POST["aut7"])));
$autre_8= !isset($_POST["aut8"]) || empty($_POST["aut8"])?  $_noaut8 :  htmlspecialchars(trim(strip_tags($_POST["aut8"])));
$autre_9= !isset($_POST["aut9"]) || empty($_POST["aut9"])?  $_noaut9 :  htmlspecialchars(trim(strip_tags($_POST["aut9"])));
$autre_10= !isset($_POST["aut10"]) || empty($_POST["aut10"])?  $_noaut10 :  htmlspecialchars(trim(strip_tags($_POST["aut10"])));


// on remplace les space etre les mot cas ou l'utilisateur met des sapce entre les mots
$aut_update1=str_replace(" ","_",$autre_1);
$aut_update2=str_replace(" ","_",$autre_2);
$aut_update3=str_replace(" ","_",$autre_3);
$aut_update4=str_replace(" ","_",$autre_4);
$aut_update5=str_replace(" ","_",$autre_5);
$aut_update6=str_replace(" ","_",$autre_6);
$aut_update7=str_replace(" ","_",$autre_7);
$aut_update8=str_replace(" ","_",$autre_8);
$aut_update9=str_replace(" ","_",$autre_9);
$aut_update10=str_replace(" ","_",$autre_10);

    $sqls="UPDATE `infos_exiger_du_rv` SET `prenom`=:prenoms,`nom`=:noms,`date_de_naissance`=:date_de_naissances,`lieu_de_naissance`=:lieu_de_naissances,`genre`=:genres,`pays`=:pays,`cni`=:cni,`mail`=:mails,`heure_convocation`=:heure_convocations,
                                         `date_convocation`=:date_convocations,`date_debut`=:date_debuts,`date_expiration`=:date_expirations,`lieu_rv`=:lieu_rvs,`total_places`=:total_placess,
                                         `autre1`=:autre_1,`autre2`=:autre_2,`autre3`=:autre_3,`autre4`=:autre_4,`autre5`=:autre_5,`autre6`=:autre_6,`autre7`=:autre_7,`autre8`=:autre_8,`autre9`=:autre_9,`autre10`=:autre_10
         WHERE `id`=:idd;";
    $requet=$db->prepare($sqls);

    $requet->bindValue(":idd",$id);
    $requet->bindValue(":prenoms",$prenom);
    $requet->bindValue(":noms",$nom);
    $requet->bindValue(":date_de_naissances",$date_de_naissance);
    $requet->bindValue(":lieu_de_naissances",$lieu_de_naissance);
    $requet->bindValue(":genres",$genre);
    $requet->bindValue(":pays",$pays);
    $requet->bindValue(":cni",$cni);
    $requet->bindValue(":mails",$mail);
    $requet->bindValue(":heure_convocations",$heure_convocation);
    $requet->bindParam(":date_convocations",$dateConvocation);
    $requet->bindValue(":date_debuts",$date_debut);
    $requet->bindValue(":date_expirations",$date_expiration);
    $requet->bindValue(":lieu_rvs",$lieu_rv);
    $requet->bindValue(":total_placess",$total_places);

    $requet->bindParam(":autre_1",$aut_update1);
    $requet->bindParam(":autre_2",$aut_update2);
    $requet->bindParam(":autre_3",$aut_update3);
    $requet->bindParam(":autre_4",$aut_update4);
    $requet->bindParam(":autre_5",$aut_update5);
    $requet->bindParam(":autre_6",$aut_update6);
    $requet->bindParam(":autre_7",$aut_update7);
    $requet->bindParam(":autre_8",$aut_update8);
    $requet->bindParam(":autre_9",$aut_update9);
    $requet->bindParam(":autre_10",$aut_update10);
    // $requet->execute();
    if ($requet->execute()!==false) {

       $r=  $db->query("DROP TABLE rv_$id;");
        if($r!==false){


        $lastPrenom=!empty($prenom)? "prenom" : "vide1";
        $lastNom= !empty($nom) ? "nom" : "vide2";
        $lastDateDeNaissance=!empty($date_de_naissance)?  "dateNaissance" : "vide3";
        $lastLieuDeNaissance=!empty($lieu_de_naissance)? "lieuNaissance" : "vide4";
        $lastGenre=!empty($genre)? "genre" : "vide5";
        $lastPays=!empty($pays)? "pays" : "vide6";
        $lastCni=!empty($cni)? "cni" : "vide7";
        $lastMail=!empty($mail)? "mail" : "vide8";
        $autre1= !empty($aut_update1) ? $aut_update1 : "vide9";
        $autre2= !empty($aut_update2) ? $aut_update2 : "vide10";
        $autre3= !empty($aut_update3) ? $aut_update3 : "vide11";
        $autre4= !empty($aut_update4) ? $aut_update4 : "vide12";
        $autre5= !empty($aut_update5) ? $aut_update5 : "vide13";
        $autre6= !empty($aut_update6) ? $aut_update6 : "vide14";
        $autre7= !empty($aut_update7) ? $aut_update7 : "vide15";
        $autre8= !empty($aut_update8) ? $aut_update8 : "vide16";
        $autre9= !empty($aut_update9) ? $aut_update9 : "vide17";
        $autre10= !empty($aut_update10)  ? $aut_update10 : "vide18";

        // requete pour creer une table d'utlisateur on fonction du rendez vous
        $sql3="CREATE TABLE rv_$id  (id int(11)  NOT NULL AUTO_INCREMENT,
                    code int(11) NOT NULL,
                    _$lastPrenom varchar(255) NOT NULL,
                    _$lastNom varchar(255) NOT NULL,
                    _$lastDateDeNaissance date NOT NULL,
                    _$lastLieuDeNaissance varchar(255) NOT NULL,
                    _$lastGenre varchar(255) NOT NULL,
                    _$lastPays varchar(50) NOT NULL,
                    _$lastCni varchar(255) NOT NULL,
                    _$lastMail varchar(255) NOT NULL,
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
                    UNIQUE KEY _$lastMail (_$lastMail),
                    UNIQUE KEY `code` (`code`)
                  
            )";
            //   CONSTRAINT teste_ibfk_$id FOREIGN KEY (fk_from_table_infos_$id) REFERENCES infos_exiger_du_rv(id)
            if( ($db->exec($sql3)) !==false  ){
                //on supprimer les donnes non demader pour le rendez vous
                $sql4="ALTER TABLE rv_$id
                             DROP COLUMN  IF EXISTS _vide1,
                             DROP COLUMN  IF EXISTS _vide2,
                             DROP COLUMN  IF EXISTS _vide3,
                             DROP COLUMN  IF EXISTS _vide4,
                             DROP COLUMN  IF EXISTS _vide5,
                             DROP COLUMN  IF EXISTS _vide6,
                             DROP COLUMN  IF EXISTS _vide7,
                             DROP COLUMN  IF EXISTS _vide8,
                             DROP COLUMN  IF EXISTS vide9,
                             DROP COLUMN  IF EXISTS vide10,
                             DROP COLUMN  IF EXISTS vide11,
                             DROP COLUMN  IF EXISTS vide12,
                             DROP COLUMN  IF EXISTS vide13,
                             DROP COLUMN  IF EXISTS vide14,
                             DROP COLUMN  IF EXISTS vide15,
                             DROP COLUMN  IF EXISTS vide16,
                             DROP COLUMN  IF EXISTS vide17,
                             DROP COLUMN  IF EXISTS vide18
                        ";
                 $db->exec($sql4);
            }
    $_SESSION['success']="Rendez-Vous modifier avec succé.";
    }
    }
    else {
        $_SESSION['erreur3']="Veillez réessayez une erreure c'est produite.";
    }
   
    $sessnId=$_SESSION['user']['id'];
    $user=$_SESSION['user']['nom_entreprise_ou_user'];
     header("Location: ../view/dasboard.php?id_rv_get=$sessnId&name=$user");
     $db->close();

?>