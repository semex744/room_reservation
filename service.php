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
    <title>services</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
   
<body>
<<<<<<< HEAD:service.php
=======
<<<<<<< HEAD
    <section class="services">

        <div class="box-container">
     
           <div class="box">
              <img src="images/icon-1.png" alt="">
              <h3>food & drinks</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
           </div>
     
           <div class="box">
              <img src="images/icon-2.png" alt="">
              <h3>outdoor dining</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
           </div>
     
           <div class="box">
              <img src="images/icon-3.png" alt="">
              <h3>beach view</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
           </div>
     
           <div class="box">
              <img src="images/icon-4.png" alt="">
              <h3>decorations</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
           </div>
     
           <div class="box">
              <img src="images/icon-5.png" alt="">
              <h3>swimming pool</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
           </div>
     
           <div class="box">
              <img src="images/icon-6.png" alt="">
              <h3>resort beach</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
=======
   <section class="header">

      <div class="flex">
         <a href="#home" class="logo">Hotels And Resorts</a>
         <a href="#availability" class="btn">check availability</a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   
      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="about.html">about</a>
         <a href="reservation.html">reservation</a>
         <a href="gallary.html">gallery</a>
         <a href="contact.html">contact</a>
         <a href="bookings.php">my bookings</a>
      </nav>
   
   </section>
>>>>>>> 08211f53fb620a359de576a9543b2861b588d391:service.html
    <section class="services">
        <div class="box-container">
           <div class="box">
              <img src="images/icon-1.png" alt="">
              <h3>food & drinks</h3>
              <img src="images/icon-2.png" alt="">
              <h3>outdoor dining</h3>
              <img src="images/icon-3.png" alt="">
              <h3>beach view</h3>   
              <img src="images/icon-4.png" alt="">
              <h3>decorations</h3>
              <img src="images/icon-5.png" alt="">
              <h3>swimming pool</h3> 
              <img src="images/icon-6.png" alt="">
              <h3>resort beach</h3>
>>>>>>> 5d255698a0b6d0953037624b1dedf5bea5511810
           </div>
     
        </div>
     
     </section> 
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>