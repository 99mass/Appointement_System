    <!-- include jquery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Includes Bosstrap Js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>

    <!-- include sweet alert -->
<!-- <script src="../view/include/sweetalert.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- on affiche le message d'erreur en cas les informations sont incorrectes -->
<?php if (isset($_SESSION['erreur'])) {  ?>
            <script>
                Swal.fire({
                  title: '<?php echo $_SESSION['erreur']?>',
                  text: 'Veilleiz réessayer svp !',
                  icon: 'error',
                  confirmButtonText: '<a type="button" id="btn-inscript" href="#" class="btn text-white " data-bs-toggle="modal" data-bs-target="#staticBackdrop">S\'inscrire</a>'
                })
            </script>
<?php unset($_SESSION['erreur']);  }
else if(isset($_SESSION['success'])){  ?>
       <script>
            Swal.fire(
                       '<?php echo $_SESSION['success']?>',
                       'clicker sur le button!',
                       'success'
                    )
            </script>
  <?php unset($_SESSION['success']);  }  ?>

  <?php if (isset($_SESSION['erreur1'])) {  ?>
            <script>
                Swal.fire({
                  title: '<?php echo $_SESSION['erreur1']?>',
                  text: 'Veilleiz réessayer svp !',
                  icon: 'error',
                  confirmButtonText: '<a type="button" id="btn-inscript" href="#" class="btn text-white " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Se connecter</a>'
                })
            </script>
<?php unset($_SESSION['erreur1']);  } ?>
<?php if (isset($_SESSION['erreur11'])) {  ?>
            <script>
                Swal.fire({
                  title: '<?php echo $_SESSION['erreur11']?>',
                  text: 'Veilleiz réessayer svp !',
                  icon: 'error',
                  confirmButtonText: '<a type="button" id="btn-inscript" href="../view/admin.php" class="btn text-white " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Se connecter</a>'
                })
            </script>
<?php unset($_SESSION['erreur11']);  } ?>

<?php if(isset($_SESSION['erreur3'])){  ?>
       <script>
            Swal.fire(
                       '<?php echo $_SESSION['erreur3']?>',
                       'clicker sur le button!',
                       'error'
                    )
            </script>
  <?php unset($_SESSION['erreur3']);  }  ?>

<?php if(isset($_SESSION['success2'])){  ?>
       <script>
            Swal.fire(
                       '<?php echo $_SESSION['success']?>',
                       'clicker sur le button!',
                       'success'
                    )
            </script>
  <?php unset($_SESSION['success2']);  }  ?>