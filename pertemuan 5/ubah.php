<?php
require 'functions.php';

// ambil data di urll
$id = $_GET["id"];
// query data buku berdasarkan id
$perpus = query("SELECT * FROM databuku WHERE id = $id")[0];

// koneksi ke DMBS
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "echo
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'index.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data buku</title>
</head>

<body>

    <h1>Ubah Data buku</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $perpus["id"]; ?>">
        <ul>
            <li>
                <label for="namabuku">Nama Buku : </label>
                <input type="text" name="namabuku" id="namabuku" required value="<?= $perpus["namabuku"]; ?>">
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $perpus["penerbit"]; ?>">
            </li>
            <li>
                <label for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required value="<?= $perpus["penulis"]; ?>">
            </li>
            <li>
                <label for="halaman">Halaman : </label>
                <input type="text" name="halaman" id="halaman" required value="<?= $perpus["halaman"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>



</body>

</html>