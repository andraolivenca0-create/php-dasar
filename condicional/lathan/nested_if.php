<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username ="admin";
    $password ="12345";

    if ($username == "admin") {
        if ($password =="12345") { 
            echo "login berhasil";
        } else {
            echo "password salah";
        }
    } else {
        echo "username tidak ditemukan";
    }
    ?>
</body>
</html>