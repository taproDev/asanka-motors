<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>


    <div class="col-12 mt-5">
        <div class="row">
            <div class="col-12 ">
                <div class="row">

                    <!-- search sectio -->
                    <div class="col-12">
                        <div class="row g-2">

                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search Product.." id="search-product" class=" form-control border-end-0 form-control-sm" onkeyup="searchProduct()">
                                            <button class="btn btn-white btn-sm border border-start-0"> <i class="bi bi-search"></i> </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 ps-4 col-11 mt-lg-5 mt-4 pt-3 pt-lg-0  item-dropdown position-absolute  " style="z-index: 100;">
                                        <div class="row" id="search-product-view">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-7" style="z-index: 1;">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" placeholder="Part number" class="form-control border-start-0 form-control-sm" id="barcode" onchange="loadProductCode()" oninput="loadProductCode()">
                                </div>
                            </div>
                            <div class="col-lg-3 col-12" style="z-index: 3;">
                                <a href="./addProduct.php" class="btn btn-success col-12 btn-sm"> <i class="bi bi-bag-plus"></i> Add New Product</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!-- search sectio -->
                    <!-- product load section -->

                    <div class="col-12 order-table">
                        <table class="table bill-item-table table-hover ">
                            <thead>
                                <tr class="bg-blue text-white">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Vehicle</th>
                                    <th>Part Number</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="productlist">
                                <?php

                                $select_rs = Database::search("SELECT * FROM `product` ");
                                $select_num = $select_rs->num_rows;

                                $product_rs;
                                $pageno;

                                if (isset($_GET["page"])) {
                                    $pageno = $_GET["page"];
                                } else {
                                    $pageno = 1;
                                }
                                $results_per_page = 100;
                                $number_of_pages = ceil($select_num / $results_per_page);

                                $page_results = ($pageno - 1) * $results_per_page;
                                $product_rs;

                                $product_rs = Database::search("SELECT product.*, vehicletype.*, product.id AS pid FROM `product`
                                INNER JOIN `vehicletype` ON product.vehicleType_id = vehicletype.id  ORDER BY `pid` ASC LIMIT " . $results_per_page . " OFFSET " . $page_results . "  ");

                                if ($product_rs->num_rows <= 0) {
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
                                            <a href="./addProduct.php?id=<?php echo $product_data['pid'] ?>"><i class="bi bi-pencil-square  text-info fs-5 cursor-pointer"></i></a>
                                        </td>
                                    </tr>

                                <?php
                                }

                                ?>


                            </tbody>
                        </table>
                    </div>
                    <!-- product load section -->

                    <!-- pagination -->
                    <div class="col-12 fixed-bottom text-center">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo ("?page=1"); ?>" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-caret-left-fill"></i></span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="
                                                
                                                <?php
                                                if ($pageno <= 1) {
                                                    echo ("#");
                                                } else {
                                                    echo ("?page=" . ($pageno - 1));
                                                }

                                                ?>
                                                
                                                " aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php

                                $showingPages;

                                if ($pageno + 5 <= $number_of_pages) {
                                    $showingPages =  $pageno + 5;
                                } else {
                                    $showingPages = $number_of_pages;
                                }

                                $startpoint;
                                if ($pageno - 5 >= 1) {
                                    $startpoint = $pageno - 5;
                                } else {
                                    $startpoint = 1;
                                }
                                for ($x =  $startpoint; $x <= $showingPages; $x++) {
                                    if ($x == $pageno) {
                                ?>
                                        <li class="page-item active"><a class="page-link" href="#">
                                                <?php echo ($x); ?>

                                            </a></li>

                                    <?php
                                    } else {
                                    ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo ("?&page=" . ($x)); ?>"> <?php echo ($x); ?> </a></li>
                                <?php
                                    }
                                }

                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="
                                                
                                                <?php
                                                if ($pageno >= $number_of_pages) {
                                                    echo ("#");
                                                } else {
                                                    echo ("?page=" . ($pageno + 1));
                                                }

                                                ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo ("?page=" . $number_of_pages); ?>" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-caret-right-fill"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination -->
                </div>
            </div>
        </div>
    </div>


    <script>
        window.onload(document.getElementById('barcode').focus())
    </script>


<?php
    require './footer.php';
} else {
    header("location:./adminSignin.php");
}

?>


<?php


// for ($i = 1; $i <= 100; $i++) {
//     $name = "Product " . $i;
//     $partnum = "P" . ($i * 123);
//     $price = rand(50, 200); // Random price between 50 and 200
//     $description = "Description for " . $name;
//     $productType_id = rand(1, 3); // Random productType_id between 1 and 3
//     $vehicleType_id = rand(1, 3); // Random vehicleType_id between 1 and 3
//     $samplediscription = "Sample Description for " . $name;
//     $model_id = rand(1, 3); // Random model_id between 1 and 3

//     Database::iud("INSERT INTO `product` (`name`, `partnum`, `price`, `description`, `productType_id`, `vehicleType_id`, `samplediscription`, `model_id`) VALUES 
//     ('".$name."', '".$partnum."', '".$price."', '".$description."', '".$productType_id."', '".$vehicleType_id."', '".$samplediscription."', '".$model_id."')");


// }




?>