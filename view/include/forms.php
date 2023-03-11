 <!-- Debut formulaire de creation de rendez vous-->
    <div  class="modal fade  " id="formulair" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="body-form">
                                <h4  id="staticBackdropLabel">Veillez cocher tout les informations que le demadeur doit reiseigner pour cette rendez vous.  </h4>
                                <div class="div-multi-forms">
                                    <form action="../model/creat_rv.php" method="post" >
                                        <div  class="form_1">
                                        <h5><i class="fa-solid fa-list-check"></i>informations Personnelles</h5>
                                        <div class="conten-form-check">
                                              <!-- <input type="hidden" name="id_rv" value="< ?= $_SESSION['user']['id'] ?>"> -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="prenoms" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Prènom </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="nom" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Nom </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="dateNaissance" value="1" id="flexCheckChecked" checked >
                                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="lieuNaissance" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                                    <input type="text" name="autreInfos" class="form-control" placeholder="info ici..." aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group ">
                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                    <input type="time" name="heurConvocation" class="form-control"  aria-describedby="basic-addon1">
                                                 </div>

                                        </div>
                                    </div>
                                        <!-- <button type="submit" id="btn-form_1" class="btn btn-success btn-valider-connexion">Valider</button>
                                    </form> -->
                                    <div  class="form_2">
                                        <h5><i class="fa-solid fa-clock"></i>informations Rendez Vous</h5>
                                            <div class="conten-form-check">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                                    <input type="date" name="dateDebut" class="form-control" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                                    <input type="date" name="dateExpiration" class="form-control" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                                    <input type="text" name="lieuRV" class="form-control" placeholder="ex: Dakar/Médina"  aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                                    <input type="number" name="totalPersonne" class="form-control" placeholder="ex: 120"  aria-describedby="basic-addon1">
                                                </div>
                                                <button type="submit" id="btn-form_1" class="btn btn-success btn-valider-connexion">Valider</button>
                                            </div>
                                        </div>
                                </div>
                            </div> 
                        </div>
                                        
                </div>
        </div>
    </div>
<!-- Fin formulaire de creation de rendez vous -->
<style>
.main .formulair_modification2 .modal-body .btn-exitt{
  text-align: end;
}
.main .formulair_modification2 .modal-body .btn-exit .btn-close{
  color: white;
  background-color: white;
  position: relative;
  top: -2rem;
  left: 3rem;
 }
.main .formulair_modification2 .modal-body .contenu-form .input-form .btn-valider-connexion{
  width: 10rem;
   padding-bottom: 0.5rem;
   padding-top: 0.5rem;
   margin-top: 1rem;
   font-size: 1.5rem;
}

 .main .formulair_modification2 .modal-body .contenu-form .input-form .btn-valider-connexion{
margin-bottom: 1rem;
}
.main .formulair_modification2 .modal-body .body-form .div-multi-forms{
    width: 100%;
    display: block;
    text-align: left;
    margin: 2rem 0rem 2rem 4rem;
}
.main .formulair_modification2 .modal-body .body-form .div-multi-forms .conten-form-check{
     margin-left: 2rem;
}
.main .formulair_modification2 .modal-body .body-form .div-multi-forms h5 i{
    color:blue;
    margin-right:  0.5rem;

}
.main .formulair_modification2 .modal-body .body-form .div-multi-forms .form_1,
.main .formulair_modification2 .modal-body .body-form .div-multi-forms .form_2{
     border-left: 3px solid blue;
     padding-left: 1rem;
     margin-bottom: 2rem;
}

.main .formulair_modification2 .modal-body .body-form .div-multi-forms .form_2 .input-group,
.main .formulair_modification2 .modal-body .body-form .div-multi-forms .conten-form-check .input-group {
    width: 35%;
}
.main .formulair_modification2 .modal-body .body-form .div-multi-forms .form_1 #btn-form_1{
    margin: 1.5rem 0rem 0rem 2rem;
    font-size: 1rem;
}
</style>





 <?php  
         require_once "../model/read_rv.php";
            if (count($liste_rv)>0) { 
                foreach ($liste_rv as $colonnes) {   ?>
    
    <!-- Debut formulaire de Modification de rendez vous-->
                     <div  class="formulair_modification2 modal fade" id="formulair_modification<?= $colonnes['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                                                <div class="body-form">
                                                    <h4  id="staticBackdropLabel">Veillez Faire la Modification des informations à modifier pour cette rendez vous.  </h4>
                                                    <form method="post" action="../model/update_rv.php"  class="div-multi-forms">
                                                        <div  class="form_1">
                                                            <h5><i class="fa-solid fa-list-check"></i>Modifier informations Personnelles</h5>
                                                            <div class="conten-form-check">
                                                                <input type="hidden" name="idd" value="<?= $colonnes['id']?>">
                                                                <div class="form-check">
                                                                    <?php if($colonnes['prenom']==1){ ?>
                                                                    <input class="form-check-input" type="checkbox" name="prenoms" value="" id="flexCheckDefault" checked>
                                                                    <?php } else{ ?>
                                                                    <input class="form-check-input" type="checkbox" name="prenoms" value="1" id="flexCheckDefault">
                                                                    <?php } ?>
                                                                    <label class="form-check-label" for="flexCheckDefault"> Prènom</label>
                                                                </div>
                                                                <div class="form-check">
                                                                      <?php if($colonnes['nom']==1){ ?>
                                                                    <input class="form-check-input" type="checkbox" name="nom" value="" id="flexCheckDefault" checked>
                                                                    <?php } else{ ?>
                                                                    <input class="form-check-input" type="checkbox" name="nom" value="1" id="flexCheckDefault">
                                                                    <?php } ?>
                                                                    <label class="form-check-label" for="flexCheckChecked"> Nom </label>
                                                                </div>
                                                                <div class="form-check">
                                                                      <?php if($colonnes['date_de_naissance']==1){ ?>
                                                                    <input class="form-check-input" type="checkbox" name="dateNaissance" value="" id="flexCheckDefault" checked>
                                                                    <?php } else{ ?>
                                                                    <input class="form-check-input" type="checkbox" name="dateNaissance" value="1" id="flexCheckDefault">
                                                                    <?php } ?>
                                                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                                                </div>
                                                                <div class="form-check">
                                                                      <?php if($colonnes['lieu_de_naissance']==1){ ?>
                                                                    <input class="form-check-input" type="checkbox" name="lieuNaissance" value="" id="flexCheckDefault" checked>
                                                                    <?php } else{ ?>
                                                                    <input class="form-check-input" type="checkbox" name="lieuNaissance" value="1" id="flexCheckDefault">
                                                                    <?php } ?>
                                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                                </div>
                                                                <div class="form-check">
                                                                      <?php if($colonnes['mail']==1){ ?>
                                                                    <input class="form-check-input" type="checkbox" name="mail" value="" id="flexCheckDefault" checked>
                                                                    <?php } else{ ?>
                                                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckDefault">
                                                                    <?php } ?>
                                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                                </div>
                                                                 <div class="input-group mb-2">
                                                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                                                    <input type="text" class="form-control" name="autreInfos" value="<?= $colonnes['autres_infos'] ?>"  aria-label="info" aria-describedby="basic-addon1">
                                                                </div>
                                                                 <div class="input-group ">
                                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                                    <input type="time" class="form-control" name="heurConvocation" value="<?= $colonnes['heure_convocation'] ?>" aria-label="heure_convocation" aria-describedby="basic-addon1">
                                                                </div>

                                                            </div>
                                                             <!-- <button type="button" id="btn-form_1" class="btn btn-success btn-valider-connexion">Modifier</button> -->
                                                          </div>
                                                        <div class="form_2">
                                                             <h5><i class="fa-solid fa-clock"></i>Modifier informations Rendez Vous</h5>
                                                             <div class="conten-form-check">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                                                    <input type="date" class="form-control" name="dateDebut" value="<?= $colonnes['date_debut'] ?>" aria-label="date_debut" aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                                                    <input type="date" class="form-control" name="dateExpiration" value="<?= $colonnes['date_expiration'] ?>" aria-label="date_expiration" aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                                                    <input type="text" class="form-control" name="lieuRV" value="<?= $colonnes['lieu_rv'] ?>" aria-label="lieu_rv" aria-describedby="basic-addon1">
                                                                </div>
                                                                 <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                                                    <input type="number" class="form-control" name="totalPersonne" value="<?= $colonnes['total_places'] ?>" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <button type="submit" id="btn-form_1" class="btn btn-success btn-valider-connexion">Modifier</button>
                                            
                                                    </form>
                                                </div> 
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
     <?php     } } ?>
         <!-- Fin formulaire de Modification de rendez vous -->

 <!-- Debut formulaire de creation de rendez vous-->
    <div  class="modal fade  " id="delete_formulair" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                    <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                       <div class="alert alert-danger" role="alert">
                        êtes vous sûre de vouloir supprimer cet rendez vous ? <br>
                        une fois supprimer on peut plus la récupérer. <br>
                          <button type="button" class="btn btn-secondary text-black mt-3 me-1" >Non</button>
                          <button type="button" class="btn btn-danger text-white mt-3 me-1" >Oui</button>
                                            
                        </div>    
                </div> 
            </div>
                                        
        </div>
    </div>



<!-- debut formulaire de récuperation de mot de passe -->
