<?php
class Kendaraan
{
    public $merk, $warna;

    public function __construct($merk,$warna)
    {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function jalan()
    {
        return "Kendaraan berjalan";
    }
}
class Mobil extends Kendaraan
{
    public $jumlah_pintu;
    public function __construct($merk,$warna,$jumlah_pintu)
    {
        parent::__construct($merk,$warna);
        $this->jumlah_pintu = $jumlah_pintu;
    }

    public function info()
    {
        return "Merk:" . $this->merk . "<br>" .
         "Warna:" . $this->warna . "<br>" .
         "Jumlah Pintu:" . $this->jumlah_pintu . "<br>";
    }
}

$mobil = new Mobil("Toyota","oren",2);
echo $mobil->info();
echo $mobil->jalan();