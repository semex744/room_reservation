
<?php

function redirectBasedOnLoginStatus() {
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // User is logged in, redirect to the protected page
        header('Location: reservation.php');
        exit;
    } else {
        // User is not logged in, redirect to the login page
        header('Location: login.php');
        exit;
    }
}
