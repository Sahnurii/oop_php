<?php

class ContohStatic {
    public static $nilai = 1;

    public static function halo()
    {
        return "Halo. " . self::$nilai++ . " Kali";
    }
}

echo ContohStatic::$nilai;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();

echo "<hr>";
echo "<hr>";

//contoh tanpa static dan pakai instansiasi

class Contoh {
    public  static $angka = 1;

    public function Hello()
    {
        return "Hello. " . self::$angka++ . " Kali <br>";
    }
}

$obj = new Contoh();

echo $obj->Hello();
echo $obj->Hello();
echo $obj->Hello();

echo "<br>";

$obj2 = new Contoh();
echo $obj2->Hello();
echo $obj2->Hello();
echo $obj2->Hello();

//disini nilai akan terus tetap karena menggunakan static keywords

//jikalau hanya menggunakan oop biasa maka nilai yang di instansiasi akan kembali ke awal bukan malah netap