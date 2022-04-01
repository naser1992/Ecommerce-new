<?php
class db{
    private $host ="localhost";
    private $user ="root";
    private $pass ="";
    private $dbName ="ecommerce";

    public function connect(){
        $dsn ='mysql:host=' . $this->host .';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
        echo $this->host;
    }
}