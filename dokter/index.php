<?php 
include("../koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hospital Managing System</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>

    <ul>
        <li><a href="../pasien/index.php">Data Pasien</a></li>
        <li><a href="../dokter/index.php">Data Dokter</a></li>
    </ul>  
</head>
<body>
    <h2>Data Dokter</h2>
    <?php if (isset($_SESSION['notifikasi'])):?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th><a href="tambah_dokter.php">Tambah Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM dokter");
            while ($dokter = $query->fetch_assoc()){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dokter['nama_d'] ?></td>
            <td><?php echo $dokter['spesialisasi'] ?></td>

            <td align="center">
                <a href="edit_dokter.php?dokter_id=<?php echo $dokter['dokter_id']?>">Edit</a>
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_dokter.php?dokter_id=<?php echo $dokter['dokter_id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>