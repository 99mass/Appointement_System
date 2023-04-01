<?php  @session_start(); //on demarr la session ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <!-- <link rel="stylesheet" href="../view/css/styledasboards.css"> -->
    <link rel="stylesheet" href="../view/css/style_infos.css">
    <title>Appointment-System</title>
</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">

         <?php require_once("../view/include/header.php")?>
         <?php //include modal
             //include formulaire de recuperation de password
             require_once("../view/include/form_reset_password_client.php");
           //  include formulaire de connexion
            require_once "../view/include/form_connexion.php";
             // include formulaire d'inscription
            require_once "../view/include/form_inscripton.php";
        ?>
            <div class="container containe">
            <h1>Bienvenue sur notre plateforme Appointment-System </h1>
            <p>
               En utilisant notre plateforme, vous acceptez les conditions d'utilisation suivantes. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre plateforme.
            </p>
             <h4>1. Utilisation du plateforme</h4>
            <p>
            Vous acceptez d'utiliser notre plateforme uniquement à des fins légales et conformément à ces conditions d'utilisation. Vous ne devez pas utiliser notre plateforme de manière à porter atteinte aux droits de propriété intellectuelle de tiers ou à violer la loi.
            </p>
            <h4>2. Propriété intellectuelle</h4>
            <p>
            Notre plateforme et son contenu sont protégés par les lois sur la propriété intellectuelle. Vous ne pouvez pas copier, modifier, distribuer ou utiliser notre contenu sans notre autorisation écrite préalable.
            </p>
            <h4>3. Liens vers des sites tiers</h4>
            <p>
            Notre plateforme peut contenir des liens vers des sites tiers. Nous ne sommes pas responsables du contenu ou de la politique de confidentialité de ces sites tiers.
            </p>
            <h4>4. Limitation de responsabilité</h4>
            <p>
            Nous ne sommes pas responsables des pertes ou dommages résultant de l'utilisation de notre plateforme. Nous ne sommes pas responsables des erreurs ou omissions dans le contenu de notre plateforme.
            </p>
            <h4>5. Modification des conditions d'utilisation</h4>
            <p>
            Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment. Nous vous informerons des modifications importantes apportées à ces conditions d'utilisation.
            </p>
            <h4>6. Droit applicable</h4>
            <p>
            Ces conditions d'utilisation sont régies par les lois en vigueur dans votre pays de résidence. Tout litige découlant de ces conditions d'utilisation sera résolu par les tribunaux compétents dans votre pays de résidence
            </p>
            <p>
            En utilisant notre plateforme, vous acceptez ces conditions d'utilisation. Si vous avez des questions sur ces conditions d'utilisation, veuillez nous contacter.
            </p>
         </div>

     </div>  
    <!-- footer -->
    <?php require_once("../view/include/footer.php") ?>

      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>