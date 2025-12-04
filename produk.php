<?php

class Produk1
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk(); //instance = object bahasa lainnya

// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "mariocross";
// $produk2->tambahdatalain = "Penambhaan data";
// var_dump($produk2);

$produk3 = new Produk1();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Sahnuri Corp";
$produk3->harga = 50000;



$produk4 = new Produk1();
$produk4->judul = "Pubg";
$produk4->penulis = "Siapapun Itu";
$produk4->penerbit = "Sahnuri Corp";
$produk4->harga = 90000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();