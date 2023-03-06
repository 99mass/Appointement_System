<?php
$server="localhost";
$dbName='Appointment_System';
$login='root';
$password='';
try {
    $db=new PDO("mysql:host=$server;dbname=$dbName",$login,$password);
    // echo("connecter avec succes");

}catch(PDOException $exception){
    echo "Erreur de connexion : " . $exception->getMessage();
}


?>