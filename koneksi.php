<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakweb2023x_213040081"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
