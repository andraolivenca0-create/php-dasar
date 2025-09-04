<?php
class siswa{
    public $siswa1;
    public $siswa2;
    public $siswa3;
    public $siswa4;

     public function __construct($siswa1, $siswa2, $siswa3, $siswa4)
    {
        $this->siswa1 = $siswa1;
        $this->siswa2 = $siswa2;
        $this->siswa3 = $siswa3;
        $this->siswa4 = $siswa4;
    }
    public function siswi()
    {
        return "";
    }
}
$siswa = new siswa("dadan", "rehan", "maryana", "budi");
echo "nama siswa yang pertama adalah: " . $siswa->siswa1 . "<br>";
echo "nama siswa yang kedua adalah: " . $siswa->siswa2 . "<br>";
+/echo "nama siswa yang ketiga adalah: " . $siswa->siswa3 . "<br>";
echo "nama siswa yang ke empat adalah: " . $siswa->siswa4 . "<br>";+++++++
