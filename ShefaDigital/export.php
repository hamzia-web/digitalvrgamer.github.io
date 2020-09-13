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

//mysqli_fetch_assoc returns data in an associative array with a column name as a key of the resultant array. Which means we can access the output array with a column name as a key of an array
//mysqli_fetch_array returns data in a numeric and an associative array, so we can access result data with a column name or an index value.
$patients = [];
while ($patient = mysqli_fetch_assoc($resultSet)) {
    $patients[] = $patient;
}
?>
</body>
</html>