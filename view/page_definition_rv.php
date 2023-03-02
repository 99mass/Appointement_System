<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- include css personnel -->
    <link rel="stylesheet" href="../view/css/style_page_definition_rv.css">
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
                                <p>cliquez sur 
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formulair">Nouveau RV</button>
                                  pour crèer un rendez vous. 
                                </p>
                               <?php require_once ("../view/include/forms.php") ?>
                                <!-- debut listes rendez vous creer -->
                                <table class="table table-hover">
                                    <th>#</th><th>Date-Debut</th><th>Date-Exp</th><th>Lieu</th><th>Total place</th><th>Place prises</th><th>Place restantes</th> <th colspan="3">Action</th>
                                   
                                   <tr> 
                                        <td>1</td><td>13-02-2023</td><td>13-04-2023</td><td>dakar</td><td>300</td><td>200</td><td>100</td> 
                                        <td colspan="3" style="display: flex;">
                                            <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#formulair_modification" ><i class="fa-regular fa-pen-to-square"></i></button>
                                            <button type="button" class="btn btn-danger me-1 " data-bs-toggle="modal" data-bs-target="#delete_formulair"><i class="fa-solid fa-trash"></i></button>
                                            <button type="button" class="btn btn-success">voir liste</button>
                                        </td>  
                                    </tr>
                                    <tr> 
                                        <td>2</td><td>13-07-2022</td><td>30-07-2022</td><td>pikine</td><td>100</td><td>30</td><td>60</td> 
                                        <!-- <td style="display: flex;"> -->
                                        <td colspan="3" style="display: flex;padding-bottom: 1.3rem;">
                                            <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#formulair_modification" ><i class="fa-regular fa-pen-to-square"></i></button>
                                            <button type="button" class="btn btn-danger me-1 " data-bs-toggle="modal" data-bs-target="#delete_formulair"><i class="fa-solid fa-trash"></i></button>    
                                        <button type="button" class="btn btn-success">voir liste</button>
                                        </td>  
                                    </tr>
                                    <tr> 
                                        <td>3</td><td>02-08-2023</td><td>30-012-2023</td><td>thies</td><td>900</td><td>500</td><td>400</td> 
                                        <!-- <td colspan="3" style="display: flex;"> -->
                                            <td style="display: flex;padding-bottom: 1.3rem;">
                                            <button type="button" class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#formulair_modification" ><i class="fa-regular fa-pen-to-square"></i></button>
                                            <button type="button" class="btn btn-danger me-1 " data-bs-toggle="modal" data-bs-target="#delete_formulair"><i class="fa-solid fa-trash"></i></button>
                                            <button type="button" class="btn btn-success">voir liste</button>
                                        </td>  
                                    </tr>
                                    </table>
                                <!-- fin liste rendez vous creer -->
                             
         




                        </div>
                    </div>
                    <div id="section-child2" class="g-col-6">
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
                    </div>
                </div>
            </div>
        </div>

        
        <!-- footer -->
        <?php require_once("../view/include/footer.php") ?>

        <!-- Include Cdn js -->
        <?php require_once ("../view/include/linkScript.php") ?>
    </body>
</html>