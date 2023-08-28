<?php

$title = "product name";
require './header.php';

?>

<div class="mt-5">
    <!-- product section -->
    <div class="col-10 offset-1 mt-5">
        <div class="row">

            <div class="col-12 col-lg-5 py-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
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

            <div class="col-12 col-lg-7 mt-3 mt-lg-0">
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
                                $pId = "7";

                                $product_color_rs = Database::search("SELECT * FROM `product_has_color`  WHERE `helmet_id` = '" . $pId . "' ");
                                if ($product_color_rs->num_rows > 0) {
                                ?>
                                    <span class="text-dark fw-bold fs-5">Colors</span>
                                <?php
                                }
                                ?>

                                <div class="row row-cols-3 mt-2 row-cols-lg-5 gx-2 gy-2">

                                    <?php

                                    foreach ($product_color_rs as $product_color_data) {

                                        $color_rs = Database::search("SELECT * FROM `color` WHERE `id` = '" . $product_color_data["color_id"] . "' ");
                                        $color_data = $color_rs->fetch_assoc();

                                        if ($color_data["id"] !=  "7") {
                                    ?>
                                            <div class="col d-flex align-items-center  ">
                                                <div class="color-box" style="background-color: <?php echo $color_data["name"] ?>;"></div>&nbsp;&nbsp;
                                                <span class="dis-para"><?php echo $color_data["name"] ?></span>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="col d-flex align-items-center  ">
                                                <div class="color-box-carbon"></div>&nbsp;&nbsp;
                                                <span class="dis-para"><?php echo $color_data["name"] ?></span>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>



                                </div>
                            </div>

                            <div class="col-10 mx-auto mt-lg-5 mt-3 pt-lg-4" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                                <a class="btn btn-brown col-12" onclick=" directToOrdernow('<?php echo 2 ?>') "><i class="bi bi-cart4"></i> Add to Cart</a>
                            </div>

                            <div class="col-10 mx-auto" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                                <a class="btn btn-success col-12" onclick=" directToOrdernow('<?php echo 2 ?>') ">Buy now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- product section -->


    <!-- related section -->
    <div class="col-10 offset-1  my-5">
        <div class="row">
            <div class="col-12">
                <span class="text-dark fs-4 fw-bold">Related </span>
                <span class="text-red fs-4 fw-bold">Items </span><br>

            </div>
            <div class="col-12">
                <hr class="bg-dark" style="height:3px;">
            </div>

            <div class="col-12 mt-3">
                <div class="row row-cols-1 gx-5 gy-3 row-cols-lg-2 related-section">

                    <!-- related card-->
                    <div class="col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                        <div class="row">
                            <div class="col-5 col-lg-4">
                                <img src="../product/password.png" class="border-0 bg-transparent img-thumbnail" alt="">
                            </div>
                            <div class="col-lg-8 col-7">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="customer-text text-dark fw-bold">product title</span><br>
                                        <p class="product-para">product sample discription</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-10 d-grid">
                                                <a href="singleProduct.php?id=1" class="btn btn-primary rounded-5 btn-sm py-2 ">View Product</a>
                                            </div>
                                            <div class="col-2 text-center cursor-pointer">
                                                <a href="https://api.whatsapp.com/send?phone=94770545727&text= Hello Dr.Bikes Im itrested about your product named:"><i class="bi bi-chat-dots text-red fs-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- related card-->


                </div>
            </div>
        </div>
    </div>
    <!-- related section -->


</div>

<?php

require './footer.php';

?>