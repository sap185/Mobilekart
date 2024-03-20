<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>The Mobikart Group is one of India’s leading digital commerce entities.
Started in 2023, Mobikart has enabled millions of sellers, merchants, and small businesses to participate in India's digital commerce revolution. With a registered customer base of more than 450 million, Mobikart's marketplace offers over 150 million products across 80+ categories. Today, there are over 11 lakh sellers on the platform, including Shopsy sellers. With a focus on empowering and delighting every Indian by delivering value through technology and innovation, Mobikart has created lakhs of jobs in the ecosystem while empowering generations of entrepreneurs and MSMEs. Mobikart is known for pioneering services such as Cash on Delivery, No Cost EMI and easy returns, which are customer-centric innovations that have made online shopping more accessible and affordable for millions of Indians.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="https://scontent.frdp1-1.fna.fbcdn.net/v/t1.6435-9/140183087_743657876571301_1057242589148295803_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_ohc=MI_bb4UiikgAX_Ml9mo&_nc_ht=scontent.frdp1-1.fna&oh=00_AfC5vs_yQljxooAxxlIaTVKyULTFU-SHFxA6d9CZQt-myw&oe=64BD86BC" alt="">
         <p>Owner</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anshu Mandal</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="https://scontent.frdp1-1.fna.fbcdn.net/v/t39.30808-6/329111638_558084819681614_8055774181599498296_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_ohc=uzvpIShpx2cAX8dc9OG&_nc_ht=scontent.frdp1-1.fna&oh=00_AfCBU75nV8VuADdCaQ4v4Q-1wiYhO58Tny5CwNLunOI8Nw&oe=649A0499" alt="">
         <p>Co-Founder</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Roni Dey</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Maneger</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amrik Chakrabarty</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Co-Maneger</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rimika Nandi</h3>
      </div>

      

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>