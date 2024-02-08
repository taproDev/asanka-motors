<?php
require './connection.php';


if (isset($_POST['auth']) && $_POST["auth"] == $authReq && isset($_POST["id"])) {

    //02.helmet item 3 (andomly select)
    $search_cart_item_rs = Database::search("SELECT * FROM product
                                                INNER JOIN images ON product.id = images.product_id
                                                WHERE product.id = '".$_POST["id"]."'
                                                LIMIT 1 ");

    $cartItemData = array();
    while ($row = $search_cart_item_rs->fetch_assoc()) {
        $cartItemData[] = array(
            "title" => $row["name"],
            "image" => $row["path"],
            "dis"=> $row["samplediscription"]
        );
    }

    //JASON
    $data = array(
        "cartItemData" => $cartItemData,
    );
    echo json_encode($data);

} else {
    load_err_page();
}

?>