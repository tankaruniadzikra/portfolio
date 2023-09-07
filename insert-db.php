<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    include "koneksi.php";

    $sql = "INSERT INTO biodata(
        -- ID_Biodata,
        Nama,
        Role,
        Availability,
        Usia,
        Lokasi,
        yearExperience,
        Email
    ) VALUES
    (
        -- '1',
        'Tan Karunia Dzikra',
        'Back End Engineer',
        'Part Time',
        '20',
        'Bandung',
        '3',
        'qwertyuiop@gmail.com'
    )";

    // cek query berhasil atau tidak
    if($conn->query($sql) == TRUE){
        echo "Insert Data telah berhasil";
    } else {
        echo "Insert Data gagal";
    }


?>