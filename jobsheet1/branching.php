<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <?php
    $x = 10;
    echo "Nilai X = $x <br>";
    if ($x > 0) {
        echo "$x merupakan Bilangan Positif <br><br>";
    } elseif ($x < 0) {
        echo "$x merupakan Bilangan Negatif <br><br>";
    } else {
        echo "$x merupakan Bilangan Nol <br><br>";
    }
    ?>
     <form method="POST">
        Masukkan Nilai X : <input type="text" name="x">
        <input type="submit" value="Cek">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        echo "Nilai X = $x <br>";
            if ($x > 0) {
                echo "$x merupakan Bilangan Positif <br><br>";
            } elseif ($x < 0) {
                echo "$x merupakan Bilangan Negatif <br><br>";
            } else {
                echo "$x merupakan Bilangan Nol <br><br>";
            }
        }
    ?>
</body>
</html>