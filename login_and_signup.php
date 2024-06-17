<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hotel_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Check if form fields are not empty
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>swal('Error!', 'Please fill in all fields.', 'error');</script>";
        exit;
    }

    // Check if email already exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>swal('Error!', 'Email address already exists.', 'error');</script>";
        exit;
    }

    // Insert data into users table
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $email, $password);
    if ($stmt->execute()) {
        header('Location: login.php');
    } else {
        echo "<script>swal('Error!', 'Failed to sign up. Please try again.', 'error');</script>";
    }
}
?>