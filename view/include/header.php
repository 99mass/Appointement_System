 <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 mb-4 border-bottom">
          <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 "> </a>
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="http://localhost/appointment_projet/view/index.php" class="nav-link px-2">Home</a></li>
            <li><a href="#" class="nav-link px-2 ">Guide</a></li>
            <li><a href="#" class="nav-link px-2 ">Contacte</a></li>
            <li><a href="#" class="nav-link px-2">A Propos</a></li>
          </ul>
          <div class="col-md-3 text-end bouton me-3">
            <!-- <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Se connecter</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">S'inscrire</button> -->
            <a type="button" href="../page_definition_rv.php" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Se connecter</a>
            <a type="button" id="btn-inscript" href="../page_definition_rv.php" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">S'inscrire</a>
            <a type="button" id="btn-decon" href="http://localhost/appointment_projet/view/index.php" class="btn btn-primary ml-2" >Se déconnecter</a>
         </div> 
</header>

<style>
       /* header */
         header{
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
            position: fixed;
            background-color: white ;
            padding: 2rem;
            width: 100%;
            z-index: 12;
         }
         header ul li > a:nth-child(1n),
         header div > button:nth-child(1n){
         font-size: 1.2rem;
         }
         header ul li > a:nth-child(1n):hover{
            background-color: blue;
            color: white;
         }
         header  .bouton #btn-decon:hover,
          header .bouton #btn-inscript:hover{
            background-color: white;
            color: blue;
            border: 2px solid blue;
         }
         header .bouton{
            display: flex;
            padding-right: 1rem;
         }

</style>