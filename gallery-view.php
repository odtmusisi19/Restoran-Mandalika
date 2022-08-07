<?php 
  // session_start();
  // if(!isset($_SESSION["login"])){
  //   header("Location: login.php");
  //   exit;
  // }

  include "config/db.php";
  $nomor = 0;
  $id = $_GET["id"];

  $tabel_restoran = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  $get_nama = mysqli_fetch_array($tabel_restoran);
  $nama_resto = $get_nama["nama_restoran"];
  $tabel_gallery = mysqli_query($connection, "SELECT * FROM tabel_gallery WHERE nama_restoran= '$nama_resto'");
  $hitung = mysqli_query($connection, "SELECT * FROM tabel_gallery WHERE nama_restoran= '$nama_resto'");

  // $get_nama = mysqli_fetch_array($query);
  // $nama_resto = $get_nama["nama_restoran"];
  // $tanggal = date("Y-m-d");

  // var_dump(mysqli_fetch_array($hitung));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bs/bootstrap.min.css">
  <link rel="stylesheet" href="bs/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Admin Restoran</title>
<style type="text/css">
  .gambar:hover{
    filter: brightness(50%);
  }
.white{
  background-color: white;
}


</style>

</head>
<body style="background-color: #e6eaed;">
  <div class="container mt-3 border white shadow-sm">
    <?php if (mysqli_fetch_array($hitung) == NULL) { ?>
            <div class="text-center" style="margin-top: 300px;">
            <h1 class="text-center">kosong</h1>
          <p>Maaf, tidak tidak ada foto yang di masukan saat ini. <br>Mohon untuk kembali.</p>
<a href="info.php?id=<?= $id; ?>"><button type="button" class="btn btn-primary">Kembali</button></a>
          </div>

    <?php }else{ ?>
    <div class="row justify-content-center " >
     <?php while($gallery = mysqli_fetch_array($tabel_gallery)) { $nomor = $nomor + 1; ?>
      <div class="col-md-3 " style="border: 1px solid silver;">
          <img src="tmp_upload/<?= $nama_resto; ?>/gallery/<?= $gallery["nama_file"] ?>" style="width: 100%; height: 270px;" class="gambar mt-3">
      </div>
          <?php } ?>
      </div>
    <?php } ?>
  </div>
<script>
  $('#delete').on('click', function(e){
    e.preventDefault()
    var self = $(this);
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        location.href = self.attr('href')
      }
    })
  })
</script>
<script src="bs/bootstrap.min.js"></script>
</body>
</html>