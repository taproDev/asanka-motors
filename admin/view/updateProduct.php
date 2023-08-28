<?php
session_start();
if (isset($_SESSION["admin"])) {

    $title = "admin panel";
    $pageTitle = "ADMIN PANEL";
    require './header.php';
?>



<?php
    require './footer.php';
} else {
    header("location:./adminSignin.php");
}

?>