<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>

    <div class="col-12 my-3 d-lg-flex d-block flex-column flex-lg-row align-items-end">
        <h1 class="text-center text-uppercase mx-auto col-12 col-lg-6">Deliverd Order</h1>
        <div class="col-lg-4 col-12">
            <label class="form-label text-white">Search Here</label>
            <input type="text" class="form-control bg-transparent text-white" id="orderSearch">
        </div>
        <div class="col-lg-2 col-12">
            <button class="btn btn-danger rounded-0 py-3 col-12" onclick="searchOrderHis();">Search Order History</button>
        </div>
    </div>

    <div style="overflow-x: scroll !important;" class="col-12 mx-auto">
        <table class="table table-dark mx-2">
            <thead>
                <tr class="text-center">
                    <th scope="col">Order Id</th>
                    <th scope="col">View Order Details</th>
                    <th scope="col">Contact number</th>
                </tr>
            </thead>
            <tbody id="orderBody-His">
                <?php
                $get_order_rs = Database::search("SELECT *  FROM `order`WHERE `order_status_id`='2' ");

                foreach ($get_order_rs as $get_order_data) {
                ?>
                    <tr class="text-center">
                        <th><?php echo $get_order_data["order_id"] ?></th>
                        <?php
                        if ($get_order_data["product_id"] != NULL) {
                            $loc = "index";
                        } elseif ($get_order_data["tyre_id"] != NULL) {
                            $loc = "tyreOrder";
                        } else {
                            $loc = "helmetOrder";
                        }

                        ?>
                        <td><a class="btn btn-primary rounded" href="<?php echo $domain ?>order/<?php echo urlencode($loc); ?>.php?id=<?php echo urlencode($get_order_data["order_id"]); ?>" target="_blank">View Order</a></td>
                        <td><a href="tel:<?php echo $get_order_data["mobile"] ?>"><?php echo $get_order_data["mobile"] ?></a></td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>

<?php
    require './footer.php';
} else {
    header("location:./adminSignin.php");
}

?>