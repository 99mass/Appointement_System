<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/link.php") ?>
    <title>Appointment-System</title>
</head>
<body>
   <div class="main">
     <!--Debut header -->
      <?php require_once("../view/include/header.php") ?>


        <!-- corps de la page -->
      <!-- image de fond -->
      <div class="card mb-3 " id="div_image_bannier">
        <img src="../view/image/backgroung.jpg" alt="backgroud" >
      </div>
      <div id="petite_annoc" class="petite_annoc">
        Bienvenu dans Appointment system <br> votre platforme de gestion de rendez vous rapide et securiser
       <div>c'est votre première fois ici ? <br>cliquez sur le bouton s'inscrire</div> 
           <button type="button" id="but" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">S'inscrire</button>
      </div>
    <div class="container section_texte">
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
          <h4>Listes De Nos Partenaires : </h4>
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

<!-- Debut Modal Button Inscription -->
<div  class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="body-form">
        <div class="contenu-form">
            <h4  id="staticBackdropLabel">Inscrivez-vous <br> gratuitement sur Appointment system</h4>
            <p> <a href=""> Vous avez déjà un compte ? Connectez-vous </a></p>

            <form action="">
            <div class="input-form">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Global Adventure code">
                    <label for="floatingInput">Nom de l'entreprise ou nom utilisateur</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Global Adventure code">
                    <label for="floatingInput">Pays</label>
                </div>
                 <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Domaine de travail</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                 <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Numero Téléphone</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <!-- <button type="button"  id="but" class="btn btn-success btn-valider-inscription">S'inscrire</button> -->
                <a type="button"  href="../view/page_definition_rv.php" id="but" class="btn btn-success btn-valider-inscription">S'inscrire</a>
            </div>
          </form>
        </div>
        <div class="image-form">
            <h1>Avec Appointment system <br>finit les problémes de gestions de rendez vous </h1>
        </div>
     </div> 
    </div>
    
    </div>
  </div>
</div>
<!-- Fin Modal Button Inscription -->

<!-- Debut Modal Button Connexion -->
<div  class="modal fade  " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="body-form">
        <div class="contenu-form">
            <h4  id="staticBackdropLabel">Bienvenue sur Appointment system ! Veuillez vous connecter </h4>
            <p> Nouveau sur Appointment System ?<a href=""> Créez un compte</a></p>
            <div class="input-form">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email ou Nom Entreprise ou nom utilisateur</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <!-- <button type="button" id="but" class="btn btn-success btn-valider-connexion">Se connecter</button> -->
                <a type="button" href="../view/page_definition_rv.php"  id="but" class="btn btn-success btn-valider-connexion">Se connecter</a>
                <div><a href="">mot de passe oublié ?</a></div>
            </div>
        </div>
        <div class="image-form">
            <h1>Avec Appointment system <br>finit les problémes de gestions de rendez vous </h1>
        </div>
     </div> 
    </div>
    
    </div>
  </div>
</div>
<!-- Fin Modal Button Connexion -->

   <!-- fin de la page -->


    <!-- footer -->
  <?php require_once("../view/include/footer.php") ?>

  </div>

    <!-- include js personnel -->
    <script src="../view/js/index.js"></script>
    <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScript.php") ?>
  </body>
</html>






<!-- <script>$(document).ready(function(){
    //Anime plusieurs propriétés en même temps
    $("button").click(function(){
        $("p").css( "background-color","red" );
        });
    });
</script> -->