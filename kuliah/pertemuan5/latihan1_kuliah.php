<?php
// array
// array adalah variable yang dapat menyimpan lebih dari saru nilai sekaligus

$hari = "senin";
$hari2 = "selasa";
$hari7 = "MInggu";

$bulan1 = "januari";
$bulan2 = "Februari";

$mahasiswa = "MJ";


// membuat ARRAY
$hari = ["senin", "selasa", "rabu", "kamis"];//cara baru
$bulan = array("januari", "februari", "maret", "april"); //cara lama

$myArray = [100, "jauhari", true];
 
// menampilkan array
// menampilkan 1 elemen mengunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// menampilakan isi aray semua
// var_dump()atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak semua isi array mengginakan looping
echo $hari[0];
echo "<br>";
echo $hari[1];
echo "<br>";
echo $hari[2];
echo "<br>";
echo $hari[3];
echo "<hr>";

// mecetak semua isi array menggunakan looping 
// for
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $bln){
    echo $bln;
    echo "<br>";
}

echo "<hr>";

//memanipulasi array
// menambahkan elemen di akhir array
$hari[] = "jum'at";
$hari[] = "sabtu";
var_dump($hari);




?>