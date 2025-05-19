<?php
include "Koneksi.php";

    $id = 9;
    $newEmail = "jhin@exmple.com";

    $stmt = $conn->prepare("UPDATE siswa SET email =? WHERE id = ?");
    $stmt->bind_param("si",$id,$newEmail);

    if ($stmt->affected_rows > 0) {
        echo "Data berhasil di update\n";
    } else {
        echo "Data gagal di update \n" ;
    }
    $stmt->close();
    $conn->close();
?>