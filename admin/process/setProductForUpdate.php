<?php

require "../../connection.php";

if(isset($_GET["prodId"])){
    $id = $_GET["prodId"];
    

    $getProdData_rs = Database::search("SELECT * FROM product WHERE id = '".$id."'");
    $getProdData_Num = $getProdData_rs->num_rows;

    $getProdImg_rs = Database::search("SELECT * FROM images WHERE product_id = '".$id."' ");
    $getProdData_num = $getProdImg_rs->num_rows;

    $getProdColor_rs = Database::search("SELECT `color_id` FROM color_has_product WHERE product_id = '".$id."' ");
    $getProdColor_num = $getProdColor_rs->num_rows;

    if($getProdData_Num==1){
        $getProdData = $getProdData_rs->fetch_assoc();
        $imagArray = array();
        $colorArray= array();

        if($getProdData_num>0){ 
            while ($getProdImgData = $getProdImg_rs->fetch_assoc()) {
                $imagArray[] = $getProdImgData["path"];
            }
        }

        if($getProdColor_num>0){
            while ($getProdcolorData = $getProdColor_rs->fetch_assoc()) {
                $colorArray[] = $getProdcolorData;
            }
        }


        //JASON
        $data = array(
            "prodTitle" => $getProdData["name"],
            "prodType" => $getProdData["productType_id"],
            "vehType" => $getProdData["vehicleType_id"],
            "model" => $getProdData["model_id"],
            "partnum" => $getProdData["partnum"],
            "samDis" =>$getProdData["samplediscription"],
            "Dis"=>$getProdData["description"],
            "price"=>$getProdData["price"],
            "images" => $imagArray,
            "colors"=>$colorArray,
        );
        echo  json_encode($data);
    }
}

?>