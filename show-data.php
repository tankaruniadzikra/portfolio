<?php
    include "koneksi.php";

    //inisial variabel
    $ID_Biodata = "";
    $nama = "";
    $role = "";
    $availability = "";
    $usia = 0;
    $lokasi = "";
    $experience = 0;
    $email = "";

    //cek koneksi
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    //query untuk ambil data dari database
    $sql = "SELECT * FROM biodata WHERE ID_Biodata = 1";
    $result = $conn->query($sql);

    //ambil data dari hasil query
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $ID_Biodata = $row["ID_Biodata"];
            $nama = $row["Nama"];
            $role = $row["Role"];
            $availability = $row["Availability"];
            $usia = $row["Usia"];
            $lokasi = $row["Lokasi"];
            $experience = $row["yearExperience"];
            $email = $row["Email"];
        }
    } else {
        echo "0 Result";
    }

    $conn->close()
?>