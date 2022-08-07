<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }



  include "config/db.php";
  $id = $_GET["id"];
  $query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  $get_nama = mysqli_fetch_array($query);
  $nama_resto = $get_nama["nama_restoran"];
  // $tanggal = date("Y-m-d");

  $delete = mysqli_query($connection, "DELETE FROM tabel_restoran WHERE id=$id");
  delete_files('tmp_upload/'.$nama_resto);

/* 
 * php delete function that deals with directories recursively
 */
function delete_files($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        
        foreach( $files as $file ){
            delete_files( $file );      
        }
      
        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
}


  if($delete){
    echo "
      <script>
        alert('Data dihapus!');
      </script>
    ";
    header("Location: admin.php");
    exit;
  }else{
    echo "
      <script>
        alert('Data gagal dihapus!');
      </script>
    ";
    header("Location: admin.php");
    exit;
  }
?>