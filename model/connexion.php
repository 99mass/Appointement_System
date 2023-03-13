<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$nom_entreprise_or_utilisaterur=htmlspecialchars(trim(strip_tags($_POST["login"])));
$password=htmlspecialchars(trim(strip_tags($_POST["password"])));

//on verifie si les champs existes
if (isset($nom_entreprise_or_utilisaterur) && isset($password)) {

    //on verifie si les champs sont  vide
    if (empty($nom_entreprise_or_utilisaterur) || empty($password)) {
        $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
            header("Location: ../view/index.php");
    }
        $sql="SELECT id,nom_entreprise_ou_user,domaine,pays,email,mot_de_passe,roles FROM client WHERE nom_entreprise_ou_user=:nom OR email=:mail  ";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":nom",$nom_entreprise_or_utilisaterur);
            $query->bindParam(":mail", $nom_entreprise_or_utilisaterur);
            // Exécution de la requête
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
            $passDb= $user['mot_de_passe'];
            // on verifie si on a ce compte dans la base de donné 
            if (empty($passDb)) {
                $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
                 header("Location: ../view/index.php");
            }
            // on verifie si le mot donne est identique a celui stocker a la base de donné
            if (!password_verify($password,$passDb)) {
                    $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
                     header("Location: ../view/index.php");
            } else{
                //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['user']=[
                    "id"=>$user["id"],
                    "nom_entreprise_ou_user"=>$user["nom_entreprise_ou_user"],
                    "domaine"=>$user["domaine"],
                    "pays"=>$user["pays"],
                    "email"=>$user["email"],
                     "roles"=>$user["roles"]
                ];
                
                // si le compte exite on le redirie vers sa page de profile
                header("Location: ../view/dasboard.php");
                
            }


}


?>





