
 <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 mb-4 border-bottom">
          <a  class=" lien-vide d-flex align-items-center col-md-3 mb-2 mb-md-0 "> </a>
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../view/index.php" class="nav-link px-2">Home</a></li>
            <li><a href="../view/contacte_nous.php" class="nav-link px-2 ">Contacte</a></li>
            <li><a href="../view/a_propos_de_nous.php" class="nav-link px-2">A Propos</a></li>
          </ul>
            <?php if (empty($_SESSION['user']["id"])) {  ?>
             <div id="btn-con-insc" class="col-md-2 text-end bouton me-4">
               <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Se connecter</button>
               <button type="button" id="btn-inscript" href="../page_definition_rv.php" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">S'inscrire</button>
            </div>
               <?php }else{ ?>
                  <!-- <div class="col-md-1 text-end bouton me-4 ">
                <a type="button" id="btn-decon" href="../model/deconnexion.php" class="btn btn-primary ml-2 " >Se déconnecter</a> -->
                <div id="btn-plus" class="btn-group col-md-1 text-end bouton ml-5">
                  <button type="button" id="btn-decon" class="btn btn-outline-primary  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Plus
                  </button>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="../view/profile.php?id_rv_get=<?=$_GET["id_rv_get"]?>&name=<?=$_GET["name"]?>"><i class="fa-solid fa-user me-1"></i>Profile</a>
                     <div class="dropdown-divider"></div>
                     <a  class="dropdown-item" href="../model/deconnexion.php"  style="text-decoration:none;boder:none,text-align:center" ><i class="fa-solid fa-lock me-1"></i>Se déconnecter</a> 
                  </div>
            <?php }?>
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
         .dropdown-item i{
            color:blue;
         }
   /* medias query */
   
   @media  screen and (min-width: 2560px) {
      #btn-con-insc{
      position: relative;
            right:-5%;
   }
   }
   @media  screen and (max-width: 1024px) {
   #btn-con-insc{
      position: relative;
            right:5%;
   }

}

   @media  screen and (max-width: 769px) {
      header #btn-plus{
         margin-right:1rem;
      }
      header{
         display:flex;
      }
         header{
            width:100%
            padding:0rem;
         }
         header ul  {
            position: relative;
            right:4%; 
         }
         #btn-con-insc{
            position: relative;
            right:12%;
         }
      }
      @media screen and (min-width : 500px and max-width : 768px  ) {
         header #btn-plus{
         margin-left:5rem;
      }

      header .lien-vide, header ul li {
            display:block;
            margin-left:20rem;
         }
      }
      @media  screen and (max-width: 500px) {
         header #btn-plus{
         position: absolute;
         left:60%;
         }
         header .lien-vide, header ul li {
            display:none;
         }
         #btn-con-insc{
            position:absolute;
            left:40%
         }
     }
     @media  screen and (max-width: 375px) {
      #btn-con-insc{
            position:absolute;
            left:30%
         }
     }
     @media  screen and (max-width: 326px) {
         header #btn-plus{
         position: absolute;
         left:50%;
         }
         #btn-con-insc{
            position:absolute;
            left:20%
         }
     }

</style>