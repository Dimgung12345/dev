<?php
include "Koneksi.php";

    $id = 2;

    $stmt = $conn->prepare("DELETE FROM siswa WHERE id=?");

    if ($stmt->bind_param("i",$id)) {
        echo "Data berhasil di HAPUS\n";
    } else {
        echo "Data gagal di HAPUS" . mysqli_eror($conn);
    }

    $stmt->close();
    $conn->close();
?>