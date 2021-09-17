<<<<<<< HEAD
<?php
class Greeting
{
    public static function greeting()
    {
        echo "Selamat Datang Di Perpustakaan";
    }
    public function __construct()
    {
        self::greeting();
    }
}

class Datapinjam
{
    public static $datapinjam = 5;
    public function staticbuku()
    {
        return self::$datapinjam;
    }
}

// class
class Data
{
    public $namabuku, $tanggalpeminjaman, $nomorpeminjaman;

    // constructor
    public function __construct(
        $nama = "Buku Naruto, Buku Sains, Buku Matematika, Buku Algoritma Dasar, Buku Hacking Tools",
        $tanggal = "31 Maret 2022",
        $nomorpeminjaman = "243"
    ) {
        $this->namabuku = $nama;
        $this->tanggalpeminjaman = $tanggal;
        $this->nomorpeminjaman = $nomorpeminjaman;
    }

    public function getData(): array
    {
        $Data = [
            'Nama buku yang dipinjam = ' => $this->namabuku,
            'Nomor peminjaman Buku = ' => $this->nomorpeminjaman,
            'Tanggal Peminjaman Buku = ' => $this->tanggalpeminjaman,
        ];
        return $Data;
    }

    // Destructor
    public function __destruct()
    {
        echo "Sampai Jumpa lagi di Perpustakaan.";
    }
}

// object
new Greeting();
echo "<br>";
echo "<hr>";
echo "<br>";

// modifier
$Data = new Data();
echo "Nama buku yang dipinjam = " . $Data->getData()['Nama buku yang dipinjam = '];
echo "<br>";
echo "Tanggal Peminjaman Buku = " . $Data->getData()['Tanggal Peminjaman Buku = '];
echo "<br>";
echo "Nomor peminjaman buku : " . $Data->getData()['Nomor peminjaman Buku = '] . "<br>";
$datapinjam = new datapinjam();
echo "Jumlah buku yang dipinjam : " . $datapinjam->staticbuku();
echo "<br>";
=======
<?php
class Greeting
{
    public static function greeting()
    {
        echo "Selamat Datang Di Perpustakaan";
    }
    public function __construct()
    {
        self::greeting();
    }
}

class Datapinjam
{
    public static $datapinjam = 5;
    public function staticbuku()
    {
        return self::$datapinjam;
    }
}

// class
class Data
{
    public $namabuku, $tanggalpeminjaman, $nomorpeminjaman;

    // constructor
    public function __construct(
        $nama = "Buku Naruto, Buku Sains, Buku Matematika, Buku Algoritma Dasar, Buku Hacking Tools",
        $tanggal = "31 Maret 2022",
        $nomorpeminjaman = "243"
    ) {
        $this->namabuku = $nama;
        $this->tanggalpeminjaman = $tanggal;
        $this->nomorpeminjaman = $nomorpeminjaman;
    }

    public function getData(): array
    {
        $Data = [
            'Nama buku yang dipinjam = ' => $this->namabuku,
            'Nomor peminjaman Buku = ' => $this->nomorpeminjaman,
            'Tanggal Peminjaman Buku = ' => $this->tanggalpeminjaman,
        ];
        return $Data;
    }

    // Destructor
    public function __destruct()
    {
        echo "Sampai Jumpa lagi di Perpustakaan.";
    }
}

// object
new Greeting();
echo "<br>";
echo "<hr>";
echo "<br>";

// modifier
$Data = new Data();
echo "Nama buku yang dipinjam = " . $Data->getData()['Nama buku yang dipinjam = '];
echo "<br>";
echo "Tanggal Peminjaman Buku = " . $Data->getData()['Tanggal Peminjaman Buku = '];
echo "<br>";
echo "Nomor peminjaman buku : " . $Data->getData()['Nomor peminjaman Buku = '] . "<br>";
$datapinjam = new datapinjam();
echo "Jumlah buku yang dipinjam : " . $datapinjam->staticbuku();
echo "<br>";
>>>>>>> 9dc44380f67cfee8403a6fe241a3bcc8118837f5
