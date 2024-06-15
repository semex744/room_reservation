<?php

$db_host = 'localhost';
$db_name = 'hotel_db';
$db_user_name = 'root';
$db_user_pass = '';

// Create connection
$conn = new mysqli($db_host, $db_user_name, $db_user_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function create_unique_id(){
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;

    for($i = 0; $i < 20; $i++){
        $n = mt_rand(0, $length);
        $rand[] = $str[$n];
    }
    return implode($rand);
}

?>