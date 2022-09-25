<?php 
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_price=$_POST['product_price'];
    // accessing images 
    $product_image=$_FILES['product_image']['name'];

    //accessing image temporary name
    $temp_image=$_FILES['product_image']['tmp_name'];

    // checking empty condition
    if($product_title=='' or $description=='' or $product_image=='' or $product_price==''){
        echo "<script>alert('Please fill the field')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image,"./product_images/$product_image");
        // insert query
        $insert_product="insert into `services` (product_title,product_description,product_image,product_price) values ('$product_title','$description','$product_image','$product_price')" ;
        $result_query=mysqli_query($mysqli,$insert_product);
        if($result_query){
            echo "<script>alert('successfully inserted the products')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert services-admin</title>
    <!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- custom css file link  -->
<link rel="stylesheet" href="../images/style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Services</h1>
        <!-- insert form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- product title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Service Name</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <!-- product description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Service Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
            </div>
            <!-- image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Service Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" required="required">
            </div>
            <!-- product price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Service Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- insert button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-secondary mb-3 px-3" value="Insert Service">
            </div>
        </form>
    </div>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <!-- bootstrap js link -->   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>