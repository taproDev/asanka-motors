<?php require '../connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asanka Motors - <?php echo $title ?></title>


    <link rel="stylesheet" href="../boostrap/bootstrap.css">
    <link rel="stylesheet" href="../src/style.css">
    <link rel="stylesheet" href="../aos/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body style="overflow-x: hidden !important;">


<div class=" container-fluid col-12">
        <div class="row">
            <div class="col-12 p-2 header-top-bar text-black-50 d-none d-lg-block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                <div class="row">
                    <div class="col-5 offset-1">
                        <a href="./index.php" class="text-decoration-none text-black-50 me-2">Home</a> |
                        <a href="#contactUs" class="text-decoration-none text-black-50 ms-2 me-2">Contact Us</a> |
                        <a href="#aboutUs" class="text-decoration-none text-black-50 ms-2 me-2">About Us</a> |
                        <span class="ms-2 me-3">Tel: <?php echo $mobile?></span>
                        <a href="<?php echo $facebook?>" class="text-black-50 ms-2 me-2"><i class="bi bi-facebook"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $mobile?>" class="text-black-50  me-2"><i class="bi bi-whatsapp"></i></a>
                        <a href="mailto:<?php echo $email?>" class="text-black-50  "> <i class="bi bi-envelope"></i></a>
                    </div>
                    <div class="col-5 text-end">
                        Premium Quality, Unbeatable Price: Your Source for the Best Parts!
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 ">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img src="../resources/logo.png" alt="logo" class="img-fluid" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                            </div>

                            <div class="col-4 offset-1 d-none d-lg-block">
                                <div class="input-group mt-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                                    <input type="text" class="form-control form-control-sm">
                                    <button class=" btn btn-sm btn-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>

                            <div class="col-lg-3 col-5 text-end offset-1" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                                <a href="./cart.php" class=" btn btn-sm btn-light bg-transparent border-0 position-relative">
                                    <i class="bi bi-cart4 text-primary fs-3"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        3
                                    </span>
                                </a>
                                <span class="fw-bold d-none d-lg-inline ms-3">Rs:2500.00</span>
                            </div>

                            <div class="col-12 d-block d-lg-none">
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control form-control-sm border-1">
                                    <button class=" btn btn-sm btn-primary"><i class="bi bi-search"></i></button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 bg-primary  text-white">
                <div class="row">
                    <div class=" col-lg-10 offset-lg-1 offset-0 col-12">
                        <div class=" col-11 d-lg-none p-2 text-center d-flex justify-content-between align-items-center">
                        <h4 class="ms-2"> All Products</h4>
                            <button class="border-0 bg-transparent text-white" onclick="toggleMenuItems()">
                                <i class="bi bi-list text-white fs-3 me-3 fw-bold" id="menuItems-list"></i>
                                <i class="bi bi-x text-white fs-2 me-3 fw-bold d-none" id="menuItems-close"></i>
                            </button>
                        </div>
                        <div class="row offset-lg-0 d-none d-lg-flex d-lg-flex flex-lg-row flex-column row-cols-6 py-2 menu-list fade-in" id="menuList" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                            <div class="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-lg-flex align-items-center d-none" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100" data-aos-once="true"><i class="bi bi-list text-white fs-5 me-3"></i>All Products</div>
                            <div class="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200" data-aos-once="true" ><a href="./bike.php" class="text-white text-decoration-none">Bikes</a> <button class="border-0 bg-transparent text-white"><i class="bi ms-2 bi-caret-down-fill"></i></button> </div>
                            <div class="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><a href="./threeWheel.php" class="text-white text-decoration-none">Three Wheels</a> <button class="border-0 bg-transparent text-white"><i class="bi ms-2 bi-caret-down-fill"></i></button> </div>
                            <div class="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400" data-aos-once="true"><a href="./helmet.php" class="text-white text-decoration-none">Helmets</a> <button class="border-0 bg-transparent text-white"><i class="bi ms-2 bi-caret-down-fill"></i></button> </div>
                            <div class="col-lg col-12 p-1 ps-2 justify-content-center category-bar-Item d-flex align-items-center" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500" data-aos-once="true"><a href="./modification.php" class="text-white text-decoration-none">Modification Parts</a> <button class="border-0 bg-transparent text-white"><i class="bi ms-2 bi-caret-down-fill"></i></button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
