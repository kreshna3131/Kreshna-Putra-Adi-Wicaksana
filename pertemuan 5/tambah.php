<?php
require 'functions.php';
// koneksi ke DMBS
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "echo
            <script>
                alert('Data Gagal Ditambahkan');
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
    <title>Tambah Data Buku</title>
</head>

<body>

    <h1>Tambah data Buku</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="namabuku">Nama Buku : </label>
                <input type="text" name="namabuku" id="namabuku" required>
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required>
            </li>
            <li>
                <label for="halaman">Halaman : </label>
                <input type="text" name="halaman" id="halaman" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>



</body>

</html>