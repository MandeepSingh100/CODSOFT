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
      <a href="home.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-11.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img2.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Tour India Travel is a Best tour Operator and Travel agent in India. We are provide Tour Package, Hotel booking etc at very cheap prizes. Tour India Travel Find international and domestic tour packages from India at low prices including best Travel Package | Honeymoon Package | Tour Package</p>
      <p>Fantastic getaway. Excelent communication. Friendly relationship with guests.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>It was a wonderful experience to stay here as it always is. Great service, 
               imeccable ambience and amazing staff. The stay was exellent, staff is so courteous
               which made us comfortable and create the perfect environment. The food was the perfect end to our day.
            </p>
            <h3>Vijay Sethupathi</h3>
            <span>traveler</span>
            <img src="images/pic-42.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Stayed for just one night-but it was an experience! perfect room, lighting,
               view, sound system, bath tub, everythink was great. The service was awesome too! 
               this is one Royal's Royal indeed. The staff are very courteous and the facilities are great!</p>
            <h3>Kriti Kharbanda</h3>
            <span>traveler</span>
            <img src="images/pic-51.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>I stayed with family for 3 nights on a personal trip. The hotel was immaculately
               maintained and the service was impeccable. We had a fabulous stay with talk enjoyed their 
               worderul hospitality. They were gracious enough to upgrade our room.
            </p>
            <h3>Kriti Sanon</h3>
            <span>traveler</span>
            <img src="images/pic-61.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->
<!-- footer section starts  -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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
         <a href="#"> <i class="fas fa-phone"></i> +91-9876543210 </a>
         <a href="#"> <i class="fas fa-envelope"></i> mandeepsingh02418@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> India, Delhi-110043 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/mandeep-singh100/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/profile.php?id=10008466002344" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.instagram.com/singh_mandeep2" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
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