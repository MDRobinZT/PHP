//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Firmade nimede massiiv
$firmad = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");

// Sorteerime firmade nimed
sort($firmad);

// Väljastame firmade nimed
foreach ($firmad as $firma) {
    echo $firma . "<br>";
}
?>
