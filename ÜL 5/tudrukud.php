//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Tüdrukute nimed
$tudrukud = array("Maria", "Anna", "Laura", "Emma", "Kadri", "Liisa", "Mia", "Helena");

// Sorteeri nimed kasvavas järjekorras
sort($tudrukud);

// Kuvamine ridade kaupa
foreach ($tudrukud as $tudruk) {
    echo $tudruk . "<br>";
}
?>
