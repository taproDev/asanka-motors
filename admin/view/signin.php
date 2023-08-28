<?php
$title = "admin signIn";
$pageTitle = "ADMIN SIGN-IN";
require './header.php';
?>
<div class="col-12 adminsignIn pt-5">

    <div class="col-12  col-lg-4 offset-lg-4 signInBg p-4 text-white">
        <div class="row">

            <div class="col-12 h5 ">SignIn</div>
            <div class="col-12 mt-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="admin_username">
            </div>

            <div class="col-12 mt-2">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="admin_password">
            </div>

            <div class="col-12 mt-4">
                <button onclick="adminSignin();" class="btn btn-dark p-3 rounded-0 btn-outline-white col-12">Sign In</button>
            </div>

        </div>
    </div>

</div>

<?php
require './footer.php';

?>