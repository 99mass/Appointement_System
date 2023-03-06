 <!-- Debut formulaire de creation de rendez vous-->
    <div  class="modal fade  " id="formulair" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="body-form">
                                <h4  id="staticBackdropLabel">Veillez cocher tout les informations que le demadeur doit reiseigner pour cette rendez vous.  </h4>
                                <div class="div-multi-forms">
                                    <form method=""  class="form_1">
                                        <h5><i class="fa-solid fa-list-check"></i>informations Personnelles</h5>
                                        <div class="conten-form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault"> Prènom </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Nom </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                                    <input type="text" class="form-control" placeholder="info ici..." aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group ">
                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                    <input type="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                 </div>

                                        </div>
                                        <button type="button" id="btn-form_1" class="btn btn-success btn-valider-connexion">Valider</button>
                                    </form>
                                    <form class="form_2">
                                        <h5><i class="fa-solid fa-clock"></i>informations Rendez Vous</h5>
                                            <div class="conten-form-check">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                                    <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                                    <input type="date" class="form-control"aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                                    <input type="text" class="form-control" placeholder="ex: Dakar/Médina" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                                    <input type="number" class="form-control" placeholder="ex: 120" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <button type="button" id="btn-form_1" class="btn btn-success btn-valider-connexion">Valider</button>
                                            </div>
                                        </form>
                                </div>
                            </div> 
                        </div>
                                        
                </div>
        </div>
    </div>
<!-- Fin formulaire de creation de rendez vous -->

    <!-- Debut formulaire de Modification de rendez vous-->
                                <div  class="modal fade  " id="formulair_modification" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                                                <div class="body-form">
                                                    <h4  id="staticBackdropLabel">Veillez Faire la Modification des informations à modifier pour cette rendez vous.  </h4>
                                                    <div class="div-multi-forms">
                                                        <form method=""  class="form_1">
                                                            <h5><i class="fa-solid fa-list-check"></i>Modifier informations Personnelles</h5>
                                                            <div class="conten-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                                    <label class="form-check-label" for="flexCheckDefault"> Prènom </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked"> Nom </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked >
                                                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                                </div>
                                                                 <div class="input-group mb-2">
                                                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                                                    <input type="text" class="form-control" placeholder="info ici..." aria-label="info" aria-describedby="basic-addon1">
                                                                </div>
                                                                 <div class="input-group ">
                                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                                    <input type="time" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>

                                                            </div>
                                                             <button type="button" id="btn-form_1" class="btn btn-success btn-valider-connexion">Modifier</button>
                                                        </form>
                                                        <form class="form_2">
                                                             <h5><i class="fa-solid fa-clock"></i>Modifier informations Rendez Vous</h5>
                                                             <div class="conten-form-check">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                                                    <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                                                    <input type="date" class="form-control"aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                                                    <input type="text" class="form-control" placeholder="ex: Dakar/Médina" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                                 <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                                                    <input type="number" class="form-control" placeholder="ex: 120" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                                <button type="button" id="btn-form_1" class="btn btn-success btn-valider-connexion">Modifier</button>
                                                             </div>
                                                        </form>
                                                    </div>
                                                </div> 
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
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
