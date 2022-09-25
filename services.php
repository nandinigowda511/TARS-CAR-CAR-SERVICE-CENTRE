<?php
include('./includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Services</title>

<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- custom css file link  -->
<link rel="stylesheet" href="css/services.css">

</head> 

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"> TARS CAR SERVICE CENTRE</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" id="home" aria-current="page" href="index.php">Home</a>
                
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#services.php">services</a>
                </li>
                </li>
            </ul>
            
        </div>
        </div>  
    </nav>
    <!-- calling cart function--> 
    <?php
    cart();
    ?>
    <!-- SECOND CHILD-->
    <nav class="navbar navbar-expand-lg ">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">  Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user_login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">cart<i class="fa fa- shopping-cart"></i><sup> <?php cart_item(); ?> </sup></a>
            </li> 
            <li class="nav-item">
            <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?> </a>
            </li>
        </ul>
    </nav>

    <!-- third child-->
    <div class="bg-light mt-4 mb-4">
        <h3 class="text-center">Book Your Services</h3>
    </div>
    <!--fourth child-->
            <!-- products-->
                <div class="row text-center">
<!-- fetching products from database--> 
                <?php
                    getproducts();
                ?>
    </div>

</div>
<!-- footer section starts -->
<footer class="footer container-fluid p-0">
    <p> &copy; copyright @ <?= date('Y'); ?> by <span>tars cars service</span> | all rights reserved!   </p>
</footer>
<!-- footer section ends -->

<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
<!-- bootstrap js link -->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>