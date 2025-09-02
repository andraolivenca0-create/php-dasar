<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $totalbelanja = 500000;

    if ($totalbelanja >= 500000) {
        echo "selamat anda mendapatkan diskon sebesar 20%";
    } elseif ($totalbelanja >=500000) {
        echo "selamat anda mendapatkan diskon sebesar 10%";
    } else {
        echo "anda tidak mendapakan diskon";
    }
    ?>
</body>
</html>