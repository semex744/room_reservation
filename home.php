<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
   header('location:index.php');
}

if(isset($_POST['check'])){

   $check_in = mysqli_real_escape_string($conn, $_POST['check_in']);

   $total_rooms = 0;

   $check_bookings = mysqli_prepare($conn, "SELECT * FROM `bookings` WHERE check_in = ?");
   mysqli_stmt_bind_param($check_bookings, "s", $check_in);
   mysqli_stmt_execute($check_bookings);
   $result = mysqli_stmt_get_result($check_bookings);

   while($fetch_bookings = mysqli_fetch_assoc($result)){
      $total_rooms += $fetch_bookings['rooms'];
   }

   // if the hotel has total 30 rooms 
   if($total_rooms >= 30){
      $warning_msg[] = 'rooms are not available';
   }else{
      $success_msg[] = 'rooms are available';
   }

}

if(isset($_POST['book'])){

   $booking_id = create_unique_id();
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $rooms = mysqli_real_escape_string($conn, $_POST['rooms']);
   $check_in = mysqli_real_escape_string($conn, $_POST['check_in']);
   $check_out = mysqli_real_escape_string($conn, $_POST['check_out']);
   $adults = mysqli_real_escape_string($conn, $_POST['adults']);
   $childs = mysqli_real_escape_string($conn, $_POST['childs']);

   $total_rooms = 0;

   $check_bookings = mysqli_prepare($conn, "SELECT * FROM `bookings` WHERE check_in = ?");
   mysqli_stmt_bind_param($check_bookings, "s", $check_in);
   mysqli_stmt_execute($check_bookings);
   $result = mysqli_stmt_get_result($check_bookings);

   while($fetch_bookings = mysqli_fetch_assoc($result)){
      $total_rooms += $fetch_bookings['rooms'];
   }

   if($total_rooms >= 30){
      $warning_msg[] = 'rooms are not available';
   }else{

      $verify_bookings = mysqli_prepare($conn, "SELECT * FROM `bookings` WHERE user_id = ? AND name = ? AND email = ? AND number = ? AND rooms = ? AND check_in = ? AND check_out = ? AND adults = ? AND childs = ?");
      mysqli_stmt_bind_param($verify_bookings, "ississssss", $user_id, $name, $email, $number, $rooms, $check_in, $check_out, $adults, $childs);
      mysqli_stmt_execute($verify_bookings);
      $result = mysqli_stmt_get_result($verify_bookings);

      if(mysqli_num_rows($result) > 0){
         $warning_msg[] = 'room booked alredy!';
      }else{
         $book_room = mysqli_prepare($conn, "INSERT INTO `bookings`(booking_id, user_id, name, email, number, rooms, check_in, check_out, adults, childs) VALUES(?,?,?,?,?,?,?,?,?,?)");
         mysqli_stmt_bind_param($book_room, "issssisssss", $booking_id, $user_id, $name, $email, $number, $rooms, $check_in, $check_out, $adults, $childs);
         mysqli_stmt_execute($book_room);
         $success_msg[] = 'room booked successfully!';
      }

   }

}

if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);

   $verify_message = mysqli_prepare($conn, "SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   mysqli_stmt_bind_param($verify_message, "ssss", $name, $email, $number, $message);
   mysqli_stmt_execute($verify_message);
   $result = mysqli_stmt_get_result($verify_message);

   if(mysqli_num_rows($result) > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $insert_message = mysqli_prepare($conn, "INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      mysqli_stmt_bind_param($insert_message, "sssss", $id, $name, $email, $number, $message);
      mysqli_stmt_execute($insert_message);
      $success_msg[] = 'message send successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
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
   <section class="home" id="home">

      <div class="swiper home-slider">
   
         <div class="swiper-wrapper">
   
            <div class="box swiper-slide">
               <img src="images/home-img-1.jpg" alt="">
               <div class="flex">
                  <h3>luxurious rooms</h3>
                  <a href="#availability" class="btn">check availability</a>
               </div>
            </div>
   
            <div class="box swiper-slide">
               <img src="images/home-img-2.jpg" alt="">
               <div class="flex">
                  <h3>foods and drinks</h3>
                  <a href="#reservation" class="btn">make a reservation</a>
               </div>
            </div>
   
            <div class="box swiper-slide">
               <img src="images/home-img-3.jpg" alt="">
               <div class="flex">
                  <h3>luxurious halls</h3>
                  <a href="#contact" class="btn">contact us</a>
               </div>
            </div>
   
         </div>
   
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
   
      </div>
   
   </section>
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>