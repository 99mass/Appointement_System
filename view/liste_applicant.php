
<?php  @session_start(); //on demarre la session 

if(empty($_SESSION['user'])  ){
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
    <link rel="stylesheet" href="../view/css/styledasboards.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>

<!-- CSS DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        th{
            text-transform: capitalize;
        }
        .contai{
            width: auto;
            overflow-x:scroll;
            padding-top:8rem
        }
        @media screen and (max-width: 426px) {
            .contai{
                margin-bottom:100%;
            }
        }
        @media screen and (max-width: 426px) {
            #btn-export{
                margin-bottom:1rem;
            }
        }
    </style>
</head>
    <body>
        <!--Debut header -->
       <?php require_once("../view/include/header.php")?>
                <?php 
                $line=0;
                $id=$_GET["rv"];
                 require_once("../model/read_applicant.php")
                ?>

                <div  class="container contai" >
                    <div id="section-child2" class="g-col-6 ">
                    <?php    if (count($listes)<=0) { ?>
                         <table class="table table-hover" >
                    <?php } else{?>
                        <div class="col-md-12 head">
                            <div id="btn-export" class="text-center ">
                                <a href="../model/exportData.php?id=<?=$id?>" class="btn btn-success"><i class="fa-solid fa-download"></i> Exporter</a>
                            </div>
                        </div>
                        <table class="table table-hover" id="example" class="display" style="width:100%">
                    <?php } ?>
                    <!-- sila table est vide on affiche se message -->
                     <?php    if (count($listes)<=0) { ?>
                       <tr > <td colspan="13" class="alert alert-warning py-5 text-center ">Pas encore de personne inscrite pour cet rendez-vous...</td></tr>
                  
                    <!-- la table n'est pas vide on afficher les colonnes  -->
                       <?php } else{
                        
                        ?>
                            <thead >
                            <th>#</th>
                            <?php foreach ($columns as $col) { 
                                if ($col!='id') { 
                                $col_sans_undescore=str_replace("_"," ",$col);
                                // $col_correct=str_replace("Appli"," ",$col_sans_undescore);
                            ?>  
                                <th><?=  $col_sans_undescore  ?></th>
                            <?php   } } ?> 
                            </thead>
                            <!-- on affiche les lignes de la table -->
                            <?php  for ($i = 0; $i < count($listes); $i++) {  ?>
                             <tr>
                                    <td><?= $i+1 ?></td>
                                <?php 
                                    foreach ($listes[$i] as $cle => $ligne) { 
                                    if ($cle !=0 ) { 
                                 ?>
                                        <td><?= $ligne ?></td>
                                <?php }} ?>
                            </tr>
                       <?php }} ?>
                      

                        </table>
                    </div>
            </div>

        
        <!-- footer -->
     <?php require_once("../view/include/footer.php") ?>

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