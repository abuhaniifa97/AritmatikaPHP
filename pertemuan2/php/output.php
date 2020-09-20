<?php


$nama = $_POST['nama'];


$harga = $_POST['harga'];


$jumlah = $_POST['jumlah'];


echo "<br><img src=logo.png width=200 height=100><br><br>";


{


echo "Nama Barang : $nama <br>";


echo "Harga Barang : $harga <br>";


echo "Jumlah Barang : $jumlah <br>";


}


$total = $harga*$jumlah; {


echo "Total Barang : Rp. $total,-";


}





if  ($total >= 1000000) {


$discount=(($total*25)/100);


$total_bayar=($total-$discount);


echo "<p> Discount 25% </p>";


echo "Total Bayar : Rp. $total_bayar,-"; 


}


elseif ($total >= 450000) {


$discount=(($total*15)/100);


$total_bayar=($total-$discount);


echo "<p> Discount 15% </p>";


echo "Total Bayar : Rp. $total_bayar,-"; 


}


elseif ($total <=450000) {


echo "<br> Anda Tidak Mendapatkan Discount";


}


?>



