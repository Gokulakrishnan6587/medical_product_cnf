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
   <title>Nastra</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

       <!--Fontawesome Icons Link-->

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!--css connection-->
    <!--css connection-->

    <link rel="stylesheet" href="css/head.css">
    
    <!--Google fonts link-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!--Fontawesome Icons Link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<!---------------------------------new style------------>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

       <!--header section-->
       <div class="header1">
        <div><br><br><br>
        <h3>Your Trusted Partner for</h3>
        <p> High-Quality Medical Supplies</p>
        <a href="shop.php">
        <button class="header-button">Buy Now</button></a>
    </div>

    <div>
        <img class="header-image" src="https://source.unsplash.com/random/300x300/?medicine" alt="image">
    </div>
    </div>

    <!--Service section-->

    <div class="service1">
        <div class="service-container-1">
            <div>
                <h2>We Provide Best</h2>
                <h2>Customer Experience</h2>
            </div>
            <div>
                <p>|| Experience Seamless Shopping & Exceptional Service with Us</p>
            </div>
        </div>
        <div class="service-container-2">
            <div>
                <i class="fa-regular fa-face-smile"></i>
                <h4>Fast Delivery</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, suscipit.</p>
            </div>
            <div>
                <i class="fa-regular fa-face-smile"></i>
                <h4>License of Government</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, suscipit.</p>
            </div>
            <div>
                <i class="fa-regular fa-face-smile"></i>
                <h4>Support 24/7</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, suscipit.</p>
            </div>
        </div>
    </div>

    <!--New Arrivals-->

    <h2 style="padding: 20px; font-size: 20px;">Medicine and Essential drug</h2>
    <div class="new-arrival1">
        <div class="new-arrivals-container">
            <img src="https://source.unsplash.com/200x200/?medicine?1" alt="image">
            <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
        </div>
        <div class="new-arrivals-container">
            <img src="https://source.unsplash.com/200x200/?medicine?2" alt="image">
            <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
        </div>
        <div class="new-arrivals-container">
            <img src="https://source.unsplash.com/200x200/?medicine?3" alt="image">
            <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
        </div>
        <div class="new-arrivals-container">
            <img src="https://source.unsplash.com/200x200/?medicine?4" alt="image">
            <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
        </div>
    </div>

        <!--Most Purchased-->

        <h2 style="padding: 20px; font-size: 20px">Most Purchased Lab Equipment</h2>
        <div class="new-arrival1">
            <div class="new-arrivals-container">
                <img src="https://source.unsplash.com/200x200/?medicine?5" alt="image">
                <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
            </div>
            <div class="new-arrivals-container">
                <img src="https://source.unsplash.com/200x200/?medicine?6" alt="image">
                <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
            </div>
            <div class="new-arrivals-container">
                <img src="https://source.unsplash.com/200x200/?medicine?7" alt="image">
                <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
            </div>
            <div class="new-arrivals-container">
                <img src="https://source.unsplash.com/200x200/?medicine?8" alt="image">
                <button>Buy Now<i class="fa-solid fa-arrow-right"></i> </button>
            </div>
        </div>

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
