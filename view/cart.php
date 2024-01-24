<?php
$title = "Cart";
require './header.php';
?>

<div class="container mb-5 d-flex flex-column flex-lg-row my-5">

    <!-- product -->
    <div class="d-flex flex-column flex-lg-row">
        <div class="col-12 col-lg-9 mt-3 mt-lg-0">
            <div class="row">
                <?php
                for ($i = 0; $i < 5; $i++) {
                ?>
                    <div class="col-12 border-1 d-flex align-items-center flex-row rounded shadow my-2 p-3">
                        <div class="row d-flex align-items-center col-12">
                            <div class="col-4">
                                <img src="../product/images (11).jpeg" class="w-50" alt="image">
                            </div>

                            <div class="d-flex flex-column col-6 justify-content-center ">
                                <h4 class="text-center">peoduct name here</h4>
                                <div class="input-group w-50 mb-3 mx-auto">
                                    <button class="btn btn-sm btn-dark" type="button" id="button-addon1" onclick="productQty('down')">-</button>
                                    <input type="number" class="form-control form-control-sm bg-transparent text-whdarkite" value="1" min="1" id="qty">
                                    <button class="btn btn-sm btn-dark" type="button" id="button-addon1" onclick="productQty('up')">+</button>
                                </div>
                            </div>

                            <div class="col-2 text-center">
                                <span class="text-danger text-center btn "><i class="bi bi-trash3-fill"></i></span>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
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
            <div class="col-6 text-black h5 ">Total</div>
            <div class="col-6 text-black font-weight-bold h5 text-end ">Rs: 25 8755.00</div>
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

<div class="container">
<!-- payment -->
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

<?php
require './footer.php';
?>