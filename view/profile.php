<?php  @session_start(); //on demarr la session
if((empty($_SESSION['user']) && empty($_GET['id_rv_get'])) || empty($_SESSION['user']) ) {
    header("Location: ../view/index.php");
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
    
</head>
    <body>
   
         <!--Debut header -->
        
         <div class="main">
         <?php require_once("../view/include/header.php")?>
            <div class="container containe">
            <?php require_once("../model/profile.php")  ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../view/dasboard.php?id_rv_get=<?=$_GET["id_rv_get"]?>&name=<?=$_GET["name"]?>">Dasboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <h2 ><i class="fa-solid fa-circle-info mx-2"></i>Mes informations</h2>
            <form action="../model/update_profile.php" method="post" class="form1" id="form1">
                <div class="ligne">
                    <label for="nom" >Nom de l'entreprise / ou utilisateur :</label>
                    <input type="text" name="nomEntUser"  value="<?=$user['nom_entreprise_ou_user'] ?>"  required />
                </div>
                <div class="ligne">
                    <label for="nom">Domaine de travail :</label>
                    <input type="text" name="domaine"  value="<?=$user["domaine"] ?>" required />
                </div>
                <div class="ligne">
                    <label for="nom">Pays :</label>
                    <select name="pays" class="mb-3 py-3" style="width: 100%;border:none" required>
                    <option value="<?= $user["pays"] ?>" selected="selected"> <?=$user["pays"] ?></option>
                      <?php require_once("../view/include/select_pays.php") ?>
                    </select>
                </div>
                <div class="ligne">
                    <label for="nom">Email address :</label>
                    <input type="text" name="mail" value="<?=$user["email"] ?>" required />
                </div>
                <input type="hidden" name="id" value="<?= $user["id"] ?>">
                <button type="submit" class="envoyer" value="">Envoyer</button>
            </form>

            <form id="form2">
                <div class="ligne">
                    <label for="nom" >Nom de l'entreprise / ou utilisateur :</label>
                    <input type="text"  value="<?= $user["nom_entreprise_ou_user"] ?>" disabled />
                </div>
                <div class="ligne">
                    <label for="nom">Domaine de travail :</label>
                    <input type="text"  value="<?= $user["domaine"] ?>" disabled />
                </div>
                <div class="ligne">
                    <label for="nom">Pays :</label>
                    <input type="text"  value="<?= $user["pays"] ?>" disabled />
                </div>
                <div class="ligne">
                    <label for="nom">Email address :</label>
                    <input type="text"  value="<?= $user["email"] ?>" disabled />
                </div>

                <span id="btn_modifier" class="Modifier" onclick="showForm()">Modifier</span>
            </form>
            </div>

     </div> 
       <!-- footer -->
       <?php require_once("../view/include/footer.php") ?> 
      <!-- Include Cdn js -->
    <?php require_once ("../view/include/linkScripts.php") ?>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
        function showForm() {
            const form1=document.getElementById("form1");
            const form2=document.getElementById("form2");
            form1.classList.remove('form1');
            form2.style.display = "none"
        }
    </script>


<?php if(isset($_GET['t'])){  ?>
       <script>
             window.onload=()=>{
               Swal.fire({
                  title: 'Information modifier.',
                  icon: 'success',
                  confirmButtonText: '<a  href="../view/profile.php" class="btn text-white " >OK</a>'
                })
            }
        </script>
  <?php  }
   if(isset($_GET['f'])) { ?>
        <script>
              window.onload=()=>{
                Swal.fire({
                      title: 'Information non modifier.',
                      text: 'Veillez reessayer svp.',
                      icon: 'error',
                      confirmButtonText: '<a  href="../view/profile.php" class="btn text-white " >OK</a>'
                    })
            }
        </script>
   <?php  } ?>

    </body>
</html>