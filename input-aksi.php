<?php 
include 'koneksi.php';

// variable untuk menangkap inputan dari input.php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($connect, "INSERT INTO user VALUES('','$nama','$alamat','$pekerjaan')");

// untuk mengirim pesan sekaligus mendirect ke index.php 
header("Location:index.php?pesan=input");

