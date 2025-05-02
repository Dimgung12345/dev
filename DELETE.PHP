<?php
include "Koneksi.php";

    $id = 2;

    $sql = "DELETE FROM siswa WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Data berhasil di HAPUS";
    } else {
        echo "Data gagal di HAPUS" . mysqli_eror($conn);
    }
?>