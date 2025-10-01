<?php
class Hewan{
    public $warna = "hitam", $ummur;
    public function makan()
    {
        return "hewan sedang makan";
    }
} 

class Kucing extends Hewan
{
    public function suara()
    {
        return "meong meong";
    }
}

$Kucing = new Kucing();
echo $Kucing->warna;
echo "<br>"
?>