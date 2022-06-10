<?php


function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "spek") or die("KONEKSI GAGAL!!");
  return $conn;
}

function koneksi_login()
{
  $conn_login = mysqli_connect("localhost", "root", "", "login") or die("KONEKSI GAGAL!!");
  return $conn_login;
}

function query2($query2)
{
  $conn_login = koneksi_login();
  $result2 = mysqli_query($conn_login, $query2);
  $rows3 = [];
  // looping agar yang ditampilkan semua
  while ($row2 = mysqli_fetch_assoc($result2)) {
    $rows3[] = $row2;
  }
  return $rows3;
}

function query_login($query)
{

  $conn_login = koneksi_login();
  $result = mysqli_query($conn_login, $query) or die(mysqli_error($conn_login));

  // Siapkan data mahasiswa
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  // Siapkan data mahasiswa
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $kode_barang = htmlspecialchars($data["kode_barang"]);
  $nama = htmlspecialchars($data["nama"]);
  $spesifikasi = htmlspecialchars($data["spesifikasi"]);
  $harga = htmlspecialchars($data["harga"]);
  if ($_FILES["inventory"]["error"] === 4) {
    // pilih gambar default
    $gambar = 'default.png';
  } else {
    // jalankan fungsi upload
    $gambar = upload();
    // cek jika upload gagal
    if (!$gambar) {
      return false;
    }
  }





  $query = "INSERT INTO mahasiswa VALUES (null, '$kode_barang', '$nama', '$spesifikasi', '$harga', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function kontak($kontak)
{
  $koneksi_kon = koneksi_login();

  $name_kon = $kontak["name_kon"];
  $no_cell = $kontak["no_cell"];
  $email_kon = $kontak["email_kon"];
  $message = $kontak["message"];

  // query insert data
  $query_kon = "INSERT INTO contact VALUES ('$name_kon', '$no_cell', '$email_kon', '$message')";

  mysqli_query($koneksi_kon, $query_kon);

  return mysqli_affected_rows($koneksi_kon);
}


function upload()
{
  $namafile = $_FILES['inventory']['name'];
  $ukuranfile = $_FILES['inventory']['size'];
  $error = $_FILES['inventory']['error'];
  $tmpname = $_FILES['inventory']['tmp_name'];

  // cek apakah tidak ada gambar yang di upload
  if ($error === 4) {
    echo "<script>
          alert('pilih gambar terlebih dahulu!');
        </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
  $ekstensigambar = explode('.', $namafile);
  $ekstensigambar = strtolower(end($ekstensigambar));
  if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
    echo "<script>
                alert('yang anda upload bukan gambar');
                  </script>";
    return false;
  }

  // cek jika ukuran gambar terlalu besar
  if ($ukuranfile > 20000000) {

    echo "<script>
          alert('ukuran gambar terlalu besar!');
        </script>";
    return false;
  }

  // generate nama  gambar baru
  $namafilebaru = uniqid();
  $namafilebaru .= '.';
  $namafilebaru .= $ekstensigambar;

  // lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpname, './inventory/' . $namafilebaru);

  return $namafilebaru;
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $kode_barang = htmlspecialchars($data["kode_barang"]);
  $nama = htmlspecialchars($data["nama"]);
  $spesifikasi = htmlspecialchars($data["spesifikasi"]);
  $harga = htmlspecialchars($data["harga"]);
  $gambarlama = htmlspecialchars($data["gambarlama"]);

  // cek apakah usel pilih gambar baru atau tidak
  if ($_FILES['inventory']['error'] === 4) {
    $gambar = $gambarlama;
  } else {
    $gambar = upload();
  }



  $query = "UPDATE mahasiswa SET
            kode_barang = '$kode_barang',
            nama = '$nama',
            spesifikasi = '$spesifikasi',
            harga = '$harga',
            inventory  = '$gambar'
          WHERE id = $id
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function edit($data)
{
  $conn = koneksi_login();

  $id = $data["id"];
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);
  $username_login = htmlspecialchars($data["username_login"]);
  $npm = htmlspecialchars($data["npm"]);
  $no_tlp = htmlspecialchars($data["no_tlp"]);
  $gambarlama = htmlspecialchars($data["gambarlama"]);


  // cek apakah usel pilih gambar baru atau tidak
  if ($_FILES['inventory']['error'] === 4) {
    $gambar = $gambarlama;
  } else {
    $gambar = upload();
  }



  $query = "UPDATE tb_user SET
            email = '$email',
            password = '$password',
            username_login = '$username_login',
            npm = '$npm',
            no_tlp  = '$no_tlp'
          WHERE id = $id
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}



function daftar($data)
{
  global $conn_login;

  $conn_login = koneksi_login();

  $email = strtolower(stripslashes($data["email"]));
  $password = mysqli_real_escape_string($conn_login, $data["password"]);
  $password2 = mysqli_real_escape_string($conn_login, $data["password2"]);


  // cek email sudah ada
  $result = mysqli_query($conn_login, "SELECT email FROM tb_user WHERE email ='$email'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('Email yang dipilih sudah terdaftar!')
          </script>";
    return false;
  }

  // cek konfirmasi password 
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sama');
            </script>";
    return false;
  }

  // enkripsi pass
  $password = password_hash($password2, PASSWORD_DEFAULT);

  // tambahkan user baru ke data base                                                                   
  mysqli_query($conn_login, "INSERT INTO tb_user VALUES( '', '$email', '$password', '2' , './profile/default_profile.png', 'username_login', 'kode_barang', 'no_tlp')");



  return mysqli_affected_rows($conn_login);
}
