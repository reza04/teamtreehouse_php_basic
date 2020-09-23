<?php
$name ="Reza Aditya";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <style>

    </style>
    <title>Team Treehouse<?php $name; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-column mt-5">
                    <img class="d-flex align-self-center " src="asset/images/logo20.png" alt="logo" width="300">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name?></p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-8 p-0 vh-100">

                <div class="d-flex flex-column ">
                    <p class="h2 pt-4 pl-5">My first-practice</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo CelciustoFanrenheit (80); ?><p>
                    </section>

                    <section class="pl-5">
                        <p class="h2">string</p>
                        <?php include "inc/string.php" ?>
                        <p class="lead"><?php echo askName("Ahmad Dhani") ?></p>
                    </section>
                </div>

                <div class="d-flex flex-column ">    
                    
                </div>

                <div class="d-flex position-absolute fixed-bottom bg-light ">
                    <p class="font-weight-normal mx-auto">&copy; <?php echo $name; echo " Last modified "
                    .date('d F Y H:i:s',getlastmod()); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.full.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>