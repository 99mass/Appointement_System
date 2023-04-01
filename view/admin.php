<?php @session_start(); //on démare la session  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/styleses.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
</head>
<body>
   <div class="main">
     <!--Debut header  -->
      <?php require_once("../view/include/header_admin.php");
          //include formulaire de recuperation de password
           require_once("../view/include/form_reset_password_admin.php");
          //  include formulaire de connexion
           require_once "../view/include/form_conect_admin.php";
       ?>
       

        <!-- corps de la page -->
      <!-- image de fond -->
      <div class="card mb-3 " id="div_image_bannier">
        <img src="../view/image/backgroung.jpg" alt="backgroud" >
      </div>
      
      <!-- <div id="petite_annoc" class="petite_annoc">
        Bienvenu dans Appointment system <br> votre platforme de gestion de rendez vous rapide et securiser
       <div>c'est votre première fois ici ? <br>cliquez sur le bouton s'inscrire</div> 
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">S'inscrire</button>
      </div> -->
            
    <div id="section_texte" class="container section_texte">
        <h4>C'est Quoi Appointment System ?</h4>
        <p>
            Appointment System est la solution ultime pour les entreprises qui cherchent à optimiser leur productivité tout en offrant une expérience de prise de rendez-vous facile et pratique à leurs clients. 
            Grâce à une interface en ligne intuitive et personnalisable, votre entreprise peut planifier des rendez-vous en temps réel, réduire les coûts administratifs et améliorer l'efficacité globale de votre organisation. 
            Que vous soyez un professionnel de santé, un salon de beauté, un centre de fitness, un service de livraison ou toute autre entreprise, notre plateforme vous permet de gérer facilement vos rendez-vous et de satisfaire les besoins de vos clients en un rien de temps. Avec Appointment System, vous pouvez dire adieu aux appels téléphoniques interminables, aux e-mails qui se perdent et aux rendez-vous manqués - et dire bonjour à une expérience de rendez-vous en ligne fluide et efficace.
        </p>        
        <h4>Les Avantages Qu'offres Appointment System </h4>
         <p>
           <span>Prise de rendez-vous en ligne : </span>  les clients peuvent facilement prendre rendez-vous en ligne, 24h/24 et 7j/7, depuis n'importe quel appareil connecté à Internet. <br>
           <span>Gain de temps : </span> les entreprises peuvent économiser du temps en réduisant le nombre d'appels téléphoniques ou de messages échangés avec les clients pour fixer un rendez-vous. <br>
          <span>Personnalisation :</span> l'interface de la plateforme est personnalisable pour s'adapter aux besoins de chaque entreprise, permettant une utilisation plus efficace et une expérience utilisateur améliorée. <br>
          <span>Confirmation automatisée :</span> les clients reçoivent une confirmation de rendez-vous automatisée par e-mail ou SMS, réduisant les risques de rendez-vous manqués. <br>
          <span> Disponibilité en temps réel :</span> les clients peuvent voir les disponibilités en temps réel et choisir un créneau qui convient à leur emploi du temps, augmentant ainsi les chances de rendez-vous réussis. <br>
          <span> Analyse des données :</span> la plateforme fournit des rapports et des analyses sur les tendances des rendez-vous et les performances des entreprises, aidant à améliorer la planification et la prise de décision. <br>
          <span> Sécurité et confidentialité : </span> les données de rendez-vous sont stockées en toute sécurité et de manière confidentielle, conformément aux réglementations en matière de protection des données. <br>  
         <span>Économies de coûts : </span>  les entreprises peuvent réduire les coûts administratifs et améliorer leur efficacité grâce à l'automatisation des processus de prise de rendez-vous.
        </p>
          <h4>Listes De Nos Partenaires  </h4>
          <div id="carouselExampleAutoplaying" class="carousel slide partenaire" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../view/image/sonatel.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="../view/image/free.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="../view/image/ecobank.jpg" class="d-block w-100" alt="...">
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
     </div> 

    <!-- footer -->
  <?php require_once("../view/include/footer.php") ?>

  </div>

    <!-- include js personnel -->
    <script src="/view/js/index.js"></script>
    <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>

  </body>
</html>
<?php 
?>
