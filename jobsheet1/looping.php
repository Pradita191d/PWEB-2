<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Di bawah ini adalah bilangan genap dari 1 hingga 10 menggunakan perulangan FOR <br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x <br>";
    echo "Di bawah ini adalah bilangan ganjil dari 1 hingga 10 menggunakan perulangan WHILE <br>";
    $y = 1;
    while($y <= 10 ){
        echo "$y <br>";
        $y += 2;
    }

    echo "Di bawah ini adalah bilangan prima kurang dari 20 menggunakan perulangan DO WHILE <br>";
    $bil = 2;
    do {
        $bilPrima = true;
        // untuk memeriksa bilangan prima
        for ($z = 2; $z < $bil; $z++) {
            if ($bil % $z == 0) {
                $bilPrima = false;
                break;
            }
        }

        if ($bilPrima) {
            echo $bil . "<br>";
        }

        $bil++;
    } while ($bil < 20);
    ?>
</body>
</html>