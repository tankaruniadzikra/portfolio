<?php
include "koneksi.php";

    if(isset($_POST['submit'])){
        $ID_Biodata = $_POST["ID_Biodata"];
        $nama = $_POST["Nama"];
        $role = $_POST["Role"];
        $availability = $_POST["Availability"];
        $usia = $_POST["Usia"];
        $lokasi = $_POST["Lokasi"];
        $experience = $_POST["yearExperience"];
        $email = $_POST["Email"];
    }

    //debugging kode
    var_dump($nama, $role, $availability, $usia, $lokasi, $experience, $email, $ID_Biodata);

    // query update
    $sql = $conn->prepare("UPDATE biodata SET Nama= ?, Role= ? Availability= ?,
    Usia= ?, Lokasi= ?, yearExperience= ?, Email= ? WHERE ID_Biodata = ?");

    $sql->bind_param("sssisisi", $nama, $role, $availability, $usia, $lokasi, $experience, $email, $ID_Biodata);

    //cek query update sql berhasil atau gagal
    if($sql->execute()){
        echo "Update Data Berhasil";
    } else {
        echo "Update Data Gagal: " . $conn->error;
    }

    //tambahkan commit
    $conn-> commit();

?>