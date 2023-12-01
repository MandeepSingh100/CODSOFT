<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Booking System</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo23.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-121.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour around the india</h3>
               <a href="package.php" class="btn">explore</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-222.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">explore</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-311.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">explore</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> facilities </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img1.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Tour India Travel is the best Tour operator and Travel Agent in India.  
         We are providing tour package, Hotel Booking. Tour India Travel find international and Domestic
         Tour packages from India at cheap prices including the best travel package | Tour Package | Honeymoon Package |
      Business Package </p>
      <a href="about.php" class="btn">learn more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-111.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jaipur Tour Packages</h3>
            <p>Enjoy the pink city Jaipur with unforgettable fun with our Jaipur top selling packages!</p>
            <h2>Rs. 10,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Taj Mahal with unforgettable fun with our Delhi top selling packages!</p>
            <h2>Rs. 15,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-311.jpg" alt="">
         </div>
         <div class="content">
            <h3>Shimla Tour Packages</h3>
            <p>Enjoy the Himalayas with unforgettable fun with our Shimla top selling packages!</p>
            <h2>Rs. 20,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="images/sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp211.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp11.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp31.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp3.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer1.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 55% off</h3>
      <p>Royal Resort is the Best Resort in India. This is centrally located within walking distance to the HighWay and Airline. This popular Resort accomodation offers a wide range of room types of suit failies and couples. The kids can enjoy the kids club while the adults spoil themselves at Royal's Spa or the Beach Club for a memorable and relaxing stay in Royal Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-1234-56789 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-9876543210</a>
         <a href="#"> <i class="fas fa-envelope"></i> mandeepsingh02418@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> India, Delhi-110043 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/mandeep-singh100/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/profile.php?id=100084660023448" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.instagram.com/singh_mandeep2" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
      </div>
   </div>
   <div class="credit"> designed by <span>mr. mandeep singh</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>