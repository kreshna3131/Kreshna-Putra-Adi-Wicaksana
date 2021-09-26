<?php
require 'functions.php';
$perpustakaan = query("SELECT * FROM databuku");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Buku</h1>

  <a href="tambah.php">Tambah Data Buku</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Nama Buku</th>
      <th>Penerbit</th>
      <th>Penulis</th>
      <th>Halaman</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($perpustakaan as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td class="aksi">
          <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
          <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a>
        </td>
        <td><?= $row["namabuku"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["halaman"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>



  </table>




</body>

</html>