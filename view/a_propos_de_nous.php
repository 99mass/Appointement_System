<?php  @session_start(); //on demarr la session ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/styleses.css">
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
                 Notre plateforme offre un service de distribution de rendez-vous pour toutes les entreprises qui
                 cherchent à simplifier leur gestion de rendez-vous. Notre équipe a construit cette plateforme
                innovante au Sénégal, et nous avons pour ambition de devenir un leader dans le domaine des
                Technologies de l'Information et de la Communication.
            </p>
            <p>
               Notre mission est de faciliter la vie des entreprises en leur offrant une solution efficace et
               flexible pour la prise de rendez-vous. Grâce à notre service, les clients peuvent facilement 
               planifier et gérer leurs rendez-vous en ligne, sans les tracas habituels de la prise de rendez-vous manuelle.
            </p>
            <p>
                Nous avons conçu notre plateforme avec des fonctionnalités avancées pour répondre aux besoins
                spécifiques des entreprises, que ce soit pour la gestion de leurs clients, l'organisation de
                leur planning, ou encore la collecte d'informations précieuses pour leur entreprise.
            </p>
            <p>
               Chez nous, l'expérience utilisateur est primordiale, c'est pourquoi nous avons développé une
               interface simple et intuitive, accessible à tous les utilisateurs, sans besoin de compétences 
                techniques particulières.
            </p>
            <p>
               Notre équipe est composée de professionnels passionnés et engagés, qui travaillent dur 
               pour offrir une solution adaptée à tous les besoins. Nous sommes à l'écoute de nos clients 
               pour leur offrir un service personnalisé et de qualité, et nous sommes fiers de travailler 
                avec eux pour les aider à atteindre leurs objectifs.
            </p>
            <p>
                 Nous sommes convaincus que notre plateforme de prise de rendez-vous est la meilleure solution
                 pour les entreprises qui cherchent à améliorer leur gestion de rendez-vous. Nous continuerons
                à innover et à développer de nouvelles fonctionnalités pour offrir un service toujours plus
                performant et efficace à nos clients.
            </p>
            <p>
                Merci de visiter notre plateforme, et n'hésitez pas à nous contacter pour toute question ou demande d'information supplémentaire.
            </p>
            <h3>Contacter Nous</h3>
            <p>
            </p>
            <form action="../model/a_propos_de_nous.php" method="post">
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" name="mail" class="form-control" id="email" placeholder="Votre adresse e-mail" required>
                </div>
                <div class="form-group">
                    <label for="mess">Message :</label>
                    <textarea name="message" id="mess" cols="50" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
         </div>

     </div>  
      <!-- footer -->
      <?php require_once("../view/include/footer.php") ?>

     <?php  if ( isset($_GET['m']) && $_GET['m']=='suc') { ?>
    <script>
        window.onload=()=>{
            Swal.fire({
                  title: 'Message envoye avec succe.',
                text: 'Votre requte sera traiter sous peu de temps. Merci a tres bientot.',
                icon: 'success',
                  confirmButtonText: '<a  href="../view/contacte_nous.php" class="btn text-white " >OK</a>'
                })
        }
    </script>
    <?php } 
    
    if ( isset($_GET['m']) && $_GET['m']=='er') { ?>
        <script>
        window.onload=()=>{
            Swal.fire({
                  title: 'Message non  envoye.',
                  text: 'Veillez reessayer svp.',
                  icon: 'error',
                  confirmButtonText: '<a  href="../view/contacte_nous.php" class="btn text-white " >OK</a>'
                })
        }
     </script>
    <?php }  ?>




      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>