<?php @session_start(); //on démare la session  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/styles.css">
    <link rel="stylesheet" href="../view/css/style_admin.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
    <style>
      .row{
       justify-content:center;
      }
      .cel-action{
        display:flex;
      }
    </style>
</head>
<body>
  
    
      <div class="main">
         <!--Debut header  -->
      <?php require_once("../view/include/header_admin.php"); ?>
                    <div class="container-fluid px-4 pt-5 " >
                        <h1 class="mt-5 mb-3"><i class="fa-solid fa-gauge me-2"></i>Tableau de Bord</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body fs-3"> <i class="fa-solid fa-users me-2 "></i>Client</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">                                       
                                        <div class="pl-5 "><a href="#datatablesSimple" class="text-white"><i class="fa-solid fa-diamond-turn-right me-2 text-black fs-4"></i>234535536</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body fs-3"><i class="fa-solid fa-circle-question m-2"></i>Question</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">                                       
                                        <div class=" pl-5 "><a href="#" class="text-white"><i class="fa-solid fa-diamond-turn-right me-2 text-black fs-4"></i>67756</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card ">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Liste Client
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom entreprise/user</th>
                                            <th>Domaine</th>
                                            <th>Pays</th>
                                            <th>E-mail</th>
                                            <th>Mot de passe</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom entreprise/user</th>
                                            <th>Domaine</th>
                                            <th>Pays</th>
                                            <th>E-mail</th>
                                            <th>Mot de passe</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                           <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td class="cel-action">
                                              <button type="button" class="btn btn-primary me-1 " data-bs-toggle="modal" data-bs-target="#formulair_modification"  data-toggle="tooltip" data-placement="bottom" title="Modifier rendez-vous"  ><i class="fa-regular fa-pen-to-square"></i></button>
                                              <button type="button" class="btn btn-danger me-1  " data-bs-toggle="modal" data-bs-target="#delete_formulair" data-toggle="tooltip" data-placement="bottom" title="Supprimer rendez-vous"  ><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                            
                                        </tr>                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    <!-- footer -->
  <?php require_once("../view/include/footer.php") ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        
  <!-- include js personnel -->
  <script src="/view/js/index.js"></script>
  <!-- Include Cdn js -->
  <?php require_once ("../view/include/linkScripts.php") ?>

  <!-- dataTable -->
  <script>
        window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
        });
  </script>
</body>
</html>
<?php 
?>





