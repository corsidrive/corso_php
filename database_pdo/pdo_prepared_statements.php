<?php

$host = "localhost";

$db = "corso_php";

$user = "root";

$password = "root";

try {
 
    $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connessione a MySQL tramite PDO effettuata.\n";
    
    $nome = 'Kendra';

    //SELECT * FROM `user` WHERE first_name LIKE 'K%'
    //$query = $connessione->prepare("SELECT * FROM `user` WHERE first_name = :ricerca;"); 
    $query = $connessione->prepare("SELECT * FROM `user`"); 

    print_r($query);
    $query->bindParam(':ricerca',$nome,PDO::PARAM_STR);
    $query->execute();

    echo "Trovati:".$query->rowCount();

    $res = $query->fetch();
    print_r($res);

    $res = $query->fetch();
    print_r($res);

}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
  echo $e->getMessage();
}