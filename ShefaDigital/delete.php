<?php

include 'connection.php';
$sno = $_GET['sno'];

$deleteQuery = "DELETE from shefadigitalxray where sno= '$sno' ";
$result = mysqli_query($connection, $deleteQuery);

if ($result) {
    header('location:patientRecord.php');
} else {
    echo 'Unable to delete given record';
}
?>

