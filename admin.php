<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }

  include "config/db.php";
  $nomor = 0;
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
    <a href="add_resto.php" class="btn btn-primary mt-2 mb-3">add New Restoran</a>
    <table class="table table-bordered border-dark">
      <thead class="bg-primary">
        <tr>
          <th>No</th>
          <th>Nama Restoran</th>
          <th>gambar</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($resto = mysqli_fetch_array($tabel_restoran)) { $nomor = $nomor + 1; ?>
        <tr>
          <td class="text-center"> <?php echo $nomor; ?> </td>
          <td>
            <h3><?php echo $resto["nama_restoran"] ?></h3>
          </td>
          <td class="text-center">
            <img src="tmp_upload/<?= $resto["nama_restoran"]; ?>/<?= $resto["nama_file"] ?>" style="width: 150px; height: 150px;">
          </td>
          <td class="text-center">
            <a href="form-edit.php?id=<?= $resto["id"] ?>" class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i></a>
            <a id="delete" href="delete_resto.php?id=<?= $resto["id"] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
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