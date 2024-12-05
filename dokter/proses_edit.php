<?php 

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {

    $dokter_id = $_POST['dokter_id'];
    $nama_d = $_POST['nama_d'];
    $spesialisasi = $_POST['spesialisasi'];

    $sql = "UPDATE dokter SET
    nama_d='$nama_d',
    spesialisasi='$spesialisasi'
    WHERE dokter_id=$dokter_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data pasien berhasil diperbarui";
    } else {
        $_SESSION['notifikasi'] = "Data pasien gagal diperbarui";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>