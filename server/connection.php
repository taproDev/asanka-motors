<?php

//globle data
$_SERVER = "http://localhost:3000";
$authReq = 'asanak-auth';

header('Access-Control-Allow-Origin:'.$_SERVER.'');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

//vehicale types
$helmet = 19;
$bike = 19;
$wheel = 19;

class Database
{
    public static $connection;
    public static function setUpConnection()
    {

        if (!isset(Database::$connection)) {
            //Database::$connection = new mysqli("localhost", "madurang_root", "No254@digana","madurang_asankatest");
            Database::$connection = new mysqli("localhost", "root", "taprodb321", "madurang_asankatest", "3308");
        }
    }

    public static function iud($sql)
    {
        Database::setUpConnection();
        Database::$connection->query($sql);
    }

    public static function search($sql)
    {
        Database::setUpConnection();
        $resalt_set = Database::$connection->query($sql);
        return $resalt_set;
    }
}

function load_err_page()
{
    header('Location: ' . $_SERVER . '/error_page');
    exit();
}

?>