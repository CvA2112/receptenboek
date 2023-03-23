<?php
require 'database.php';
$sql = "SELECT * FROM Recepten_Database";
$result = mysqli_query($conn,$sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptenboek</title>
    <link href="style.css">
</head>

<header>
    <h1>Dit is het recept voor Bigos</h1>
</header>

<body>
    
</body>
<footer>

</footer>