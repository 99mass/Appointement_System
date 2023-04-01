<?php
@session_start(); // on demare la session

// appele de la base donné
require_once("../core/dbClient.php");

// on nettoi les donnes
$mail_user=htmlspecialchars(trim(strip_tags($_POST["mail_user"])));

//on verifie si les champs existes
if (isset($mail_user)) {

    //on verifie si les champs sont  vide
    if (empty($mail_user)) {
        $_SESSION['erreur1']="E-mail incorrect.";
            header("Location: ../view/admin.php");
    }
    if(!filter_var($mail_user, FILTER_VALIDATE_EMAIL)){
        $_SESSION['erreur']="Email incorect.";        
            header("Location: ../view/admin.php");
     }else{
            $sql="SELECT * FROM admins WHERE email=:mail";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":mail", $mail_user);
            // Exécution de la requête
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
        
            $passDb= $user['id'];
            // on verifie si on a ce compte dans la base de donné 
            if (empty($passDb)) {
                $_SESSION['erreur1']="E-mail Incorrect.";
                     header("Location: ../view/admin.php");
            } else{
         //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['admin']=[
                    "id"=>$user["id"],
                    "prenom"=>$user["prenom"],
                    "nom"=>$user["nom"],
                    "email"=>$user["email"]
                ];

            header("Location: ../view/newPassword_admin.php");
            }
            
        }
        $db->close();
}


?>





