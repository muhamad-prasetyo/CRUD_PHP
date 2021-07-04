<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD DENGAN PHP DAN MYSQL</h1>
        <h3>Menampilkan data dari database</h3>
    </div>
    <br>

    <?php
        if(isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];

            if($pesan == "input") {
                echo "Data berhasil di input";
            } else if($pesan == "update") {
                echo "Data berhasil di Update";
            } else if($pesan == "hapus") {
                echo "Data berhasil di Hapus";
            }
        }
    ?>
    <br>

    <a href="input.php" class="tombol"> + Tambah Data Baru</a>

    <!-- membuat table data  -->
    <h3 class="judul_table">Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>

        <?php
            include "koneksi.php";
            // membuat query sql 
            $query_mysql = mysqli_query($connect,"SELECT * FROM user")or die(mysqli_error());

            $nomor = 1;

            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </table>

</body>
</html>