<?php

class Database{
    private static $connection = null;
    private static $statement = null;
    private static $id = null;
    private static $error = null;

    private function connect(){
        
    $servername = "localhost";
    $database = "luho";
    $username = "root";
    $password = "Estefany1";
    $charset = "utf8mb4";
        try{
            $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
            @self::$connection = new PDO($dsn, $username, $password);
        }catch(PDOException $exception){
            throw new Exception($exception->getCode());
        }
    }

    private function desconnect(){
        self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }

    public static function executeRow($query, $values){
        $db= new Database();
        $db->connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::$id = self::$connection->lastInsertId();
        $db->desconnect();
        return $state;
    }

    public static function getRow($query, $values){
        $db= new Database();
        $db->connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        $db->desconnect();
        return self::$statement->fetch();
    }

    public static function getRows($query, $values){
        $db= new Database();
        $db->connect();
        self::$statement =  self::$connection->prepare($query);
        self::$statement->execute($values);
        $db->desconnect();
        return  self::$statement->fetchAll();
    }

    public static function getLastRowId(){
        return self::$id;
    }

    public static function getException(){
        if(self::$error[0] == "00000"){
            return false;
        }else{
            return self::$error[1];
        }
    }
}  
?>
