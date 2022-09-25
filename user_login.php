<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-login</title>
    
<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- custom css file link  -->
<link rel="stylesheet" href="css/services.css">
<style>
.btn{
    background-color: rgb(3, 3, 85);
    color: aliceblue;
}
</style>

</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data"> 
                    <div class="form-outline mb-4">
                        <!-- username field--> 
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
                    </div>
                    <!-- password field--> 
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="btn py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1">Don't have an account?<a href="user_registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>