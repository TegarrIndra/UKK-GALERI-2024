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
    <form action="tambah-album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" required></td>
            </tr>

            <td></td>
            <td><input type="submit" value="Tambah"></td>
        </table>
    </form>

    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Album</th>
            <th>Deskripsi</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>

            <?php
            include "koneksi.php";
            $UserID=$_SESSION['UserID'];
            $sql=mysqli_query($conn, "SELECT * FROM album WHERE UserID='$UserID'");
            while($data=mysqli_fetch_array($sql)){
                ?>

                <tr>
                    <td><?=$data['AlbumID']?></td>
                    <td><?=$data['NamaAlbum']?></td>
                    <td><?=$data['Deskripsi']?></td>
                    <td><?=$data['TanggalDibuat']?></td>

                    <td>
                        <a href="edit-album.php?AlbumID=<?=$data['AlbumID']?>">Edit</a>
                        <a href="hapus-album.php?AlbumID=<?=$data['AlbumID']?>">Hapus</a>
                    </td>
                </tr>

                <?php
            }
            ?>
        </tr>
    </table>
    </center>
</body>
</html>

