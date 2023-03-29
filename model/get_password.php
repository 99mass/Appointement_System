<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));

//on verifie si les champs existes
if (isset($mail)) {

    //on verifie si les champs sont  vide
    if (empty($mail)) {
        $_SESSION['erreur1']="Cet E-mail n'existe pas.";
            header("Location: ../view/index.php");
    }else{
     if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $_SESSION['erreur']="Email incorect.";
                header("Location: ../view/index.php");
        }
        $sql="SELECT id,nom_entreprise_ou_user,domaine,pays,email,mot_de_passe FROM client WHERE email=:mail  ";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":mail", $mail);
            // Exécution de la requête
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
            $passDb= $user['mot_de_passe'];
            // on verifie si on a ce compte dans la base de donné 
            if (empty($passDb)) {
                $_SESSION['erreur1']="Cet E-mail n'existe pas.";
                 header("Location: ../view/index.php");
            }else{
             //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['user']=[
                    "id"=>$user["id"],
                    "nom_entreprise_ou_user"=>$user["nom_entreprise_ou_user"],
                    "domaine"=>$user["domaine"],
                    "pays"=>$user["pays"],
                    "email"=>$user["email"]
                ];
                $_SESSION['getPass']=$user["id"];
                $sessionId=$_SESSION['user']['id'];
                 $nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
                // si le compte exite on le redirie vers sa page de profile
                header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
            }
    }
}

$db->close();

?>