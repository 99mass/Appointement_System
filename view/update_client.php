<?php  @session_start(); //on demarr la session
if(empty($_SESSION['admin'])  ){
  header("Location: ../view/admin.php");
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <link rel="stylesheet" href="../view/css/style_infos.css">
    <link rel="stylesheet" href="../view/css/style_profiles.css">
     <!--Includes Cdn Css -->
     <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
    <style>
        #form1{
            display:block;
        }
    </style>
</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">

         <?php require_once("../view/include/header_admin.php")?>
            <div class="container containe">
            <?php 
              // appele de la base donné
                require_once("../core/dbClient.php");
                $id=$_GET["id"];
                $sql="SELECT * FROM client WHERE `id`=:idd  ";
                $query=$db->prepare($sql);
                $query->bindParam(":idd",$id);
                // Exécution de la requête
                $query->execute();
                $user=$query->fetch(PDO::FETCH_ASSOC); 
            ?>
           
            <h2 >Mes informations</h2>
            <form action="../model/update_profile.php" method="post" class="form1" id="form1">
                <div class="ligne">
                    <label for="nom" >Nom entreprise/utilisateur :</label>
                    <input type="text" name="nomEntUser"  value="<?=$user['nom_entreprise_ou_user'] ?>"  required />
                </div>
                <div class="ligne">
                    <label for="nom">Domaine de travail :</label>
                    <input type="text" name="domaine"  value="<?=$user["domaine"] ?>" required />
                </div>
                <div class="ligne">
                    <label for="nom">Pays :</label>
                    <select name="pays" class="mb-3 py-3" style="width: 100%;border:none" required>
                    <option value="<?= $user["pays"] ?>" selected="selected"> <?=$user["pays"] ?></option>
                      <?php require_once("../view/include/select_pays.php") ?>
                    </select>
                </div>
                <div class="ligne">
                    <label for="nom">Email address :</label>
                    <input type="text" name="mail" value="<?=$user["email"] ?>" required />
                </div>
                <input type="hidden" name="id" value="<?= $user["id"] ?>">
                <button type="submit" class="envoyer" value="">Envoyer</button>
            </form>

            
        <!-- footer -->
     
     </div>  
     <?php require_once("../view/include/footer.php") ?>
      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>

    </body>
</html>