<?php
class DB{
 
var $databaseHost = 'localhost';
var $databaseName = 'robot';
var $databaseUsername = 'root';
var $databasePassword = '';
var $dbConn;

    public function __construct() {
        try {
            // http://php.net/manual/en/pdo.connections.php
            $this->dbConn = new PDO("mysql:host={$this->databaseHost};dbname={$this->databaseName}", $this->databaseUsername, $this->databasePassword);
            
            $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
            // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDB(){
return $this->dbConn;
    }


}