<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

// untuk mengupdate data dengan query berikut 
mysqli_query($connect, "UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE  id='$id'");


// dan alihkan atau direcet kehalaman index.php kembali sekaligus dengan mengirimkan pesan updatenya 
header("Location:index.php?pesan=update");