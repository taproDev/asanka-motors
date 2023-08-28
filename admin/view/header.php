<?php
 //connection
 require '../../connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asanka Motors - <?php echo $title ?></title>


    <link rel="stylesheet" href="../../boostrap/bootstrap.css">
    <link rel="stylesheet" href="../src/style.css">
    <link rel="stylesheet" href="../../aos/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
  <div class="container-fluid">
    <div class="row">
    <div class="col-12 p-3 bg-dark text-light h3 text-center font-weight-bold d-flex justify-content-around" style="margin-bottom: 0 !important;">
      <a href="./adminPanel.php" class=" text-light fw-bold">DashBoard</a>
      <div class="fw-bold"><?php echo $pageTitle?></div>
    </div>