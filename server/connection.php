<?php

//globle data
$_SERVER = "http://localhost:3000";
$authReq = 'asanak-auth';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin:'.$_SERVER.'');

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