<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="https://d2d22nphq0yz8t.cloudfront.net/88e6cc4b-eaa1-4053-af65-563d88ba8b26/https://media.croma.com/image/upload/v1679482493/Croma%20Assets/Communication/Mobiles/Images/270932_goudaz.png/mxw_2048,f_auto" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3>Latest Realme Models</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="https://d2d22nphq0yz8t.cloudfront.net/88e6cc4b-eaa1-4053-af65-563d88ba8b26/https://media.croma.com/image/upload/v1681111179/Croma%20Assets/Communication/Mobiles/Images/268427_ar8gvu.png/mxw_2048,f_auto" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3>Latest Oppo Models</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3>Latest OnePlus Models</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">shop by Brand</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Realme" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/47e4b88848e46bd3.jpg?q=90" alt="">
      <h3>Realme</h3>
   </a>

   <a href="category.php?category=Poco" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/39d30a3a536d9da3.jpg?q=90" alt="">
      <h3>Poco</h3>
   </a>

   <a href="category.php?category=Google" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/41645c3afc9ee395.jpg?q=90" alt="">
      <h3>Google</h3>
   </a>

   <a href="category.php?category=Oppo" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/a6444f7faeb141d1.jpg?q=90" alt="">
      <h3>Oppo</h3>
   </a>

   <a href="category.php?category=Vivo" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/5ddf7ef1ee9c4668.jpg?q=90" alt="">
      <h3>Vivo</h3>
   </a>

   <a href="category.php?category=mi" class="swiper-slide slide">
      <img src="https://rukminim1.flixcart.com/fk-p-flap/240/240/image/8d01aedcd4b54e25.jpg?q=90" alt="">
      <h3>Mi</h3>
   </a>

   <a href="category.php?category=Samsung" class="swiper-slide slide">
      <img src="data:image/png;base64,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" alt="">
      <h3>Samsung</h3>
   </a>

   <a href="category.php?category=OnePlus" class="swiper-slide slide">
      <img src="data:image/png;base64,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" alt="">
      <h3>OnePlus</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>