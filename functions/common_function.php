<!-- custom css file link  -->
<link rel="stylesheet" href="../css/services.css">

<?php
// including connect file
include('./includes/connect.php');

//getting products
function getproducts(){
    global $mysqli;
                $select_query="select * from `services` order by rand()";
                $result_query=mysqli_query($mysqli,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description=$row['product_description'];
                    $product_image=$row['product_image'];
                    $product_price=$row['product_price'];
                    echo "  <div class='box col mb-2'>
                                <div class='card' style='width: 15rem;' >
                                <img src='./images/$product_image' class='card-img-top mt-3' alt='$product_title'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <div>
                                            <h5 class='card-title'>Price:$product_price/-</h5>
                                            <a href='services.php?add_to_cart=$product_id' class='btn'>Add to cart</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>";
                }
}


// get ip address function
function getIPAddress() {  
    //whether ip is from the share internet  
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;


// cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $mysqli;
        $get_ip_address = getIPAddress();  
        $get_product_id=$_GET['add_to_cart'];
        $select_query="Select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_query=mysqli_query($mysqli,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo "<script>alert('This service is already present inside cart')</script>";
            echo "<script>window.open('services.php',`_self`)</script>";
        }else{
            $insert_query="insert into `cart_details` (product_id,ip_address) values ($get_product_id,'$get_ip_address')";
            $result_query=mysqli_query($mysqli,$insert_query);
            echo "<script>alert('Service is added to cart')</script>";
            echo "<script>window.open('services.php',`_self`)</script>";
        }
    }
}

// counting no of cart item function
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $mysqli;
        $get_ip_address = getIPAddress();  
        $select_query="Select * from `cart_details` where ip_address='$get_ip_address'";
        $result_query=mysqli_query($mysqli,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);
        }else{
            global $mysqli;
            $get_ip_address = getIPAddress();  
            $select_query="Select * from `cart_details` where ip_address='$get_ip_address'";
            $result_query=mysqli_query($mysqli,$select_query);
            $count_cart_items=mysqli_num_rows($result_query);
        }
        echo $count_cart_items;
    }

// total price function
function total_cart_price(){
    global $mysqli;
    $get_ip_address = getIPAddress();
    $total_price=0;
    $cart_query="Select * from `cart_details` where ip_address='$get_ip_address'";
    $result=mysqli_query($mysqli,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="Select * from `services` where product_id='$product_id'";
        $result_products=mysqli_query($mysqli,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price += $product_values;
    }
}
echo $total_price;
}

?>