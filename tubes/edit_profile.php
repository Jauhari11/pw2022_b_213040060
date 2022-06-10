<?php
session_start();
require 'functions.php';




// nampilin gambar
$inven = koneksi_login();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
} else {
  $email = 0;
}

$inven5 = mysqli_query($inven, "SELECT * FROM tb_user WHERE 
email ='$email'");

$inven4 = mysqli_fetch_assoc($inven5);
// akhir nampilin gambar

// ambil data di url
$id = $_GET["id"];
// QUER DATA PRF
$prf = query2("SELECT * FROM tb_user WHERE id = $id")[0];

// cek apakah tombol edit sudah ditekan?
if (isset($_POST["edit"])) {
  // cek apakah berhasil diubah
  if (edit($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href='halaman_spek.php';
          </script>";
  }
}


?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <?php if (isset($_SESSION['email'])) { ?>

    <div class="container-xl px-4 mt-4">
      <!-- Account page navigation-->
      <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>


        <a href="halaman_spek.php">Kembali ke Daftar TechNoLogic

        </a>
      </nav>
      <hr class="mt-0 mb-4">
      <div class="row">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mb-4 mb-xl-0">
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
              <!-- Profile picture image-->
              <img class="img-account-profile rounded-circle mb-2" src="./profile/<?= $inven4['profile'] ?>" alt="">
              <!-- Profile picture help block-->
              <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
              <!-- Profile picture upload button-->

              <input type="file" placeholder="ubah gambar disini" class="form-control" id="gambar" name="ubah">
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <!-- Account details card-->
          <div class="card mb-4">
            <div class="card-header">Account Details</div>
            <div class="card-body">
              <form>
                <!-- Form Group (username)-->
                <div class="mb-3">
                  <label class="small mb-1" for="inputUsername">Username</label>
                  <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?= $prf["username_login"]; ?>">
                </div>
                <!-- Form Row-->
                <div class="row gx-3 mb-3">

                  <!-- Form Row        -->
                  <div class="row gx-3 mb-3">
                    <!-- Form Group (organization name)-->
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputOrgName">NPM *</label>
                      <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="<?= $prf["npm"]; ?>">
                    </div>
                    <!-- Form Group (location)-->
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputLocation">Phone Number</label>
                      <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="<?= $prf["no_telp"]; ?>">
                    </div>
                  </div>
                  <!-- Form Group (email address)-->
                  <div class="mb-3">
                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?= $prf["email"]; ?>">
                  </div>
                  <!-- Form Row-->
                  <div class="row gx-3 mb-3">
                    <!-- Form Group (phone number)-->
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputPhone">Password *</label>
                      <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?= $prf["password"]; ?>">
                    </div>
                    <!-- Form Group (birthday)-->
                    <div class="col-md-6">
                      <label class="small mb-1" for="inputBirthday">Confirm Password *</label>
                      <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                    </div>
                  </div>
                  <!-- Save changes button-->
                  <button class="btn btn-primary" type="button" name="edit">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <?php } ?>

</body>

</html>