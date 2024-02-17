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
    <title>Halaman Album</title>
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

    <form action="update-album.php" method="post">
        <?php
        include "koneksi.php";
        $AlbumID=$_GET['AlbumID'];
        $sql=mysqli_query($conn, "SELECT * FROM album WHERE AlbumID='$AlbumID'");
        while($data=mysqli_fetch_array($sql)){
            ?>
        
        <table>
            <input type="text" name="AlbumID" value="<?=$data['AlbumID']?>" hidden>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" required></td>
            </tr>

            <td></td>
            <td><input type="submit" value="Edit"></td>
        </table>
    </form>

    <?php
        }
        ?>
</body>
</html>

