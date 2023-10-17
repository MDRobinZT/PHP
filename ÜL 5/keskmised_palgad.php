//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Palgaandmed
$palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

// Leia palgakeskmine
$keskmine_palk = array_sum($palgad) / count($palgad);

echo "Keskmised palgad 2018. aastal: $keskmine_palk";
?>
