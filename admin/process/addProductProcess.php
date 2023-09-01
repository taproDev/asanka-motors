<?php

require '../../connection.php';

if(true){

    $idArray = json_decode($_POST['idArray'], true);
    $varName = array("typeId","vehicle_type","partNum","name", "model_id", "sampleDis", "description", "price");
    
    for ($i=0; $i < count($varName); $i++) { 
        ${$varName[$i]} = $_POST[$idArray[$i]];
    }



    if (empty($typeId)) {
        echo ("please select a product type");
    }else if (empty($vehicle_type)) {
        echo ("please select a vehicle_type");
    }else if (empty($partNum)) {
        echo ("please add a part number");
    } else if (strlen($name) >= 100) {
        echo ("Title shouid have less than 100 characters");
    } else if (empty($name)) {
        echo ("Please add the title ");
    } else if (empty($sampleDis)) {
        echo ("Please add the Sample Discription ");
    } else if (empty($description)) {
        echo ("Please add the Discription ");
    } else if (empty($price)) {
        echo ("Please add the price ");
    // } else if (!isset($_FILES['images'])){
    //     echo "Please add some few images";
    }else if(empty($model_id)){
        echo ("Please add the model id ");
    }else{
        //add prodcuct
        Database::iud("INSERT INTO `product` 
        (`name`,
        `partnum`,
        `price`,
        `description`,
        `productType_id`,
        `vehicleType_id`,
        `samplediscription`,
        `model_id`) VALUES 
        ('".$name."',
         '".$partNum."', 
         '".$price."', 
         '".$description."', 
         '".$typeId."', 
         '".$vehicle_type."', 
         '".$sampleDis."',
         '".$model_id."' )");

        echo "=========";
        echo $name;
        echo "-";
        echo $partNum;
        echo "-";
        echo $price;
        echo "-";
        echo $description;
        echo "-";
        echo $typeId;
        echo "-";
        echo $vehicle_type;
        echo "-";
        echo $sampleDis;
        echo "-";
        echo $model_id;
        echo "========";
}


    

}else{
    echo "No data";
}
