`<?php

  // cek cookie

  require 'functions.php';


  $conn2  = koneksi_login();

  if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    //echo $email."<br>".$password;

    $result = mysqli_query($conn2, "SELECT * FROM tb_user WHERE 
          email ='$email'");



    // cek email
    // echo "ada".mysqli_num_rows($result)."itu";
    if (mysqli_num_rows($result) == 1) {

      // cek pass
      $row = mysqli_fetch_assoc($result);
      //echo $row['email'];
      echo $row['password'];
      //echo $row['otorisasi'];
      // $password3 = password_hash($password, PASSWORD_DEFAULT);

      //echo " - " . $password3;

      if (password_verify($password, $row["password"])) {
        session_start();
        $_SESSION["otorisasi"] = $row['otorisasi'];
        $_SESSION["email"] = $row['email'];


        // cek remember me
        if (isset($_POST['remember'])) {
          // buat cookie
          setcookie('no', $row['id'], time() + 60);
          setcookie('key', hash('sha256', $row['email']));
        }

        header("Location: halaman.php");
        exit;
      } else {
        header('location:login.php?pesan=password/username salah');
      }
    }





    $error = true;
  }


  ?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Signin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <!-- form -->
  <main class="form-signin justify-content-center">
    <form method="POST" action="">
      <img class="img" src="./profile/TechNoLogic (3).png" alt="" width="250" height="250">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <!-- pengendalian & allert login salah -->
      <?php
      if (isset($_GET['pesan'])) {
      ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg>
          <div>
            <?php
            echo $_GET['pesan']; ?>


          </div>

        </div>
      <?php } ?>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>



      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember" value="remember-me"> Remember me
        </label>
      </div>

      <div class="daftar">
        <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
      </div>
      <button class="w-100 btn btn-lg btn-success" name="submit" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy;MJ 2022 </p>


    </form>
  </main>



</body>

</html>`