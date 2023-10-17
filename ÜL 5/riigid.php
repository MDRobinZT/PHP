//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Riikide nimede massiiv
$riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines", "Philippines","Canada","Philippines","South Sudan","Brazil", "Democratic Republic of the Congo","Indonesia","Syria","Sweden", "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France", "Kazakhstan","Cuba","Portugal","Czech Republic");

// Leia kõige pikema riigi nime märkide arv
$pikkus = 0;
foreach ($riigid as $riik) {
    $riigi_pikkus = strlen($riik);
    if ($riigi_pikkus > $pikkus) {
        $pikkus = $riigi_pikkus;
    }
}

echo "Kõige pikema riigi nime märkide arv: $pikkus";
?>
