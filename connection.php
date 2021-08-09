
<?php
//connection to the database


// Replace these variables with your system configuration.

$host="localhost";
$username="root";
$password="root";
$database="banking_system";
$port=3308;

$conn=mysqli_connect($host,$username,$password,$database,$port) or die(mysqli_error($conn));


?>
