<?php
require 'functions.php';
if (isset($_POST['btnDaftar'])) {

  if (daftar($_POST) > 0) {
    echo "<script>
              alert('user baru berhasil ditambahkan');
              document.location.href = 'login.php';

            </script>";
  } else {
    echo mysqli_error($conn);
  }
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

  <main class="form-signin" style="margin-top: 100px;">
    <form method="POST" action="">
      <img class="img" src="./profile/TechNoLogic (3).png" alt="" width="250" height="250">
      <h1 class="h3 mb-3 fw-normal">Register
      </h1>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
        <label for="floatingPassword">Confirm Password</label>
      </div>

      <div class="daftar">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
      </div>




      <button class="w-50 mt-1 btn btn-lg btn-success" name="btnDaftar" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy;MJ 2022 </p>


    </form>
  </main>



</body>

</html>