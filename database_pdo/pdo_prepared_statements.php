<?php

$host = "localhost";

$db = "corso_php";

$user = "root";

$password = "root";

try {
 
    $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connessione a MySQL tramite PDO effettuata.";
    
    $nome = 'Kendra';

    //SELECT * FROM `user` WHERE first_name LIKE 'K%'
    $query = $connessione->prepare("SELECT * FROM `user` WHERE first_name = :ricerca;"); 
    $query->bindParam(':ricerca',$nome,PDO::PARAM_STR);
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}