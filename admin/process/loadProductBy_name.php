<?php

$code = $_POST["code"];
require "../../connection.php";

if (!empty($code)) {

    $product_rs =Database::search("SELECT product.*, vehicletype.*, product.id AS pid FROM `product`
    INNER JOIN `vehicletype` ON product.vehicleType_id = vehicletype.id
    WHERE `name` LIKE '%" . $code . "%' OR `type` LIKE '%" . $code . "%';
    ");
    $product_num = $product_rs->num_rows;
    if($product_num<= 0) {
    ?>
        <tr>
            <td class="text-center fs-4 text-black-50 p-5 " colspan="7">No Item found</td>
        </tr>
    <?php
    }
    foreach ($product_rs as $product_data) {
    ?>
        <tr>
            <td><?php echo $product_data["pid"] ?></td>
            <td><?php echo $product_data["name"] ?></td>
            <td><?php echo $product_data["type"] ?></td>
            <td><?php echo $product_data["partnum"] ?></td>
            <td class="text-start">Rs:<?php echo $product_data["price"] ?>.00</td>
            <td>
                <a href="./addProduct.php?id=<?php echo $product_data['id'] ?>"><i class="bi bi-pencil-square  text-info fs-5 cursor-pointer"></i></a>
            </td>
        </tr>
<?php
    }
}

?>