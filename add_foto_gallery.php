<?php 
// Include the database configuration file 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }

include_once 'dbConfig.php'; 
include "config/db.php";
     
if(isset($_POST['submit'])){ 
	$id = $_GET["id"];
  	$query = mysqli_query($connection, "SELECT * FROM tabel_restoran WHERE id=$id");
  	$get_nama = mysqli_fetch_array($query);
  	$nama_resto = $get_nama["nama_restoran"];
  	$tanggal = date("Y-m-d");

    // File upload configuration 
    $targetDir = "tmp_upload/".$nama_resto."/gallery/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$nama_resto."','".$fileName."', NOW()),";  
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $db->query("INSERT INTO tabel_gallery (nama_restoran, nama_file, tgl_upload) VALUES $insertValuesSQL"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
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
            <label for="image" class="form-label">Upload Gambar</label>
            <input
              type="file"
              name="files[]"
              multiple
              class="form-control"
            />
          </div>
          <button name="submit" type="submit" class="btn btn-primary mb-1">
           Tambahkan
          </button>

        </div>
      </form>
    </div>
    <script src="bs/bootstrap.min.js"></script>
  </body>
</html>

