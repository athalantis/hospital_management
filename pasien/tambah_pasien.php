<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pasien</title>
</head>
<body>
    <h3>Tambah Data Pasien</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" required style="width: 100%"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" selected disabled>-- Pilih Salah Satu --</option>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>