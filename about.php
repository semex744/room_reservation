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


include 'header.php';
 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
   
</head>
<body>


</section>
    <section class="about" id="about">
        <div class="row">
           <div class="image">
              <img src="images/about-img-1.jpg" alt="">
           </div>
           <div class="content">
              <h3>best staff</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum maxime eius aliquid temporibus unde?</p>
              <a href="#reservation" class="btn">make a reservation</a>
           </div>
        </div>
     
        <div class="row revers">
           <div class="image">
              <img src="images/about-img-2.jpg" alt="">
           </div>
           <div class="content">
              <h3>best foods</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum maxime eius aliquid temporibus unde?</p>
              <a href="#contact" class="btn">contact us</a>
           </div>
        </div>
     
        <div class="row">
           <div class="image">
              <img src="images/about-img-3.jpg" alt="">
           </div>
           <div class="content">
              <h3>swimming pool</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum maxime eius aliquid temporibus unde?</p>
              <a href="#availability" class="btn">check availability</a>
           </div>
        </div>
     
     </section>
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
<?php include 'components/message.php'; ?>
</body>
</html>