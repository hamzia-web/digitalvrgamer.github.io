<?php

// All details are mentioned under C:\xampp\phpMyAdmin\config.inc.php file

$username = 'root';
$password = '';
$server = 'localhost';
$database = 'shefadigital';

try {
    $connection = mysqli_connect($server, $username, $password, $database);
} catch (Exception $e) {
    //echo $e;
    echo 'Failed to connect: ' . $mysqli->connect_error;
    exit();
}
?>
