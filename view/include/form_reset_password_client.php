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
                <div class="form-floating">
                    <input type="text" name="mail_user" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Donnez Votre Email ?</label>
                </div>
                <button type="submit"   id="but" class="btn btn-success btn-valider-connexion">Valider</button>
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
<!-- Fin Modal Button Connexion --> 