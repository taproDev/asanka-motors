<?php
require "../../connection.php";

$type = $_GET["type"];

$isSet = false;
$getType = array();
$isAlreadyExists=false;

// Check if all variables are not empty
if (!empty($type)){
    $isSet = true;

    $checkProdType_rs = Database::search("SELECT * FROM model WHERE `model`='".$type."'");
    $checkProdType_num = $checkProdType_rs->num_rows;

    if($checkProdType_num==0){
        Database::iud("INSERT INTO `model` (`model`) VALUES ('".$type."');");
        $getProdType_rs = Database::search("SELECT * FROM model");
        
        while ($getProdType_data = $getProdType_rs->fetch_assoc()) {
            $getType[] = $getProdType_data;
        }
        $isAlreadyExists=false;
    }else{
        $isAlreadyExists=true;
    }



} else {
    $isSet = false;
    $getType = [];
    $isAlreadyExists=false;
}


//JASON
$data = array(
    "isSet" => $isSet,
    "getType"=> $getType,
    "isAlreadyExists"=>$isAlreadyExists
);
echo  json_encode($data);