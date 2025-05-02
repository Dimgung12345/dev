<?php
include "Koneksi.php";

    $sql = "SELECT id,nama,email FROM siswa";
    $result = ($conn->query($sql));

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID:" . $row["id"]. " - nama: " . $row["nama"]. " - email: " . $row["email"]. "<br>";
        } 
    }else{
        echo "0 ditambahkan";
    }
?>