 <!-- Debut formulaire de creation de rendez vous-->
    <div  class="modal fade  " id="formulair" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                        <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="body-form">
                                <h4  id="staticBackdropLabel">Veillez cocher tout les informations que le demadeur doit reiseigner pour cette rendez vous.  </h4>
                                <div class="div-multi-forms">
                                    <form action="../model/create_rv.php" method="post" >
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
                                                    <input class="form-check-input" type="checkbox" name="dateNaiss" value="1" id="flexCheckChecked" checked >
                                                    <label class="form-check-label" for="flexCheckChecked"> Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="lieuNaiss" value="1" id="flexCheckChecked" checked >
                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="genre" value="1" id="flexCheckChecked" checked >
                                                    <label class="form-check-label" for="flexCheckChecked">Genre </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="pays" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">Pays</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="cni" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">Carte d'identite</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                </div>
                                               
                                                <!-- ajout de nouveaux inputs -->
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 1</span>
                                                    <input type="text" name="info1" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 2</span>
                                                    <input type="text" name="info2" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 3</span>
                                                    <input type="text" name="info3" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 4</span>
                                                    <input type="text" name="info4" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 5</span>
                                                    <input type="text" name="info5" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 6</span>
                                                    <input type="text" name="info6" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 7</span>
                                                    <input type="text" name="info7" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 8</span>
                                                    <input type="text" name="info8" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 9</span>
                                                    <input type="text" name="info9" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-2 autres">
                                                    <span class="input-group-text " id="basic-addon1">Info 10</span>
                                                    <input type="text" name="info10" class="form-control"  aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div id="input-container"></div>
                                                <span>Ajouter plus d'information <i class="fa-solid fa-circle-plus text-success fs-5 mt-2" onclick="addInputs()" ></i></span>


                                                <div class="input-group mt-3 ">
                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                    <input type="time" name="heurConvocations" class="form-control"  aria-describedby="basic-addon1">
                                                 </div>

                                        </div>
                                    </div>
                                    
                                    <div  class="form_2">
                                        <h5><i class="fa-solid fa-clock"></i>informations Rendez Vous</h5>
                                            <div class="conten-form-check">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date début</span>
                                                    <input type="date" name="dateDebuts" class="form-control" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Date Expiration</span>
                                                    <input type="date" name="dateExpirations" class="form-control" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Lieu</span>
                                                    <input type="text" name="lieuRVs" class="form-control" placeholder="ex: Dakar/Médina"  aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Total Personnes</span>
                                                    <input type="number" name="totalPersonnes" class="form-control" placeholder="ex: 120"  aria-describedby="basic-addon1">
                                                </div>
                                                <button type="submit" id="btn_form_1" class="btn btn-success btn-valider-connexion">Valider</button>
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
    .autres{
        display:none;
    }
</style>

