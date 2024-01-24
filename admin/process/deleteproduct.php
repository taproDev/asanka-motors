<?php
require "../../connection.php";

$id = $_GET["id"];

$isDelete = false;

// Check if all variables are not empty
if (!empty($id)) {
    $isDelete = true;

   // Disable foreign key checks
Database::iud("SET foreign_key_checks = 0");

// Perform the delete operation
Database::iud("DELETE FROM color_has_product WHERE product_id = '".$id."'");
Database::iud("DELETE FROM images WHERE product_id = '".$id."'");
Database::iud("DELETE FROM product WHERE id = '".$id."'");


// Enable foreign key checks (important to re-enable after the operation)
Database::iud("SET foreign_key_checks = 1");


    
} else {
    $isDelete = false;
}

//JASON
$data = array(
    "isDelete" => $isDelete,
);
echo  json_encode($data);