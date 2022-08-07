<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }

  include "config/db.php";
  $nomor = 0;
  $id = $_GET["id"];

  $tabel_restoran = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  $get_nama = mysqli_fetch_array($tabel_restoran);
  $nama_resto = $get_nama["nama_restoran"];
  $tabel_gallery = mysqli_query($connection, "SELECT * FROM tabel_gallery WHERE nama_restoran= '$nama_resto'");
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
  <title>Admin Restoran</title>
</head>
<body style="background-color: #e6eaed;">

  <div class="container mt-3">
<!--     <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"></a>
      </li>
    </ul> -->
    <!-- <a href="add_resto.php" class="btn btn-warning mt-2 mb-3">add New Restoran</a> -->
    <div class="row justify-content-center">
      <div class="col-8">
    <table class="table table-bordered">
      <thead>
        <tr>
          <!-- <th>No</th> -->
          <th>gambar</th>
          <th>Nama File</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($gallery = mysqli_fetch_array($tabel_gallery)) { $nomor = $nomor + 1; ?>
        <tr>
          <!-- <td> <?php echo $nomor; ?> </td> -->
          <td>
            <img src="tmp_upload/<?= $nama_resto; ?>/gallery/<?= $gallery["nama_file"] ?>" style="width: 150px; height: 150px;">           
          </td>
          <td>
            <h3><?= $gallery["nama_file"] ?></h3>
          </td>
          <td>
            <a id="delete" href="delete-gallery.php?id=<?= $gallery["id"] ?>&id_rest=<?= $id ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
          </td>
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