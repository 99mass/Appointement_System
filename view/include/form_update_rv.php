 



<style>
.main .formulair_modification2 .modal-body .btn-exitt{
  text-align: end;
}
.main .formulair_modification2 .modal-body .btn-exit .btn-close{
  color: white;
  background-color: white;
  position: relative;
  top: -2rem;
  left: 26rem;
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
                foreach ($liste_rv as $colonnes) {
                    $id=$colonnes['id'];
                    $sqls="SELECT * FROM infos_exiger_du_rv WHERE id=$id ";
                    $querys=$db->prepare($sqls);
                    $querys->execute();
                    $Onrv= $querys->fetch(PDO::FETCH_ASSOC);
   ?>
            
    <!-- Debut formulaire de Modification de rendez vous-->
     <div  class="formulair_modification2 modal fade" id="formulair_modification<?= $colonnes['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
                 <div class="modal-body">
                    <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                     <div class="body-form">
                       <h4  id="staticBackdropLabel"> Veillez Faire la Modification des informations à modifier pour cette rendez vous.  </h4>
                         <form method="post" action="../model/update_rv.php"  class="div-multi-forms">
                            <div  class="form_1">
                               <h5><i class="fa-solid fa-list-check"></i>Modifier informations Personnelles</h5>
                                <div class="conten-form-check">
                                <input type="hidden" name="idd" value="<?= $Onrv['id']?>">
                                 <div class="form-check">
                                    <?php if($Onrv['prenom']==1){ ?>
                                    <input class="form-check-input text-success" type="checkbox" name="prenoms" value="1" id="flexCheckDefault" checked >
                                    <?php } else{ ?>
                                        <input class="form-check-input" type="checkbox" name="prenoms" value="1" id="flexCheckDefault">
                                    <?php } ?>
                                    <label class="form-check-label" for="flexCheckDefault"> Prènom</label>
                                    
                                </div>
                                <div class="form-check">
                                        <?php if($Onrv['nom']==1){ ?>
                                    <input class="form-check-input" type="checkbox" name="nom" value="1" id="flexCheckDefault" checked>
                                    <?php } else{ ?>
                                    <input class="form-check-input" type="checkbox" name="nom" value="1" id="flexCheckDefault">
                                    <?php } ?>
                                    <label class="form-check-label" for="flexCheckChecked"> Nom </label>
                                </div>
                                <div class="form-check">
                                        <?php if($Onrv['date_de_naissance']==1){ ?>
                                    <input class="form-check-input" type="checkbox" name="dateNaissance" value="1" id="flexCheckDefault" checked>
                                    <?php } else{ ?>
                                    <input class="form-check-input" type="checkbox" name="dateNaissance" value="1" id="flexCheckDefault">
                                    <?php } ?>
                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                </div>
                                <div class="form-check">
                                        <?php if($Onrv['lieu_de_naissance']==1){ ?>
                                    <input class="form-check-input" type="checkbox" name="lieuNaissance" value="1" id="flexCheckDefault" checked>
                                    <?php } else{ ?>
                                    <input class="form-check-input" type="checkbox" name="lieuNaissance" value="1" id="flexCheckDefault">
                                    <?php } ?>
                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                </div>
                                <div class="form-check">
                                        <?php if($Onrv['mail']==1){ ?>
                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckDefault" checked>
                                    <?php } else{ ?>
                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckDefault">
                                    <?php } ?>
                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                </div>
                                    <div class="input-group mb-2">
                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                    <input type="text" class="form-control" name="autreInfos" value="<?= $Onrv['autres_infos'] ?>"  aria-label="info" aria-describedby="basic-addon1">
                                </div>
                                    <div class="input-group ">
                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                    <input type="time" class="form-control" name="heurConvocation" value="<?= $Onrv['heure_convocation'] ?>" aria-label="heure_convocation" aria-describedby="basic-addon1">
                                </div>
                               </div>
                            </div>
                            <div class="form_2">
                                <h5><i class="fa-solid fa-clock"></i>Modifier informations Rendez Vous</h5>
                                <div class="conten-form-check">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                    <input type="date" class="form-control" name="dateDebut" value="<?= $Onrv['date_debut'] ?>" aria-label="date_debut" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                    <input type="date" class="form-control" name="dateExpiration" value="<?= $Onrv['date_expiration'] ?>" aria-label="date_expiration" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                    <input type="text" class="form-control" name="lieuRV" value="<?= $Onrv['lieu_rv'] ?>" aria-label="lieu_rv" aria-describedby="basic-addon1">
                                </div>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                    <input type="number" class="form-control" name="totalPersonne" value="<?= $Onrv['total_places'] ?>" aria-label="Username" aria-describedby="basic-addon1">
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