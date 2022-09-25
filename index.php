<?php
include('./includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tars Cars Service </title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>
    
    <a href="#" class="logo"><i class="fas fa-car"></i>TARS CARS SERVICE CENTRE</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class = navBar>
      <a href="user_login.php" target="_blank">Login</a>
      <a href="cart.php">cart<i class="fa fa-shopping-cart"></i><sup> <?php cart_item(); ?> </sup></a>
    </nav>

    <nav id="sideNav">
      <ul>
        <li><h2><a href="#home">home</a></h2></li>
        <li><h2><a href="#steps">how it works</a></h2></li>
        <li><h2><a href="#services">services</a></h2></li>
        <li><h2><a href="#skillWorkers">skill workers</a></h2></li>
        <li><h2><a href="#faq">FAQ</a></h2></li>
        <li><h2><a href="#reviews">reviews</a></h2></li>
        <li><h2><a href="aboutUs.php" target="_blank">about us</a></h2></li>
        <li><h2><a href="contact.php" target="_blank">contact us</a></h2></li>
      </ul>
      
    </nav>
    <img src = "images/menuBtn.png" id="menuBtn">

</header>

<!-- header section ends -->




<!-- home section starts  -->

<section class="home" id="home">

    <div class="slider">

      <div class="slide active">
        <img src="images/1.jpg" alt="">
        <div class="info">
          <h2><b>CAR WASH</b></h2>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
        </div>
      </div>
      <div class="slide">
        <img src="images/2.jpg" alt="">
        <div class="info">
          <h2><b>WHEEL CARE</b></h2>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
        </div>
      </div>
      <div class="slide">
        <img src="images/3.jpg" alt="">
        <div class="info">
          <h2><b>CAR ENGINE SERVICE</b></h2>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
        </div>
      </div>
      <div class="slide">
        <img src="images/4.jpg" alt="">
        <div class="info">
          <h2><b>CAR ENGINE REPAIR</b></h2>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
        </div>
      </div>
      <div class="slide">
        <img src="images/5.jpg" alt="">
        <div class="info">
          <h2><b>BRAKE REPAIR SERVICES</b></h2>
          <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b></p>
        </div>
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>
    </div>

    <script type="text/javascript">
        const slider = document.querySelector(".slider");
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;
    
        //image slider next button
        nextBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber++;
    
          if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider previous button
        prevBtn.addEventListener("click", () => {
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
    
          slideNumber--;
    
          if(slideNumber < 0){
            slideNumber = numberOfSlides - 1;
          }
    
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        });
    
        //image slider autoplay
        var playSlider;
    
        var repeater = () => {
          playSlider = setInterval(function(){
            slides.forEach((slide) => {
              slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
              slideIcon.classList.remove("active");
            });
    
            slideNumber++;
    
            if(slideNumber > (numberOfSlides - 1)){
              slideNumber = 0;
            }
    
            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
          }, 4000);
        }
        repeater();
    
        //stop the image slider autoplay on mouseover
        slider.addEventListener("mouseover", () => {
          clearInterval(playSlider);
        });
    
        //start the image slider autoplay again on mouseout
        slider.addEventListener("mouseout", () => {
          repeater();
        });
        </script>
          
</section>

<!-- home section ends -->







<!-- steps section starts  -->

<section class="steps" id="steps">

  <h1 class="heading"><span>How It Works</span> </h1>

  <div class="box-container">

      <div class="box">
          <img src="images/step1.jpg" alt="">
          <h3>Choose your service</h3>
      </div>

      <div class="box">
          <img src="images/step2.jpg" alt="">
          <h3>Free pickup at your location</h3>
      </div>

      <div class="box">
          <img src="images/step3.jpg" alt="">
          <h3>we'll take your car for service</h3>
      </div>

      <div class="box">
          <img src="images/step4.jpg" alt="">
          <h3>Free drop at your location</h3>
      </div>

  </div>

</section>

<!-- steps section ends -->





<!-- services section starts  -->
 

<section class="services" id="services">

  <h1 class="heading"><span>Book Services</span></h1>

    <div class="box">
          
      <div class="image">
          <img src="images/carServices.jpeg" alt="">
      </div>

      <div class="wrapper">
        <div class="select">
          <select id="brands">
            <option value="-1">Select Car Brand</option>
            <option value="HYUN">HYUNDAI</option>
            <option value="MAR">MARUTI</option>
            <option value="TATA">TATA</option>
            <option value="MAH">MAHINDRA</option>
            <option value="FORD">FORD</option>
            <option value="SKODA">SKODA</option>
            <option value="NIS">NISSAN</option>
            <option value="REN">RENAULT</option>
            <option value="DAT">DATSUN</option>
            <option value="VOLK">VOLKSWAGEN</option>
            <option value="TOYOTA">TOYOTA</option>
            <option value="HONDA">HONDA</option>
        </select>

        <select name="" id="models">
            <option value="-1">Select Car Model</option>
        </select>
        </div>
        
        <div class="chooseServices">
        <a href="services.php" target="_blank">Choose Your Car Services</a>
        </div>

    </div>
</section>
<!-- services section ends -->





<!-- skill workers section starts  -->

<section class="skillWorkers" id="skillWorkers">

  <h1 class="heading"><span>Our Skilled Workers</span></h1>

  <div class="box-container">

    <div class="box">
        <img src="images/sw1.jpg" alt="">
        <h3>Avinash KR</h3>
        <h2>Engineer</h2>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
    </div>

    <div class="box">
        <img src="images/sw2.jpg" alt="">
        <h3>Bharat Kunal</h3>
        <h2>Supervisor</h2>>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
    </div>

    <div class="box">
        <img src="images/sw3.jpg" alt="">
        <h3>Prabhakar D</h3>
        <h2>Repair Technician</h2>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
    </div>

  </div>

</section>

<!-- skill workers section ends -->






<!-- faq section starts  -->

<section class="faq" id="faq">

  <h1 class="heading"><span>Frequently Asked Questions</span></h1>

    <ul>
      <li>
        <label for="first">Why should I choose Tars Cars Service over my current mechanic?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="first" checked>
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="second">What spares/consumable brand do you use?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="second">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="third">Do you serve cars which are not in working condition?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="third">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="fourth">How do you wash cars?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="fourth">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="fifth">What are different car services that Tars Cars services offers?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="fifth">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="sixth">Which engine oil do you use with my car?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="sixth">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="seventh">Do you provide any warranty or assurance on your car services?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="seventh">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>
      <li>
        <label for="eighth">I am not available to drop my car at the workshop. How can Tars Cars Services help?<span>&#x3e;</span></label>
        <input type="radio" name="faq" id="eighth">
        <div class="content">
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        </div>
      </li>

    </ul>

</section>

<!-- faq section ends -->




<!-- reviews section starts  -->

<section class="reviews" id="reviews">

  <h1 class="heading"><span>Customer Reviews</span></h1>
      
        <div class="reviews-box-container">
            <div class="reviews-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="images/review1.jpg" />
                        </div>
                        <div class="name-user">
                            <strong>Kim Seok Jin</strong>
                            <span>@seokjin</span>
                        </div>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <div class="reviews-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="images/review2.jpg" />
                        </div>
                        <div class="name-user">
                            <strong>J.K Rowling</strong>
                            <span>@jkrowling</span>
                        </div>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <div class="reviews-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="images/review3.jpg" />
                        </div>
                        <div class="name-user">
                          <strong>Touseeq Ijaz</strong>
                          <span>@touseeqijazweb</span>
                        </div>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <div class="reviews-box">
               <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="images/review4.jpg" />
                        </div>
                        <div class="name-user">
                            <strong>Oliva</strong>
                            <span>@Olivaadward</span>
                        </div>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
        </div>

</section>

<!-- reviews section ends -->






<!-- footer section starts  -->


<footer class="footer">

  <section class="box-container">

     <div class="box">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
        <div class="button">
          <a href="aboutUs.php" target="_blank">Read More</a>
        </div>
      </div>

     <div class="box">
        <h3>Quick Links</h3>
        <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
        <a href="services.php"> <i class="fas fa-angle-right"></i> services</a>
        <a href="user_login.php"> <i class="fas fa-angle-right"></i> login</a>
        <a href="user_registration.php"> <i class="fas fa-angle-right"></i> register</a>
     </div>

     <div class="box">
        <h3>Contact Info</h3>
        <p> <i class="fas fa-phone"></i> 080-11223344 </p>
        <p> <i class="fas fa-phone"></i> 080-55667788 </p>
        <p> <i class="fas fa-envelope"></i> tarscars@gmail.com </p>
        <p> <i class="fas fa-map-marker-alt"></i> Bangalore, India - 560096 </p>
        <div class="box">
            <a href="contact.php" target="_blank">contact Us</a>
        </div>
     </div>

     <div class="box">
        <h3>Follow Us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
     </div>

  </section>

  <p class="credit"> &copy; copyright @ <?= date('Y'); ?> by <span>tars cars service</span> | all rights reserved! </p>

</footer>



<!-- footer section ends -->


<!--Choose Services-->

<script>

  let brand_models = [
      {
          brand:"Hyundai",
          code:"HYUN",
          models:["Hyundai Creta","Hyundai Venue","Hyundai i20","Hyundai Verna","Hyundai Grand i10 Nios","Hyundai Auro","Hyundai Alcazar"] 
      },
      {
          brand:"Maruti Suzuki",
          code:"MAR",
          models:["Maruti Suzuki Swift","Maruti Suzuki Baleno","Maruti Suzuki Alto","Maruti Suzuki Wagon R","Maruti Suzuki Celerio","Maruti Suzuki Ignis","Maruti Suzuki Brezza"] 
      },
      {
          brand:"Tata",
          code:"TATA",
          models:["Tata Harrier","Tata Tiago","Tata Nexon","Tata Punch","Tata Altroz","Tata Safari","Tata Tigor","Tata Xpres-T"] 
      },
      {
          brand:"Mahindra",
          code:"MAH",
          models:["Mahindra Scorpio","Mahindra Bolero","Mahindra Thar","Mahindra Thar","Mahindra Marazzo","Mahindra XUV700","Mahindra Alturas G4","Mahindra Xylo","Mahindra Bolero Neo"] 
      },
      {
          brand:"Ford",
          code:"FORD",
          models:["Ford EcoSport","Ford Everest","Ford Figo","Ford Aspire","Ford Mustang","Ford Freestyle","Ford Mondeo","Ford Focus","Ford Fiesta","Ford Kuga"] 
      },
      {
          brand:"Skoda",
          code:"SKODA",
          models:["Skoda Kodiaq","Skoda Octavia","Skoda Superb","Skoda Kushaq","Skoda Slavia"] 
      },
      {
          brand:"Nissan",
          code:"NIS",
          models:["Nissan GT-R","Nissan KICKS","Nissan Magnite","Nissan Leaf","Nissan Altima","Nissan Maxima","Nissan Micra","Nissan Sentra"] 
      },
      {
          brand:"Renault",
          code:"REN",
          models:["Renault Kwid","Renault Duster","Renault Triber","Renault Kiger","Renaul tCity K-ZE","Renault Koleos","Renault Captur","Renault Zoe","Renault Fluence"] 
      },
      {
          brand:"Datsun",
          code:"DAT",
          models:["Datsun Go","Datsun redi-Go","Datsun 510","Datsun Truck","Datsun 200B","Datsun Roadster"] 
      },
      {
          brand:"Volkswagen",
          code:"VOLK",
          models:["Volkswagen Polo","Volkswagen Tiguan","Volkswagen Golf","Volkswagen Passat","Volkswagen Jetta","Volkswagen Beetle","Volkswagen EOS","Volkswagen Lupo","Volkswagen Sharan"] 
      },
      {
          brand:"Toyota",
          code:"TOYOTA",
          models:["Toyota Camry","Toyota Fortuner","Toyota Vellfire","Toyota Urban Cruiser","Toyota Urban","Toyota Glanza","Cruiser Hyryder","Toyota Innova Crysta"] 
      },
      {
          brand:"Honda",
          code:"HONDA",
          models:["Honda City","Honda WR-V","Honda Amaze","Honda Jazz","Honda Brio","Honda Accord","Honda Fit","Honda Civic","Honda Mobilio","Honda Accord Hybrid"] 
      }
  ]



  let brandselect = document.querySelector('#brands');
  let modelselect = document.querySelector('#models');

  brandselect.onchange = function(){
      modelselect.options.length=0;
      if(brandselect.value!=-1){
          for(ele of brand_models){
              if(brandselect.value == ele.code) {                            
                  let models = ele.models;
                  let op= document.createElement('option');  
                  op.value =-1;
                  op.innerText ="Select model";
                  modelselect.options[0] = op;
                  let i =1;
                  for(model of models){
                      let op= document.createElement('option');  
                  op.value =model;
                  op.innerText =model;
                  modelselect.options[i] = op;
                  i++

                  }
              }
          }
      }
  }

</script>




<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/main.js"></script>


</body>
</html>