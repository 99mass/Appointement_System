<?php @session_start();
unset($_SESSION["admin"]);

header("Location: ../view/admin.php");

?>