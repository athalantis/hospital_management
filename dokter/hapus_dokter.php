<?php 
session_start();
include("../koneksi.php");

if (isset($_GET['dokter_id'])) {
    $dokter_id = $_GET['dokter_id'];

    $sql = "DELETE FROM dokter WHERE dokter_id=$dokter_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal dihapus";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>