<?php 

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO pasien (nama, tgl_lahir, gender)
    VALUES ('$nama', '$tgl_lahir', '$gender')";

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