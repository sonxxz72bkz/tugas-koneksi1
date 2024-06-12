<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_312310802";

$koneksi = new mysqli($servername, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
