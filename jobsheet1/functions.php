<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h4>Menghitung Luas dengan Input Statis <br></h4>
    <?php
    function persegi_pjg($p, $l){
        return $p * $l;
    }
    echo "Luas Persegi Panjang = " . persegi_pjg(4, 5) . "<br>";
    
    function lingkaran($jari_jari){
        return 3.14 * $jari_jari * $jari_jari;
    }
    echo "Luas Lingkaran = " . lingkaran(10) . "<br><br>";
    ?>

    <h4>Menghitung Luas dengan Input Statis <br></h4>
    <?php
    ?>
    <form method="POST">
        Masukkan Jari-jari Lingkaran : <input type="number" name="r"></br>
        Masukkan Panjang Persegi : <input type="number" name="p"></br>
        Masukkan Lebar Persegi : <input type="number" name="l"></br>
        <input type="submit" value="Hitung">
    </form>   
    <?php
    if (isset($_POST["r"])) {
        $jari_jari = $_POST["r"];
    }
    echo "Luas Lingkaran = " . lingkaran($jari_jari);
    ?>
    <?php
    if (isset($_POST["p"]) && isset($_POST["l"])) {
        $p = $_POST["p"];
        $l = $_POST["l"];
    }
    echo "Luas Persegi Panjang = " . persegi_pjg($p, $l);
    ?>

</body>
</html>
