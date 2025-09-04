<?php
// class TagihanListrik
class TagihanListrik {
    private $abonemen;
    private $biayaPerKwh;
    private $pemakaian;

    public function __construct($abonemen, $biayaPerKwh, $pemakaian) {
        $this->abonemen = $abonemen;
        $this->biayaPerKwh = $biayaPerKwh;
        $this->pemakaian = $pemakaian;
    }

    public function hitungDetail() {
        $detail = [];

        // Biaya tetap
        $detail['abonemen'] = $this->abonemen;

        // Biaya pemakaian
        $detail['biayaPemakaian'] = $this->biayaPerKwh * $this->pemakaian;

        // Biaya tambahan jika lebih dari 500 kWh
        $detail['biayaTambahan'] = ($this->pemakaian > 500) ? 100000 : 0;

        // Subtotal sebelum PPN
        $subtotal = $detail['abonemen'] + $detail['biayaPemakaian'] + $detail['biayaTambahan'];

        // Pajak PPN 10%
        $detail['ppn'] = $subtotal * 0.10;

        // Total akhir
        $detail['total'] = $subtotal + $detail['ppn'];

        return $detail;
    }

    public function getPemakaian() {
        return $this->pemakaian;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Tagihan Listrik</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
            background-color: #e6ffe6;
        }
    </style>
</head>
<body>
    <h2>Aplikasi Tagihan Listrik</h2>
    <form method="post">
        <label>Abonemen (Rp):</label><br>
        <input type="number" name="abonemen" required><br><br>

        <label>Biaya per kWh (Rp):</label><br>
        <input type="number" name="biayaPerKwh" required><br><br>

        <label>Pemakaian (kWh):</label><br>
        <input type="number" name="pemakaian" required><br><br>

        <button type="submit" name="hitung">Hitung Tagihan</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $abonemen = $_POST['abonemen'];
        $biayaPerKwh = $_POST['biayaPerKwh'];
        $pemakaian = $_POST['pemakaian'];

        $tagihan = new TagihanListrik($abonemen, $biayaPerKwh, $pemakaian);
        $detail = $tagihan->hitungDetail();

        echo "<h3>Rincian Tagihan Listrik</h3>";
        echo "<table>
                <tr><th>Keterangan</th><th>Jumlah (Rp)</th></tr>
                <tr><td>Abonemen</td><td>" . number_format($detail['abonemen'], 0, ',', '.') . "</td></tr>
                <tr><td>Biaya Pemakaian (" . $tagihan->getPemakaian() . " kWh)</td><td>" . number_format($detail['biayaPemakaian'], 0, ',', '.') . "</td></tr>
                <tr><td>Biaya Tambahan (>500 kWh)</td><td>" . number_format($detail['biayaTambahan'], 0, ',', '.') . "</td></tr>
                <tr><td>PPN (10%)</td><td>" . number_format($detail['ppn'], 0, ',', '.') . "</td></tr>
                <tr class='total'><td>Total Tagihan</td><td>" . number_format($detail['total'], 0, ',', '.') . "</td></tr>
              </table>";
    }
    ?>
</body>
</html>