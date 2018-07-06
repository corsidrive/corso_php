<?php

$host = "localhost";

$db = "corso_php";

$user = "root";

$password = "root";

try {
 
    $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connessione a MySQL tramite PDO effettuata.";
    
    $query = $connessione->query("SELECT * FROM user");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    // foreach ( as $row)
    // {
    //   echo $row['first_name'] ." ". $row['last_name'] . "<br />";
    // }


    $connessione = null;
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}
?>