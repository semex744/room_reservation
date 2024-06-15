<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>availability</title>
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
    <section class="availability" id="availability">
        <form action="home.php" method="post">
           <div class="flex">
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
                    <option value="1">1 adult</option>
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
                    <option value="-">0 child</option>
                    <option value="1">1 child</option>
                    <option value="2">2 childs</option>
                    <option value="3">3 childs</option>
                    <option value="4">4 childs</option>
                    <option value="5">5 childs</option>
                    <option value="6">6 childs</option>
                 </select>
              </div>
              <div class="box">
                 <p>rooms <span>*</span></p>
                 <select name="rooms" class="input" required>
                    <option value="1">1 room</option>
                    <option value="2">2 rooms</option>
                    <option value="3">3 rooms</option>
                    <option value="4">4 rooms</option>
                    <option value="5">5 rooms</option>
                    <option value="6">6 rooms</option>
                 </select>
              </div>
           </div>
           <input type="submit" value="check availability" name="check" class="btn">
        </form>
     
     </section>
     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
      
</body>
</html>