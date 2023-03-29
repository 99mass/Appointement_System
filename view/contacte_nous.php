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

</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">

         <?php require_once("../view/include/header.php")?>
         <?php //include modal
             //include formulaire de recuperation de password
           require_once("../view/include/reset_password.php");
           //  include formulaire de connexion
            require_once "../view/include/form_connexion.php";
             // include formulaire d'inscription
            require_once "../view/include/form_inscripton.php";
        ?>
            <div class="container containe">
             <h1>Contactez-nous</h1>
            <p>
                Bienvenue sur notre plateforme de gestion de rendez-vous ! Nous sommes là pour vous aider à gérer 
                efficacement votre temps et vos rendez-vous. Si vous avez des questions, des commentaires ou des 
                suggestions, n'hésitez pas à nous contacter. Nous serons ravis de vous aider.
            </p>
            <h3>Formulaire de contact</h3>
            <p>
                Si vous préférez, vous pouvez utiliser notre formulaire de contact pour nous envoyer un message.
                Il vous suffit de remplir les champs requis et de cliquer sur "Envoyer". 
                Nous ferons de notre mieux pour vous répondre dans les plus brefs délais.
            </p>
            <form action="../model/contacteNous.php" method="post">
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
        <!-- footer -->
     <div id="footer"> <?php require_once("../view/include/footer.php") ?></div>
     </div>  
      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>