<?php


class Manusia
{
    private $nama,
        $kelamin;

    public function __construct($nama = "John Doe", $kelamin = "L/P")
    {
        $this->nama = $nama;
        $this->kelamin = $kelamin;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getKelamin(){
        return $this->kelamin;
    }

    public function getLengkap()
    {
        $lengkap = "Nama : {$this->nama} | Kelamin : {$this->kelamin}";
        return $lengkap;
    }
}

class Pria extends Manusia {
    private $FisikPria;

    public function __construct($nama = "John Doe", $kelamin = "L/P", $FisikPria = "Jakun")
    {
        parent::__construct($nama, $kelamin);
        $this->FisikPria = $FisikPria;
    }

    public function getPria()
    {
        return $this->FisikPria;
    }

    public function getLengkap()
    {
        $lengkapPria = "Pria : ". parent::getLengkap() . " - {$this->getPria()}";
        return $lengkapPria;
    }

    public function setPria( $FisikPria )
    {
        $this->FisikPria = $FisikPria;
    }

}

class Wanita extends Manusia {
    private $FisikWanita;

    public function __construct($nama = "John Doe", $kelamin = "L/P", $FisikWanita = "Dada")
    {
        parent::__construct($nama, $kelamin);
        $this->FisikWanita = $FisikWanita;
    }

    public function setWanita ( $FisikWanita )
    {
        $this->FisikWanita = $FisikWanita;
    }

    public function getWanita()
    {
        return $this->FisikWanita;
    }

    public function getLengkap()
    {
        $lengkapWanita = "Wanita : " . parent::getLengkap() . " - {$this->getWanita()}";
        return $lengkapWanita;
    }
}

$orang = new Pria("Sahnuri", "Laki-Laki", "Memiliki Jakun");
$orang2 = new Wanita ("Hasnia", "Perempuan", "Memiliki Dada");

$orang->setPria("Suara Berat");
echo $orang->getLengkap();
echo "<br>";
$orang2->SetWanita("Suara Lembut");
echo $orang2->getLengkap();