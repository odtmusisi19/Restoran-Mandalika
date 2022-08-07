  <?php
include "config/db.php";
session_start();

if (isset($_SESSION["login"])) {
  echo "<script>
    window.location.href = 'index.php'
</script>";
  header("Location: admin.php");
  exit;
}


if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connection, "SELECT * FROM tbl_user WHERE username='$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      echo "<script>
    window.location.href = 'admin.php'
</script>";
      exit;
    }
  }
  $error = true;
}


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
    <title>Login</title>
    <style type="text/css">
    .lupa:hover {
        filter: opacity(75%);
    }
    </style>
</head>

<body>
    <div class="container">
        <?php if (isset($error)) { ?>
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password salah!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php } ?>
        <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
            <form action="" method="post" class="border p-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <button style="width: 100%;" type="submit" class="btn btn-primary" name="login">Sign In</button>
                <a href="register.php" style="display: block; color: blue;" class="btn border-primary mt-2 ">Sign Up</a>
                <a style="text-decoration: none;" class="lupa">Forgotten Password?</a>
            </form>
        </div>
    </div>
</body>

</html>