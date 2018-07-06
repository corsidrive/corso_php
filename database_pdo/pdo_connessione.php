<?php

$host = "localhost";

$db = "corso_php";

$user = "root";

$password = "root";

try {
 
    $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    
    echo "Connessione a MySQL tramite PDO effettuata.";
    $connessione = null;
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}
?>