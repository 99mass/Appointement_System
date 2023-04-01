<?php  @session_start(); //on demarr la session
if(empty($_SESSION['admin']) ) {
    header("Location: ../view/admin.php");
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <link rel="stylesheet" href="../view/css/style_contact_nous.css">
    <link rel="stylesheet" href="../view/css/style_profiles.css">
     <!--Includes Cdn Css -->
     <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
    <style>
        #contain{

            padding-top:10%;
            display: flex;
             flex-wrap: wrap;
             width:100%;
             padding-left:7%;
        }
    </style>
</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">
         <?php require_once("../view/include/header.php")?>
            <div id="contain" class="container-fluid  ">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>

                
            </div>
            

     </div> 
       <!-- footer -->
       <?php require_once("../view/include/footer.php") ?> 
      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   

    </body>
</html>