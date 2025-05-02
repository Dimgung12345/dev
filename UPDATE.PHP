<?php
include "Koneksi.php";

    $id = 1;
    $newEmail = "johan@exmple.com";

    $sql = "UPDATE siswa SET email='$newEmail'WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Data berhasil di update";
    } else {
        echo "Data gagal di update" . mysqli_eror($conn);
    }
?>