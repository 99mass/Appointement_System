<?php  @session_start(); //on demarr la session ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment-System</title>
      <!--Includes Cdn Css -->
      <?php require_once ("links.php") ?>
</head>
<body>
    
    <?php  if ($_GET['m']=='suc') { ?>
    <script>
        window.onload=(texte)=>{
            Swal.fire({
                  title: 'Inscription reusit.',
                text: 'Votre place est maintenant garanti.Veillez consulter votre Boite E-mail pour recupere votre code d\'acces sans se code vous ne pourriez pas acceder a nos locaux. Merci a tres bientot.',
                icon: 'success',
                  confirmButtonText: '<a  href="../" class="btn text-white " >OK</a>'
                })
        }
    </script>
    <?php } else { ?>
        <script>
        window.onload=()=>{
            Swal.fire({
                  title: 'Inscription non reusit.',
                  text: 'Veillez reessayer svp.',
                  icon: 'error',
                  confirmButtonText: '<a  href="../" class="btn text-white " >OK</a>'
                })
        }
     </script>
    <?php }  ?>
  

       <!-- Include Cdn js -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>




