<?php
// definisikan masing masing sisi kubus
$a = 9;
$b =4;
$c =2;
$d =4;


// hitung masing masing volume
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a+$volume_b;

// kembalikan nilai total
echo "jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
echo "<hr>";

// membuat function
// deklarasi/definisi Function
 function total_volume_dua_kubus($a, $b){
    $volume_a = pow($a, 3);
    $volume_b = pow($b, 3);
    $total = $volume_a+$volume_b;
    // mengembalikan nilai
    return "jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";

 }

// pemangilan /eksekusi function
echo total_volume_dua_kubus(10,4);
echo "<br>";
echo total_volume_dua_kubus(166,4);
echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga
function total_luas_segitiga($c, $d){
    $luas = 1/2 * 2 * 4;

    $total1 = $luas;
    // mengembalikan nilai
    return "luas segitiga dengan alas $c dan tinggi $d adalah $
toal1
 }


echo total_luas_segitiga(11,4);
echo "<br>";
echo total_luas_segitiga(166,4);

?>