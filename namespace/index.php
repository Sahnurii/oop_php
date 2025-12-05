<?php
require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sahnuri Corp", 120000, 120);
// $produk2 = new Game("PUBG", "SEA", "NET", 300000, 50);

// $CetakProduk = new CetakInfoProduk();

// $CetakProduk->tambahProduk($produk1);
// $CetakProduk->tambahProduk($produk2);
// echo $CetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();