<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "futsalgo"; // Nama databasenya
$conn = new mysqli($host, $username, $password, $database); // Koneksi ke MySQL
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}