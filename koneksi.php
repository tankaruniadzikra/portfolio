<?php
 
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "portofolio";

 //membuat koneksi
 $conn = new mysqli($servername, $username, $password, $dbname);

 //pengecekan
 if($conn->connect_error){
    die("Koneksi gagal:". $conn->connect_error);
 }

//  echo "Koneksi berhasil";

?>