<?php

// class
class Sistempeminjaman
{
    public $namabuku;
    public $jumlahbuku;
    public $totalpeminjaman;

    public function __construct($namabuku, $jumlahbuku, $totalpeminjaman)
    {
        $this->namabuku = $namabuku;
        $this->jumlahbuku = $jumlahbuku;
        $this->totalpeminjaman = $totalpeminjaman;
    }
    protected function intro()
    {
        echo "Nama buku yang dipinjam : {$this->namabuku} <br>";
        echo "Jumlah buku yang dipinjam : {$this->jumlahbuku} <br>";
        echo "Total buku yang harus dikembalikan : {$this->totalpeminjaman} <br>";
    }
}

// inheritance
class Pinjam extends Sistempeminjaman
{
    public $totalpengembalian;
    public function __construct($namabuku, $jumlahbuku, $totalpeminjaman, $totalpengembalian)
    {
        $this->namabuku = $namabuku;
        $this->jumlahbuku = $jumlahbuku;
        $this->totalpeminjaman = $totalpeminjaman;
        $this->totalpengembalian = $totalpengembalian;
    }
    public function intro()
    {
        echo "Nama buku yang dipinjam : {$this->namabuku} <br>";
        echo "Jumlah buku yang dipinjam : {$this->jumlahbuku} <br>";
        echo "Total buku yang dipinjam : {$this->totalpeminjaman} <br>";
        echo "Total buku yang harus dikembalikan : {$this->totalpengembalian} <br>";
    }
}

// access modifier
$pinjam = new Pinjam("Buku Naruto, Buku Sains, Buku Matematika, Buku Algoritma Dasar, Buku Hacking Tools", "5 buku", "5 buku", "5 buku");
$pinjam->intro();
