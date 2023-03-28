<?php 

    // integrasi koneksi
    require_once('connection.php');

    // buat database baru
    $sql = "CREATE DATABASE highland_roastery";

    if($conn->query($sql) === TRUE) {
        echo "Database berhasil dibuatkan";
    } else {
        echo "Datbase tidak berhasil dibuatkan";
    }