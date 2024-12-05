<?php 
session_start();
include("../koneksi.php");

if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    $sql = "DELETE FROM pasien WHERE pasien_id=$pasien_id";
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