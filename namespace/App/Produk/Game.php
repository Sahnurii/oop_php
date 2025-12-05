<?php

class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function infoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->InfoProduk() . " ~ {$this->waktuMain} Jam.";

        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}