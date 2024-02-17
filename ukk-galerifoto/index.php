<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        ?>

        <nav>
           <a href="login.php">Login</a>
           <a href="register.php">Register</a>
        </nav>

        <br>
        
        <?php
    }else{
        ?>
        
<nav>
    
    <a href="index.php">Home</a>
   <a href="album.php">Album</a>
   <a href="foto.php">Foto</a>
   <a href="logout.php">Logout</a>
   <p>User : <b><?=$_SESSION['NamaLengkap'];?></b></p>
</nav>


<br>

        <?php
    }
    ?>

    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Aksi</th>

            <?php
            include "koneksi.php";
            $sql=mysqli_query($conn, "SELECT * FROM foto,user WHERE foto.UserID=user.UserID");
            while($data=mysqli_fetch_array($sql)){
                ?>

                <tr>
                    <td><?=$data['FotoID']?></td>
                    <td><?=$data['JudulFoto']?></td>
                    <td><?=$data['DeskripsiFoto']?></td>
                    <td>
                        <img src="gambar/<?=$data['LokasiFile']?>"width="200px">
                    </td>
                    <td><?=$data['NamaLengkap']?></td>
                    <td>
                        <?php
                        $FotoID=$data['FotoID'];
                        $sql2=mysqli_query($conn, "SELECT * FROM likefoto WHERE FotoID='$FotoID'");
                        echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="like.php?FotoID=<?=$data['FotoID']?>">Like</a>
                        <a href="komentar.php?FotoID=<?=$data['FotoID']?>">Komentar</a>
                    </td>
                </tr>

                <?php
            }
            ?>
        </tr>
    </table>
</body>
</html>