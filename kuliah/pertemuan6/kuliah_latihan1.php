<?php

// array associative
// array yang indexnya berupa string, yang berasosiai(berpasangan) dengan nilainya
    $mahasiswa = [
    "satu" =>  [
        "nama" => "Jauhari",
        "NPM" => "213040060", 
        "email" => "kasfjal@gmail.com",
        "jurusan" => "Teknik Informatika"],
    "dua" => [
        "nama" => "abdul",
        "NPM" => "213030400",
        "email" => "dodoasf@fmail.com", 
        "jurusan" => "TIF"],
    "tiga" => [
        "nama" => "daffa",
        "NPM" => "213040038",
        "email" => "daffa@gmail.com",
        "jurusan" => "Teknik Informatika"]
    ];

// var_dump($mahasiswa["tiga"]["jurusan"]);


?>

<?php foreach($mahasiswa as $mhsw)

{ ?>
<ul>
    <li>Nama : <?php echo $mhsw ["nama"] ?></li>
    <li>NPM : <?php echo $mhsw ["NPM"]?></li>
    <li>Email : <?php echo $mhsw ["email"]?></li>
    <li>Jurusan : <?php echo $mhsw ["jurusan"]?></li>
    
</ul>

<?php } ?>

<?= $; ?>