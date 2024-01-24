<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>

    <div class="col-10 offset-1">
        <div class="row">

            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-12 col-lg-4 p-4 bg-success ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-black"><i class="bi bi-gear-wide-connected"></i> &nbsp; Total Bike Products</div>
                            <div class="col-12 mt-4 h5 text-black">
                                <?php
                                $product_rs = Database::search("SELECT * FROM `product` ");
                                echo ($product_rs->num_rows . " Products");
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 p-4 bg-danger ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-white"><i class="bi bi-bookmarks"></i> &nbsp; Total Helmets</div>
                            <div class="col-12 mt-4 h5 text-white">
                                <?php
                               $product_rs = Database::search("SELECT * FROM `product` WHERE `vehicleType_id`='1' ");
                               echo ($product_rs->num_rows . " helmet");
                                ?>50
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 p-4 bg-primary ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-white"><i class="bi bi-browser-chrome"></i> &nbsp; Total Three wheel product</div>
                            <div class="col-12 mt-4 h5 text-white">
                                <?php
                                $product_rs = Database::search("SELECT * FROM `product` WHERE `vehicleType_id`='2' ");
                                echo ($product_rs->num_rows . " Products");
                                ?>50
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 my-1">
                <div class="row">
                    <div class="col-12 col-lg-4 p-4 bg-warning ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-white"><i class="bi bi-rss-fill"></i> &nbsp; Total modification part</div>
                            <div class="col-12 mt-4 h5 text-white">
                                <?php
                              $product_rs = Database::search("SELECT * FROM `product` WHERE `vehicleType_id`='3' ");
                              echo ($product_rs->num_rows . " Products");
                                ?>50
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 p-4 bg-info ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-black"><i class="bi bi-cart-check-fill"></i> &nbsp; Total Orders</div>
                            <div class="col-12 mt-4 h5 text-black">
                                <?php
                               //$order_n_rs = Database::search("SELECT * FROM `order` ");
                               //echo ($order_n_rs->num_rows . " Orders");
                                ?>50
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 p-4 bg-success ">
                        <div class="row">
                            <div class="col-12 font-weight-bold h4 text-white"><i class="bi bi-bag-check-fill"></i> &nbsp; Total Selling</div>
                            <div class="col-12 mt-4 h5 text-white">
                                <?php
                                //$order_rs = Database::search("SELECT * FROM `order` WHERE `order_status_id`='2' ");
                                //$qty = 0;
                                //for ($x = 0; $x < $order_rs->num_rows; $x++) {
                                //    $order_data = $order_rs->fetch_assoc();
                                //    $qty = $qty + $order_data["qty"];
                                //}
                                //echo ($qty . " Items")

                                ?>50
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-3 p-4 bg-white">
                <div class="row">
                    <div class="col-12 font-weight-bold">Admin Features</div>
                    <div class="col-12">
                        <hr class="bg-secondary">
                    </div>
                    <a href="./addProduct.php" class="btn-dark my-1 btn py-2 col-12 text-white">Add Product</a>
                    <a href="./manage.php" class="btn-dark my-1 btn py-2 col-12 text-white">Manage Product</a>
                    <a href="./additional.php" class="btn-dark btn py-2 col-12 mt-2 text-white">Additional adding</a>
                    <a href="./viewOrder.php" class="btn-dark btn py-2 col-12 mt-2 text-white">View Orders</a>
                    <a href="./viewOrderHis.php" class="btn-dark btn py-2 col-12 mt-2 text-white">View Orders History</a>
                    <button class="btn-dark btn py-2 mt-2 col-12 text-white" onclick="signOut();">Sign Out</button>
                </div>
            </div>

            <div class="col-12 mt-2 p-4 col-lg-8">
                <div class="row">
                    <div class="col-12 text-white">Latest Updates</div>
                    <div class="col-12">
                        <hr class="bg-white">
                    </div>
                    <div class="col-12 mt-3 latestView">
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-0 offset-lg-1 bg-white mt-2 p-3">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="row">
                                            <?php
                                            //$latest_o_rs = Database::search("SELECT * FROM `order` WHERE `order_status_id`='1' ");
                                            ?>
                                            <div class="col-12 text-black font-weight-bold h5">Pending Order - 100<?php //echo $latest_o_rs->num_rows ?></div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="bi bi-bag-plus-fill text-danger h2"></i>
                                    </div>
                                </div>
                            </div>
                            <?php

                            $d = new DateTime();
                            $tz = new DateTimeZone("Asia/Colombo");
                            $d->setTimezone($tz);
                            $date = $d->format("Y-m-d");

                            // echo $date;      
                           //$order_count = 0;
                           //$latest_order_rs = Database::search("SELECT * FROM `order` WHERE `order_status_id`='1' ");
                           //for ($o = 0; $o < $latest_order_rs->num_rows; $o++) {
                           //    $latest_order_data = $latest_order_rs->fetch_assoc();

                           //    $date_split = explode(" ", $latest_order_data["date"]);
                           //    $orderdate = $date_split[0];
                           //    if ($orderdate == $date) {
                           //        $order_count = $order_count + 1;
                           //    }
                           //}
                           //if ($order_count > 0) {
                            ?>
                                <div class="col-12 col-lg-10 offset-0 offset-lg-1 bg-white mt-2 p-3">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-12 text-black font-weight-bold h5">New Order - <?php //echo $latest_order_rs->num_rows ?></div>
                                                <div class="col-12 text-black-50 ">You have new <?php // echo $order_count ?> Orders</div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-center">
                                            <i class="bi bi-bag-plus-fill text-danger h2"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            //}
                            //$feed_count = 0;
                            //$latest_feed_rs = Database::search("SELECT * FROM `happycustomer` ");
                            //for ($o = 0; $o < $latest_feed_rs->num_rows; $o++) {
                            //    $latest_feed_data = $latest_feed_rs->fetch_assoc();
//
                            //    $date_split = explode(" ", $latest_feed_data["date"]);
                            //    $orderdate = $date_split[0];
                            //    if ($orderdate == $date) {
                            //        $feed_count = $feed_count + 1;
                            //    }
                            //}
                            //if ($feed_count > 0) {

                            ?>
                                <div class="col-12 col-lg-10 offset-0 offset-lg-1 bg-white mt-2 p-3">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-12 text-black font-weight-bold h5">New FeedBack</div>
                                                <div class="col-12 text-black-50 ">You have new <?php // echo $feed_count ?> Feedbacks</div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-center">
                                            <i class="bi bi-rss-fill text-primary h2"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php
                           // }

                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php
    require './footer.php';
} else {
    header("location:./adminSignin.php");
}

?>