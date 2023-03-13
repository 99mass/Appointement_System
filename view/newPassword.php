<?php @session_start(); //on demarr la session
//on verifi si l'utilisateur n'est pas conneceter si c'est le cas il ne  pourra acceder a cette page
    if(empty($_SESSION['user']))
      header("Location: ../view/index.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/styles.css">
    <link rel="stylesheet" href="../view/css/styel_newPassword.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/link.php") ?>
    <title>Appointment-System</title>
</head>
<body>
   <div class="main">
     <!--Debut header  -->
      <?php require_once("../view/include/header.php"); ?>
          <div class="container container_pass">
                <div class="card w-50 bg-light" id="card">
                <div class="card-body">
                  <h5 class="card-title">Veillez Modifier Votre Ancien Mot de Passe</h5>
                  <form action="../model/newPassword.php" method="post"  class="input-form">
                      <div class="form-floating">
                          <input type="password"  name="newPassword" class="form-control newPass" id="floatingInput1" placeholder="name@example.com">
                          <label for="floatingInput">Nouveau Mot de Passe</label>
                      </div>
                      <div class="form-floating">
                          <input type="password" class="form-control" id="floatingInput2" placeholder="name@example.com">
                          <label for="floatingInput">Confirmer Mot de Passe</label>
                      </div><p id="error"></p>
                      <button type="submit" disabled   id="but_new_pass" class="btn btn-success btn-valider-connexion">Modifier</button>
                   </form>
                </div>
              </div>
         </div>
    <!-- footer -->
     <?php require_once("../view/include/footer.php") ?>
     <script>

     </script>

  </div>

    <!-- include js personnel -->
    <script src="../view/js/check_Pass.js"></script>
    <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScript.php") ?>

  </body>
</html>
<?php 
?>