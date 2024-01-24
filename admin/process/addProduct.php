<?php
require "../../connection.php";

$name = $_POST["name"];
$prodType = $_POST["prodType"];
$vehType = $_POST["vehType"];
$model = $_POST["model"];
$partnum = $_POST["partnum"];
$samDis = $_POST["samDis"];
$dis = $_POST["dis"];
$price = $_POST["price"];
$dataObj = $_POST["dataObj"];

$isAllFill = false;

// Check if all variables are not empty
if (!empty($name) && !empty($prodType) && !empty($vehType) && !empty($model) && !empty($partnum) && !empty($samDis) && !empty($dis) && !empty($price)) {
    $isAllFill = true;


    //add product
    Database::iud("INSERT INTO `product`
                            (`name`,
                             `partnum`,
                             `price`,
                             `description`,
                             `productType_id`,
                             `vehicleType_id`,
                             `samplediscription`,
                             `model_id`) VALUES 
                             ('" . $name . "',
                              '" . $partnum . "',
                              '" . $price . "',
                              '" . $dis . "',
                              '" . $prodType . "',
                              '" . $vehType . "',
                              '" . $samDis . "',
                              '" . $model . "');");


    $prod_id = Database::$connection->insert_id;
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


            Database::iud("INSERT INTO `images` (`path`, `product_id`) VALUES ('" . $newFileName . "', '" . $prod_id . "');");
        }
    }

    // add colors
    if (isset($_POST["dataObj"])) {
        $dataObj =  $_POST["dataObj"];
        $dataArray = json_decode($dataObj, true);
        $colors = $dataArray['colors'];
        foreach ($colors as $color) {
            Database::iud("INSERT INTO color_has_product(`product_id`,color_id) VALUES ('" . $prod_id . "','" . $color . "')");
        }
    }
} else {
    $isAllFill = false;
}


        //JASON
        $data = array(
            "isAllFill" => $isAllFill,
        );
        echo  json_encode($data);