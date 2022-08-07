<?php 
  include "config/db.php";
  $id = $_GET["id"];
  $query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  $resto = mysqli_fetch_array($query);
  $no = 1;

  // $id = $_GET["id"];
  $tabel_restoran = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  $get_nama = mysqli_fetch_array($tabel_restoran);
  $nama_resto = $get_nama["nama_restoran"];
  $allfoto = mysqli_query($connection, "SELECT count(*) FROM tabel_gallery WHERE nama_restoran= '$nama_resto'");
  $foto = mysqli_fetch_array($allfoto);
  // $jumlah = count($foto);
  // $all_komen = mysqli_query($connection, "select count(*) from tabel_komentar ");

  $tabel_gallery = mysqli_query($connection, "SELECT * FROM tabel_gallery WHERE nama_restoran= '$nama_resto' ORDER BY id");


  $menu_makanan = mysqli_query($connection, "SELECT * FROM menu_makanan WHERE nama_restoran= '$nama_resto'");
  $menu_minuman = mysqli_query($connection, "SELECT * FROM menu_minuman WHERE nama_restoran= '$nama_resto'");


  // KOMENTAR
  if(isset($_POST["post_komentar"])){
    $komentar       = $_POST["komentar"];
    $username      = $_POST["username"];
    $email      = $_POST["email"];

    // if (strlen($username > 5)) {
    //   echo "<script>
    //       alert('USERNAME TERLALU PANJANG!!!/ \n Minimal Menggunakan Lima huruf');
    //     </script>";
    // }else{
    mysqli_query($connection, "INSERT INTO tabel_komentar VALUES(NULL, '$nama_resto', '$username', '$email', '$komentar')");

    // }

  }
  //show komentar
  $getkomen = mysqli_query($connection, "SELECT * FROM tabel_komentar WHERE nama_restoran= '$nama_resto'");
  $all_komen = mysqli_query($connection, "select count(*) from tabel_komentar where nama_restoran= '$nama_resto'");
  $banyak = mysqli_fetch_array($all_komen);

   if ($banyak == NULL) {
     $all = 0;
   }else{
    $all = $banyak[0];
   }
  
// echo($banyak[0]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bs/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- CARAUSEL================= -->
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="carausel/assets/css/animate.css">
        <!-- <link rel="stylesheet" href="carausel/assets/css/style.css"> -->
        <link rel="stylesheet" href="carausel/assets/css/media-queries.css">
        <link rel="stylesheet" href="carausel/assets/css/carousel.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="carausel/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="carausel/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="carausel/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="carausel/assets/ico/apple-touch-icon-57-precomposed.png">
<!-- ================== -->
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
    <link rel="stylesheet" href="assets/css/izmir.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/fa-solid.min.css">
    <!--  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    
    <script src="assets/js/vendor/lunr.min.js"></script>
    <script src="assets/js/just-the-docs.js"></script>
  <title>info <?= $resto["nama_restoran"]; ?></title>
  <style type="text/css">
    .reso{
      width: 100%;
      height: 240px;
      text-decoration: none;
     border: 1px solid #1ba0e2;
     padding: 0px;
     margin:0px;

    }
    .komen:hover{
      filter: brightness(90%);
    }
    .reso:hover{
      filter: brightness(90%);
    }
    .white{
      background-color: white;
    }
    .kiri{
      border-left: 1px solid silver;
    }
    .tinggi{
      height: 300px;
      width: 100%;
    }
    .isi:hover{
      box-shadow:   0px   0px 2px #1ba0e2;
    }
    .thumb{
      width: 270px;
      height: 270px;
      border-radius: 16px;
      box-shadow:   0px   0px 4px black;
    }
    .thumb:hover{
        box-shadow:   0px   0px 4px #1ba0e2;
    }
    .mar{
      transform: translateY(-50px);
      
    }
    .line{
      font-size: 13px;
    }
  </style>
</head>
<body style="background-color: #e6eaed;">
  <nav class="navbar fixed-top  navbar-expand-lg navbar-dark  shadow-lg" style="background-color: #1BA0E2">
  <div class="container">
     <a class="" href="index.php">
      <img src="asset/whitelogo.png" alt="" width="40" height="40">
    </a>
      <h4 style="color: #ffffff">Restoran Mandalika </h4>
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
          <a class="nav-link" href="#project">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>
  <div class="container mt-3 ">
    <div class="row">
      <div class="col-12 col-md-12" style="margin-top: 20px;">
        <div class="row justify-content-center">
          <div class="col-12 col-md-3">
            <img src="tmp_upload/<?= $resto["nama_restoran"]; ?>/<?= $resto["nama_file"] ?>" class="thumb" style="margin:2px auto;">
          </div>
          <div class="col-12 col-md-9">
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Nama</th>
                    <td>:</td>
                    <td><?= $resto["nama_restoran"]; ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Lokasi</th>
                    <td>:</td>
                    <td><?= $resto["lokasi"] ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Buka</th>
                    <td>:</td>      
                    <td colspan="2"></i> buka dari jam <?= $resto["buka"] ?> - <?= $resto["tutup"] ?></td>
                  </tr>
                  <tr>
                    <th>Jarak</th>
                    <td>:</td>
                    <td><?= $resto["jarak"]; ?> dari Sirquid Mandalika</td>
                  </tr>
                    <tr>
                    <th>Deskripsi</th>
                    <td>:</td>
                    <td><?= $resto["deskripsi"] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
        <div class="row">
        <div class="garis mt-3" style="width: 99.4%; height: 5px; background-color: #B4B9BD; margin-left: 18px; border-radius: 30px;"></div>
        </div>
        <div class="row justify-content-start">
          <div class="col-6 col-md-6">
            <a href="<?= $resto["link"] ?>" class="mt-3 ms-4 text-reset line"> <i class="bi bi-geo-alt-fill"></i><?= $resto["lokasi"] ?></a>
            </div>
            <div class="col-2 kiri">
              <a href="" class="mt-3 ms-4 text-reset line" > <i class="bi bi-laptop"></i> situs web</a>
              </div>
              <div class="col-2 kiri">
            <a href="" class="mt-3 ms-4 text-reset line" > <i class="bi bi-telephone-outbound-fill"></i> Nomor</a>
            </div>
        </div>    
    </div>
  
   <div class="row justify-content-center" data-aos="fade-left" >
    <div class="col" >
            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="background-color: #e6eaed;">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">            
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
              <img src="asset/logo.png" class="reso">
            </div>
                   <?php while($gallery = mysqli_fetch_array($tabel_gallery)) { $no = $no + 1;  ?>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="tmp_upload/<?= $nama_resto; ?>/gallery/<?= $gallery["nama_file"] ?>" class="img-fluid mx-auto d-block reso  shadow-lg" >
            </div>
                     <?php } ?>
              </div>
              <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color: blue;">Next</span>
          </a>
            </div>
              <a href="gallery-view.php?id=<?= $id ?>" class="mt-3 ms-4 text-reset"><i class="bi bi-camera"></i>  Semua Foto (<?= $foto[0]; ?>)</a>
            </div>
            </div>
        
        <div class="row mt-5 justify-content-between">
          <div class="col-md-4 mt-3 isi" data-aos="fade-right">
            <div class="white shadow-sm tinggi ">
              <p class="fw-bold tulis ms-2">Rincian</p>
              <p class="fw-normal tulis ms-2">Masakan</p>
              <p class="fw-light tulis ms-2">Indonesia, Asia</p>
              <p class="fw-normal tulis ms-2">Makanan</p>
              <p class="fw-light tulis ms-2">Sarapan, Makan Siang, Makan Malam</p>
            </div>
          </div>
          <div class="col-md-4 mt-3 isi">
              <div class="white shadow-sm tinggi" data-aos="fade-up">
              <p class="fw-bold tulis ms-2">Lokasi dan Kontak</p>
              <a href="<?= $resto["link"] ?>">
              <img src="asset/lok.png" style="max-width: 90%; margin: 0px 20px;" ></a>
              <div class="row">
              <a href="<?= $resto["link"] ?>"  class="mt-5 ms-4 text-reset " style="transform: translateY(-45px); font-size: 12px" > <i class="bi bi-geo-alt-fill"></i> <?= $resto["lokasi"] ?></a>
              <a href="" class="mt-5 ms-4 text-reset " style="transform: translateY(-95px)" ><i class="bi bi-laptop"></i> situs web</a>
              <a href="" class="mt-5 ms-4 text-reset " style="transform: translateY(-145px)" ><i class="bi bi-telephone-outbound-fill"></i> Nomor</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3 isi" data-aos="fade-left">
              <div class="white shadow-sm tinggi">
              <p class="fw-bold tulis ms-2">menu makanan</p>
              <a href="menu-view.php?id=<?= $id ?>">
              <img src="asset/map1.jpg" style="max-width: 90%; margin: 0px 20px;" ></a>
              <div class="dropdown ms-4 mt-3">
                <button class="rounded dropdown-toggle border border-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent; padding: 5px 10px; width: 130px">
                  Makanan
                </button>
                <a href="menu-view.php?id=<?= $id ?>">
                <button type="button" class="rounded border border-primary bg-primary" style="background-color: transparent; padding: 5px 10px; width: 150px">View all Menu</button></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <?php while($makan = mysqli_fetch_array($menu_makanan)) {  ?>
                  <li><a class="dropdown-item" href="#">
                    <div class="row">
                      <div class="col-6"><?= $makan["nama_menu"] ?></div>
                      <div class="col-6" style="">| Rp <?= $makan["harga"] ?></div>
                    </div>
                  </a></li>
                <?php } ?>
                </ul>
              </div>
                <div class="dropdown ms-4 mt-3">
                <button class="rounded dropdown-toggle border border-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent; padding: 5px 10px; width: 130px">
                  Minuman
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <?php while($minum = mysqli_fetch_array($menu_minuman)) {  ?>
                  <li><a class="dropdown-item" href="#">
                    <div class="row">
                      <div class="col-6"><?= $minum["nama_menu"] ?></div>
                      <div class="col-6" style="">| Rp <?= $minum["harga"] ?></div>
                    </div>
                  </a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>          
        </div>
        <div class="row mt-5" data-aos="fade-down">
          <div class="col">
              <p class="h2">Komentar</p>
              <hr>
          </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row mt-3" data-aos="fade-left">
          <div class="col-7">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-chat-left-text-fill"></i></span>
                <input required="" name="komentar" onclick="komen()" style="height: 60px;" type="text" class="form-control" placeholder="Komentar" aria-label="Komentar" aria-describedby="basic-addon1">
              </div>
          </div>     
        </div>
        <div class="row mt-0" style="visibility: hidden;" id="komen">
             <div class="col-md-3">
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input id="username" required="" name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              </div>
              <div class="col-md-3">
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                <input required="" name="email" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
              </div>
              </div>
              <div class="col-2">
                <button type="submit" name="post_komentar" class="btn btn-primary">Post</button>
              </div>
               </form>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col">
            <h6>Komentar (<?= $all ?>)</h6>
            <hr>
            </div>
            </div>
            
            <?php while($komen = mysqli_fetch_array($getkomen)){ ?>
              <div class="row mt-4 border komen" data-aos="fade-up">
                <table class="table table-bordered">
                  <tbody style="text-align: center;">
                    <tr>
                      <td> <i class="bi bi-person" style="font-size: 50px; color: #1ba0e2; margin: 0px;"></i><h3><?= $komen["username"]; ?></h3></td>
                    <!-- <th></th> -->
                    <td style="text-align:left;"><?= $komen["komentar"] ?></td>
                      
                    </tr>
                  </tbody>
                </table>
    <!--         <div class="col-2">
              <div class="row justify-content-center  border">
                  <h6 style="transform: translateY(17px); font-weight: bold; "></h6>
              </div>
            </div> -->
         <!--    <div class="col"><p class="mt-2"><?= $komen["komentar"] ?></p>
              </div> -->
              </div>
            <?php } ?>
        </div>
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

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>

    AOS.init();

    function komen() {
      var komen = document.getElementById('komen');
      komen.style.visibility = "visible";
    }


  </script>
        <script src="carausel/assets/js/jquery-3.3.1.min.js"></script>
        <script src="carausel/assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="carausel/assets/js/jquery.backstretch.min.js"></script>
        <script src="carausel/assets/js/wow.min.js"></script>
        <script src="carausel/assets/js/scripts.js"></script>
        <!-- <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script> -->
        <script src="https://cdn.plyr.io/3.6.3/demo.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="bs/bootstrap.min.js"></script>

        <!-- <script>
          alert('USERNAME TERLALU PANJANG!!!');
        </script> -->
</body>
</html>