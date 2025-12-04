<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "umum")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} {$this->getLabel()} (Rp. {$this->harga})";

        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }elseif ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

$produk = new Produk("Naruto", "Masashi Kishimoto", "Sahnuri Corp", 120000, 120, 0, "Komik");
$produk2 = new Produk ("PUBG", "SEA", "NET", 300000, 0, 50, "Game");

echo $produk->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
