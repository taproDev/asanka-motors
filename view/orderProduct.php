<?php

$title = "Order product Page";
require './header.php';

?>

<div class="container-fluid mb-5">

    <!-- product section -->
    <div class="col-10 offset-1 mt-5">
        <div class="row">

            <div class="col-12 col-lg-4 py-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="row">
                    <div class="col-12">
                        <img src="../resources/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="img-update-0">
                    </div>
                </div>
                <div class="row mt-3">
                    <!-- product image -->
                    <div class="d-flex col-12 flex-row" style="overflow-x: scroll;">
                        <?php
                        for ($i = 0; $i < 20; $i++) {
                        ?>
                            <div class="col-4">
                                <img src="../resources/imageBg.jpeg" class="bg-transparent img-thumbnail border-0" id="img-update-1">
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 mt-3 mt-lg-0" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="row g-3">
                    <div class="col-12 product-title-div p-2 text-dark text-start fs-4 fw-bold ff-anybody ps-3 ps-lg-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                        <div class="row">
                            <div class="col-10 text-uppercase ps-lg-5 ps-0">
                                product name
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ps-lg-5 ps-0">
                        <div class="row g-3">
                            <div class="col-12 fs-6 text-start" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eveniet quis in rem nemo sed sint quidem libero aliquid quam temporibus recusandae ab quibusdam, quaerat iste, consectetur qui vel eius?</div>
                            <br>
                            <div class="col-12 d-flex flex-column" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                                <span class="text-dark fs-6"><span class="fw-bold">Vehicle Type : </span><span>Bike</span></span>
                                <span class="text-dark fs-6"><span class="fw-bold">Model : </span><span>model-name</span></span>
                                <span class="text-dark fs-6"><span class="fw-bold">Part Number : </span><span>v875f2yhk139cf</span></span>
                                <span class="text-dark fs-6"><span class="fw-bold">Brand : </span><span>brand-model</span></span>
                            </div>

                            <div class="col-12  p-2 fs-3 pe-4 text-start ff-anybody text-warning" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"> RS:5000.00<span class="text-uppercase fw-bold"></span> </div>


                            <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">

                                <?php
                                // $pId = "7";

                                // $product_color_rs = Database::search("SELECT * FROM `product_has_color`  WHERE `helmet_id` = '" . $pId . "' ");
                                // $product_color_num = $product_color_rs->num_rows;
                                // if ($product_color_num > 0) {
                                ?>
                                <!-- <span class="text-dark fw-bold fs-5">Colors</span> -->
                                <?php
                                //}
                                ?>

                                <div class="row row-cols-3 mt-2 row-cols-lg-5 gx-2 gy-2">

                                    <?php

                                    // $product_color_data = $product_color_rs->fetch_assoc();



                                    // for ($i = 0; $i < $product_color_num; $i++) {
                                    //     $color_rs = Database::search("SELECT * FROM `color` WHERE `id` = '" . $product_color_data["color_id"] . "' ");

                                    //     $color_data = $color_rs->fetch_assoc();

                                    ?>
                                    <!-- <div class="col-6 col-lg-3 text-dark-50">
                                            <input type="checkbox" value="<?php echo $color_data["id"] ?>" class="mt-1 mr-3" id="update_color<?php echo ($i + 1) ?>"><?php echo $color_data["name"] ?>
                                        </div> -->

                                    <?php

                                    // }

                                    ?>

                                </div>
                            </div>


                            <div class="col-6 col-lg-6 mt-5" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                                <label class="form-label text-dark-50">Quantity</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-sm btn-dark" type="button" id="button-addon1" onclick="productQty('down')">-</button>
                                    <input type="number" class="form-control form-control-sm bg-transparent text-whdarkite" value="1" min="1" id="qty">
                                    <button class="btn btn-sm btn-dark" type="button" id="button-addon1" onclick="productQty('up')">+</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 mt-3 mt-lg-0" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="row g-3">
                    <div class="col-12 font-weight-bold text-black h4">Summary</div>
                    <div class="col-6 text-black-50 mt-2">Total item costs</div>
                    <div class="col-6 text-black font-weight-bold text-end mt-2">Rs: 25400.00</div>
                    <div class="col-6 text-black-50 mt-2">Quantity</div>
                    <div class="col-6 text-black font-weight-bold text-end mt-2">12 Items</div>

                    <div class="col-12 mt-4">
                        <hr class="bg-black">
                    </div>
                    <div class="col-6 text-black h6 ">Total</div>
                    <div class="col-6 text-black font-weight-bold h6 ">Rs: 25 8755.00</div>
                    <div class="col-12 mt-2 black- alert alert-warning text-center">The related charges will be added during delivery.</div>

                    <a class="btn  btn-success  col-12  mt-4" id="orderBtn">
                        ORDER NOW
                    </a>

                    <div class="col-12 spinnerDiv d-none" id="spin">
                        <div class="lds-ellipsis">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row mt-5 d-none" id="paymentDetails">
            <div class="row">
                <div class="col-12">
                    <div class="row g-2">
                        <div class="col-12">
                            <hr class="bg-dark" style="height:3px;">

                        </div>
                        <div class="col-12 fs-4  font-weight-bold text-red fw-bold">Details</div>

                        <div class="col-12 col-lg-6">
                            <label class="form-label text-dark-50">Name</label>
                            <input type="text" class="form-control bg-transparent text-dark" id="name">
                        </div>

                        <div class="col-12 col-lg-6">
                            <label class="form-label text-dark-50 mt-2 mt-lg-0">Mobile Number</label>
                            <input type="text" class="form-control bg-transparent text-dark" id="mobile">
                        </div>

                        <div class="col-12 mt-2">
                            <label class="form-label text-dark-50">Address</label>
                            <textarea class="form-control bg-transparent text-dark" cols="30" rows="5" id="address"></textarea>
                        </div>

                        <div class="col-12 mt-2 ">
                            <label class="form-label text-dark-50">Message </label>
                            <textarea class="form-control bg-transparent text-dark" cols="30" rows="2" id="msg"></textarea>
                        </div>

                        <div class="col-12 mt-3 ">
                            <hr class="bg-dark" style="height:3px;">

                            <div class="row">
                                <div class="col-12 fs-4   text-red mb-3 fw-bold">Payments</div>

                                <div class="row d-flex flex-row justify-content-around align-items-center">
                                    <div class="col-8 mt-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <button class="btn btn-sm btn-dark card-title h5 fw-bold text-light h4-sm px-2 rounded-pill py-2 paymentMethordbtn" id="onlinePay-toggle-btn">Online payment</button>
                                        <span>&nbsp; OR &nbsp;</span>
                                        <button class="btn btn-sm btn-dark card-title fw-bold text-light h5 h4-sm px-2 rounded-pill py-2 paymentMethordbtn" id="onlinePay-toggle-btn" onclick="bankPaymentToggle()">cash Deposit</button>
                                    </div>

                                    <div class="col-4">
                                        <button class="btn btn-sm btn-success card-title h5 text-light h4-sm px-3 fw-bold rounded-pill py-2 paymentMethordbtn" id="onlinePay-toggle-btn">Post payment & order now</button>
                                    </div>
                                </div>

                                <div class="col-12 border-1 border-white p-3 mt-4 d-none text-dark-50" id="Bank_depo_details">
                                    <span class="h5 text-dark font-weight-bold">Account Details:</span><br><br>
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <img src="../resources/blankphoto.jpg" class="img-fluid"> <br>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <span class=" text-uppercase">BOC Bank</span><br>
                                            <span class=" text-uppercase">84847827 </span><br>
                                            <span class=" text-uppercase">D.R.T Gamage</span>

                                            <div>
                                                <input type="file" class="d-none" id="slip">
                                                <label for="slip" id="slipLabel" class="border-dashed border-dark text-center mt-3 p-3" onclick="addSlip();">
                                                    <i class="bi bi-cash-coin text-dark " style="font-size: 50px;"></i>
                                                    <span class="h5 text-dark"> Add Bank Slip</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class=" col-12 col-lg-4">
                                            <a class="btn  btn-success  col-12  mt-4" id="orderBtn">
                                                SUBMIT ORDER
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section -->

</div>

<hr>

<?php

require './footer.php';

?>