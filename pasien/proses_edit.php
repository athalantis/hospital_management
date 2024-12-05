<?php 

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {

    $pasien_id = $_POST['pasien_id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];

    $sql = "UPDATE pasien SET

    nama='$nama',
    tgl_lahir='$tgl_lahir',
    gender='$gender'

    WHERE pasien_id=$pasien_id";

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