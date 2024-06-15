<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
   
</head>
<body>
   <section class="header">

      <div class="flex">
         <a href="#home" class="logo">Hotels And Resorts</a>
         <a href="#availability" class="btn">check availability</a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   
      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="reservation.php">reservation</a>
         <a href="gallary.php">gallery</a>
         <a href="contact.php">contact</a>
         <a href="bookings.php">my bookings</a>
      </nav>
   

   </section>
    <section class="contact" id="contact">
        <div class="row">
     
           <form action="" method="post">
              <h3>send us message</h3>
              <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
              <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
              <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="enter your number" class="box">
              <textarea name="message" class="box" required maxlength="1000" placeholder="enter your message" cols="30" rows="10"></textarea>
              <input type="submit" value="send message" name="send" class="btn">
           </form>
     
        </div>
     
     </section> 
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script> 
</body>
</html>