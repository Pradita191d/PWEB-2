<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    echo "Tulisan normal <br>";
    $ini = "Selamat Belajar PHP!";
    echo "$ini <br><br>";
    echo "Huruf Kapital <br>";
    echo strtoupper($ini) . "<br><br>";
    echo "Huruf Kecil <br>";
    echo strtolower($ini) . "<br><br>";
    echo "Memotong <br>";
    echo substr($ini, 0, 7). "<br><br>";
    ?>
    
</body>
</html>