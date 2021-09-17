<<<<<<< HEAD
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
=======
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
>>>>>>> 9dc44380f67cfee8403a6fe241a3bcc8118837f5
