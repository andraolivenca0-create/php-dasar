<?php
class kucing
{
    public "nama";
    public "warna";
    public "jeis";
    // method khusus yamg akan di panggil pertama kali / di awal
    public function __contruct ($nama,$warba,$jenis)
    {
        $this->nama =$nama;
        $this->warna =$warna;
        $this->jenis =$jenis;   
    }
    public function makan()
    {
        return "kucing sedang makan";
    }
}
$kucing1 = new kucing("luna", "hitam", "persia"); 
echo "nama kucing 1: " . $kucing->nama . "<br>";
echo "warna kucing 1: " . $kucing->warna . "<br>";
echo "jenis kucing 1: " . $kucing->jenis . "<br>";