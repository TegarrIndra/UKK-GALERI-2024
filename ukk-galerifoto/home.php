<?php
session_start();
if(!isset($_SESSION['UserID'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    
    <a href="index.php">Home</a>
   <a href="album.php">Album</a>
   <a href="foto.php">Foto</a>
   <a href="logout.php">Logout</a>
   <p>User : <b><?=$_SESSION['NamaLengkap'];?></b></p>
</nav>

<br>
</body>
</html>