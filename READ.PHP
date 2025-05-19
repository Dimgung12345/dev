<?php
include "Koneksi.php";

    $stmt = $conn->prepare ("SELECT id,nama,email FROM siswa");
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID:" . $row["id"]. " | nama: " . $row["nama"]. " - email: " . $row["email"]. "/n";
        } 
    }else{
        echo "Tidak ada data ditambahkan \n";
    }

    $stmt->close();
    $conn->close();
?>