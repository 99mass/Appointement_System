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
        h1{
            padding-top:10%;  
            padding-left:7%;
            color: #337ab7;
            margin-bottom:2%;
            text-decoration: underline;
        }
        #h1-reponse{
            padding-top:0%;
            /* padding-left:0%; */
            color:green;
        }
        #contain{
            /* padding-top:10%; */
            display: flex;
             flex-wrap: wrap;
             width:100%;
             padding-left:7%;
        }

        .card{
            position: relative;
        }
        #div-btns{
            display:flex;
            margin-bottom:8%;
        }
        .card{
            width: 30%;
        }
        .card-title2{
            position: absolute;
            bottom:0;
            font-size: small;
        }
        #div-btns .mod,#div-btns .sup{
            margin-left:3%;
        }
        hr{
            width:95%;
            background-color:black;
            margin-bottom:2rem;
        }
        #alert{
            text-align:center;
        }
        #cont_btn{
            width:100%;
            padding-top:1rem;
            display: flex;
            justify-content: center;
        }
        #cont_btn button{
            height:3rem;
        }
        #conte-btn-delete form{
            height:3rem;
            padding-top:0rem;
            padding:0rem;
        }
        @media screen and (max-width: 1024px) {
            #contain .card{
            width: 50rem;
        }
        }
        @media screen and (max-width: 769px) {
            h1{
            padding-top:15%;
            font-size:27px;
            }
            #contain{
             flex-wrap: wrap;
             width:100%;
             padding-left:10%;
        }
        #contain .card{
            width: 40rem;
        }
       
        }
        @media screen and (max-width: 321px) {
            #contain{
             flex-wrap: wrap;
             width:105%;
             padding-left:2%;
             padding-right:2%;
        }
        }
    </style>
</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">
         <?php require_once("../view/include/header_admin.php")?>
         <h1 ><i class="fa-solid fa-comment me-3"></i>Questions non repondus</h1>
        <div id="contain" class="container-fluid  ">
            
            <?php 
                    require_once("../model/read_message.php");
                    if (count($message)>0) {
                     foreach ($message as $mes) {
                        if ($mes["traiter"]==0) {
             ?> 

            <div class="card me-3 mb-3" >
                <div class="card-body">
                <h5 class="card-title"> <i class="fa-solid text-muted fa-envelope me-1"></i> <?=$mes["email"] ?>  </h5>
                    <p class="card-text pl-3"><span  class="fs-5 text-primary">Quest : </span><?=$mes["message"] ?></p>
                    <div id="div-btns">
                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter1<?=$mes["id"]?>">Repondre</a>
                        <a href="#" class="btn btn-outline-danger sup" data-toggle="modal" data-target="#exampleModalCenterdelete<?=$mes["id"]?>" >Supprimer</a>
                    </div>
                    <h5 class="card-title card-title2 text-muted "> <i class="fa-solid fa-calendar-check me-2"></i><?=$mes["date_messages"] ?>  </h5>
                </div>
            </div>
            <?php }}} ?>
            <hr>       
     </div>
     <h1 id="h1-reponse" ><i class="fa-solid fa-comment me-3"></i>Questions repondus</h1>

     <div id="contain" class="container-fluid  ">
            
            <?php 
                    require_once("../model/read_message.php");
                    if (count($message)>0) {
                     foreach ($message as $mes) {
                        if ($mes["traiter"]==1) {
             ?> 

            <div class="card me-3 mb-3" >
                <div class="card-body">
                <h5 class="card-title"> <i class="fa-solid text-muted fa-envelope me-1"></i> <?=$mes["email"] ?>  </h5>
                    <p class="card-text pl-3"><span  class="fs-5 text-primary">Quest : </span><?=$mes["message"] ?></p>
                    <p class="card-text pl-3"><span  class="fs-5 text-primary">Resp : </span><?=$mes["reponse_admin"] ?></p>
                    <div id="div-btns">
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenterUpdate1<?=$mes["id"]?>">Modifier</a>
                        <a href="#" class="btn btn-outline-danger sup" data-toggle="modal" data-target="#exampleModalCenterdelete<?=$mes["id"]?>">Supprimer</a>
                        <a href="#" class="btn btn-success sup" data-toggle="modal" data-target="#sendMail<?=$mes["id"]?>">Envoyer</a>
                    </div>
                    <h5 class="card-title card-title2 text-muted "> <i class="fa-solid fa-calendar-check me-2"></i><?=$mes["date_messages"] ?>  </h5>
                </div>
            </div>
            <?php } }}?>      
     </div>





     <?php 
         if (count($message)>0) {
            foreach ($message as $mess) {
    ?> 
        <!-- Modal reponse-->
        <div class="modal fade" id="exampleModalCenter1<?=$mess["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa-solid fa-comment fs-3 text-info me-2"></i>Repondre Questions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="../model/update_message.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Repondez ici</label>
                        <textarea type="text" name="reponse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter du texte ici.."></textarea>
                        <small id="emailHelp" class="form-text text-muted"> <span  class="fs-5 text-primary">Quest : </span> <?=$mess["message"] ?></small>
                    </div>
                    <input type="hidden" name="id" value="<?=$mess["id"]?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
            </div>
        </div>
        </div>
<?php }}?>

<?php 
         if (count($message)>0) {
            foreach ($message as $mess) {
    ?> 
        <!-- Modal update reponse-->
        <div class="modal fade" id="exampleModalCenterUpdate1<?=$mess["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa-solid fa-comment fs-3 text-info me-2"></i>Repondre Questions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="../model/update_message.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Modifiez ici</label>
                        <textarea type="text" name="reponse" value="<?=$mess["reponse_admin"]?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><?=$mess["reponse_admin"]?></textarea>
                        <small id="emailHelp" class="form-text text-muted"> <span  class="fs-5 text-primary">Quest : </span> <?=$mess["message"] ?></small>
                    </div>
                    <input type="hidden" name="id" value="<?=$mess["id"]?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
            </div>
        </div>
        </div>
<?php }}?>


<?php 
         if (count($message)>0) {
            foreach ($message as $mess) {
    ?> 
      <!-- Modal delete message-->
      <div  class="modal fade delete_formulair" id="exampleModalCenterdelete<?= $mess['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                    <div id="alert" class="alert alert-danger" role="alert">
                        êtes vous sûre de vouloir supprimer cette question ?  <br>
                        une fois supprimer on peut plus la récupérer. <br>
                        <div id="cont_btn">
                          <button type="button" onclick="resetAction();" class="btn btn-secondary text-black  me-1" >Non</button>
                          <div id="conte-btn-delete">
                          <form action="../model/delete_question.php" method="post" class="bg-danger">
                            <input type="hidden" name="id_question" value="<?= $mess['id'] ?>">
                            <button type="submit" class="btn text-white  me-1" >Oui</button>
                          </form> 
                          </div>
                        </div>                
                    </div>    
                </div> 
            </div>
                                        
        </div>
    </div>

<?php }}?>

<?php 
         if (count($message)>0) {
            foreach ($message as $mess) {
    ?> 
      <!-- Modal delete message-->
      <div  class="modal fade delete_formulair" id="sendMail<?= $mess['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                    <div id="alert" class="alert alert-light" role="alert">
                        êtes vous sûre de vouloir envoyer la reponse de cette question ? <br>
                        <div id="cont_btn">
                          <button type="button" onclick="resetAction();" class="btn btn-secondary text-white  me-1" >Non</button>
                          <div id="conte-btn-delete">
                          <form action="../model/sendQuestionByMail.php" method="post" class="bg-success">
                            <input type="hidden" name="mail" value="<?= $mess['email'] ?>" >
                            <input type="hidden" name="reponse_admin" value="<?= $mess['reponse_admin'] ?>" >
                            <button type="submit" class="btn text-white  me-1" >Oui</button>
                          </form> 
                          </div>
                        </div>                
                    </div>    
                </div> 
            </div>
                                        
        </div>
    </div>

<?php }}?>


 <!-- rediriger l'utilisateur dans  -->
 <script>
        function  resetAction(){
            window.location.replace("../view/repond_message.php");
        }
   </script>
     </div> 
       <!-- footer -->
       <?php require_once("../view/include/footer.php") ?> 
      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   

    </body>
</html>

<?php if(isset($_SESSION['error'])){  ?>
       <script>
            Swal.fire(
                       '<?php echo $_SESSION['error']?>',
                       'clicker sur le button!',
                       'error'
                    )
            </script>
  <?php unset($_SESSION['error']);  }  ?>

<?php if(isset($_SESSION['succe'])){  ?>
       <script>
            Swal.fire(
                       '<?php echo $_SESSION['succe']?>',
                       'clicker sur le button!',
                       'success'
                    )
            </script>
  <?php unset($_SESSION['succe']);  }  ?>