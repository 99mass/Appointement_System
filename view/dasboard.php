
<?php  @session_start(); //on demarr la session 

// if(empty($_SESSION['user']) && empty($_GET['id_rv_get'])  ){
//    header("Location: ../view/index.php");
// }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- include css personnel -->
     <link rel="stylesheet" href="../view/css/style_form_applicantes.css">
    <link rel="stylesheet" href="../view/css/styledasboardse.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
    <?php if(empty($_SESSION['user'])){?>
    <style>
         #div_table{
            margin: 0% 20%;
            border:2px solid gray;
            /* width:100%; */
            box-sizing: border-box;
         }
         #section-child1 p{
            font-size:20px;
            margin-left:20%;
            text-align:left;
         }
         #section-child1 p span{
            font-size:25px;
            font-weight:bold;
            color:darkblue;
         }
         h3{
            margin-top:2%;
            margin-left: 16%;
         }
        .main .section{
            position: relative;
            top:0;
        }
        .cacher_applicant ,.cacher_appli{
            display: none;
        }
        .info_applicant{
            display: block;
        }
        .main .section .grid-max #section-child1{
        width: 50%;
        margin-left: 25%;
        }
        @media screen and (max-width : 1024px) {
            #div_table{
            overflow-x: hidden;
            }
            #section-child1 p{
            width:58%;
         }
        }
        @media screen and (max-width : 769px) {
            #div_table{
            margin: 0% 1%;
            border:none;
            width:38rem;
            box-sizing: border-box;
            
         }
         #div_table table th{
            font-size: 1rem;
         }
         #section-child1 p{
            margin-top:-95%;
            margin-left: 4%;
            width:38rem;
         }
         h3{
            margin-left: 16%;
         }
        .main .section .grid-max #section-child1{
        width: 100%;
        margin:0% 2%;
        overflow-x: none;
        }
        .main .section .grid-max #section-child1 .conten-rv #menu_avant_liste_rv #div1 {
            display: none;
        }
        }
        @media screen and (max-width : 426px) {
            #div_table{
            border:none;
            width:38rem;
            overflow-x: scroll;
            }
            #section-child1 p{
            margin-top:-95%;
            margin-left: 4%;
            width:38rem;
         }
            h3{
            margin-left: 0%;
         }
        }

        @media screen and (max-width : 320px) {
            h3{
            margin-left: -2rem;
         }
        }
    </style>
    <?php }?>
    <!-- CSS DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
    <body>
        <div class="main">
        <!--Debut header -->
        <div class="cacher_applicant" > <?php require_once("../view/include/header.php")?></div>
            <div class="section">
                <div class="grid text-center grid-max">
                

                    <div id="section-child1" class="g-col-6 mt-4">
                    <?php if(empty($_SESSION['user'])){?>
                            <p >
                                Bienvenu sur le Portail de <span> <?= empty($_GET['name']) ? '' : $_GET['name'] ?></span>. <br>
                                vous y êtes presque,Veillez Choisir la date qui vous arrange parmi la liste ci-dessous en cliquant sur l'icône <i class="fa-solid fa-arrow-up-right-from-square p-1 fs-5 text-primary"></i>. <br>
                                Vous allez par la suite rediriger vers le formulaire ou nous allons vous demandez certains infromations.
                            </p>
                    <?php }?>
                        <h3 ><i class="fa-sharp fa-solid fa-list mx-2 mt-1"></i>listes rendez-vous <?= empty($_GET['mess']) ? '' : $_GET['name'] ?> </h3>
                     
                        <div class="conten-rv">
                        <?php if(!empty($_SESSION['user'])){?>
                                <p id="menu_avant_liste_rv" class="cacher_appli" >
                                    <div id="div1" >
                                        <!-- Cliquez sur -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formulair"><i class="fa-solid fa-calendar-check me-2"></i>Nouveau RV</button>                                       
                                        <!-- pour crèer un rendez-vous. -->
                                    </div> 
                                    <div id="content-lien" class="pt-1" > <span id="lien">?id_rv_get=<?$_SESSION['user']['id']?>&name=<?$_GET['name']?></span> <span id="indication-lien">copier le lien</span> <i id="iconCopy" class="fa-solid fa-copy fs-5 text-success ml-1 "></i><span id="copy1">copier lien</span><span id="copy2">copier</span></div>
                                </p>
                                <?php }?>
                               <?php //include modal
                                    require_once ("../view/include/forms_create_rv.php");
                                    require_once ("../view/include/form_update_rv.php"); 
                                     require_once ("../view/include/form_delete_rv.php"); 
                                     require_once "../model/read_rv.php";
                                ?>
                                <div id="div_table" >
                                <!-- debut listes rendez vous creer -->
                                <?php if(!empty($_SESSION['user']) && count($liste_rv)>1){?>
                                    <table id="example" class="table table-hover ">
                                <?php }else{?> 
                                    <table class="table table-hover ">
                                <?php }?> 
                                    <thead >
                                    <th>#</th>
                                    <th>Date-Debut</th>
                                    <th>Date-Exp</th>
                                    <th>Heure</th>
                                    <th>Date convocation</th>
                                    <th>Lieu</th>
                                    <th class="cacher_applicant">Total place</th>                                    
                                    <th  class="cacher_applicant">Place prises</th>
                                  
                                    <th>Place restantes</th> 
                                    <th colspan="1" class="cacher_applicant">Action</th>
                                    <th class="cacher_applicant" >Accessible</th>
                                    <?php if(empty($_SESSION['user'])){?>
                                    <th colspan="2" class="info_applicant" >Choisir</th>
                                    <?php }?>
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
                                     <?php if(!empty($_SESSION['user'])){?>
                                        <tr> 
                                            <td><?= $numero++ ?></td>
                                            <td><?= $colonne["date_debuts"]?></td>
                                            <td><?= $colonne["date_expirations"]?></td>
                                            <td><?= $colonne["heure_convocations"]?></td>
                                            <td><?= $colonne["dateConvocation"]?></td>
                                            <td><?= $colonne["lieu_rv"]?></td>
                                            <td class="cacher_applicant"><?= $colonne["total_places"]?></td>
                                            <td class="cacher_applicant"><?=  $places_prises; ?> </td>
                                            <td><?=  $place_restant; ?></td> 
                                           
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
                                        </tr>
                                    <?php }else{
                                        //  ici on gere le cas ou le rendez est definit comme visible par l'entreprise si il doit etre afficher 
                                         if($colonne["acces"]!=0){
                                            if($place_restant !=0 ){
                                                if($colonne["dateConvocation"] != date("d-m-Y")){
                                    ?>
                                    
                                        <tr>                             
                                            <td> <?= $numero++ ?> </td>
                                            <td><?= $colonne["date_debuts"]?></td>
                                            <td><?= $colonne["date_expirations"]?></td>
                                            <td><?= $colonne["heure_convocations"]?></td>
                                            <td><?= $colonne["dateConvocation"]?></td>
                                            <td><?= $colonne["lieu_rv"]?></td>
                                            <td><?=  $place_restant; ?></td> 
                                             
                                            <td  class="info_applicant"> 
                                                <a href="../view/form.php?id_rv_get=<?= $_GET["id_rv_get"]?>&rv=<?= $colonne['id']?>&name=<?= $_GET['name'];?>">
                                                    <button type="button" class="btn" data-bs-toggle="modal"  data-toggle="tooltip" data-placement="bottom" title="reserver">
                                                        <i class="fa-solid fa-arrow-up-right-from-square p-1 fs-5 text-primary"></i>
                                                    </button>
                                                </a>
                                            </td>
                                           
                                        </tr>
                                   
                                <?php }} } }  } }  }   } ?>

                                    </table>
                            </div>
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


        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    </body>
</html>