//Robin Aas TARpe22 ÜL7 17.10.2023

<?php
function genereeri_arvud($algus, $lopp) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i++) {
        $arvud[] = $i;
    }
    return $arvud;
}

function genereeri_arvud_sammuga($algus, $lopp, $samm) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}
?>
