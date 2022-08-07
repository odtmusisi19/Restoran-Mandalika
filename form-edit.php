<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }


  include "config/db.php";
  $id = $_GET["id"];
  // $delete = mysqli_query($connection, "DELETE FROM tabel_restoran WHERE id=$id");



  
  // if(isset($_POST["add_resto"])){
  //   $nama_resto     = $_POST["nama_resto"];
  //   $link          = $_POST["link"];
  //   $jarak    = $_POST["jarak"];

  //   $buka    = $_POST["buka"];
  //   $tutup    = $_POST["tutup"];

  //    $image_name    = $_FILES["image"]["name"];
  //    $image_tmp     = $_FILES["image"]["tmp_name"];

  //   $folder_resto = mkdir("tmp_upload/".$nama_resto);
  //   $gallery = mkdir("tmp_upload/".$nama_resto."/gallery");



  //   $folder = "tmp_upload/".$nama_resto."/";
    
  //   $insert = mysqli_query($connection, "INSERT INTO tabel_restoran VALUES(NULL, '$nama_resto', '$image_name', '$link', '$buka', '$tutup','$jarak') ");
  //   // var_dump($insert);

  //   move_uploaded_file($image_tmp, $folder.$image_name);

  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bs/bootstrap.min.css" />
    <link rel="stylesheet" href="bs/style.css" />
    <title>Add Restoran</title>
  </head>
  <body>
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-md-4 me-3" >
          <div class="row justify-content-between">
            <div class="col-md-6 mb-3">
            <a href="tambahkan-menu.php?id=<?=$id ?>&nama=addmakanan" class="btn btn-primary">Add Makanan</a>
            </div>
            <div class="col-md-6">
            <a href="tambahkan-menu.php?id=<?=$id ?>&nama=addminuman" class="btn btn-primary">Add Minuman</a>
            </div>
          </div>
          <div class="row mt-3">
            <a class="btn btn-primary" href="delete-menu.php?id=<?= $id ?>"> Hapus Menu</a>
          </div>
          <div class="row mt-3">
            <a class="btn btn-primary" href="delete-komentar.php?id=<?= $id ?>"> Delete Komentar</a>
          </div>
        </div>
        <div class=" col-md-4 mt-3">
          <div class="row">
            <a class="btn btn-primary" href="add_foto_gallery.php?id=<?= $id ?>">Tambahkan foto Gallery</a>
          </div>
          <div class="row mt-3">
            <a class="btn btn-primary" href="delete_foto_gallery.php?id=<?= $id ?>"> Hapus foto gallery</a>
          </div>
        </div>
      </div>
      </div>
    <script src="bs/bootstrap.min.js"></script>
  </body>
</html>
