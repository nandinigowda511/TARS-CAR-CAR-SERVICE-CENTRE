<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    .admin_image {
    width: 100px;
    object-fit: contain;
}
    .footer{
        position:absolute;
        bottom: 0;
    }
</style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <img src="../images/admin.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>    
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/services1.jpg." alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_services.php" class="nav-link text-light bg-secondary my-1">Insert Services</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary my-1">View Servives</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary my-1">Logout</a></button>
                </div>
            </div>
        </div>
        <!-- end--> 
        <div class="bg-secondary p-3 text-center footer">
            <p class="credit"> &copy; copyright @ <?= date('Y'); ?> by <span>tars cars service</span> | all rights reserved! </p>
        </div>
    </div>
<!-- bootstrap js link -->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>