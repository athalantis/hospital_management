<?php 

include("../koneksi.php");

$pasien_id = $_GET['pasien_id'];

$query = $db->query("SELECT * FROM pasien WHERE pasien_id = '$pasien_id'");
$pasien = $query->fetch_assoc();
?>
<!DOCTYPE html>
<head>
    <title>Edit Data Pasien</title>
</head>
<body>
    <h3>Edit Data Pasien</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="pasien_id" value="<?php echo $pasien['pasien_id']; ?>" >
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>
                <input type="text" name="nama"
                value="<?php echo $pasien['nama'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                <input type="date" name="tgl_lahir" value="<?php echo $pasien['tgl_lahir']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" disabled>-- Pilih Salah Satu --</option>
                        <option value="Male" <?php echo ($pasien['gender']== 'Male') ? 'selected' : ''?>>Laki-laki</option>
                        <option value="Female" <?php echo ($pasien['gender']== 'Female') ? 'selected' : ''?>>Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>