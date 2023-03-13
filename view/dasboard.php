
<?php @session_start(); //on demarr la session
//on verifi si l'utilisateur n'est pas conneceter si c'est le cas il ne  pourra acceder a cette page
    if(empty($_SESSION['user']))
      header("Location: ../view/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- include css personnel -->
    <link rel="stylesheet" href="../view/css/styledasboardss.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/link.php") ?>
    <title>Appointment-System</title>
</head>
    <body>
        <div class="main">
        <!--Debut header -->
        <?php require_once("../view/include/header.php") ?>
            <div class="section">
                <div class="grid text-center grid-max">
                    <div id="section-child1" class="g-col-6 ">
                        <h3 >listes rendez vous </h3>
                        <div class="conten-rv">
                                <p id="menu_avant_liste_rv">
                                    <span>
                                        Cliquez sur
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formulair">Nouveau RV</button>
                                        pour crèer un rendez vous.
                                    </span> 
                                    <span id="content-lien" class="pt-1"> <span id="lien"></span> <i id="iconCopy" class="fa-solid fa-copy fs-5 text-success ml-1 "></i><span id="copy1">copier lien</span><span id="copy2">copier</span></span>
                                </p>
                               <?php //include modal
                                    require_once ("../view/include/forms.php");
                                    require_once ("../view/include/form_update_rv.php"); 
                                     require_once ("../view/include/form_delete_rv.php"); 
                                ?>
                                <!-- debut listes rendez vous creer -->
                                <table class="table table-hover">
                                    <thead >
                                    <th>#</th>
                                    <th>Date-Debut</th><th>Date-Exp</th><th>Heure</th><th>Lieu</th><th>Total place</th><th>Place prises</th><th>Place restantes</th> <th colspan="4">Action</th><th >Accessible</th>
                                    </thead>
                               <?php  require_once "../model/read_rv.php";
                                    if (count($liste_rv)>0) { 
                                        if (count($liste_rv)==1) { ?>
                                          <tr > <td colspan="13" class="alert alert-warning py-5"> Aucun rendez-vous trouver...</td></tr>
                                 <?php  } else{ 
                                        $numero=1;
                                        foreach ($liste_rv as $colonne) {      
                                            if($colonne["id"] !=3 && $colonne["id_rv"] !=3){ 
                                ?>
                                
                                        <tr> 
                                            <td><?= $numero++ ?></td><td><?= $colonne["date_debuts"]?></td><td><?= $colonne["date_expirations"]?></td><td><?= $colonne["heure_convocations"]?></td><td><?= $colonne["lieu_rv"]?></td><td><?= $colonne["total_places"]?></td><td>---</td><td>---</td> 
                                            <td style="display: flex;padding-bottom: 0.6em;">
                                                <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#formulair_modification<?= $colonne["id"]?>"  data-toggle="tooltip" data-placement="bottom" title="Modifier rendez-vous"  ><i class="fa-regular fa-pen-to-square"></i></button>
                                                <button type="button" class="btn btn-danger me-1 " data-bs-toggle="modal" data-bs-target="#delete_formulair<?= $colonne["id"]?>" data-toggle="tooltip" data-placement="bottom" title="Supprimer rendez-vous"  ><i class="fa-solid fa-trash"></i></button>
                                                <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Voir Perssones"><i class="fa-solid fa-users"></i></button>
                                            </td> 
                                            <td colspan="5" >
                                                   <select class="custom-select">
                                                        <option selected>Choisir</option>
                                                        <option value="oui">Oui</option>
                                                        <option value="non">Non</option>
                                                    </select>
                                            </div>
                                            </td> 
                                        </tr>
                                         <?php }  }  ?>

                                <?php  }  
                                   }
                                ?>
                                    </table>
                                <!-- fin liste rendez vous creer -->
                        </div>
                    </div>

                    <!-- <div id="section-child2" class="g-col-6">
                        <h3 >listes personnes inscrites</h3>
                         <table class="table table-hover">
                            <th>#</th><th>Prènom</th><th>Nom</th><th>Date Naissance</th><th>Lieu Naissance</th><th>Address E-mail</th> <th >Date Inscription</th> <th >Heure Inscription</th> <th >code Accés</th>
                            <tr>
                                <td>1</td><td>samba</td> <td>diop</td><td>Médina Gounass</td><td>14-12-2000</td><td>sambadiop161@gmail.com</td><td>02-02-2023</td><td>15h12mn</td><td>A99NM</td>
                            </tr>
                            <tr>
                                <td>2</td><td>Ernest</td> <td>diop</td><td>Médina Gounass</td><td>23-12-2003</td><td>ernestdiop12@gmail.com</td><td>02-06-2023</td><td>10h55mn</td><td>KK8ZA</td>
                            </tr>
                            <tr>
                                <td>3</td><td>babacar</td> <td>diop</td><td>diourbel</td><td>14-12-1998</td><td>babacardiop12@gmail.com</td><td>04-06-2023</td><td>13h55mn</td><td>LM123</td>
                            </tr>
                        </table>
                    </div> -->
                </div>
            </div>
        </div>

        
        <!-- footer -->
        <?php require_once("../view/include/footer.php") ?>
        <script src="../view/js/copy_link_rvs.js"></script>
        <!-- Include Cdn js -->
        <?php require_once ("../view/include/linkScript.php") ?>
    </body>
</html>