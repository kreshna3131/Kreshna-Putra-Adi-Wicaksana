<?php

class Orang
{
  // variabel dengan access modifier
  public $nama_orang = "Tidak ada Nama";
  // fungsi mengisi nama
  function mengisiNama()
  {
    $this->nama_orang = "Fulan";
  }
}

//instance
$mahasiswa = new Orang();
$mahasiswa->mengisiNama();
echo $mahasiswa->nama_orang;
