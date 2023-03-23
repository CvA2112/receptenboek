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
    <h1>Welkom bij receptenboek èpicer!</h1>
    <div>
        <a href="Bigos.php"><img id= "fotos"; src="images/Bigos.jpg" alt="img"> </a>  
        <a href="paczki.php"><img id= "fotos"; src="images/paczki.jpg" alt="img"> </a>
        <a href="placki.php"><img id= "fotos"; src="images/placki nogwat nogwat.jpg" alt="img"> </a>
        <a href="zurek.php"><img id= "fotos"; src="images/zurek.jpg" alt="img"> </a>  
        <a href="pierogi.php"><img id= "fotos"; src="images/pierogi.png" alt="img"> </a>  
    </div>
</header>

    <p> In deze website vindt u meerdere recepten voor de Poolse keuken. Klik op de fotos voor meer informatie over elk recept!</p>


</body>
</html>
