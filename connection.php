<?php

//globle data
$domain = " https://asankamotors.lk/";
$mobile = "0771617400";
$email = "sahanmadusha001@gmail.com";
$facebook="https://asankamotors.lk/";


class Database {
    public static $connection;

    public static function setUpConnection(){

        if(!isset(Database::$connection)){
             //Database::$connection = new mysqli("localhost", "root", "sahan123","asanka","3306");
               Database::$connection = new mysqli("localhost", "madurang_root", "No254@digana","madurang_asankatest");

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