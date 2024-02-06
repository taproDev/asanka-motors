<?php
require './connection.php';

if (isset($_POST['auth']) && $_POST["auth"] == $authReq && isset($_POST["serchKey"])) {

    $key = $_POST["serchKey"];

    $search_prod_rs = Database::search("SELECT * FROM product WHERE `name` LIKE '%" . $key . "%' LIMIT 5");
    $search_prod_data = [];

    while ($row = $search_prod_rs->fetch_assoc()) {
        $product = array(
            'id' => $row['id'],
            'name' => $row['name']
        );
        $search_prod_data[] = $product;
    }

    //JASON
    $data = array(
        "proddata" => $search_prod_data,
    );
    echo json_encode($data);

} else {
    load_err_page();
}
?>