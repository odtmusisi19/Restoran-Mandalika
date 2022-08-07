<?php
  // $TMP_FOLDER_URL = "http://localhost/tmp_upload/";
  // $TMP_FOLDER_URL = "http://9903-182-1-65-67.ngrok.io/tmp_upload/";
  $connection = mysqli_connect('localhost','root','','restoran');
  $tabel_restoran = mysqli_query($connection, "SELECT * FROM tabel_restoran ORDER BY jarak");
  // $banners = mysqli_query($connection, "SELECT * FROM tbl_banner");
  // $video_shows = mysqli_query($connection, "SELECT * From tbl_video WHERE tampilkan=1");
  
    
?>