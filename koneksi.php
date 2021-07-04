<?php

// 1. buat variable 
$server = "localhost";
$user = "root";
$password = "";
$name_db = "crud_learning";

// 2. untuk menghubungkan PHP DAN MYSQL
$connect = mysqli_connect($server,$user,$password,$name_db);

// 3. cek apakah berhasil terhubung dengan mysql
if (!$connect) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

