//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Hiina nimede massiiv
$hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳", "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪", "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

// Sorteerime nimed kasvavas järjekorras
sort($hiina_nimed);

// Väljasta esimene ja viimane nimi
echo "Esimene nimi: " . $hiina_nimed[0] . "<br>";
echo "Viimane nimi: " . end($hiina_nimed);
?>
