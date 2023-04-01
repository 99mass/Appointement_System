<?php
$sql="SELECT * FROM assistance";
$query=$db->prepare($sql);
        // Exécution de la requête
$query->execute();
$message=$query->fetchAll(PDO::FETCH_ASSOC);




?>