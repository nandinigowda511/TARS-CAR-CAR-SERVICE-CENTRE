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
    <title>cart details</title>

<!-- bootstrap css link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- custom css file link  -->
<link rel="stylesheet" href="css/services.css">
<style>
    .cart_img{
    width: 10rem;
    height: 10rem;
    object-fit: contain;
}
</style>
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
                <a class="nav-link" href="services.php">services</a>
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
        </ul>
    </nav>
<!-- third child-->
<div class="bg-light mt-4 mb-4">
        <h3 class="text-center">Book Your Services</h3>
    </div>
</div>

<!-- fourth child --> 
<div class="container">
    <div class="row">
        <form action="" method="POST">
        <table class="table table-bordered text-center">


<!-- php code to display dynamic data--> 
<?php

global $mysqli;
$get_ip_address = getIPAddress();
$total_price=0;
$cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
$result=mysqli_query($mysqli,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
    echo " <thead>
    <tr>
        <th>Product Title</th>
        <th>Product Image</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Remove</th>
        <th colspan='2' >Operations</th>
    </tr>
</thead>
<tbody>";



while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="Select * from `services` where product_id='$product_id'";
    $result_products=mysqli_query($mysqli,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
    $product_price=array($row_product_price['product_price']);
    $price_table=$row_product_price['product_price'];
    $product_title=$row_product_price['product_title'];
    $product_image=$row_product_price['product_image'];
    $product_values=array_sum($product_price);
    $total_price += $product_values;
?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="./images/<?php echo $product_image?>" alt="" class="cart_img"></td>
                    <td><input type="number" name="qty" class="form-input w-50"></td>
                    <?php
                    $get_ip_address = getIPAddress();
                    if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart="update `cart_details` set quantity='$quantities' where ip_address='$get_ip_address'";
                        $result_products_quantity=mysqli_query($mysqli,$update_cart);
                        $total_price=$total_price*$quantities;
                    }
                    ?>
                    <td><?php echo $price_table?>/-</td>
                    <td><input type="checkbox" name="remove_item[]" value="<?php echo $product_id ?>"></td>
                    <td>
                <!-- <button class="btn px-3 py-2 border-0 mx-3">Update</button>  -->
                    <input type="submit" value="Update cart" class="btn px-3 py-2 border-0 mx-3" name="update_cart">

                        <!-- <button class="btn px-3 py-2 border-0 mx-3">Remove</button>-->
                        <input type="submit" value="Remove cart" class="btn px-3 py-2 border-0 mx-3" name="remove_cart">

                    </td>
                </tr>
            <?php
} } } 
else{
    echo "<h2 class='text-center text-danger'> CART IS EMPTY</h2>";
}

?>
            </tbody>
        </table>
        <!-- total price -->
        <div class="d-flex mb-3">
            <?php
$get_ip_address = getIPAddress();
$cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
$result=mysqli_query($mysqli,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
    echo "<h4 class='px-3'>Total Price:<strong class='totalP'>$total_price/-</strong></h4>
    <input type='submit' value='continue shopping' class='btn px-3 py-2 border-0 mx-3' name='continue_shopping'>
    <button class='btn px-3 py-2 border-0'><a href='checkout.php'>Checkout</a></button>";
}else{
    echo " <input type='submit' value='continue shopping' class='btn px-3 py-2 border-0 mx-3' name='continue_shopping'>";
}
if(isset($_POST['continue_shopping'])){
    echo "<script>window.open('services.php','_self')</script>";
}


?>




        </div>
    </div>
</div>
</form>
<!-- functio to remove item --> 
<?php
function remove_cart_item(){
    global $mysqli;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['remove_item'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($mysqli,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self'</script>";
            }
        }
    }
}
echo $remove_item=remove_cart_item();
?>
<!-- footer section starts -->
<footer class="footer container-fluid  p-0">
    <p> &copy; copyright @ <?= date('Y'); ?> by <span>tars cars service</span> | all rights reserved!   </p>
</footer>
<!-- footer section ends -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
<!-- bootstrap js link -->   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>