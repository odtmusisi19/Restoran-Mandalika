<?php
  session_start();
  if(isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  include('config/db.php');

  if(isset($_POST['register'])){
    $username   = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email      = $_POST["email"];
    $password   = password_hash($_POST["password1"], PASSWORD_DEFAULT);
    
    $result = mysqli_query($connection, "SELECT username FROM tbl_user WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
      echo("
      <script>
        alert('Username yang dipilih sudah ada!');
        document.location.href = 'register.php';
      </script>
     ");
    }else{
      if ($_POST['password1']!= $_POST['password2']){
        echo("
         <script>
           alert('Password tidak sama!');
           document.location.href = 'register.php';
         </script>
        ");
       }
   
   
       $insert = mysqli_query($connection, "INSERT INTO tbl_user VALUES(NULL, '$username', '$email','$password')");
       if($insert){
         echo "
           <script>
             alert('Berhasil registrasi!');
             document.location.href = 'login.php';
           </script>
         ";
       }else{
         echo "
           <script>
             alert('Gagal!);
             document.location.href = 'register.php';
           </script>
         ";
       }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bs/bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    body{
      font-family: 'Montserrat', sans-serif;
    }
  </style>
  <title>site | home</title>
</head>
<body>
  <h3 class="text-center">register</h3>
  <div class="d-flex justify-content-center">
    <form action="" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input required="" type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required="" type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password1" class="form-label">Password</label>
        <input required="" type="password" name="password1" id="password1" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label">Konfirmasi Password</label>
        <input required="" type="password" name="password2" id="password2" class="form-control">
      </div>
      <div>
        <button type="submit" name="register" class="btn btn-primary">
          Register
        </button>
        <a href="login.php" class="btn btn-success">Sudah punya akun</a>
      </div>
    </form>
  </div>
  <script src="./bs/js/bootstrap.min.js"></script>
</body>
</html>