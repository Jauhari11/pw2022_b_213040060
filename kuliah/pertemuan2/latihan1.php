<?php
// pertemuan 2, belajar sintaks php 

// NILAI
// ANGKA (integer), tulisan (string), true/false(boolean)
echo 10; //integer 
echo "<br>";
echo "Muhammad Jauhari"; //string
echo "<br>";
echo true; //boolean
echo "<hr>";

// variable
// tempat menampung NILAI
// awali dengan tanda $ (dollar)
// dalam tanda $ boleh mengandung angka tidak boleh diawali angka
// tidak boleh ada spasi dalam tanda $
$name1 = "MJ"; // variable
echo $name1; // buat nampilin
echo "<hr>";

//STRING
// ' or "
$day = "Jum'at";
echo $day;
echo "<br>";
echo 'Sandhika: "Halo, Semua!"';
echo "<br>";
// Escape character (\)
echo 'Sandhika: "Halo, Hari jum\'at!"';
echo "<br>";
echo "Sandhika: \"Halo, Hari jum'at!\"";
echo "<br>";
//  interpolasi
// mencetak langsung isi variable
// hanya bisa oleh ""
echo "hallo, nama saya $name1";
echo "<br>";
// kalo pake kutip 1
echo 'hallo, nama saya $name1';
echo "<hr>";

// concat. penggabung string
// .
$nama_depan = "Muhammad";
$nama_belakang = "Jauhari";
echo $nama_depan. " " . $nama_belakang;
echo "<br>";
echo 'MJ: "selamat' . " hari Jum'at\"";
echo "<hr>";

// OPERATOR
// 1.Aritmatika (+,-,x,:), % (modulo/ modulus/ sisa bagi)
echo "hasil dari 1+1 adalah" . 1+1;
echo "<br>";
echo (1+2)*3-4;
echo "<br>"; 
echo 10 % 5;
echo "<br>";
echo 1 + "1"+1;
echo "<hr>";

// perbandingan
// <,>, <=, >=, ==, !=
echo 1 < 5; //true
echo 1 > 5; //false or null
echo "<br>";
echo 1 == 1; //true
echo "<br>";
echo 1 == "1";
echo "<hr>";

// Identitas/ Strict comparison
// ===, !==
echo 1 === "1";
echo  '<hr>';

// incerement.decrement
// tambah / kurang 1
// ++, --
$x = 10;
$x++;
++$x;
$x--;

// jika echo ++$  maka langsung di cetak  dan sebaliknya
echo $x++;
echo "<br>";
echo $x;











?>