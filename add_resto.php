<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  include "config/db.php";

  
  if(isset($_POST["add_resto"])){
    $nama_resto     = $_POST["nama_resto"];
    $link           = $_POST["link"];
    $jarak          = $_POST["jarak"];
    $buka           = $_POST["buka"];
    $tutup          = $_POST["tutup"];
    $deskripsi      = $_POST["deskripsi"];
    $lokasi         = $_POST["lokasi"];
    $image_name     = $_FILES["image"]["name"];
    $image_tmp      = $_FILES["image"]["tmp_name"];

    // $folder_resto = 
    $fol = "tmp_upload/".$nama_resto;
      if (!is_dir($fol)) {
                    mkdir("tmp_upload/".$nama_resto);
          $gallery = mkdir("tmp_upload/".$nama_resto."/gallery");
              $folder = "tmp_upload/".$nama_resto."/";

              $insert = mysqli_query($connection, "INSERT INTO tabel_restoran VALUES(NULL, '$nama_resto', '$image_name', '$link', '$buka', '$tutup','$jarak','$deskripsi','$lokasi') ");
                // var_dump($insert);
                move_uploaded_file($image_tmp, $folder.$image_name);
      }else{
            echo "
            <script>
              confirm('Maaf Nama yang anda gunakan sudah ada, Mohon gunakan Nama yang berbeda');
            </script>
          ";
      }

  }
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
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
          <div class="mb-3 col-12 col-md-4">
            <label for="nama_resto" class="form-label">Nama Restoran</label>
            <input type="text" name="nama_resto" id="nama_resto" class="form-control" required />
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" id="link" class="form-control" required />
            <label for="jarak" class="form-label">Jarak</label>
            <input type="text" name="jarak" id="jarak" class="form-control" required />
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>



          </div>
          <div class="mb-3 col-12 col-md-4">
            <label for="buka" class="form-label">buka</label>
            <input type="text" name="buka" id="buka" class="form-control" required />
            <label for="tutup" class="form-label">tutup</label>
            <input type="text" name="tutup" id="tutup" class="form-control" required />
            <label for="lokasi" class="form-label">lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" required />
            <label for="image" class="form-label">Upload Gambar</label>
            <input type="file" name="image" id="image" class="form-control" />
            <button name="add_resto" type="submit" class="btn btn-primary mt-3">
            Tambahkan
          </button>
          </div>
        </div>
      </form>
    </div>
    <script src="bs/bootstrap.min.js"></script>
  </body>
</html>
