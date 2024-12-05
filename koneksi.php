<?php 
$server = "localhost";
$user = "foracesaken";
$password = "ilovemywife";
$nama_database = "hospital_management";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
