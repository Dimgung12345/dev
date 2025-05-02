<?php
include "Koneksi.php";

    $nama = "jane Doe";
    $email = "jane@example.com";

    $sql = "INSERT INTO siswa (nama, email) VALUES ('$nama', '$email')";

    if ($conn->query($sql)){
        echo "Data Berhasil Ditambahkan";
    } else {
        echo "Eror" . $sql . mysqli_eror($conn);
    }
?>