<?php

require "../../connection.php";

if(isset($_POST["uname"]) && isset($_POST["pass"])){
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    session_start();

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email` = '".$username."' AND `password` = '".$password."' ");

    if($admin_rs->num_rows > 0){
        $admin_data = $admin_rs->fetch_assoc();

        $_SESSION["admin"] = $admin_data;
        echo true;
    }else{
        echo false;
    }
}
