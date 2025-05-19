<?php
include "Koneksi.php";

    $nama = "jane Doe";
    $email = "jane@example.com";

    $stmt = $conn->prepare("INSERT INTO siswa (nama,email) VALUES (?,?)");
    $stmt->bind_param("ss",$nama,$email);

    if ($stmt->execute()) {
        echo "Data Berhasil ditambahkan. ID".
        $stmt->insert_id."\n";
    } else {
        echo "Eror" . $stmt->eror."\n";
    }

$stmt->close();
$conn->close();
?>