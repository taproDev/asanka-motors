<?php

$title = "Product";
require './header.php';

?>

<div class="container-fluid mb-5">
    <div class="row my-3">

        <div class="col-12 col-lg-3 my-2 d-flex flex-column" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
            <div class="d-block d-lg-none me-5">
                <button class="btn btn-sm btn-primary p-2 rounded" onclick="filterClick()">filters</button>
            </div>
            <div class="d-none d-lg-block row my-3" id="filters">
                <div class="col-12 ">
                    <label class="text-dark">Search Product</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-sm border-1 bg-transparent text-dark" id="searchHelmet">
                        <span class="input-group-text bg-transparent border-start-0 " role="button" id="basic-addon2" onclick="searchProduct()">
                            <i class="bi bi-search text-dark" style="font-size: 12px;"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <label class="form-check-label text-dark my-1">Price</label>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="productPiceL2H" value="ASC" checked>
                                <label class="form-check-label text-dark" for="helmetPiceL2H">
                                    Price Low to High
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="productPiceH2L" value="DESC">
                                <label class="form-check-label text-dark" for="helmetPiceH2L">
                                    Price High to Low
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <label class="form-check-label text-dark my-1">Latest/Old</label>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="productPiceL2H" value="ASC" checked>
                                <label class="form-check-label text-dark" for="helmetPiceL2H">
                                    Latest product
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="productPiceH2L" value="DESC">
                                <label class="form-check-label text-dark" for="helmetPiceH2L">
                                    Old product
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-9" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
            <div class="row">
                <div class="col-12 my-5">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="row d-flex flex-wrap  justify-content-center flex-row text-center pb-4">
                                <?php

                                for ($i = 1; $i < 15; $i++) {
                                ?>
                                    <div class="col-12 col-lg-4 col-md-6 mt-4 d-flex justify-content-center align-items-center mt-4" data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i ?>00" data-aos-once="true">
                                        <a href="#"><img src="../resources/helmet-1.jpeg" alt="" class="w-50"></a>
                                        <div>
                                            <p class="sub-text fw-semibold fs-6 ">Bajaj Pulser 150 Head Light</p>
                                            <h3 class="text-dark fw-bold fs-5">Rs: <span>6500</span>.00</h3>

                                            <div class="d-flex flex-row justify-content-center align-items-center mt-2">
                                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 pe-auto bi bi-cart"></i></button>
                                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }

                                ?>
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