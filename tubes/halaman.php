<!doctype html>
<?php

session_start();

include 'functions.php';

$inven = koneksi_login();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
} else {
  $email = 0;
}

$inven5 = mysqli_query($inven, "SELECT * FROM tb_user WHERE 
email ='$email'");

$inven4 = mysqli_fetch_assoc($inven5);

$profile = query2("SELECT * FROM tb_user");



$login = false;






?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Carousel Template · Bootstrap v5.1</title>

  <link rel="canonical" href="./assets/dist/css/carousel.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/" />
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="./assests/dist/css/headers.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="./assets/dist/css/bootstrap1.min.css" rel="stylesheet" />

  <link href="./assets/dist/css/carousel.css" rel="stylesheet">







  <style>
    .carousel-item {
      position: relative;
      background-position: center;
      background-size: cover;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1), inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;

      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }



    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>





</head>

<body>
  <!-- custom header -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>

  </svg>


  <!-- header ketika belom login -->
  <?php if ($login == false) { ?>

    <header class="p-3 bg-dark   ">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

            <img src="./profile/TechNoLogic (4).png" width="40" height="40" alt="">

          </a>

          <ul class=" nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./halaman.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="./halaman_spek.php" class="nav-link px-2 text-white">Gallery</a></li>
            <li><a href="./contact.php" class="nav-link px-2 text-white">About</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control text-white bg-dark" placeholder="Search..." aria-label="Search">
          </form>

          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2 bg-dark text-white" name="login" onclick="window.location.href='./login.php'">Login</button>
            <button type="button" class="btn btn-warning" name="daftar" onclick="window.location.href='./daftar.php'">Sign-up</button>
            </form>
          </div>
        </div>
      </div>
    </header>
  <?php } ?>

  <!-- header ketika sudah login -->

  <?php if (isset($_SESSION['email'])) { ?>
    <header class="p-3  bg-dark shadow-lg fixed-top">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="./profile/TechNoLogic (4).png" width="40" height="40" alt="">
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./halaman.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="./halaman_spek.php" class="nav-link px-2 text-white">Gallery</a></li>
            <li><a href="./contact.php" class="nav-link px-2 text-white">About</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control bg-dark text-white" placeholder="Search..." aria-label="Search" />
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

              <img src="./profile/<?= $inven4['profile'] ?>" class="rounded-circle" alt="mdo" width="35" height="35" class="rounded-circle" />
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

              <li><a class="dropdown-item" href="./edit_profile.php">Profile</a></li>
              <li><a class="dropdown-item" href="./edit_profile.php">Edit</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  <?php } ?>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- gambar item slide 1 -->
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image:url(./inventory/oppo.jpg);">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <!-- gambar item slide 2 -->
        <div class="carousel-item" style="background-image:url(./inventory/motor.jpg);">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <!-- gambar item slide 2 -->
        <div class="carousel-item" style="background-image:url(./inventory/macbook.jpg);">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="./halaman_spek.php">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

          <img src="./inventory/macb.jpg" class="rounded-circle" alt="..." width="150" height="150">

          <h2>Macbook</h2>
          <p>Apple introduced two new laptops at WWDC 2022 through the MacBook Air 2022 and the MacBook Pro 13-inch 2022. Both laptops are equipped with the latest Apple M2 processor.</p>
          <p><a class="btn btn-secondary" href="https://www.apple.com/macbook-air-m2/">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <img src="./inventory/Asus ROG Strix Scar 15.JPG" class="rounded-circle" alt="..." width="150" height="150">

          <h2>ROG Strix scar</h2>
          <p>World best performance gaming laptop with intelligent cooling system</p>
          <p><a class="btn btn-secondary" href="https://rog.asus.com/id/laptops/rog-strix/rog-strix-scar-15-2022-series/">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="./inventory/legion.jpg" class="rounded-circle" alt="..." width="150" height="150">

          <h2>ROG Phone</h2>
          <p>A new era of mobile gaming has dawned. An era where you take full control, where every sense is heightened, where every sinew is ready for the fray. With pure ROG gaming DNA at its core, ROG Phone breaks every rule to go where rivals fear to tread..</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7" style="margin-top: -100px;">
          <h2 class="featurette-heading">macbook air M2 <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Apple introduced two new laptops at WWDC 2022 through the MacBook Air 2022 with M2 chipset</p>
          <button onclick="window.location.href='https://www.macrumors.com/roundup/macbook-air/'">VIEW</button>
        </div>
        <div class="col-md-5 ">

          <img src="./inventory/macbookm2.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2" style=" margin-top: -100px;">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for the best Gaming phone
              .</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          <button onclick="window.location.href='https://www.techradar.com/news/about-us#section-affiliate-advertising-disclosure'">VIEW</button>
        </div>
        <div class=" col-md-5 order-md-1">
          <img src="./inventory/gamingphone2.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7" style="margin-top: -100px;">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">TESLA.</span></h2>
          <p class="lead">Tesla, Inc. is an American automotive and energy storage company founded by Martin Eberhard, Marc Tarpenning, JB Straubel and Ian Wright, and based in Palo Alto, California.</p>
          <button onclick="window.location.href='https://www.tesla.com/'">VIEW</button>
        </div>
        <div class="col-md-5">
          <img src="./inventory/tesla-roadster.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>


  <script src="./sassets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/dist/js/bootstrap2.bundle.min.js"></script>
  <script src="./assets/dist/js/script_ajax.js"></script>


</body>

</html>