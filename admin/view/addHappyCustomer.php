<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADD CUSTOMERS";
    require './header.php';
?>


    <div class="col-12 col-lg-6 mx-auto text-center my-5">
        <label class="form-label text-dark">Search Product through Title</label>
        <div class="d-flex flex-row justify-content-center">
            <div class="input-group">
                <select class="form-control bg-transparent accordion-body chosen text-dark border border-1 border-dark p-2 w-50 position-relative" aria-label="Default select example" onchange="setProduct_for_update(this)" id="setProduct_update">
                    <option disabled selected value=""> -- select product --</option>
                    <?php

                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="row mx-0 mb-3">
        <div class="col-10 offset-1 col-lg-5 p-3">
            <div class="row">
                <div class="col-12">
                    <img src="../resources/images/imageBg.jpeg" class="bg-transparent img-thumbnail d-block border-0 w-75 mx-auto" id="happy_customer_image">
                </div>

                <div class="col-12 mt-3">
                    <input type="file" class="d-none" multiple id="happy_customer_imageSelect">
                    <label for="happy_customer_imageSelect" class=" btn py-2 btn-dark col-12 rounded-0" onclick="addCustomerimage()">Add Images</label>
                </div>
            </div>
        </div>

        <div class="col-10 offset-1 offset-lg-0 col-lg-5 pt-3">
            <div class="row ">
                <div class="col-12">
                    <label class="form-label  text-dark">Product Name</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="update_title">
                </div>

                <div class="col-12">
                    <label class="form-label  text-dark">Customer Name</label>
                    <input type="text" class="form-control bg-transparent text-dark border border-1 border-dark" id="update_title">
                </div>

                <div class="col-12 mt-2">
                    <label class="form-label text-dark">Sample Discription</label>
                    <textarea class="form-control bg-transparent text-dark border border-1 border-dark" cols="30" rows="3" id="sampleDis_happy_customer"></textarea>
                </div>

                <div class="col-12 mt-4">
                    <button class="btn btn-danger rounded-0 py-3 col-12" onclick="addHappyCustomer();">Add</button>
                </div>


                <div class="col-12 mt-4">
                    <button class="btn btn-danger rounded-0 py-3 col-12" onclick="addHappyCustomer();">Delete</button>
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