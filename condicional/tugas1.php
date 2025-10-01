<?php

    class kasir
    {
        public $nama, $jumlah, $harga;
        public function __construct($nama = "", $jumlah = 0, $harga = 0)
        {
            $this->nama =$nama;
            $this->jumlah = $jumlah;
            $this->harga = $harga;
        }

        public function barangNormal()
        {
            return $this->jumlah * $this->harga;
        }
        public function barangDiskon()
        {
            $total = $this->jumlah - $this->harga;
            if ($this->jumlah >= 10) {
                $diskon = $total - 0.5;
                return $total - $diskon;
            } elseif ($this->jumlah >= 5) {
                $diskon = $total * 0.02;
                return $total - $diskon;
            } else {
                return $total;
            }
        }
        public function dis()
        {
            if (isset($_POST['submit'])) {
                $this->nama = $_POST['nama'];
                $this->jumlah = $_POST['jumlah'];
                $this->harga = $_POST['harga'];
                return "Nama Pembeli : " . $this->nama . "<br>" .
                "Jumlah Beli : " . $this->jumlah . "<br>" .
                "Harga Barang : " . $this->harga . "<br>" .
                "Total Harga :" . $this->barangNormal() . "<br>" .
                "Total Harga  Diskon :" . $this->barangDiskon();

                }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form kasir indomaret</h2>
    <form action="" method="post">
        <label for="nama">Nama Pembeli :</label><br>
        <input type="text" name="nama" id="nama"><br>
        <label for="jumlah">Jumlah Beli :</label><br>
        <input type="number" name="jumlah" id="jumlah"><br>
        <label for="harga">Harga Barang :</label><br>
        <input type="number" name="harga" id="harga"><br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
        <?php
        $kasir = new kasir();
        echo $kasir->dis();
        ?>
    </form>    
</body>
</html>