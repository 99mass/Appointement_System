
<!-- Debut Modal Button Inscription -->
<div  class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="body-form">
        <div class="contenu-form">
            <h4  id="staticBackdropLabel">Inscrivez-vous <br> gratuitement sur Appointment system</h4>
            <div> <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> Vous avez déjà un compte ? Connectez-vous </a></div>

          <form action="../model/inscription.php"  method="post" >
            <div id="input-form" class="input-form">
                <div class="form-floating">
                    <input type="text" name="nom_entrep_utilisateur" class="form-control" id="floatingInput" placeholder="Global Adventure code">
                    <label for="floatingInput">Nom de l'entreprise ou nom utilisateur</label>
                </div>
                  <div class="form-floating">
                    <input type="text" name="domaine" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Domaine de travail</label>
                </div>
                <div class="form-floating">
                    <select name="pays" id="floatingInput" class="p-2 py-3" style="width: 100%;">
                      <?php require_once("../view/include/select_pays.php") ?>
                    </select>
                </div>
                <div id="form-floating-email" class="form-floating ">
                    <input type="email" name="mail" class="form-control w-100" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <button type="submit"  id="but" class="btn btn-success btn-valider-inscription">S'inscrire</button>
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
