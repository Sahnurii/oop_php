<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

        return $str;
    }
}

$produk = new Komik("Naruto", "Masashi Kishimoto", "Sahnuri Corp", 120000, 120, 0);
$produk2 = new Game("PUBG", "SEA", "NET", 300000, 0, 50);

echo $produk->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
