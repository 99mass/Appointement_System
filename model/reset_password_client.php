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
            header("Location: ../view/index.php");
    }
    if(!filter_var($mail_user, FILTER_VALIDATE_EMAIL)){
                $_SESSION['erreur']="Email incorect.";
                header("Location: ../view/index.php");
     }else{
        $sql="SELECT id,email,mot_de_passe FROM client WHERE email=:mail ";
            $query=$db->prepare($sql);
            // Ajout des données protégées
            $query->bindParam(":mail", $mail_user);
            // Exécution de la requête
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
            $passDb= $user['mot_de_passe'];
            // on verifie si on a ce compte dans la base de donné 
            if (empty($passDb)) {
                $_SESSION['erreur1']="E-mail Incorrect.";
                 header("Location: ../view/index.php");
            } else{
         //on stocke les informations de l'utlisateur dans variable super global $_SESSION
                $_SESSION['user']=[
                    "id"=>$user["id"],
                    "nom_entreprise_ou_user"=>$user["nom_entreprise_ou_user"],
                    "domaine"=>$user["domaine"],
                    "pays"=>$user["pays"],
                    "email"=>$user["email"]
                ];

                header("Location: ../view/newPassword_client.php");
            }
    }
   
}
$db->close();

?>





