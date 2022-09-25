<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Design - Easy Tutorials</title>
    <link rel="stylesheet" href="css/book.css">
</head>

<body>

        <section class="book" id="book">

            <h1 class="heading"><span>Book Your Car Service</span></h1>
            <h2 class="subHeading">Pay After Service!</h2>    

            <div class="container">
                <div class="image">
                    <img src="images/book.png" alt="">
                </div>

                <div class="details">
                    <form action="">
                        <input type="text" placeholder="your name" class="box">
                        <input type="number" placeholder="your phone number" class="box">
                        <input type="email" placeholder="your email" class="box">
                        <input type="datetime-local" class="box">
                        <textarea name="" placeholder="enter your address" id="" cols="30" rows="10" class="address"></textarea>
                    </form>

                    <div>
                        <button type="submit" class="btn" onclick="openPopup()">Book Now</button>
                        <div class="popup" id="popup">
                            <img src="images/tick.png">
                            <h2> Thank You!</h2>
                            <p>Your details has been successfully submitted. Thanks!</p>
                            
                            <a href="index.php" target="_blank">
                                <button type="button" onclick="closePopup()">OK</button>
                            </a>    
                            
                        </div>
                    </div>
                </div>
        
            </div>

        </section>

        <script>
        let popup = document.getElementById("popup");
        
        function openPopup(){
            popup.classList.add("open-popup");
        }
            function closePopup(){
            popup.classList.remove("open-popup");
        }     
        
    </Script>  
</body>
</html>
    


