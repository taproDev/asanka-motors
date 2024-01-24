<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>

    <div class="col-12 mx-auto d-flex  flex-column ms-5 my-5">
        <div class="col-12 my-2 w-50 input-group d-flex flex-column ">
            <p for="">Add Product type</p>
            <div class="d-flex">
                <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addProdType">
                <button onclick="addProdType1()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
            </div>
        </div>


        <div class="col-12 my-2 w-50 input-group d-flex flex-column">
            <p for="">Add Vehicle type</p>
            <div class="d-flex">
                <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addVehiType">
                <button onclick="addVehiType1()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
            </div>
        </div>

        <div class="col-12 my-2 w-50 input-group d-flex flex-column">
            <p for="">Add Model type</p>
            <div class="d-flex">
                <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addModel">
                <button onclick="addModel1()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
            </div>
        </div>

        <div class="col-12 w-50 input-group d-flex flex-column">
            <br>
            <label class="form-label text-dark">Add color</label>
            <div class="d-flex flex-row">
                <input type="text" class="w-50 form-control bg-transparent text-dark border border-1 border-dark" id="addcolor">
                <button onclick="addcolor1()" type="button" class="btn btn-success ml-2"><i class="bi bi-plus-square-fill"></i></button>
            </div>
        </div>
    </div>

<?php
    require './footer.php';
} else {
    header("location:./adminSignin.php");
}

?>