<?php

abstract class Model {

    private $connessione;

    public function __construct(){

        $host = "localhost";
        $db = "corso_php";
        $user = "root";
        $password = "root";
        
        try {
         
            $this->connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            
           
        }
        catch(PDOException $e)
        {
          // notifica in caso di errore nel tentativo di connessione
          echo $e->getMessage();
        }

    }

    abstract public function create(object $data);
    abstract public function read($data);
    abstract public function update($data);
    abstract public function delete($data);
}