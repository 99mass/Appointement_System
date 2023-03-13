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
                                                    <input class="form-check-input" type="checkbox" name="lieuNaiss" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">Lieu Date de Naissance </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="mail" value="1" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"> Address Email </label>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text " id="basic-addon1">Autre Info</span>
                                                    <input type="text" name="autreInfoss" class="form-control" placeholder="info ici..." aria-label="info" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group ">
                                                    <span class="input-group-text" id="basic-addon1">Heure convocation</span>
                                                    <input type="time" name="heurConvocations" class="form-control"  aria-describedby="basic-addon1">
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

