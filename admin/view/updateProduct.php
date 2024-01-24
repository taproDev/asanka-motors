<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>

    <!-- <div class="col-12 mx-auto text-center d-flex justify-content-around align-items-center my-5">
        <div class="w-50">
            <label class="form-label text-dark">Search Product through Title</label>
            <div class="d-flex flex-row justify-content-center">
                <div class="input-group">
                    <select class="form-control bg-transparent accordion-body chosen text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" onchange="setProduct_for_update(this)" id="setProduct_update">
                        <option disabled selected value=""> -- select product --</option>
                        <?php
                        // $set_product_rs = Database::search("SELECT product.id,`name`,`price`,`partnum`, vehicletype.type FROM product 
                        //                                 INNER JOIN vehicletype ON 
                        //                                 product.vehicleType_id =  vehicletype.id ORDER BY `name` ASC");
                        // while ($set_product_row = $set_product_rs->fetch_assoc()) {
                        //     echo '<option value="' . $set_product_row['id'] . '">' . $set_product_row['type'] . " - " . $set_product_row['name'] . "  - Rs:" . $set_product_row['price'] . '</option>';
                        // }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <button class="btn btn-dark mt-3 d-none" id="addUpBtnSection" onclick="window.location.reload()">Add Product</button>
    </div> -->

    <div class="row d-flex flex-column flex-md-row justify-content-center mx-0">

        <div class="col-12 col-lg-5 py-3">
            <div class="row">
                <div class="col-12">
                    <img src="../resources/images/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="img-mainadd">
                </div>
            </div>
            <div class="row mt-3">


                <div class="d-flex col-12 flex-row" style="overflow-x: scroll;">
                    <?php
                    for ($i = 1; $i < 20; $i++) {
                    ?>
                        <div class="col-4">
                            <img src="../resources/images/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="imgadd-<?php echo $i ?>">
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-12 mt-3">
                    <input type="file" class="d-none" multiple id="imageSelect_add" accept="image/*">
                    <label for="imageSelect_add" class=" btn py-2 btn-dark col-12 rounded-0" onclick="addProductimage()">Add Images</label>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-7 p-3">

            <div class="row ">

                <div class="col-12 my-1">
                    <label class="form-label  text-dark">Product Title</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="prodTitle">
                </div>

                <div>
                    <label class="form-label text-dark mt-2">Select product type</label>
                    <div class="d-flex flex-row justify-content-center col-12 ">
                        <div class="input-group">
                            <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="prodType">
                                <option disabled selected value=""> -- select product type --</option>
                                <?php
                                $set_product_rs = Database::search("SELECT *FROM producttype ORDER BY type ASC");
                                while ($set_product_row = $set_product_rs->fetch_assoc()) {
                                    echo '<option  value="' . $set_product_row['id'] . '">' . $set_product_row['type'] . '</option>';
                                }
                                ?>
                            </select>
                            <button onclick="addProdTypeVisible()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-circle-fill"></i></button>
                        </div>
                    </div>
                    <div class="col-3 my-1 w-50 input-group float-end d-none" id="addProdTypeSec">
                        <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addProdType">
                        <button onclick="addProdType()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
                    </div>

                </div>



                <div>
                    <label class="form-label text-dark mt-2">Select Vehicle type</label>
                    <div class="d-flex flex-row justify-content-center col-12 ">
                        <div class="input-group">
                            <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="vehType">
                                <option disabled selected value=""> -- select vehicle type --</option>
                                <?php
                                $set_product_rs = Database::search("SELECT * FROM vehicletype ORDER BY type ASC");
                                while ($set_product_row = $set_product_rs->fetch_assoc()) {
                                    echo '<option  value="' . $set_product_row['id'] . '">' . $set_product_row['type'] . '</option>';
                                }
                                ?>
                            </select>
                            <button onclick="addVehiTypeVisible()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-circle-fill"></i></button>
                        </div>
                    </div>
                    <div class="col-3 my-1 w-50 input-group float-end d-none" id="addVehiTypeSec">
                        <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addVehiType">
                        <button onclick="addVehiType()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
                    </div>
                </div>



                <div>
                    <label class="form-label text-dark mt-2">Select model</label>
                    <div class="d-flex flex-row justify-content-center col-12 ">
                        <div class="input-group">
                            <select class="form-control bg-transparent text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" id="model">
                                <option disabled selected value=""> -- select model --</option>
                                <?php
                                $set_product_rs = Database::search("SELECT * FROM model ORDER BY model ASC");
                                while ($set_product_row = $set_product_rs->fetch_assoc()) {
                                    echo '<option  value="' . $set_product_row['id'] . '">' . $set_product_row['model'] . '</option>';
                                }
                                ?>
                            </select>
                            <button onclick="addModelVisible()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-circle-fill"></i></button>
                        </div>
                    </div>
                    <div class="col-3 my-1 w-50 input-group float-end d-none" id="addModelSec">
                        <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addModel">
                        <button onclick="addModel()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
                    </div>
                </div>



                <div class="col-12 mt-2">
                    <label class="form-label  text-dark">Part Number</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="partnum">
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Sample Discription</label>
                    <textarea class="form-control bg-transparent text-dark border border-1 border-dark" cols="30" rows="3" id="samDis"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Discription</label>
                    <textarea class="form-control bg-transparent text-dark border border-1 border-dark" cols="30" rows="5" id="Dis"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Price</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="price">
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Colour(s)</label>
                    <div class="row" id="colorCheckboxes">
                        <?php

                        $color_rs = Database::search("SELECT * FROM `color` ");

                        for ($x = 0; $x < $color_rs->num_rows; $x++) {
                            $color_data = $color_rs->fetch_assoc();
                        ?>
                            <div class="col-6 col-lg-3 text-dark-50">
                                <input type="checkbox" value="<?php echo $color_data["id"] ?>" class="mt-1 mr-3" id="prod_color-<?php echo ($x + 1) ?>"> &nbsp; <?php echo $color_data["color"] ?>
                            </div>
                        <?php
                        }

                        ?>
                        

                    </div>
                    <div class="col-3 my-1 w-50 input-group d-flex flex-column">
                        <br>
                        <label class="form-label text-dark">Add color</label>
                        <div class="d-flex flex-row">
                        <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addcolor">
                        <button onclick="addcolor()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
                        </div>
                    </div>
                </div>
                <div id="updateBtnSection">
                    <div class="col-12 mt-4">
                        <button class="btn btn-danger rounded-0 py-3 col-12 " onclick="updateProduct();">Update Product</button>
                    </div>

                    <div class="col-12 mt-4">
                        <p>if you delete this you cannot recovery</p>
                        <button class="btn btn-danger rounded-0 py-3 col-12 " onclick="deleteProduct();">Delete Product</button>
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