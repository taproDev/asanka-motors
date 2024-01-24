<?php


$title = "Home Page";
require './header.php';

?>

<!-- image silder md -->
<div class="container-fluid">
    <!-- carousel -->
    <div class="col-12 mx-0 w-100 ">
        <div class="row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
            <div id="carouselExampleAutoplaying" class="carousel slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../resources/carousel-img-1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/carousel-img-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>second slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/carousel-img-3.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>third slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

</div>


<div class="container">

    <!-- about us (short) -->
    <div id="aboutUs" class="col-12 d-flex flex-column flex-lg-column justify-content-between mx-auto my-5 shadow-md border-0 rounded p-4">
        <div class="row ">
            <!-- item 1 -->
            <div class="col-12 col-lg-4 my-3">
                <div class="row d-flex flex-row align-items-center justify-content-center aboutUs-short" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                    <div class="col-3">
                        <p class="text-center aboutUs-short-icon"><i class="bi bi-gear"></i></p>
                    </div>
                    <div class="col-9 aboutUs-short-content text-start">
                        <h3 class="fs-5">Genuine Spare Parts </h3>
                        <p class="fs-6">Best Quality & Genuine motor bike and threewheel spare parts.</p>
                    </div>
                </div>
            </div>

            <!-- item 2 -->
            <div class="col-12 col-lg-4 my-3">
                <div class="row d-flex flex-row align-items-center justify-content-center aboutUs-short " data-aos="fade-right" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                    <div class="col-3">
                        <p class="text-center aboutUs-short-icon"><i class="bi bi-stopwatch"></i></p>
                    </div>
                    <div class="col-9 aboutUs-short-content text-start">
                        <h3 class="fs-5">24/7 Service</h3>
                        <p class="fs-6">Contact us 24 hours a day. Email,
                            Whatsapp , Mobile etc.</p>
                    </div>
                </div>
            </div>

            <!-- item 3 -->
            <div class="col-12 col-lg-4 my-3">
                <div class="row d-flex flex-row align-items-center justify-content-center aboutUs-short" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                    <div class="col-3">
                        <p class="text-center aboutUs-short-icon"><i class="bi bi-truck"></i></p>
                    </div>
                    <div class="col-9 aboutUs-short-content text-start">
                        <h3 class="fs-5">Island Wide Delivery </h3>
                        <p class="fs-6">We offer island wide delivery service &
                            Many deliver options</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <p class="fs-6 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, ducimus nesciunt, perspiciatis totam quis autem dolores earum eligendi accusamus saepe officiis? Corrupti maiores officia nulla aperiam, temporibus ipsam asperiores deserunt minima adipisci nesciunt cupiditate fuga? Velit, vel itaque. Assumenda, velit laborum nesciunt officiis deserunt reprehenderit nemo accusantium repellat laudantium ratione?</p>
        </div>
    </div>

    <!-- Latest Products -->
    <div class="col-12 my-5">

        <div class="text-center mx-2">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Latest Products</h1>
            <p class="sub-text fs-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting-edge solutions you've been <br>
                waiting for! Explore our newest arrivals, handpicked to elevate your experience and cater to your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <!-- large screen -->
                <div class="row latestProduct d-none d-md-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>

                <!-- mobile screen -->
                <div class="row latestProduct d-md-none d-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 7; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>

        <div class="float-end ">
            <a href="#" class="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <i class="bi bi-arrow-right"></i></a>
        </div>

    </div>

    <!-- new helmet -->
    <div class="col-12 my-5">

        <div class="text-start my-5 ">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">New helmet</h1>
            <p class="sub-text fs-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the <br> cutting-
                edge solutions you've been waiting for! Explore our newest arrivals, handpicked to elevate your <br>
                experience and cater to your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <div class="row d-flex flex-wrap  justify-content-center flex-row text-center pb-4">
                    <?php

                    for ($i = 1; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-4 col-md-6 mt-4 d-flex justify-content-center mt-5" data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i ?>00" data-aos-once="true">
                            <a href="#"><img src="../resources/helmet-1.jpeg" alt="" class="w-50"></a>
                            <div>
                                <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                                <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                                <div class="d-flex flex-row justify-content-center align-items-center mt-2">
                                    <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
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

        <div class="float-end ">
            <a href="#" class="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <i class="bi bi-arrow-right"></i></a>
        </div>

    </div>

    <!-- dealership -->

    <!-- mBike Spareparts -->
    <div class="col-12 my-5">

        <div class="text-stat mx-2">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">MotorBike Spareparts</h1>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting-edge solutions you've been waiting
                for! <br> Explore our newest arrivals, handpicked to elevate your experience and cater to your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <!-- large screen -->
                <div class="row latestProduct d-none d-md-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>

                <!-- mobile screen -->
                <div class="row latestProduct d-md-none d-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 7; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>

        <div class="float-end ">
            <a href="#" class="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <i class="bi bi-arrow-right"></i></a>
        </div>

    </div>


    <!-- ThreeWheeI Spareparts  -->
    <div class="col-12 my-5">

        <div class="text-stat mx-2">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">ThreeWheeI Spareparts</h1>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting-edge solutions <br> you've been waiting
                for! Explore our newest arrivals, handpicked to elevate your experience and cater to your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <!-- large screen -->
                <div class="row latestProduct d-none d-md-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>

                <!-- mobile screen -->
                <div class="row latestProduct d-md-none d-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 7; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>

        <div class="float-end ">
            <a href="#" class="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <!-- image silder sm -->
    <div class="col-12 mx-0 w-100 my-5 d-md-none">
        <div class="row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
            <div id="carouselExampleAutoplaying" class="carousel slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-1.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-2.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-4.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-5.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <img src="../resources/slide-6.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items here for other images -->
                </div>
            </div>
        </div>
    </div>

</div>

<!-- image silder md -->
<div class="col-12 mx-0 w-100 my-5 d-none d-md-block">
    <div class="row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
        <div id="carouselExampleAutoplaying" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2 col-12">
                            <img src="../resources/slide-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-12">
                            <img src="../resources/slide-2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-6.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-6.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-2 col-4">
                            <img src="../resources/slide-1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <!-- modification Spareparts -->
    <div class="col-12 my-5">

        <div class="text-stat mx-2">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Modification Parts</h1>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting- <br>
                edge solutions you've been waiting for! Explore our newest arrivals, handpicked to elevate your <br>
                experience and cater to your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <!-- large screen -->
                <div class="row latestProduct d-none d-md-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>

                <!-- mobile screen -->
                <div class="row latestProduct d-md-none d-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4" style="overflow-x: scroll;">
                    <?php

                    for ($i = 0; $i < 7; $i++) {
                    ?>
                        <div class="col-12 col-lg-3 col-md-5 mx-0 " data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i + 1 ?>00" data-aos-once="true">
                            <a href="#"><img class="" src="../resources/prroduct-1.jpeg" alt=""></a>
                            <p class="sub-text fw-bold fs-6 ">Bajaj Pulser 150 Head Light</p>
                            <h3 class="text-dark fw-bold fs-3">Rs: <span>6500</span>.00</h3>

                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <button class="btn btn-sm pe-auto border-0 rounded"><i class="red-text fs-5 ms-1 pe-auto bi bi-cart"></i></button>
                                <button class="ms-2 px-2 pe-auto btn btn-sm btn-primary border-0 rounded">Buy Now</button>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>

        <div class="float-end ">
            <a href="#" class="btn btn-sm text-primary pe-auto ps-3 border-0 rounded bg-light" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">see more <i class="bi bi-arrow-right"></i></a>
        </div>

    </div>

    <!-- Customer Testimonials  -->
    <div class="col-12 mt-5 d-none">

        <div class="text-center mx-2">
            <h1 class="text-dark" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Customer Testimonials</h1>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Welcome to our Latest Product Section, where innovation and excellence meet to bring you the cutting-edge <br>
                solutions you've been waiting for! Explore our newest arrivals, handpicked to elevate your experience and cater to <br>
                your evolving needs.</p>
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                <div class="row d-flex flex-wrap  justify-content-center flex-row text-center pb-4">
                    <?php

                    for ($i = 1; $i < 4; $i++) {
                    ?>
                        <div class="col-12 col-lg-4 col-md-6 d-flex flex-column mx-auto my-3" data-aos="fade-right" data-aos-duration="800" data-aos-delay="<?php echo $i ?>00" data-aos-once="true">
                            <div class="d-flex fle-row row">
                                <div class="col-3 mb-3">
                                    <img class="w-100" src="../resources/prroduct-1.jpeg" alt="">
                                </div>
                                <div class="col-9 text-start">
                                    <h4 class="main-text fw-bold fs-6 ">First Customer</h4>
                                    <p class="text-dark fw-bold">Bajaj Pulser 150 Head Light</hp>
                                </div>
                            </div>

                            <div>
                                <p class="text-start">Welcome to our Latest Product Section, where innovation and
                                    excellence meet to bring you the cutting-edge solutions you've been
                                    waiting for! Explore our newest arrivals, handpicked to elevate your
                                    experience and cater to your evolving needs.</p>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- contact us -->

    <div class="col-12" id="contactUs">
        <div class="row">

            <div class="text-center col-12  p-3 bg-darker  ps-5 text-uppercase fw-bold mt-5 ff-alumini" data-aos="flip-down" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <span class="text-primary fs-1 offset-0">Contact </span><span class="text-red fs-1">us</span>
            </div>

            <div class="col-12 mt-5 text-center">
                <div class="row d-flex flex-column flex-md-row align-items-start">
                    <div class="col-12 col-lg-4">
                        <span class="text-dark fw-bold fs-5"><i class="bi bi-geo-alt-fill text-red"></i> Address</span><br><br>
                        <p class="dis-para"> 964/1 E, <br>
                            Digana Nilagama,<br>
                            Digana,<br>
                            Kandy </p>

                    </div>

                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <span class="text-dark fw-bold fs-5"><i class="bi bi-telephone-fill text-red"></i> Mobile</span><br><br>
                        <p class="dis-para"><?php echo $mobile ?></p>

                    </div>

                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                        <span class="text-dark fw-bold fs-5"><i class="bi bi-envelope-fill text-red"></i> Email</span><br><br>
                        <p class="dis-para">
                            <?php echo $email ?>
                        </p>

                    </div>
                </div>
            </div>

            <!-- contact section -->
            <div class="col-11 mt-3 pt-5 mb-5">
                <div class="row">
                    <div class="col-12 col-lg-5 offset-lg-1 offset-1">
                        <div class="row g-3">
                            <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                                <label class="form-label text-dark">Name</label>
                                <input type="text" class="contact-field">
                            </div>
                            <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                                <label class="form-label text-dark">Email</label>
                                <input type="text" class="contact-field">
                            </div>
                            <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                                <label class="form-label text-dark">Subject</label>
                                <input type="text" class="contact-field">
                            </div>
                            <div class="col-12" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
                                <label class="form-label text-dark">Message</label>
                                <textarea cols="30" rows="2" class="contact-field"></textarea>
                            </div>
                            <div class="col-6 d-grid">
                                <button class="btn btn-primary btn-sm">Send Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-5 contact-bg">
                        <span class="section-title" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">CONTACT US</span><br>
                        <p class="dis-para text-dark" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">We're always here to assist you with any questions or concerns you may have. Whether you need help choosing the right product, tracking your order, or anything else, we're just a phone call or email away.
                            <br><br>
                            Thank you for considering our company, and we look forward to hearing from you soon!
                        </p>

                        <div class="col-12 pt-2 ">
                            <a target="_blank" href="<?php echo $facebook ?>" class="fs-3 text-red"><i class="bi bi-facebook"></i></a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $mobile ?>" class="fs-3 text-red ms-3"><i class="bi bi-whatsapp"></i></a>
                            <a target="_blank" href="mailto:<?php echo $email ?>" class="fs-3 text-red ms-3"><i class="bi bi-envelope"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- contact section -->

        </div>
    </div>


</div>


<?php

require './footer.php';

?>