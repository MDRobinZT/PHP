//Robin Aas TARpe22 ÜL3 17.10.2023

<!DOCTYPE html>
<html>
<head>
    <title>Ülesanded</title>
</head>
<body>
    <h1>Ülesanded</h1>

    <h2>Genereeri numbrid 1-100:</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo $i;
        if ($i % 10 == 0) {
            echo "<br>";
        } else {
            echo ". ";
        }
    }
    ?>

    <h2>Rida:</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "* ";
    }
    ?>

    <h2>Rida II:</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "*<br>";
    }
    ?>

    <h2>Ruut:</h2>
    <form method="post">
        Sisesta ruudu suurus: <input type="text" name="ruudu_suurus">
        <input type="submit" value="Kuva ruut">
    </form>
    <?php
    if (isset($_POST['ruudu_suurus'])) {
        $ruudu_suurus = (int)$_POST['ruudu_suurus'];
        for ($i = 1; $i <= $ruudu_suurus; $i++) {
            for ($j = 1; $j <= $ruudu_suurus; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    ?>

    <h2>Kahanevad paarisarvud 10-0:</h2>
    <?php
    for ($i = 10; $i >= 0; $i -= 2) {
        echo "$i ";
    }
    ?>

    <h2>Kolmega jagunevad arvud 1-100:</h2>
    <?php
    for ($i = 3; $i <= 100; $i += 3) {
        echo "$i ";
    }
    ?>

    <h2>Massiivid ja tsüklid:</h2>
    <?php
    // Tüdrukute ja poiste massiivid
    $tudrukud = array("Anna", "Laura", "Maria", "Eva", "Kati");
    $poisid = array("Markus", "Jaan", "Martin", "Karl", "Andres");

    // Väljasta paarid
    for ($i = 0; $i < count($tudrukud); $i++) {
        echo "Tüdruk: " . $tudrukud[$i] . ", Poiss: " . $poisid[$i] . "<br>";
    }

    // Massiivide koopiaad
    $tudrukud_koopia = $tudrukud;
    $poisid_koopia = $poisid;

    // Suvaliste tüdrukute ja poiste koopia
    shuffle($tudrukud_koopia);
    shuffle($poisid_koopia);

    for ($i = 0; $i < count($tudrukud_koopia); $i++) {
        echo "Tüdruk: " . $tudrukud_koopia[$i] . ", Poiss: " . $poisid_koopia[$i] . "<br>";
    }
    ?>
</body>
</html>
