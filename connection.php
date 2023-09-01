<?php

//globle data
$domain = " ";
$mobile = "";
$email = "";
$facebook="";


class Database {
    public static $connection;

    public static function setUpConnection(){

        if(!isset(Database::$connection)){
             Database::$connection = new mysqli("localhost", "root", "####","asanka","3306");
}
    }

    public static function iud($sql){

        Database::setUpConnection();
        Database::$connection->query($sql);

    }

    public static function search($sql){

        Database::setUpConnection();
        $resalt_set = Database::$connection->query($sql);
        return $resalt_set;

    }
}

?>