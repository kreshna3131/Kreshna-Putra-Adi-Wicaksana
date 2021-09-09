<?php
interface Sistempeminjaman
{
    public function __construct();
    public function getnamabuku();
}

class Buku implements Sistempeminjaman
{
    public function __construct()
    {
        echo "Nama buku yang dipinjam : ";
    }
    public function getnamabuku()
    {
        return "Buku Naruto, Buku Sains, Buku Matematika, Buku Algoritma Dasar, Buku Hacking Tools";
    }
}

$Buku = new Buku();
echo $Buku->getnamabuku();
echo "<br>";
