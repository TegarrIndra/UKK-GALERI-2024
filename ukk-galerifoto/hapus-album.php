<?php
include "koneksi.php";

$AlbumID=$_GET['AlbumID'];

$sql=mysqli_query($conn, "DELETE FROM album WHERE AlbumID='$AlbumID'");

header("location:album.php");
?>