<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  $idback = $_GET["id"];

$getnama = $_GET["nama"];

  include "config/db.php";
  if(isset($_POST["addmakanan"])){
  	$id = $_GET["id"];
  	$query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  	$nama_resto = mysqli_fetch_array($query);
  	$nama = $nama_resto["nama_restoran"];
    $menu     	= $_POST["menu"];
    $harga      = $_POST["harga"];

    $insert = mysqli_query($connection, "INSERT INTO menu_makanan VALUES(NULL, '$nama', '$menu', $harga) ");
        if ($insert) {
    	echo "Berhasil";
    }
  }


  if(isset($_POST["addminuman"])){
  	$id = $_GET["id"];
  	$query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  	$nama_resto = mysqli_fetch_array($query);
  	$nama = $nama_resto["nama_restoran"];
    $menu     	= $_POST["menu"];
    $harga      = $_POST["harga"];

    $insert = mysqli_query($connection, "INSERT INTO menu_minuman VALUES(NULL, '$nama', '$menu', $harga) ");
    if ($insert) {
    	echo "Berhasil";
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
        <div class="row">
          <div class="mb-3 col-12 col-md-6">
            <label for="menu" class="form-label">Nama Menu </label>
            <input type="text" name="menu" id="menu" autofocus required class="form-control" />
          </div>
          <div class="mb-3 col-12 col-md-6">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" required class="form-control" />
          </div>
  
          <button name="<?= $getnama; ?>" type="submit" class="btn btn-primary mb-1">
            Tambahkan
          </button>
          <a href="form-edit.php?id=<?= $idback; ?>"  class="btn btn-warning mb-1">
            Kembali
          </a>

<!--           <button name="add_menu_minuman" type="submit" class="btn btn-primary">
            Add Menu minuman
          </button> -->
        </div>
      </form>
    </div>
    <script src="bs/bootstrap.min.js"></script>
  </body>
</html>
