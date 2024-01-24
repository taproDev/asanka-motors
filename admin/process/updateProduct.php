<?php
require "../../connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$prodType = $_POST["prodType"];
$vehType = $_POST["vehType"];
$model = $_POST["model"];
$partnum = $_POST["partnum"];
$samDis = $_POST["samDis"];
$dis = $_POST["dis"];
$price = $_POST["price"];
$dataObj = $_POST["dataObj"];

$isDone = false;

// Check if all variables are not empty
if (!empty($name) && !empty($prodType) && !empty($vehType) && !empty($model) && !empty($partnum) && !empty($samDis) && !empty($dis) && !empty($price)) {
    $isDone = true;


    //add product
    Database::iud("UPDATE  `product` SET
                           `name` = '" . $name . "',
                           `partnum` = '" . $partnum . "',
                           `price` = '" . $price . "',
                           `description` = '" . $dis . "',
                           `productType_id` = '" . $prodType . "',
                           `vehicleType_id` = '" . $vehType . "',
                           `samplediscription` = '" . $samDis . "',
                           `model_id` = '" . $model . "'
                            WHERE `id` = '" . $id . "';");


    //image process
    $uploadedImages = array();
    if (!empty($_FILES['images']['name'][0])) {
        $totalImages = count($_FILES['images']['name']);

        for ($i = 0; $i < $totalImages; $i++) {
            $tempFilePath = $_FILES['images']['tmp_name'][$i];
            $newFileName = uniqid('img_') . '_' . $_FILES['images']['name'][$i];
            $targetFilePath = '../../product/' . $newFileName;

            if (move_uploaded_file($tempFilePath, $targetFilePath)) {
                $uploadedImages[] = $targetFilePath;
            }


            Database::iud("INSERT INTO `images` (`path`, `product_id`) VALUES ('" . $newFileName . "', '" . $id . "');");
        }
    }

    // add colors
    if (isset($_POST["dataObj"])) {
        $dataObj =  $_POST["dataObj"];
        $dataArray = json_decode($dataObj, true);
        $colors = $dataArray['colors'];
        Database::iud("DELETE FROM color_has_product WHERE product_id = '" . $id . "' ");
        foreach ($colors as $color) {
            Database::iud("INSERT INTO color_has_product(`product_id`,color_id) VALUES ('" . $id . "','" . $color . "')");
        }
    }

} else {
    $isDone = false;
}


        //JASON
        $data = array(
            "isDone" => $isDone,
        );
        echo  json_encode($data);
