<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>

    <div class="col-12 d-flex justify-content-end mx-2 my-3">
        <button class="btn btn-sm btn-dark rounded-pill mx-1 px-2 py-1 d-none" onclick="visibleUpdate()" id="addProcutSecBtn">Add Product</button>
        <button class="btn btn-sm btn-dark rounded-pill mx-1 px-2 py-1" onclick="visibleUpdate()" id="updateProcutSecBtn">update/delete Product</button>
    </div>

    <div class="col-12 col-lg-6 mx-auto text-center my-2 d-none" id="productSelector">
        <label class="form-label text-dark">Search Product through Title</label>
        <div class="d-flex flex-row justify-content-center">
            <div class="input-group">
                <select class="form-control bg-transparent accordion-body chosen text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="setProduct_update">
                    <option disabled selected value=""> -- select product --</option>
                    <?php
                    $set_product_rs = Database::search("SELECT * FROM product ORDER BY id ASC");
                    while ($set_product_row = $set_product_rs->fetch_assoc()) {
                        echo '<option class=" fw-bold" value="' . $set_product_row['id'] . '">' . $set_product_row['name'] . " - Rs:" . $set_product_row['price'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="row d-flex flex-column flex-md-row justify-content-center mx-0">

        <div class="col-12 col-lg-5 py-3">
            <div class="row">
                <div class="col-12">
                    <img src="../resources/images/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="productaddimg-0">
                </div>
            </div>
            <div class="row mt-3">


                <div class="d-flex col-12 flex-row" style="overflow-x: scroll;">
                    <?php
                    for ($i = 0; $i < 20; $i++) {
                    ?>
                        <div class="col-4">
                            <img src="../resources/images/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="productaddimg-<?php echo $i+1 ?>">
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-12 mt-3">
                    <input type="file" class="d-none" multiple id="imageSelect">
                    <label for="imageSelect" class=" btn py-2 btn-dark col-12 rounded-0" onclick="addProductimage()">Add Images</label>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-7 p-3">

            <div class="row ">

                <label class="form-label text-dark">Select product type</label>
                <div class="d-flex flex-row justify-content-center col-12 ">
                    <div class="input-group">
                        <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="product_type">
                            <option disabled selected value=""> -- select product type --</option>
                            <?php
                            $set_product_rs = Database::search("SELECT * FROM producttype ORDER BY id ASC");
                            while ($set_product_row = $set_product_rs->fetch_assoc()) {
                               echo '<option class=" fw-bold" value="' . $set_product_row['id'] . '">' . $set_product_row['type'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <label class="form-label text-dark">Select vehicle type</label>
                <div class="d-flex flex-row justify-content-center col-12 ">
                    <div class="input-group">
                        <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="vehicle_type">
                            <option disabled selected value=""> -- select vehicle type --</option>
                            <?php
                            $set_vehicle_rs = Database::search("SELECT * FROM vehicleType ORDER BY id ASC");
                            while ($set_vehicle_row = $set_vehicle_rs->fetch_assoc()) {
                               echo '<option class=" fw-bold" value="' . $set_vehicle_row['id'] . '">' . $set_vehicle_row['type'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label  text-dark">Product Part number</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="product_partNum">
                </div>

                <div class="col-12">
                    <label class="form-label  text-dark">Product Title</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="product_title">
                </div>


                <label class="form-label text-dark">Select model</label>
                <div class="d-flex flex-row justify-content-center col-12 ">
                    <div class="input-group">
                        <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="product_brand">
                            <option disabled selected value=""> -- select model --</option>
                            <?php
                            $set_model_rs = Database::search("SELECT * FROM model ORDER BY id ASC");
                            while ($set_model_row = $set_model_rs->fetch_assoc()) {
                               echo '<option class=" fw-bold" value="' . $set_model_row['id'] . '">' . $set_model_row['model'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Sample Discription</label>
                    <textarea class="form-control bg-transparent text-dark border border-1 border-dark" cols="30" rows="3" id="product_sampleDis"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Discription</label>
                    <textarea class="form-control bg-transparent text-dark border border-1 border-dark" cols="30" rows="5" id="product_discription"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Price</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="product_price">
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Colour(s)</label>
                    <div class="row">
                        <?php

                        $color_rs = Database::search("SELECT * FROM `color` ");

                        for ($x = 0; $x < $color_rs->num_rows; $x++) {
                            $color_data = $color_rs->fetch_assoc();
                        ?>
                            <div class="col-6 col-lg-3 text-dark-50">
                                <input type="checkbox" value="<?php echo $color_data["id"] ?>" class="mt-1 mr-3" id="product_color<?php echo ($x + 1) ?>"> <?php echo $color_data["color"] ?>
                            </div>
                        <?php
                        }

                        ?>

                    </div>
                </div>

                <div class="col-12 mt-4" id="addProductSection">
                    <button class="btn btn-danger rounded-0 py-3 col-12" onclick="addProduct();">Add Product</button>
                </div>
                <div class="col-12 mt-4 d-none" id="updateProductSection">
                    <button class="btn btn-danger rounded-0 py-3 col-12" onclick="updateProduct();">Update Product</button>
                </div>

                <div class="col-12 mt-4 d-none" id="deleteProductSection">
                    <p>if you delete this you cannot recovery</p>
                    <button class="btn btn-danger rounded-0 py-3 col-12" onclick="deleteProduct();">Delete Product</button>
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