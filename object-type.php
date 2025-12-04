<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class Cetak {
    public function cetakInfo( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. {$produk->harga}";
        return $str;
    }
}


$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Sahnuri Corp", 50000);
$produk4 = new Produk("PUBG", "Apapun", "Sahnuri Corp", 90000);

$infoCetak = new Cetak();

echo $infoCetak->cetakInfo($produk4);
