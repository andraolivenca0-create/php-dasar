<?php
class mobil {
    public $warna ="hijau";
   public $jumlah_ban = 4;
   
   public function bersuara()
   {
    return "brum brum";
   }
   public function berkendara()
    {
        return "mobil alat tranformasi";
    }
   
}
// inisiasi (pembuatan objejt)
$mobil1 = new mobil();
echo "warna mobil 1" . $mobil1->warna . "<br>";
echo "jumlah ban mobil 1: " . $mobil1->jumlah_ban . "<br>";
echo "suara mobil 1: " . $mobil1->bersuara() . "<br>"; 
?>