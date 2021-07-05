<?php

include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($connect,"DELETE FROM user WHERE id='$id'")or die(mysqli_error());

header("Location:index.php?pesan=hapus");