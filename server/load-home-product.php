<?php
require './connection.php';


if (isset($_POST['auth']) && $_POST["auth"] == $authReq) {

    $search_f_l_id_rs = Database::search("SELECT MIN(id) AS min_id , MAX(id) AS max_id FROM product");
    $search_f_l_id_data = $search_f_l_id_rs->fetch_assoc();

    $first_item_id_in_db = $search_f_l_id_data["min_id"]; //fist prod id
    $last_item_id_in_db = $search_f_l_id_data["max_id"]; //last prod id


    //01.latest item - 6 (tempory load normal product data) - (need to load most orderd data)
    $search_latest_item_rs = Database::search("SELECT product.id, product.name, MAX(images.path) AS `path` ,
                                               product.samplediscription , product.price
                                               FROM product INNER JOIN images ON images.product_id = product.id
                                               GROUP BY product.id, product.name LIMIT 6 ");

    $latestItemData = array();
    while ($row = $search_latest_item_rs->fetch_assoc()) {
        $latestItemData[] = array(
            "id" => $row["id"],
            "title" => $row["name"],
            "image" => $row["path"],
            "sampleDis" => $row["samplediscription"],
            "price" => $row["price"],
        );
    }

    //02.helmet item 3 (andomly select)
    $search_helmet_item_rs = Database::search("SELECT
                                                    product.id,
                                                    product.name,
                                                    MAX(images.path) AS `path`,
                                                    product.samplediscription,
                                                    product.price
                                                FROM product INNER JOIN images ON images.product_id = product.id
                                                WHERE product.id BETWEEN '" . $first_item_id_in_db . "' AND '" . $last_item_id_in_db . "' AND product.vehicleType_id = '" . $helmet . "'
                                                GROUP BY product.id, product.name ORDER BY RAND() LIMIT 3;");

    $helmetItemData = array();
    while ($row = $search_helmet_item_rs->fetch_assoc()) {
        $helmetItemData[] = array(
            "id" => $row["id"],
            "title" => $row["name"],
            "image" => $row["path"],
            "sampleDis" => $row["samplediscription"],
            "price" => $row["price"],
        );
    }

    //03.bike item 4 (randomly select)
    $search_bike_item_rs = Database::search("SELECT
                                                    product.id,
                                                    product.name,
                                                    MAX(images.path) AS `path`,
                                                    product.samplediscription,
                                                    product.price
                                                FROM product INNER JOIN images ON images.product_id = product.id
                                                WHERE product.id BETWEEN '" . $first_item_id_in_db . "' AND '" . $last_item_id_in_db . "' AND product.vehicleType_id = '" . $bike . "'
                                                GROUP BY product.id, product.name ORDER BY RAND() LIMIT 4;");

    $bikeItemData = array();
    while ($row = $search_bike_item_rs->fetch_assoc()) {
        $bikeItemData[] = array(
            "id" => $row["id"],
            "title" => $row["name"],
            "image" => $row["path"],
            "sampleDis" => $row["samplediscription"],
            "price" => $row["price"],
        );
    }

    //04.3wheel data item 3 (andomly select)
    $search_wheel_item_rs = Database::search("SELECT
                                                product.id,
                                                product.name,
                                                MAX(images.path) AS `path`,
                                                product.samplediscription,
                                                product.price
                                            FROM product INNER JOIN images ON images.product_id = product.id
                                            WHERE product.id BETWEEN '" . $first_item_id_in_db . "' AND '" . $last_item_id_in_db . "' AND product.vehicleType_id = '" . $wheel . "'
                                            GROUP BY product.id, product.name ORDER BY RAND() LIMIT 4;");

    $wheelItemData = array();
    while ($row = $search_wheel_item_rs->fetch_assoc()) {
        $wheelItemData[] = array(
            "id" => $row["id"],
            "title" => $row["name"],
            "image" => $row["path"],
            "sampleDis" => $row["samplediscription"],
            "price" => $row["price"],
        );
    }

    //JASON
    $data = array(
        "latestItem" => $latestItemData,
        "helmetItem" => $helmetItemData,
        "bikeItem" => $bikeItemData,
        "wheelItem" => $wheelItemData,
    );
    echo json_encode($data);

} else {
    load_err_page();
}

?>