<?php

// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecom_store";

$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat tabel 'services'
$sql = "CREATE TABLE services (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_service VARCHAR(50) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10,2) NOT NULL,
    tanggal_pembuatan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel 'services' berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
