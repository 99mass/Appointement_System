 
  <?php  
         require_once "../model/read_rv.php";
            if (count($liste_rv)>0) { 
                foreach ($liste_rv as $colonnes) {
                    $id=$colonnes['id'];
                    $sqls="SELECT * FROM infos_exiger_du_rv WHERE id=$id ";
                    $querys=$db->prepare($sqls);
                    $querys->execute();
                    $Onrv= $querys->fetch(PDO::FETCH_ASSOC);
   ?>
 <!-- rediriger l'utilisateur dans  -->
   <script>
        function  resetAction(){
            window.location.replace("../view/dasboard.php");
        }
   </script>
 <!-- Debut formulaire de suppression de rendez vous-->
    <div  class="modal fade delete_formulair" id="delete_formulair<?= $colonnes['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                 <div class="modal-body">
                    <div class="btn-exit"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></div>
                       <div class="alert alert-danger" role="alert">
                        êtes vous sûre de vouloir supprimer cet rendez vous ?  <br>
                        une fois supprimer on peut plus la récupérer. <br>
                        <div id="cont-btn">
                          <button type="button" onclick="resetAction();" class="btn btn-secondary text-black mt-3 me-1" >Non</button>
                          <form action="../model/delete_rv.php" method="post">
                            <input type="hidden" name="rv_id" value="<?= $colonnes['id'] ?>">
                            <button type="submit" class="btn btn-danger text-white mt-3 me-1" >Oui</button>
                          </form> 
                          </div>                
                        </div>    
                </div> 
            </div>
                                        
        </div>
    </div>

<?php     } } ?>
<!-- fin formulaire de suppression de rendez vous -->

<style>
    .delete_formulair .modal-body .btn-exit{
  text-align: end;
}
  .delete_formulair .modal-body .btn-exit .btn-close{
  color: white;
  background-color: white;
  position: relative;
  top: -2rem;
  left: 3rem;
 }
 #cont-btn{
    display: flex;
    justify-content: center;
 }
</style>