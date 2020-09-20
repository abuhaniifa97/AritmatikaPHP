<?php 
require "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php 
    $data = mysqli_query($conn,"select * from operator");
    while($d = mysqli_fetch_array($data)){
        $satu = $d['satu'];
        $dua = $d['dua'];
    ?>
    <label for=""><?php echo $satu?></label><br>
    <label for=""><?php echo $dua?></label>
<?php }?>
   
    <h5>Total Pembayaran<?php echo $satu + $dua?></h5>

    <!-- Diskon -->
    
<?php

$harga=50000;

$ppn=0.1;

$hitung_ppn =$harga*$ppn;

$harga_sekarang = $harga - $hitung_ppn;

echo" harga asli = $harga<br/> harga sesudah ppn = $harga_sekarang ";
?>
</body>
</html>