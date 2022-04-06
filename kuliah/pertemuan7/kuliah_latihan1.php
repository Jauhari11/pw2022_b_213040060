<?php 
// Materi Pertemuan 7 - Get and Post
// SUPERGLOBALS
// Variable bawaan php yang bisa di akses dimanapun
// Berbentuk array associative
// $_GET
// $_POST
// $_SERVER

// $_GET["nama" => "Jauhari", "email" => "Jauhari@gmail.com"];

// $_GET["nama"] = "Jauhari";
// $_GET["email"] = "Jauhari@gmail.com";

// var_dump($_GET);


?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->
<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Jauhari&nrp=213040060&email=Jauhari@gmail.com">Jauhari</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Daffa&nrp=213040057&email=Daffa@gmail.com">Daffa</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Abdul&nrp=213040051&email=abdul@gmail.com">Abdul</a>
    </li>
</ul>