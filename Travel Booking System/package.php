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
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-22.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

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

      <div class="box">
         <div class="image">
            <img src="images/img-41.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mumbai Tour Packages</h3>
            <p>Enjoy the Bollywood place with unforgettable fun with our Mumbai top selling packages!</p>
            <h2>Rs. 25,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-51.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pubjab Tour Packages</h3>
            <p>Enjoy our Gurudwara's with unforgettable fun with our Punjab top selling packages!</p>
            <h2>Rs. 7,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-61.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gujrat Tour Packages</h3>
            <p>Enjoy the Garba Dance with unforgettable fun with our Gujrat top selling packages!</p>
            <h2>Rs. 16,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>


      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Uttar Pardesh Tour Packages</h3>
            <p>Enjoy our Prem mandir and Ram mandir  with unforgettable fun with our Uttar Pardesh top selling packages!</p>
            <h2>Rs. 14,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Goa Tour Packages</h3>
            <p>Enjoy our Beach with unforgettable fun with our Goa top selling packages!</p>
            <h2>Rs. 21,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bihar Tour Packages</h3>
            <p>Enjoy our Bhojpuri's with unforgettable fun with our Bihar top selling packages!</p>
            <h2>Rs. 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
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
         <a href="#"> <i class="fas fa-phone"></i> +91-9876543210 </a>
         <a href="#"> <i class="fas fa-envelope"></i> mandeepsingh02418@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> India, Delhi-110043 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/mandeep-singh100/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/profile.php?id=100084660023448" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="https://www.instagram.com/singh_mandeep2" target="_blank"></i> instagram </a>
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