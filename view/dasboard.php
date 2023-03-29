
<?php  @session_start(); //on demarr la session ?>

<?php 
if(empty($_SESSION['user']) && empty($_GET['id_rv_get'])  ){
   header("Location: ../view/index.php");
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- include css personnel -->
     <link rel="stylesheet" href="../view/css/style_form_applicant.css">
    <link rel="stylesheet" href="../view/css/styledasboards.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
    <?php if(empty($_SESSION['user'])){?>
    <style>
         
        /* #containers{
            display:block;
        } */
        .main .section{
            position: relative;
            top:0;
        }
        .cacher_applicant ,#menu_avant_liste_rv *{
            display: none;
        }
        .info_applicant{
            display: block;
        }
        .main .section .grid-max #section-child1{
        width: 50%;
        margin-left: 25%;
        }
    </style>
    <?php }?>
</head>
    <body>
        <div class="main">
        <!--Debut header -->
        <div class="cacher_applicant" > <?php require_once("../view/include/header.php")?></div>
            <div class="section">
                <div class="grid text-center grid-max">
                

                    <div id="section-child1" class="g-col-6 mt-4">
                        <h3 >listes rendez-vous <?= empty($_GET['mess']) ? '' : $_GET['name'] ?> </h3>
                        <div class="conten-rv">
                                <p id="menu_avant_liste_rv" class="cacher_applicant">
                                    <span>
                                        Cliquez sur
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formulair">Nouveau RV</button>                                       
                                        pour crèer un rendez-vous.
                                    </span> 
                                    <span id="content-lien" class="pt-1"> <span id="lien">?id_rv_get=<?$_SESSION['user']['id']?>&name=<?$_GET['name']?></span> <i id="iconCopy" class="fa-solid fa-copy fs-5 text-success ml-1 "></i><span id="copy1">copier lien</span><span id="copy2">copier</span></span>
                                </p>
                               <?php //include modal
                                    require_once ("../view/include/forms_create_rv.php");
                                    require_once ("../view/include/form_update_rv.php"); 
                                     require_once ("../view/include/form_delete_rv.php"); 
                                  
                                ?>

                                <!-- debut listes rendez vous creer -->
                                <table class="table table-hover ">
                                    <thead >
                                    <th>#</th>
                                    <th>Date-Debut</th>
                                    <th>Date-Exp</th>
                                    <th>Heure</th>
                                    <th>Lieu</th>
                                    <th class="cacher_applicant">Total place</th>
                                    <th  class="cacher_applicant">Place prises</th>
                                    <th>Place restantes</th> 
                                    <th colspan="1" class="cacher_applicant">Action</th>
                                    <th class="cacher_applicant" >Accessible</th>
                                    <th colspan="2" class="info_applicant" >Choisir</th>
                                    </thead>
                               <?php                                      
                                    // require_once "../model/read_rv.php";
                                       
                                    if (count($liste_rv)>0) { 
                                        if (count($liste_rv)==1) { ?>
                                          <tr > <td colspan="13" class="alert alert-warning py-5 "> Aucun rendez-vous trouver...</td></tr>
                                 <?php  } else{ 
                                        $numero=1;
                                        foreach ($liste_rv as $colonne) {      
                                            if($colonne["id"] !=3 && $colonne["id_rv"] !=3){    
                                             $prises=$db->prepare("SELECT id FROM rv_".$colonne["id"]."");
                                             $prises->execute();
                                             $places_prises=count($prises->fetchAll());
                                            $place_restant=$colonne["total_places"]-$places_prises ;
                                            if(!empty($_SESSION['user'])){   
                                ?>
                                
                                        <tr> 
                                            <td><?= $numero++ ?></td>
                                            <td><?= $colonne["date_debuts"]?></td>
                                            <td><?= $colonne["date_expirations"]?></td>
                                            <td><?= $colonne["heure_convocations"]?></td>
                                            <td><?= $colonne["lieu_rv"]?></td>
                                            <td class="cacher_applicant"><?= $colonne["total_places"]?></td>
                                            <td class="cacher_applicant"><?=  $places_prises; ?> </td>
                                            <td><?=  $place_restant; ?></td> 
                                            <?php if(!empty($_SESSION['user'])){?>
                                            <td colspan="1" class="cacher_applicant" style="display: flex;padding-bottom: 0.6em;">
                                                <button type="button" class="btn btn-primary me-1 cacher_applicant" data-bs-toggle="modal" data-bs-target="#formulair_modification<?= $colonne["id"]?>"  data-toggle="tooltip" data-placement="bottom" title="Modifier rendez-vous"  ><i class="fa-regular fa-pen-to-square"></i></button>
                                                <button type="button" class="btn btn-danger me-1 cacher_applicant " data-bs-toggle="modal" data-bs-target="#delete_formulair<?= $colonne["id"]?>" data-toggle="tooltip" data-placement="bottom" title="Supprimer rendez-vous"  ><i class="fa-solid fa-trash"></i></button>
                                                <a href="../view/liste_applicant.php?rv=<?= $colonne['id']?>" ><button type="button" class="btn btn-success cacher_applicant" data-toggle="tooltip" data-placement="bottom" title="Voir Perssones"><i class="fa-solid fa-users"></i></button></a> 
                                            </td> 
                                            <?php }?>
                                            <td colspan="5" class="cacher_applicant" >
                                                 <form action="../model/update_visiblity.php" method="post"  id="accessible">
                                                   <select name="choix" class="custom-select">
                                                        <?php if($colonne["acces"]==1){ ?>
                                                             <option value="1" selected >Oui</option>
                                                        <?php  }else{ ?>
                                                              <option value="1"  >Oui</option>
                                                         <?php  } ?> 
                                                        <?php  if($colonne["acces"]==0){ ?>
                                                            <option value="0" selected>Non</option>
                                                        <?php  }else{ ?>
                                                            <option value="0" >Non</option>  
                                                          <?php  } ?>                         
                                                    </select>
                                                    <input type="hidden" name="rv_id" value="<?=$colonne["id"] ?>" />
                                                     <button type="submit" class="btn btn-primary">valider</button>
                                                     </form>
                                            </td> 
                                            <td  class="info_applicant"> 
                                                <button type="button" class="btn"  data-bs-toggle="modal" data-bs-target="#rv<?= $colonne["id"]?>" data-toggle="tooltip" data-placement="bottom" title="reserver">
                                                     <i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle fs-5" ></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php }else{
                                        //  ici on gere le cas ou le rendez est definit comme visible par l'entreprise si il doit etre afficher 
                                         if($colonne["acces"]!=0){
                                            if($place_restant !=0){
                                    ?>
                                        <tr> 
                                            <td><?= $numero++ ?></td>
                                            <td><?= $colonne["date_debuts"]?></td>
                                            <td><?= $colonne["date_expirations"]?></td>
                                            <td><?= $colonne["heure_convocations"]?></td>
                                            <td><?= $colonne["lieu_rv"]?></td>
                                            <td class="cacher_applicant"><?= $colonne["total_places"]?></td>
                                            <td class="cacher_applicant">---</td>
                                            <td><?=  $place_restant; ?></td> 
                                            <?php if(!empty($_SESSION['user'])){?>
                                         
                                            <?php }?>
                                            <td colspan="5" class="cacher_applicant" >
                                                 <form action="../model/update_visiblity.php" method="post"  id="accessible">
                                                   <select name="choix" class="custom-select">
                                                        <?php if($colonne["acces"]==1){ ?>
                                                             <option value="1" selected >Oui</option>
                                                        <?php  }else{ ?>
                                                              <option value="1"  >Oui</option>
                                                         <?php  } ?> 
                                                        <?php  if($colonne["acces"]==0){ ?>
                                                            <option value="0" selected>Non</option>
                                                        <?php  }else{ ?>
                                                            <option value="0" >Non</option>  
                                                          <?php  } ?>                         
                                                    </select>
                                                    <input type="hidden" name="rv_id" value="<?=$colonne["id"] ?>" />
                                                     <button type="submit" class="btn btn-primary">valider</button>
                                                     </form>
                                            </td> 
                                            <td  class="info_applicant"> 
                                               <a href="../view/form.php?id_rv_get=<?= $_GET["id_rv_get"]?>&rv=<?= $colonne['id']?>&name=<?= $_GET['name'];?>" onclick="displayForm(<?= $colonne['id']?>)">
                                                    <button type="button" class="btn" data-bs-toggle="modal"  data-toggle="tooltip" data-placement="bottom" title="reserver">
                                                        <i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle fs-5" ></i>
                                                    </button>
                                                </a> 
                                            </td>
                                        </tr>
                                <?php } } }  } }  }   } ?>

                                    </table>
                                <!-- fin liste rendez vous creer -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
        <!-- footer -->
    <div class="cacher_applicant">   <?php require_once("../view/include/footer.php") ?></div> 
    <!-- include page -->
        <script src="../view/js/copy_link_rvs.js"></script>
        <script src="../view/js/generatorInput.js"></script>
        <script src="../view/js/form.js"></script>

<!-- affficher les message notification apres envoit du formulaire -->
    <?php  if (isset($_GET['m']) && $_GET['m']=='suc') { ?>
    <script>
        window.onload=(texte)=>{
            Swal.fire({
                  title: 'Inscription reusit.',
                text: 'Votre place est maintenant garanti.Veillez consulter votre Boite E-mail pour recupere votre code d\'acces sans se code vous ne pourriez pas acceder a nos locaux. Merci a tres bientot.',
                icon: 'success',
                  confirmButtonText: '<a  href="../view" class="btn text-white " >OK</a>'
                })
        }
    </script>
    <?php } 
         if ( isset($_GET['m']) && $_GET['m']=='er'){ ?>
        <script>
        window.onload=()=>{
            Swal.fire({
                  title: 'Inscription non reusit.',
                  text: 'Cette address existe deja... sinon Veillez reessayer svp.',
                  icon: 'error',
                  confirmButtonText: '<a  href="../view" class="btn text-white " >OK</a>'
                })
        }
     </script>
    <?php }  
         if ( isset($_GET['m']) && $_GET['m']=='erm'){ ?>
        <script>
        window.onload=()=>{
            Swal.fire({
                  title: 'Inscription non reusit.',
                  text: 'Cette address n\'est pas valide, Veillez reessayer svp.',
                  icon: 'error',
                  confirmButtonText: '<a  href="../view" class="btn text-white " >OK</a>'
                })
        }
     </script>
    <?php }  ?>

        <!-- Include Cdn js -->
        <?php require_once ("../view/include/linkScripts.php") ?>
    </body>
</html>