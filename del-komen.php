<?php 
  include "config/db.php";
  $id = $_GET["id"];
  $id_rest = $_GET["id_rest"];
  // $gallery = mysqli_query($connection, "SELECT * FROM tabel_gallery WHERE id=$id");
  // $get_gallery = mysqli_fetch_array($gallery);
 
  // $query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id_rest");
  // $get_nama = mysqli_fetch_array($query);
  // $nama_resto = $get_nama["nama_restoran"];
  // // $tanggal = date("Y-m-d");

  $delete_makanan = mysqli_query($connection, "DELETE FROM tabel_komentar WHERE id=$id");
  // $delete_minuman = mysqli_query($connection, "DELETE FROM menu_minuman WHERE id=$id");

  // unlink("tmp_upload/".$nama_resto."/gallery/".$get_gallery["nama_file"]);

  // delete_files('tmp_upload/'.$nama_resto);

/* 
 * php delete function that deals with directories recursively
 */
// function delete_files($target) {
//     if(is_dir($target)){
//         $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        
//         foreach( $files as $file ){
//             delete_files( $file );      
//         }
      
//         rmdir( $target );
//     } elseif(is_file($target)) {
//         unlink( $target );  
//     }
// }

  if($delete){
    echo "
      <script>
        alert('Data dihapus!');
      </script>
    ";
    header("Location: delete-komentar.php?id=$id_rest");
    exit;
  }else{
    echo "
      <script>
        alert('Data gagal dihapus!');
      </script>
    ";
    header("Location: delete-komentar.php?id=$id_rest");
    exit;
  }
?>