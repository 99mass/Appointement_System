<?php
@session_start(); // on demare la session

  // fonction pour generer des code d'acces
  $genererCode = function() {
    $chiffres = '123456789';
    $code = '';
    for ($i = 0; $i < 5; $i++) {
      $index = rand(0, strlen($chiffres) - 1);
      $code .= $chiffres[$index];
    }
    return $code;
  };


// appele de la base donné
require_once("../core/dbClient.php");

$code=$genererCode();

$id=htmlspecialchars(trim(strip_tags($_POST["idd"])));
$id_rv=htmlspecialchars(trim(strip_tags($_POST["id_rv"])));
$nameStruct=htmlspecialchars(trim(strip_tags($_POST["nameStruct"])));
$prenom= !isset($_POST["_prenom"]) || empty($_POST["_prenom"])? '' : htmlspecialchars(trim(strip_tags($_POST["_prenom"])));
$nom= !isset($_POST["_nom"]) || empty($_POST["_nom"])? '' : htmlspecialchars(trim(strip_tags($_POST["_nom"])));
$date_de_naissance= !isset($_POST["_dateNaissance"]) || empty($_POST["_dateNaissance"])? '' : htmlspecialchars(trim(strip_tags($_POST["_dateNaissance"])));
$lieu_de_naissance= !isset($_POST["_lieuNaissance"]) || empty($_POST["_lieuNaissance"])? '' : htmlspecialchars(trim(strip_tags($_POST["_lieuNaissance"])));
$genre= !isset($_POST["_genre"]) || empty($_POST["_genre"])? '' : htmlspecialchars(trim(strip_tags($_POST["_genre"])));
$pays= !isset($_POST["_pays"]) || empty($_POST["_pays"])? '' : htmlspecialchars(trim(strip_tags($_POST["_pays"])));
$cni= !isset($_POST["_cni"]) || empty($_POST["_cni"])? '' : htmlspecialchars(trim(strip_tags($_POST["_cni"])));
$mail= !isset($_POST["_mail"]) || empty($_POST["_mail"])? '' : htmlspecialchars(trim(strip_tags($_POST["_mail"])));


// recuperer le nomme des colonnes non connnue
$inconCol1=!isset($_POST["col1"]) || empty($_POST["col1"])? '' : htmlspecialchars(trim(strip_tags($_POST["col1"])));
$inconCol2=!isset($_POST["col2"]) || empty($_POST["col2"])? '' : htmlspecialchars(trim(strip_tags($_POST["col2"])));
$inconCol3=!isset($_POST["col3"]) || empty($_POST["col3"])? '' : htmlspecialchars(trim(strip_tags($_POST["col3"])));
$inconCol4=!isset($_POST["col4"]) || empty($_POST["col4"])? '' : htmlspecialchars(trim(strip_tags($_POST["col4"])));
$inconCol5=!isset($_POST["col5"]) || empty($_POST["col5"])? '' : htmlspecialchars(trim(strip_tags($_POST["col5"])));
$inconCol6=!isset($_POST["col6"]) || empty($_POST["col6"])? '' : htmlspecialchars(trim(strip_tags($_POST["col6"])));
$inconCol7=!isset($_POST["col7"]) || empty($_POST["col7"])? '' : htmlspecialchars(trim(strip_tags($_POST["col7"])));
$inconCol8=!isset($_POST["col8"]) || empty($_POST["col8"])? '' : htmlspecialchars(trim(strip_tags($_POST["col8"])));
$inconCol9=!isset($_POST["col9"]) || empty($_POST["col9"])? '' : htmlspecialchars(trim(strip_tags($_POST["col9"])));
$inconCol10=!isset($_POST["col10"]) || empty($_POST["col10"])? '' : htmlspecialchars(trim(strip_tags($_POST["col10"])));

// recuperer ce que l'utilisateur a indiquer sur les colonnes inconnu
$info1=!isset($_POST["info1"]) || empty($_POST["info1"])? '' : htmlspecialchars(trim(strip_tags($_POST["info1"])));
$info2=!isset($_POST["info2"]) || empty($_POST["info2"])? '' : htmlspecialchars(trim(strip_tags($_POST["info2"])));
$info3=!isset($_POST["info3"]) || empty($_POST["info3"])? '' : htmlspecialchars(trim(strip_tags($_POST["info3"])));
$info4=!isset($_POST["info4"]) || empty($_POST["info4"])? '' : htmlspecialchars(trim(strip_tags($_POST["info4"])));
$info5=!isset($_POST["info5"]) || empty($_POST["info5"])? '' : htmlspecialchars(trim(strip_tags($_POST["info5"])));
$info6=!isset($_POST["info6"]) || empty($_POST["info6"])? '' : htmlspecialchars(trim(strip_tags($_POST["info6"])));
$info7=!isset($_POST["info7"]) || empty($_POST["info7"])? '' : htmlspecialchars(trim(strip_tags($_POST["info7"])));
$info8=!isset($_POST["info8"]) || empty($_POST["info8"])? '' : htmlspecialchars(trim(strip_tags($_POST["info8"])));
$info9=!isset($_POST["info9"]) || empty($_POST["info9"])? '' : htmlspecialchars(trim(strip_tags($_POST["info9"])));
$info10=!isset($_POST["info10"]) || empty($_POST["info10"])? '' : htmlspecialchars(trim(strip_tags($_POST["info10"])));

$email =$mail;   
// Envoie l'email de confirmation
$to = $email;
$subject = "Confirmation d'inscription par $nameStruct";
$message = "<html>
            <body >
                <p>Bonjour,</p>
                <p>Votre inscription a bien été prise en compte.</p>
                <p>Voici votre code d'accès : <span style='background-color: #337ab7;color: #fff;font-size: larger;font-weight: bold;'>$code</span> </p>
                <p>Cordialement, L'équipe $nameStruct.</p>
            </body>
            </html>";

$headers = "From: globaladventurecode@gmail.com " . "\r\n" .
            "Reply-To: globaladventurecode@gmail.com" . "\r\n" .
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type:text/html;charset=UTF-8" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();


if(mail($to, $subject, $message, $headers)) {
   
$sqll = "SHOW COLUMNS FROM rv_$id";
$requet = $db->prepare($sqll);
$requet->execute();
$columns = $requet->fetchAll(PDO::FETCH_ASSOC);
$existing_columns = array_column($columns, 'Field');


$sql = "INSERT INTO rv_$id ( code,";
                                    if (in_array('_prenom', $existing_columns)) { $sql .= "_prenom,"; }
                                    if (in_array('_nom', $existing_columns)) { $sql .= "_nom,"; }
                                    if (in_array('_dateNaissance', $existing_columns)) { $sql .= "_dateNaissance,"; }
                                    if (in_array('_lieuNaissance', $existing_columns)) { $sql .= "_lieuNaissance,"; }
                                    if (in_array('_genre', $existing_columns)) { $sql .= "_genre,"; }
                                    if (in_array('_pays', $existing_columns)) { $sql .= "_pays,"; }
                                    if (in_array('_cni', $existing_columns)) { $sql .= "_cni,"; }
                                    if (in_array('_mail', $existing_columns)) { $sql .= "_mail,"; }
                                    if (in_array($inconCol1, $existing_columns)) { $sql .= "$inconCol1,"; }
                                    if (in_array($inconCol2, $existing_columns)) { $sql .= "$inconCol2,"; }
                                    if (in_array($inconCol3, $existing_columns)) { $sql .= "$inconCol3,"; }
                                    if (in_array($inconCol4, $existing_columns)) { $sql .= "$inconCol4,"; }
                                    if (in_array($inconCol5, $existing_columns)) { $sql .= "$inconCol5,"; }
                                    if (in_array($inconCol6, $existing_columns)) { $sql .= "$inconCol6,"; }
                                    if (in_array($inconCol7, $existing_columns)) { $sql .= "$inconCol7,"; }
                                    if (in_array($inconCol8, $existing_columns)) { $sql .= "$inconCol8,"; }
                                    if (in_array($inconCol9, $existing_columns)) { $sql .= "$inconCol9,"; }
                                    if (in_array($inconCol10, $existing_columns)) { $sql .= "$inconCol10,"; }
                $sql = rtrim($sql, ","); // Supprime la virgule en trop à la fin de la liste des colonnes
                $sql .= ") VALUES (:cod,";
                                    if (in_array('_prenom', $existing_columns)) { $sql .= ":prenom,";   }
                                    if (in_array('_nom', $existing_columns)) { $sql .= ":nom,";   }
                                    if (in_array('_dateNaissance', $existing_columns)) { $sql .= ":dateNaissance,";   }
                                    if (in_array('_lieuNaissance', $existing_columns)) { $sql .= ":lieuNaissance,";   }
                                    if (in_array('_genre', $existing_columns)) { $sql .= ":genre,";  }
                                    if (in_array('_pays', $existing_columns)) { $sql .= ":pays,";   }
                                    if (in_array('_cni', $existing_columns)) { $sql .= ":cni,";   }
                                    if (in_array('_mail', $existing_columns)) { $sql .= ":mail,";   }
                                    if (in_array($inconCol1, $existing_columns)) { $sql .= ":info1,"; }
                                    if (in_array($inconCol2, $existing_columns)) { $sql .= ":info2,"; }
                                    if (in_array($inconCol3, $existing_columns)) { $sql .= ":info3,"; }
                                    if (in_array($inconCol4, $existing_columns)) { $sql .= ":info4,"; }
                                    if (in_array($inconCol5, $existing_columns)) { $sql .= ":info5,"; }
                                    if (in_array($inconCol6, $existing_columns)) { $sql .= ":info6,"; }
                                    if (in_array($inconCol7, $existing_columns)) { $sql .= ":info7,"; }
                                    if (in_array($inconCol8, $existing_columns)) { $sql .= ":info8,"; }
                                    if (in_array($inconCol9, $existing_columns)) { $sql .= ":info9,"; }
                                    if (in_array($inconCol10, $existing_columns)) { $sql .= ":info10,"; }
               $sql = rtrim($sql, ","); // Supprime la virgule en trop à la fin de la liste des colonnes
$sql .= ")";


$stmt = $db->prepare($sql);
        $stmt->bindParam(':cod', $code);
        if (in_array('_prenom', $existing_columns)) {
            $stmt->bindParam(':prenom', $prenom);
        
        }
        if (in_array('_nom', $existing_columns)) {
            $stmt->bindParam(':nom', $nom);
        }
        if (in_array('_dateNaissance', $existing_columns)) {
            $stmt->bindParam(':dateNaissance', $date_de_naissance);
        }
        if (in_array('_lieuNaissance', $existing_columns)) {
            $stmt->bindParam(':lieuNaissance', $lieu_de_naissance);
        }
        if (in_array('_genre', $existing_columns)) {
        $stmt->bindParam(':genre', $genre);
        }
        if (in_array('_pays', $existing_columns)) {
            $stmt->bindParam(':pays', $pays);
        }
        if (in_array('_cni', $existing_columns)) {
            $stmt->bindParam(':cni', $cni);
        }
        if (in_array('_mail', $existing_columns)) {
            $stmt->bindParam(':mail', $mail);
        }

        // info colonne non connus
        if (in_array($inconCol1, $existing_columns)) {
            $stmt->bindParam(':info1', $info1);
        }
        if (in_array($inconCol2, $existing_columns)) {
            $stmt->bindParam(':info2', $info2);
        }
        if (in_array($inconCol3, $existing_columns)) {
            $stmt->bindParam(':info3', $info3);
        }
        if (in_array($inconCol4, $existing_columns)) {
            $stmt->bindParam(':info4', $info4);
        }
        if (in_array($inconCol5, $existing_columns)) {
            $stmt->bindParam(':info5', $info5);
        }
        if (in_array($inconCol6, $existing_columns)) {
            $stmt->bindParam(':info6', $info6);
        }
        if (in_array($inconCol7, $existing_columns)) {
            $stmt->bindParam(':info7', $info7);
        }
        if (in_array($inconCol8, $existing_columns)) {
            $stmt->bindParam(':info8', $info8);
        }
        if (in_array($inconCol9, $existing_columns)) {
            $stmt->bindParam(':info9', $info9);
        }
        if (in_array($inconCol10, $existing_columns)) {
            $stmt->bindParam(':info10', $info10);
        }


if ($stmt->execute()) {
     header("Location: ../view/dasboard.php?id_rv_get=$id_rv&name=$nameStruct&m=suc");
}else {
    header("Location: ../view/dasboard.php?id_rv_get=$id_rv&name=$nameStruct&m=er");
}
}else{
    header("Location: ../view/dasboard.php?id_rv_get=$id_rv&name=$nameStruct&m=erm");

}
