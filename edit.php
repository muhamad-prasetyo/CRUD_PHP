<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>EDIT DATA </h1>
        <h2>Edit Data di Database</h2>
    </div>

    <br>

    <a href="index.php">Lihat Semua Data</a>
    <br>

    <h3 class="judul_table">Edit Data</h3>

    <?php 
    include 'koneksi.php';

    $id = $_GET['id'];
    $query_mysql = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)) {
    ?>

    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="nama" value="<?= $data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?= $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>

    <?php } ?>
</body>
</html>