<?php 
  include "config/db.php";

  // $src = "tmp_upload".
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="bs/bootstrap.min.css" />
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bs/style.css" />
    <!-- <link rel="stylesheet" href="assets/css/just-the-docs.css"> -->
    <link rel="stylesheet" href="assets/css/izmir.css">
    <!-- <link rel="stylesheet" href="assets/css/docs.css"> -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/fa-solid.min.css">
    
    <script src="assets/js/vendor/lunr.min.js"></script>
    <script src="assets/js/just-the-docs.js"></script>
    <title>Restoran Sekitar Sirquid Mandalika Mandalika</title>

<style type="text/css">
.fikri-card-img:hover{
  opacity: 0.6;
}
.fikri-card-img:hover + .fikri-card-title{
  transition: all ease-in .3s;
  display: block;
  position: absolute;
  margin-top: -80px;
  cursor: auto;
}
.fikri-card{
  overflow: hidden;
}

  .putar{
    transform: translateY(50px);
  }

  .banner{
    width: 100%;
    height: 400px;
  }
*{
  margin: 0px;
  padding: 0px;
}
.image{
  width: 240px;
  height:240px;
}
.anchor{
  text-decoration: none;
  color: black;
}
.transparan{
  background-color: transparent;
}
.white{
  background-color: white;
}

.bingkai:hover{
  border: 1px solid #1ba0e2;
  transition: 0.6s;
}
body{
  /*font-family:  Arial, Times New Roman, Courier New, sans-serif;*/
  }

</style>


  </head>
  <body class="" style="background-color: #e6eaed;">
    <!-- <img  src="asset/banner.jpg" class="img-fluid banner mt-5" alt="banner"> -->
<nav class="navbar fixed-top  navbar-expand-lg navbar-dark  shadow-lg" style="background-color: #1BA0E2">
  <div class="container">
     <a class="navbar-brand" href="index.php">
      <img src="asset/whitelogo.png" alt="" width="40" height="40">
    </a>
    <a class="navbar-brand" href="index.php">
      <h4 >Restoran Sekitaran Sirquid Mandalika Mandalika </h4>
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
</nav><br>



    <div class="container mt-5">
  <!-- SLIDE -->
  <div class="mt-5 p-1 rounded" style="background-color: white; border-radius: 16px;">
    <div class="slider">
      <div class=" row" style="">
        <img class="col-12 col-md-12 rounded" src="https://media-exp1.licdn.com/dms/image/C561BAQHsmjHnpHgC7Q/company-background_10000/0/1585902045897?e=2147483647&v=beta&t=-mgsrDRqdzeWMozqlmETV6sobAxhWpLn_c6iA4Iyf4U"  />
      </div>
      <div class=" row" style="">
        <img class="col-12 col-md-12 rounded" height="426" src="https://www.aprilia.com/wlassets/aprilia/master/Aprilia_World/Racing/moto-gp-2021/news/01-MotoGP_Race_Qatar_Barwa/MotoGP_Hero_1920x800/original/MotoGP_Hero_1920x800.jpg" />
      </div>
 <!--      <div class="mt-3 p-3 row" style="height: 100">
        <img class="col-12 col-md-6" src="..." />
      </div> -->

    </div>
  </div>

      <div class="col-md-12">
              <div class="row justify-content-center" >
             <div class="">
              <div style="" class="rounded shadow-sm white" >
              <form method="post">
            <!--     <div class="ms-2">
                  <h6>Urutkan hasil Pencairan anda</h6>
                <small class="text-muted">urutkan hasil pencarian anda <br> berdasarkan:</small><br>
                </div> -->
                <div class="row justify-content-center " >
                  <div class="col-md-6">
               <button type="submit" name="open" class="rounded btn btn-primary"  style="background-color: #1ba0e2; width: 100%; color: #ffffff">buka hari ini</button>
               </div>
                    <div class="col-md-6">
               <a href="index.php" class="rounded btn btn-primary"  style="background-color: #1ba0e2; width: 100%; color: #ffffff">jarak</a>
               </div>
               </div>
               </form>
               </div>
             </div>
           </div>
         </div>
      <div class="row justify-content-start">
        <?php if(isset($_POST["open"])) { ?>
          <div class=" col-md-3 ">
        <?php 
          // MENGAMBIL WAKTU DARI SEKARANG
          date_default_timezone_set("Asia/Jakarta");
          $h = intval(date("G")) +1;
          $waktu = date($h.":i:s");
          ///////////////////////////////////
          //MENGAMBIL BUKA SEKARANG ATAU TIDAK
          $coba = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE buka <= '$waktu' AND tutup >= '$waktu' ORDER BY jarak");
          $tes = mysqli_fetch_array($coba);
          $bukas = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE buka <= '$waktu' AND tutup >= '$waktu' ORDER BY jarak");
          
          ///////////////////////////////////////
        ?>
        <?php if ($tes == NULL) {?>
          <div class="text-center">
            <h1 class="text-center">kosong</h1>
          <p>Maaf, tidak ada hasil yang sesuai kriteria pencarian Anda.
Mohon reset filter.</p>

<a href="index.php"><button type="button" class="btn btn-primary">Reset Filter</button></a>
          </div>
      <?php }else{ ?>
        <h6 class="text-center text-primary" style="text-align: center;">Buka hari ini : </h6>
        <?php while($buka = mysqli_fetch_array($bukas)){ ?>
           <a href="info.php?id=<?= $buka["id"] ?>" class=" col-md-3 fikri-card mb-2">
          <div class="">
            <div class="card box" style=" margin:10px ; text-align:center;">
               <figure class="c4-izmir c4-image-zoom-in" tabindex="0" >
                    <img  src="tmp_upload/<?= $buka["nama_restoran"]; ?>/<?= $buka["nama_file"] ?>" class="card-img-center " style="width: 285px; height: 230px; margin: auto;">
                  </figure>
              <p class="card-text" style="margin: 1px auto; font-weight: 800; font-size: 14px;"><?= $buka["nama_restoran"] ?></p><br>
              <p style="color: black; margin: 1px auto; font-size: 10px"><?= $buka["lokasi"] ?></p>
            </div>
          </div>
        </a>         
        <?php } ?>
        <?php } ?>
      <?php }else{ ?>
            <?php while($resto = mysqli_fetch_array($tabel_restoran)) { ?>
  <a href="info.php?id=<?= $resto["id"] ?>" class=" col-md-3 fikri-card mb-2">
          <div class="">
            <div class="card box" style=" margin:10px ; text-align:center;">
               <figure class="c4-izmir c4-image-zoom-in" tabindex="0" >
                    <img  src="tmp_upload/<?= $resto["nama_restoran"]; ?>/<?= $resto["nama_file"] ?>" class="card-img-center " style="width: 285px; height: 230px; margin: auto;">
                  </figure>
              <p class="card-text" style="margin: 1px auto; font-weight: 800; font-size: 14px;"><?= $resto["nama_restoran"] ?></p><br>
              <p style="color: black; margin: 1px auto; font-size: 10px"><?= $resto["lokasi"] ?></p>
            </div>
          </div>
        </a>     
          <?php } ?>
        <?php } ?>
      </div>             
     </div>
      </div>

      <div class="container">
       
       </div>



       <footer class="container text-dark mt-5" style="font-size: 12px; min-height: 100px;">
      <div class="row">
        <div class="col-12 col-md-8" style="padding: 1rem 220px 1rem 1rem;">
          <a href="#">Tentang Aplikasi Restoran Sekitar Mandalika</a>
          <a href="#">Syarat Penggunaan</a>
          <a href="#">Kebijakan Privasi</a>
          <a href="#">Tanya Jawab</a>
          <a href="#">Masukan</a>
          <p>© 2022 App Mandalika dan entitas-entitas terkaitnya. Hak Cipta Dilindungi Undang-Undang. © 2022 Entitas-entitas pemberi lisensi App Mandalika. Hak Cipta Dilindungi Undang-Undang</p>
        </div>
        <div class="col-6 col-md-2 pt-3">
          Terhubung dengan kami
          <div class="d-flex">
            <i style="font-size: 28px;" class="bi bi-facebook me-3"></i>
            <i style="font-size: 28px;" class="bi bi-twitter"></i>
          </div>
        </div>
        <div class="col-6 col-md-2 pt-3">
          Mandalika App <br>
          <i style="font-size: 28px;" class="bi bi-app"></i>
        </div>
      </div>
    </footer>
    <script src="bs/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <!-- <script src="bs/script.js"></script> -->
    <script>
      $(document).ready(function () {
        $(".slider").slick({
          autoplay: true,
          autoplaySpeed: 2500,
          arrows: false
        });
      });
    </script>
  </body>
</html>
