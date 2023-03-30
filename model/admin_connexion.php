<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$login=htmlspecialchars(trim(strip_tags($_POST["login"])));
$password=htmlspecialchars(trim(strip_tags($_POST["password"])));

//on verifie si les champs existes
if (isset($login) && isset($password)) {

    //on verifie si les champs sont  vide
    if (empty($login) || empty($password)) {
        $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
        header("Location: ../view/admin.php");
    }
        $sql="SELECT * FROM admins WHERE email=:mail  ";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":mail", $login);
            // Exécution de la requête
            $query->execute();
            $admin=$query->fetch(PDO::FETCH_ASSOC);
            $passDb= $admin['password_admin'];
            // on verifie si on a ce compte dans la base de donné 
            if (empty($passDb)) {
                $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
                
                header("Location: ../view/admin.php");
            }
            // on verifie si le mot donne est identique a celui stocker a la base de donné
            if (!password_verify($password,$passDb)) {
                    $_SESSION['erreur1']="E-mail et/ou Mot de passe Incorrect.";
                    header("Location: ../view/admin.php");
            } else{
                //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['admin']=[
                    "id"=>$admin["id"],
                    "prenom"=>$admin["prenom"],
                    "nom"=>$admin["nom"],
                    "email"=>$admin["email"]
                ];
                // si le compte exite on le redirie vers sa page de profile
                header("Location: ../view/dasboard_admin.php");
                
            }


}
 // fermer la connexion à la base de données
 $db->close();

?>





