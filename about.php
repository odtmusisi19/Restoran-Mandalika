<?php 
    // session_start();
include "config/db.php";

 ?>

<!DOCTYPE html>
<html>

<head>
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/title.png" type="image/x-icon">
    <title>About</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CDN -->
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <style>
        .latar{
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
}
.white{
    background-color: white;
}

@media screen and (max-width: 766px) {
  .mobile{
    margin-left: 70px;

  }
}
.navbar-light .navbar-toggler-icon {
  background-image: url("https://png.pngtree.com/element_our/20190530/ourmid/pngtree-correct-icon-image_1267804.jpg");
}
// this is a white icon with 50% opacity
.navbar-dark .navbar-toggler-icon {
  background-image: url("https://png.pngtree.com/element_our/20190530/ourmid/pngtree-correct-icon-image_1267804.jpg");
}
        body {
            background: #e8cbc0;
            background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
            background: linear-gradient(to right, #e8cbc0, #636fa4);
            min-height: 100vh;
        }

        .gambar:hover {
            opacity: 90%;
        }

        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }
    </style>

</head>

<body>
  <nav class="navbar fixed-top  navbar-expand-lg navbar-dark  shadow-lg" style="background-color: #1BA0E2">
  <div class="container">
     <a class="navbar-brand" href="index.php">
      <img src="asset/whitelogo.png" alt="" width="40" height="40">
    </a>
    <a class="navbar-brand" href="index.php">
      <h4 >Restoran Mandalika </h4>
    </a>
    <!-- <a class="navbar-brand" href="index.php">Mandalika</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- For demo purpose -->
    <div class="container py-5 mt-5">
        <div class="row text-center text-white">
            <div class="col-lg-8 mx-auto" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="500">
                <h4 class="display-7">Tujuan</h4>
                <small >Tujuan dari aplikasi ini adalah Memudahkan dalam menyajikan informasi restoran atau cafe di sekitar sirquid mandalika, seperti Lokasi, Jarak, Rute dan  harga Menu makanan dan minuman pada sebuah restoran.</small>
                <br>


                <!-- <h1 class="display-4">Team Page</h1>
                <p class="lead mb-0">Using Bootstrap 4 grid and utilities, create a nice team page.</p>
                <p class="lead">Snippet by<a href="https://bootstrapious.com/snippets" class="text-white">
                        <u>Bootstrapious</u></a>
                </p> -->
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row text-center justify-content-center">
                <h4 class="display-7 text-white" data-aos="flip-right" data-aos-duration="1300" data-aos-delay="500">Developer</h4>


            <!-- Team item -->
            <div class="col-xl-2  col-sm-6 mb-5"  data-aos="flip-right" data-aos-duration="1300" data-aos-delay="500">
                <!-- <h1>Y</h1> -->
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/ogi.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Ogi Darma Tena</h5><!-- <span class="small text-uppercase text-muted">Designer</span> -->
                    <p class="text-muted" style="font-size: 10px">1901010101</p>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-instagram"></i></a></li>
                        
                    </ul>
                </div>
            </div><!-- End -->

   <!-- Team item -->
            <div class="col-xl-2  col-sm-6 mb-5"  data-aos="flip-right" data-aos-duration="1300" data-aos-delay="1000">
                <!-- <h1>Y</h1> -->
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/fatur.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0"> Fathur Rizqi</h5><!-- <span class="small text-uppercase text-muted">Designer</span> -->
                    <p class="text-muted" style="font-size: 10px">1901010101</p>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="bi bi-instagram"></i></a></li>
                        
                    </ul>
                </div>
            </div><!-- End -->
         
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>