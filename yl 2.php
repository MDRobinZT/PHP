//Robin Aas TARpe22 ÜL2 17.10.2023

<?php
$arv1 = 10;
$arv2 = 3;

// Liitmine
$summa = $arv1 + $arv2;
echo "Liitmine: $arv1 + $arv2 = $summa\n";

// Lahutamine
$vahe = $arv1 - $arv2;
echo "Lahutamine: $arv1 - $arv2 = $vahe\n";

// Korrutamine
$korrutis = $arv1 * $arv2;
echo "Korrutamine: $arv1 * $arv2 = $korrutis\n";

// Jagamine
$jagatis = $arv1 / $arv2;
echo "Jagamine: $arv1 / $arv2 = $jagatis\n";

// Jääk
$jaak = $arv1 % $arv2;
echo "Jääk: $arv1 % $arv2 = $jaak\n";
?>



<?php
$millimeetrid = 5500;

// Teisendamine sentimeetriteks
$sentimeetrid = $millimeetrid / 10;

// Teisendamine meetriteks
$meetrid = $sentimeetrid / 100;

echo "Millimeetrid: $millimeetrid mm\n";
echo "Sentimeetrid: " . number_format($sentimeetrid, 2) . " cm\n";
echo "Meetrid: " . number_format($meetrid, 2) . " m\n";
?>



<?php
$katet1 = 5;
$katet2 = 12;

// Hüpotenuusi leidmine
$hupotenuus = sqrt($katet1 ** 2 + $katet2 ** 2);

// Ümbermõõt
$umbermoot = $katet1 + $katet2 + $hupotenuus;

// Pindala
$pindala = ($katet1 * $katet2) / 2;

echo "Täisnurkse kolmnurga ümbermõõt: " . round($umbermoot) . " ühikut\n";
echo "Täisnurkse kolmnurga pindala: " . round($pindala) . " ruutühikut\n";
?>
