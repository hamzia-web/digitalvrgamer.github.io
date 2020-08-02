<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include 'connection.php'; ?> 

<?php
$sqlQuery = 'SELECT * FROM shefadigitalxray';
($resultSet = mysqli_query($connection, $sqlQuery)) or
    die('database error:' . mysqli_error($conn));
$patients = [];
while ($patient = mysqli_fetch_assoc($resultSet)) {
    $patients[] = $patient;
}
?>
</body>
</html>