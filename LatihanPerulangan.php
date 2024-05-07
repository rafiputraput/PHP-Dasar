<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307056">
    <meta name="author" content="Rafi Putra">
</head>
<body>
    <h1>Halaman PHP Rafi</h1>

    <?php
    for ($i = 0; $i <= 9; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

</body>
</html>