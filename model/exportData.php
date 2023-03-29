<?php 
 @session_start(); // on demare la session
$id=$_GET["id"];
// appele de la base donné
require_once("../core/dbClient.php");

// lire les lignes de la table
$sql="SELECT *  FROM rv_$id";
$requete=$db->prepare($sql);
$requete->execute();
$listes=$requete->fetchAll(PDO::FETCH_ASSOC);

// lire les colonne de la table
$sql0 = "SHOW COLUMNS  FROM rv_$id";
$requet = $db->prepare($sql0);
$requet->execute();
$columns = $requet->fetchAll(PDO::FETCH_COLUMN);
 

if(count($listes)> 0){ 
    $delimiter = ","; 
    $filename = "liste_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    //  tableaux pour stocker les colonnes
    $fields = [];
        foreach ($columns as $cle=> $col) { 
            $col_sans_undescore=str_replace("_"," ",$col);
            $col_sans_space=str_replace(" ","",$col_sans_undescore);
            $fields[$cle]=$col_sans_space;
         }      
    fputcsv($f, $fields, $delimiter); 
     
    // tableau pour stocker les lignes
    $lineData =[];
    for ($i = 0; $i < count($listes); $i++) {
        foreach ($listes[$i] as $cle => $ligne) { 
            $lineData[$cle]=$ligne; 
    }
   
    fputcsv($f, $lineData, $delimiter); 
}

    fseek($f, 0); 
     
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
      
    fpassthru($f); 
} 
exit; 
 
?>