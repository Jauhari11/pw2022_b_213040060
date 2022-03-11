<?php
//  4 - FUNCTION
// built- in function

// date()
// untuk mengetahui waktu saat ini
// default timezone :UTC (-7 jam)

echo date("l, d - F - Y G ");
echo "<hr>";
echo date("l", time());
echo "<hr>";

// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l", time() + 60 * 60 * 24 * 100);
// jika ingin lihat 100 hari esok
echo "<br>";
echo date("l", time() - 60 * 60 * 24 * 100);
// jika ingin lihat 100 hari kemarin
echo "<hr>";
// mktime()
// membuat waktu berdasarkan format
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(10,45,0,3,5,2022);
echo "<hr>";
// mencari hari dengan mktime,(tanggal lahir MJ)
echo date("l", mktime(0,0,0,04,11,2003));
echo "<hr>";
echo strtotime("2 juni 2003");
echo "<br>";
echo mktime(0,0,0,04,11,2003);
echo "<br>";
echo "<hr>";

// fungsi matematik
// pow() untuk pangkat
echo pow(2,3);

echo "<br>";
// rand untuk blangan random
echo rand(1,10);

echo "<br>";
// pembulatan
echo round(2.10);

// ceiling (pembulatan ke atas)
echo "<br>";
echo ceil(2.1);

// kebalikan dari ceiling
echo "<br>";
echo floor(2.9);

echo "<hr>";
echo "<hr>";
// "function yang baik adlah function yanng hanya merngerjakan 1 hal saja"




?>