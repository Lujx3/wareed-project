<?php 


// MySQL
$conn = new mysqli("localhost", "root", "","wareed");
if ($conn->connect_error) {
    die("MySQL Connection failed!" . $conn->connect_error);
}


// Email

$toEmail = 'wareeddonation@gmail.com';


?>