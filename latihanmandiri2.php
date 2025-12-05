<?php

//disini syaa ingin menerapkan konsep inheritance dan abstarak
//sebagai catatan nama class tidak boleh sama dengan method

abstract class Kendaraan
{
    protected $merk, $model, $tahun, $jumlahRoda, $warna;

    public function __construct($merk = "Honda", $model = "Honda", $tahun = 2025, $jumlahRoda = 4, $warna = "Merah")
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
        $this->jumlahRoda = $jumlahRoda;
        $this->warna = $warna;
    }

    abstract public function tampil();

    public function info()
    {
        return "Merk : {$this->merk} | Model : {$this->model} | Tahun : {$this->tahun} | Jumlah Roda : {$this->jumlahRoda} | Warna : {$this->warna}";
    }
}

class Mobil extends Kendaraan
{
    private $jumlahPintu, $bagasi;


    public function __construct($merk = "Honda", $model = "Honda", $tahun = 2025, $jumlahRoda = 4, $warna = "Merah", $jumlahPintu = 4, $bagasi = "Luas")
    {
        parent::__construct($merk, $model, $tahun, $jumlahRoda, $warna);
        $this->jumlahPintu = $jumlahPintu;
        $this->bagasi = $bagasi;
    }

    public function tampil()
    {
        return "{$this->info()} dan Memiliki Jumlah Pintu {$this->jumlahPintu} serta Bagasi {$this->bagasi}";
    }
}


class Motor extends Kendaraan
{
    private $jenisMotor, $helmTersedia;

    public function __construct($merk = "Honda", $model = "Honda", $tahun = 2025, $jumlahRoda = 4, $warna = "Merah", $jenisMotor = "Matic", $helmTersedia = true)
    {
        parent::__construct($merk, $model, $tahun, $jumlahRoda, $warna);
        $this->jenisMotor = $jenisMotor;
        $this->helmTersedia = $helmTersedia;
    }

    public function tampil()
    {
        $helm = $this->helmTersedia ? "Tersedia" : "Tidak Tersedia";
        return "{$this->info()} | Jenis Motornya adalah : {$this->jenisMotor} dan Helmnya : {$helm}";
    }
}

class Cetak
{
    private $total = array();

    public function tambahData($objek)
    {
        $this->total[] = $objek;
    }

    public function cetak()
    {
        $str = "Daftar Kendaraan : <br>";

        foreach ($this->total as $t) {
            $str .= " - {$t->tampil()} <br>";
        }

        return $str;
    }
 }



$obj1 = new Mobil("Honda", "Civic", 2024, 4, "Biru", 4, "Kecil");
$obj2 = new Motor("Kawasaki", "ZX25R", 2023, 2, "Hijau", "Kopling", true);

$cetakData = new Cetak();

$cetakData->tambahData($obj1);
$cetakData->tambahData($obj2);
echo $cetakData->cetak();
