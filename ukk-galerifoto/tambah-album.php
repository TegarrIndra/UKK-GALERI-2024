<?php
include "koneksi.php";
session_start();

$NamaAlbum=$_POST['NamaAlbum'];
$Deskripsi=$_POST['Deskripsi'];
$TanggalDibuat=date("Y-m-d");
$UserId=$_SESSION['UserID'];

$sql=mysqli_query($conn, "INSERT INTO album VALUES('','$NamaAlbum','$Deskripsi','$TanggalDibuat','$UserId')");

header("location:album.php");

?>