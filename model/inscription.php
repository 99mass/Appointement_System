<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$nom_entreprise_or_utilisaterur=htmlspecialchars(trim(strip_tags($_POST["nom_entrep_utilisateur"])));
$domaine=htmlspecialchars(trim(strip_tags($_POST["domaine"])));
$pays=htmlspecialchars(trim(strip_tags($_POST["pays"])));
$mail=htmlspecialchars(trim(strip_tags($_POST["mail"])));
$password=htmlspecialchars(trim(strip_tags($_POST["password"])));


//on verifie si les champs existes
if (isset($nom_entreprise_or_utilisaterur) && isset($domaine) && isset($pays)  && isset($mail) && isset($password)) {

    //on verifie si les champs sont  vide
    if (empty($nom_entreprise_or_utilisaterur) || empty($domaine) || empty($pays) 
                || empty($mail) || empty($password)) {
        $_SESSION['erreur']="Inscription non reussit : informations non complet";
            header("Location: ../view/index.php");
    }else{
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $_SESSION['erreur']="Email incorect.";
                header("Location: ../view/index.php");
        }else{
        $password_hashed=password_hash($password,PASSWORD_ARGON2ID);   
        $sql="INSERT INTO client(id,nom_entreprise_ou_user,domaine,pays,email,mot_de_passe,roles)
                VALUES(null,:nom,:dom,:pay,:mail,:motpass,'EN')";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":nom",$nom_entreprise_or_utilisaterur);
            $query->bindParam(":dom", $domaine);
            $query->bindParam(":pay", $pays);
            $query->bindParam(":mail", $mail);
            $query->bindParam(":motpass",$password_hashed);
            // Exécution de la requête
            if($query->execute()){
                $id=$db->lastInsertId();
                $_SESSION['success']="Inscription reussit ";
                  //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['user']=[
                    "id"=>$id,
                    "nom_entreprise_ou_user"=>$user["nom_entreprise_ou_user"],
                    "domaine"=>$user["domaine"],
                    "pays"=>$user["pays"],
                    "email"=>$user["email"],
                     "roles"=>$user["roles"]
                ];
                $sessionId=$_SESSION['user']['id'];
                $nom_entreprise_ou_user=$_SESSION['user']['nom_entreprise_ou_user'];
                // si le compte exite on le redirie vers sa page de profile
                header("Location: ../view/dasboard.php?id_rv_get=$sessionId&name=$nom_entreprise_ou_user");
            }
        }
     }

    // fermer la connexion à la base de données
    

}

$db->close();
?>





