<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
</head>
<body>
    <?php 

    $jumbarangA = 20000;
    $total =50;
    $persen = 100;
    $persentasi=round($jumbarangA * $total / $persen);

   echo " Hasil $persentasi %";

    ?>
</body>
</html>