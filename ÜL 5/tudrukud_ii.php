//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Tüdrukute nimed
$tudrukud = array("Maria", "Anna", "Laura", "Emma", "Kadri", "Liisa", "Mia", "Helena");

// Väljasta esimesed 3 nime
echo "Esimene 3 nime:<br>";
for ($i = 0; $i < 3; $i++) {
    echo $tudrukud[$i] . "<br>";
}

// Väljasta viimane nimi
echo "Viimane nimi: " . end($tudrukud) . "<br>";

// Väljasta üks suvaline nimi
$randomIndex = array_rand($tudrukud);
echo "Suvaline nimi: " . $tudrukud[$randomIndex] . "<br>";
?>
