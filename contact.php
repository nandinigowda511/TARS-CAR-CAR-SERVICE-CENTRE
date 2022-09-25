<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Contact Us</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/contact.css">

    <!-- font awesome link  -->
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>
<body>

    <section class="contact" id="contact"> 

        <h1 class="heading"><span>Contact Us</span></h1>
    
        <div class="box-container">

            <form>
                <div class="row">
                    <div class="input-group">
                        <input type="text" id="name" required>
                        <label for="name"><i class="fas fa-user"></i>&nbsp Your Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="number" required>
                        <label for="number"><i class="fas fa-phone-square-alt"></i>&nbsp Phone Number</label>
                    </div>
                </div>
                
                <div class="input-group">
                    <input type="email" id="email" required>
                    <label for="email"><i class="fas fa-envelope"></i>&nbsp Email Id</label>
                </div>
                <div class="input-group">
                    <textarea id="message" rows="8" required></textarea>
                    <label for="message"><i class="fas fa-comments"></i>&nbsp Your Message</label>
                </div> 

                <button class="submit">SUBMIT &nbsp<i class="fas fa-paper-plane"></i></button>

            </form>

        </div>



</body>
</html>