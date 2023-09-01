<?php

if(true){

    $idArray = json_decode($_POST['idArray'], true);
    $varName = array("typeId","vehicle_type","name", "brand", "sampleDis", "description", "price");
    
    for ($i=0; $i < count($varName); $i++) { 
        ${$varName[$i]} = $_POST[$idArray[$i]];
    }



    if (empty($typeId)) {
        echo ("please select a product type");
    }else if (empty($vehicle_type)) {
        echo ("please select a vehicle_type");
    } else if (strlen($name) >= 100) {
        echo ("Title shouid have less than 100 characters");
    } else if (empty($name)) {
        echo ("Please add the title ");
    } else if (empty($sampleDis)) {
        echo ("Please add the Sample Discription ");
    } else if (empty($discription)) {
        echo ("Please add the Discription ");
    } else if (empty($price)) {
        echo ("Please add the price ");
    } else if (!isset($_FILES['images'])){
        echo "Please add some few images";
    }elseif(empty($brand)){
        echo ("Please add the brand name ");
    }else{
        //add prodcuct
        Database::iud("INSERT INTO `product` 
        (`name`,
        `partnum`,
        `price`,
        `description`,
        `productType_id`,
        `vehicleType_id`,
        `samplediscription`) VALUES 
        ('".$d."',
         '".$d."', 
         '".$d."', 
         '".$d."', 
         '".$d."', 
         '".$d."', 
         '".$d."', );");
    }
    

}else{
    echo "No data";
}
