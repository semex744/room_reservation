<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
   header('location:index.php');
   exit(); // Make sure to exit after header redirection
}

if(isset($_POST['cancel'])){

   $booking_id = $_POST['booking_id'];
   $booking_id = filter_var($booking_id, FILTER_SANITIZE_STRING);

   // Prepare statement to verify booking
   $stmt = $conn->prepare("SELECT * FROM `bookings` WHERE booking_id = ?");
   $stmt->bind_param("s", $booking_id);
   $stmt->execute();
   $result = $stmt->get_result();

   if($result->num_rows > 0){
      // Prepare statement to delete booking
      $stmt = $conn->prepare("DELETE FROM `bookings` WHERE booking_id = ?");
      $stmt->bind_param("s", $booking_id);
      $stmt->execute();
      $success_msg[] = 'Booking cancelled successfully!';
   }else{
      $warning_msg[] = 'Booking cancelled already!';
   }
   $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bookings</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="bookings">

   <h1 class="heading">My Bookings</h1>

   <div class="box-container">

   <?php
      // Prepare statement to select bookings
      $stmt = $conn->prepare("SELECT * FROM `bookings` WHERE user_id = ?");
      $stmt->bind_param("s", $user_id);
      $stmt->execute();
      $result = $stmt->get_result();
      
      if($result->num_rows > 0){
         while($fetch_booking = $result->fetch_assoc()){
   ?>
   <div class="box">
      <p>Name: <span><?= htmlspecialchars($fetch_booking['name']); ?></span></p>
      <p>Email: <span><?= htmlspecialchars($fetch_booking['email']); ?></span></p>
      <p>Number: <span><?= htmlspecialchars($fetch_booking['number']); ?></span></p>
      <p>Check In: <span><?= htmlspecialchars($fetch_booking['check_in']); ?></span></p>
      <p>Check Out: <span><?= htmlspecialchars($fetch_booking['check_out']); ?></span></p>
      <p>Rooms: <span><?= htmlspecialchars($fetch_booking['rooms']); ?></span></p>
      <p>Adults: <span><?= htmlspecialchars($fetch_booking['adults']); ?></span></p>
      <p>Children: <span><?= htmlspecialchars($fetch_booking['childs']); ?></span></p>
      <p>Booking ID: <span><?= htmlspecialchars($fetch_booking['booking_id']); ?></span></p>
      <form action="" method="POST">
         <input type="hidden" name="booking_id" value="<?= htmlspecialchars($fetch_booking['booking_id']); ?>">
         <input type="submit" value="Cancel Booking" name="cancel" class="btn" onclick="return confirm('Cancel this booking?');">
      </form>
   </div>
   <?php
         }
      }else{
   ?>
   <div class="box" style="text-align: center;">
      <p style="padding-bottom: .5rem; text-transform:capitalize;">No bookings found!</p>
      <a href="reservation.php" class="btn">Book New</a>
   </div>
   <?php
      }
      $stmt->close();
   ?>
   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>