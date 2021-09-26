<?php
// koneksi ke database
// urutannya string(penerbit host), username mysql, password, namadatabase
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $namabuku = htmlspecialchars($data["namabuku"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $halaman = htmlspecialchars($data["halaman"]);

    // query insert data
    $query = "INSERT INTO databuku
                VALUES
            ('', '$penerbit', '$namabuku', '$penulis', '$halaman')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM databuku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $namabuku = htmlspecialchars($data["namabuku"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $halaman = htmlspecialchars($data["halaman"]);

    // query insert data
    $query = "UPDATE databuku SET
                namabuku = '$namabuku',
                penerbit = '$penerbit',
                penulis = '$penulis',
                halaman = '$halaman'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
