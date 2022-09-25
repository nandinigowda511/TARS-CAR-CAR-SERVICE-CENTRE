<?php
include('./includes/connect.php');
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

    <!-- SECOND CHILD-->
    <nav class="navbar navbar-expand-lg ">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">  Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user_login.php">Login</a>
            </li>
        </ul>
    </nav>

</div>

<!-- third child--> 
<div class="row px-1">
    <div class="col-md-12">
        <!-- products-->
        <div class="row">
            <?Php
            if(!isset($_SESSION['username'])){
                include('user_login.php');
            }else{
                include('thankyou.php');
            }
?>
        </div>

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