<?php

require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data Telah Terhapus!');
          document.location.href='halaman_spek.php';
        </script>";
}
