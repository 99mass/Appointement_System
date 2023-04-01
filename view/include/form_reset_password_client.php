<!-- Debut Modal Button Connexion -->
<div  class="modal fade  " id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="body-form">
        <div class="contenu-form">
            <h4  id="staticBackdropLabel">Bienvenue sur Appointment system ! <br> Veuillez Fournir votre E-mail pour Modifier votre Mot de passe </h4>
            <p> Nouveau sur Appointment System ?<a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Créez un compte</a></p>
            <form action="../model/reset_password_client.php"  method="post"  class="input-form">
                <div class="form-floating" id="form-floating">
                    <input type="text" name="mail_user" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Donnez Votre Email ?</label>
                </div>
                <button type="submit"   id="but" class="btn btn-success btn-valider-connexion">Valider</button>
            </form>
        </div>
        <div id="image_form" class="image-form">
            <h1>Avec Appointment system <br>finit les problémes de gestions de rendez vous </h1>
        </div>
     </div> 
    </div>
    
    </div>
  </div>
</div>
<!-- Fin Modal Button Connexion --> 

<style>
   @media  screen and (max-width: 769px) {
    .contenu-form #form-floating {
        padding-left:1.5rem;
      }
      .contenu-form #form-floating label {
        margin-left:1.5rem;
      }
      #staticBackdrop3 .modal-body{
        height: 33rem;
      }
      /* #floatingInput{

      } */
  #staticBackdrop3 .modal-body .body-form  #image_form {
  height: 33.2rem;
    }
   }
   @media  screen and (max-width: 426px) {
    #staticBackdrop3 .modal-body .body-form #staticBackdropLabel,
    #staticBackdrop3 .modal-body .body-form p{
      width:23rem;
    }
    #staticBackdrop3 .modal-body{
        height: 26rem;
      }
    #staticBackdrop3 .modal-body .body-form  #image_form {
      display:none;
    }
    #staticBackdrop3 .modal-body .body-form  .input-form
    {
      width:20rem;
    }
    #staticBackdrop3 .modal-body .body-form{
  display: block;
}
      .image-form h1{
        font-size:2rem;
      }
      .contenu-form .form-floating{
        margin-left:-1.5rem;
       
      }
      .contenu-form .form-floating input{
        width:100%;
      }
   }
   @media  screen and (max-width: 375px) {
    #staticBackdrop3 .modal-body .body-form #staticBackdropLabel,
    #staticBackdrop3 .modal-body .body-form p{
      width:21rem;
    }
    #staticBackdrop3 .modal-body .body-form  .input-form
    {
      width:17rem;
    }
    .image-form h1{
        font-size:1.7rem;
      }
   }

   @media  screen and (max-width: 320px) {
    #staticBackdrop3 .modal-body .body-form #staticBackdropLabel,
    #staticBackdrop3 .modal-body .body-form p{
      width:18rem;
    }
    #staticBackdrop3 .modal-body{
        height: 28rem;
      }
  #staticBackdrop3 .modal-body .body-form  .input-form
    {
      width:14rem;
    }
      }
</style>