
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>signup</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/userlogin.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="form-container" style="min-height: 100vh;">
   <form action="login_and_signup.php" method="POST">
      <h3>welcome !</h3>
      <input type="text" name="name" placeholder="enter username" maxlength="20" class="box" >
<input type="text" name="email" placeholder="enter email" maxlength="80" class="box" >
<input type="password" name="pass" placeholder="enter password" maxlength="20" class="box" >
      <input type="submit" value="signup now" name="submit" class="btn">
   </form>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>