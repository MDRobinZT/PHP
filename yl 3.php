//Robin Aas TARpe22 ÜL3 17.10.2023


<?php
// HTML vorm väljakutsumiseks
echo '<form method="post" action="">
    Sisesta trapetsi alus1 pikkus (a): <input type="text" name="alus1"><br>
    Sisesta trapetsi alus2 pikkus (b): <input type="text" name="alus2"><br>
    Sisesta trapetsi kõrgus (h): <input type="text" name="korgus"><br>
    Sisesta rombi külg (s): <input type="text" name="romb"><br>
    <input type="submit" value="Arvuta">
</form>';

// Kasutaja sisestatud väärtused
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alus1 = $_POST["alus1"];
    $alus2 = $_POST["alus2"];
    $korgus = $_POST["korgus"];
    $romb = $_POST["romb"];

    // Trapetsi pindala arvutamine
    $trapetsi_pindala = ($alus1 + $alus2) * $korgus / 2;

    // Rombi ümbermõõdu arvutamine
    $rombi_umbermoot = 4 * $romb;

    // Vastuste väljastamine
    echo "Trapetsi pindala on " . round($trapetsi_pindala, 1) . " ruutühikut<br>";
    echo "Rombi ümbermõõt on " . round($rombi_umbermoot, 1) . " ühikut<br>";
}
?>
