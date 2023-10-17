//Robin Aas TARpe22 ÜL5 17.10.2023

<?php
// Massiiv otsinguga
$massiiv = array("Apple", "Banana", "Cherry", "Date", "Fig", "Grapes");

// Kasutaja otsitav nimi
$otsing = "Date";

// Kontrolli, kas otsitav nimi on massiivis
if (in_array($otsing, $massiiv)) {
    $message = "Nimi '$otsing' leiti massiivist.";
    $alert_class = "alert-success";
} else {
    $message = "Nimi '$otsing' ei leitud massiivist.";
    $alert_class = "alert-danger";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert <?php echo $alert_class; ?>" role="alert">
            <?php echo $message; ?>
        </div>
    </div>
</body>
</html>
