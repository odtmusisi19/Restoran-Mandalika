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
  $menu_makanan = mysqli_query($connection, "SELECT * FROM menu_makanan WHERE nama_restoran= '$nama_resto'");
  $menu_minuman = mysqli_query($connection, "SELECT * FROM menu_minuman WHERE nama_restoran= '$nama_resto'");


  // $cule = mysqli_fetch_array($menu_makanan);
  // var_dump($cule);
  // $get_nama = mysqli_fetch_array($query);
  // $nama_resto = $get_nama["nama_restoran"];
  // $tanggal = date("Y-m-d");


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
  <title> Menu <?= $nama_resto; ?></title>
</head>
<body style="background-color: #e6eaed;">
  <div class="container mt-3">
    <div class="row justify-content-center">
     <div class="col-6">
<!-- ================================MAKANAN============================= -->
      <h2>MAKANAN</h2>
    <table class="table table-bordered border-dark">
      <thead class="bg-primary">
        <tr>
          <th>Nama Menu</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php while($makan = mysqli_fetch_array($menu_makanan)) { $nomor = $nomor + 1; ?>
        <tr>
          <td><?= $makan["nama_menu"] ?> </td>
          <td><?= $makan["harga"] ?> </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<!-- ================================MINUMAN=========================== -->
     <div class="col-6">
      <h2>MINUMAN</h2>
    <table class="table table-bordered border-dark">
      <thead class="bg-primary">
        <tr>
          <th>Nama Menu</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php while($minum = mysqli_fetch_array($menu_minuman)) { $nomor = $nomor + 1; ?>
        <tr>
          <td><?= $minum["nama_menu"] ?> </td>
          <td><?= $minum["harga"] ?> </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  </div>
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