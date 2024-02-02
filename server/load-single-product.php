<?php
require './connection.php';
if (isset($_GET['id'])) {

    $productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // Check if $productId is a valid integer
    if ($productId === false || $productId === null) {
        load_err_page();
    } else {

        $search_prod_rs = Database::search("SELECT * , vehicletype.`type` AS vtype , producttype.`type` AS ptype FROM product
                                            INNER JOIN producttype ON product.productType_id = producttype.id
                                            INNER JOIN vehicletype ON product.vehicleType_id = vehicletype.id
                                            INNER JOIN images ON images.product_id = product.id
                                            WHERE product.id = '" . $productId . "' ");

        $search_prod_clr_rs = Database::search("SELECT * FROM color_has_product INNER JOIN color ON color.id = color_has_product.color_id
                                                WHERE color_has_product.product_id = '" . $productId . "' ");

        $search_prod_data = $search_prod_rs->fetch_array();

        // Fetch all the images for the product
        $images = [];
        foreach ($search_prod_rs as $row) {
            $images[] = $row['path'];
        }

        $colorArray = [];
        foreach ($search_prod_clr_rs as $row) {
            $colorArray[] = ['name' => $row['color'],'code' => $row['code']];
        }


        $productData = [
            'name' => $search_prod_data['name'],
            'partNumber' => $search_prod_data['partnum'],
            'price' => $search_prod_data['price'],
            'desciption' => $search_prod_data['description'],
            'type' => $search_prod_data['ptype'],
            'vehicle' => $search_prod_data['vtype'],
            'sampleDiscription' => $search_prod_data['samplediscription'],
            'imageArray' => $images,
            'colorArray' => $colorArray
        ];

        //JASON
        $data = array(
            "Data" => $productData,
        );
        echo json_encode($data);
    }
    ;
} else {
    load_err_page();
}
;
?>