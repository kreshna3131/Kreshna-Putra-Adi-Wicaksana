<<<<<<< HEAD
<?php

// Buat Iterator
class Items implements Iterator
{
  private $data = [];
  private $urutan = 0;

  public function __construct($data)
  {
    $this->data = array_values($data);
  }

  public function current()
  {
    return $this->data[$this->urutan];
  }

  public function key()
  {
    return $this->urutan;
  }

  public function next()
  {
    $this->urutan++;
  }

  public function rewind()
  {
    $this->urutan = 0;
  }
  public function valid()
  {
    // count() menunjukkan berapa banyak item dalam daftar
    return $this->urutan < count($this->data);
  }
}

// Fungsi yang menggunakan iterable
function printIterable(iterable $myData)
{
  foreach ($myData as $data) {
    echo $data;
  }
}

// Gunakan iterator sebagai iterable
$iterator = new Items(["- Buku Naruto <br>", "- Buku Sains <br>", "- Buku Matematika <br>", "- Buku Algoritma Dasar <br>", "- Buku Hacking Tools <br>"]);
echo "Rincian Buku yang dipinjam : <br>";
printIterable($iterator);
=======
<?php

// Buat Iterator
class Items implements Iterator
{
  private $data = [];
  private $urutan = 0;

  public function __construct($data)
  {
    $this->data = array_values($data);
  }

  public function current()
  {
    return $this->data[$this->urutan];
  }

  public function key()
  {
    return $this->urutan;
  }

  public function next()
  {
    $this->urutan++;
  }

  public function rewind()
  {
    $this->urutan = 0;
  }
  public function valid()
  {
    // count() menunjukkan berapa banyak item dalam daftar
    return $this->urutan < count($this->data);
  }
}

// Fungsi yang menggunakan iterable
function printIterable(iterable $myIterable)
{
  foreach ($myIterable as $data) {
    echo $data;
  }
}

// Gunakan iterator sebagai iterable
$iterator = new Items(["- Buku Naruto <br>", "- Buku Sains <br>", "- Buku Matematika <br>", "- Buku Algoritma Dasar <br>", "- Buku Hacking Tools <br>"]);
echo "Rincian Buku yang dipinjam : <br>";
printIterable($iterator);
>>>>>>> 9dc44380f67cfee8403a6fe241a3bcc8118837f5
