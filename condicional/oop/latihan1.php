<?php
class motor{
    public $namaMTR;
    public $warna;
    public $merk;

     public function __construct($namaMTR, $warna, $merk)
    {
        $this->namaMTR = $namaMTR;
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function cc()
    {
        return "150cc";
    }
}
$motor = new motor("MX King", "biru", "YAMAHA");
echo "nama motor nya adalah:" . $motor->namaMTR . "<br>";
echo "warnanya adalah:" . $motor->warna . "<br>";
echo "merknya adalah:" . $motor->merk . "<br>";
echo "berkapasitas" . $motor->cc() . "<br>";