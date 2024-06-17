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
           </div>
     
        </div>
     
     </section> 
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>