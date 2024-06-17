<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit;
}

// User is logged in, continue with the page
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

// Rest of the page code

include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
   
</head>
<body>
    <section class="gallery" id="gallery">
      
        <div class="swiper gallery-slider">
           <div class="swiper-wrapper">
              <img src="images/gallery-img-1.jpg" class="swiper-slide" alt="">
              <img src="images/gallery-img-2.webp" class="swiper-slide" alt="">
              <img src="images/gallery-img-3.webp" class="swiper-slide" alt="">
              <img src="images/gallery-img-4.webp" class="swiper-slide" alt="">
              <img src="images/gallery-img-5.webp" class="swiper-slide" alt="">
              <img src="images/gallery-img-6.webp" class="swiper-slide" alt="">
           </div>
           <div class="swiper-pagination"></div>
        </div>
     
     </section>
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
     
</body>
</html>