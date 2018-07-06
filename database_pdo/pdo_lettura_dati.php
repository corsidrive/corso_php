<?php

$host = "localhost";

$db = "corso_php";

$user = "root";

$password = "root";

try {
 
    $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    print_r($connessione->query("SELECT * FROM user"));
    echo "Connessione a MySQL tramite PDO effettuata.";
    foreach ($connessione->query("SELECT * FROM user") as $row)
    {
      echo $row['first_name'] ." ". $row['last_name'] . "<br />";
    }

    $connessione = null;
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}
?>