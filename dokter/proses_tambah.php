<?php 

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama_d = $_POST['nama_d'];
    $spesialisasi = $_POST['spesialisasi'];

    $sql = "INSERT INTO dokter (nama_d, spesialisasi)
    VALUES ('$nama_d', '$spesialisasi')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else { 
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak.");
}
?>