<?php

// appele de la base donné
require_once("../core/dbClient.php");

if (isset($_POST["mail"]) && isset($_POST["message"]) ) {
    if (empty($_POST["mail"]) || empty($_POST["message"])  ) {
        header("Location: ../view/contacte_nous.php?m=er");
    }else{

    $sql="INSERT INTO assistance(`id`,`email`,`message`) VALUES(null,:em,:mes)";
    $req=$db->prepare($sql);
    $req->bindParam(":em",$_POST["mail"]);
    $req->bindParam(":mes",$_POST["message"]);
    if ($req->execute()) {
        header("Location: ../view/a_propos_de_nous.php?m=suc");
    }else {
        header("Location: ../view/a_propos_de_nous.php?m=er");
    }
}
} 


?>