<?php  @session_start(); //on demarr la session ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/styles.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <!-- <link rel="stylesheet" href="../view/css/styledasboards.css"> -->
    <link rel="stylesheet" href="../view/css/style_contact_nous.css">
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
                Nous prenons très au sérieux la protection de vos données personnelles. Nous nous engageons à respecter votre vie privée et à vous fournir une expérience en ligne sécurisée et transparente. Cette politique de confidentialité explique comment nous collectons, utilisons et partageons vos données personnelles.
            </p>
             <h3>Collecte de données personnelles</h3>
            <p>
              Nous collectons les informations que vous nous fournissez directement, telles que votre nom, adresse e-mail et numéro de téléphone. Nous pouvons également collecter des informations à partir de votre utilisation de notre site web, telles que les pages que vous visitez et les actions que vous effectuez.
            </p>
            <h3>Utilisation des données personnelles</h3>
            <p>
              Nous utilisons vos données personnelles pour vous fournir nos services, répondre à vos demandes, vous envoyer des informations sur nos produits et services, et améliorer notre site web. Nous ne vendons pas vos données personnelles à des tiers.
            </p>
            <h3>Partage des données personnelles</h3>
            <p>
               Nous pouvons partager vos données personnelles avec des tiers tels que nos fournisseurs de services, lorsque cela est nécessaire pour vous fournir nos services. Nous pouvons également partager vos données personnelles si nous y sommes légalement obligés, pour protéger nos droits ou la sécurité de nos utilisateurs.
            </p>
            <h3>Sécurité des données personnelles</h3>
            <p>
                Nous prenons des mesures de sécurité raisonnables pour protéger vos données personnelles contre les accès non autorisés, les pertes ou les modifications. Toutefois, la transmission de données via Internet n'est pas totalement sécurisée, et nous ne pouvons garantir la sécurité absolue de vos données personnelles.
            </p>
            <h3>Vos choix et vos droits</h3>
            <p>
               Vous avez le droit de demander l'accès, la rectification ou la suppression de vos données personnelles. Vous pouvez également vous opposer à l'utilisation de vos données personnelles à des fins de marketing direct. Si vous avez des questions sur la façon dont nous traitons vos données personnelles, vous pouvez nous contacter à tout moment.
                <br>    
                En utilisant notre site web, vous acceptez cette politique de confidentialité. Nous nous réservons le droit de modifier cette politique à tout moment, mais nous vous informerons de toute modification importante.
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