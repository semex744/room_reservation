<?php 
// reservation.php
require_once 'config.php';
redirectBasedOnLoginStatus();

// Rest of the reservation page code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
</head>
<body>

    <section class="reservation" id="reservation">
      
        <form action="index.php" method="post">
           <h3>make a reservation</h3>
           <div class="flex">
              <div class="box">
                 <p>your name <span>*</span></p>
                 <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
              </div>
              <div class="box">
                 <p>your email <span>*</span></p>
                 <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
              </div>
              <div class="box">
                 <p>your number <span>*</span></p>
                 <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
              </div>
              <div class="box">
                 <p>rooms <span>*</span></p>
                 <select name="rooms" class="input" required>
                    <option value="1" selected>1 room</option>
                    <option value="2">2 rooms</option>
                    <option value="3">3 rooms</option>
                    <option value="4">4 rooms</option>
                    <option value="5">5 rooms</option>
                    <option value="6">6 rooms</option>
                 </select>
              </div>
              <div class="box">
                 <p>check in <span>*</span></p>
                 <input type="date" name="check_in" class="input" required>
              </div>
              <div class="box">
                 <p>check out <span>*</span></p>
                 <input type="date" name="check_out" class="input" required>
              </div>
              <div class="box">
                 <p>adults <span>*</span></p>
                 <select name="adults" class="input" required>
                    <option value="1" selected>1 adult</option>
                    <option value="2">2 adults</option>
                    <option value="3">3 adults</option>
                    <option value="4">4 adults</option>
                    <option value="5">5 adults</option>
                    <option value="6">6 adults</option>
                 </select>
              </div>
              <div class="box">
                 <p>childs <span>*</span></p>
                 <select name="childs" class="input" required>
                    <option value="0" selected>0 child</option>
                    <option value="1">1 child</option>
                    <option value="2">2 childs</option>
                    <option value="3">3 childs</option>
                    <option value="4">4 childs</option>
                    <option value="5">5 childs</option>
                    <option value="6">6 childs</option>
                 </select>
              </div>
           </div>
           <input type="submit" value="book now" name="book" class="btn">
        </form>
     </section>
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>