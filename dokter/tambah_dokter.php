<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Dokter</title>
</head>
<body>
    <h3>Tambah Data Dokter</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_d" required></td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td>
                    <select name="spesialisasi" style="width: 100%" required>
                        <option value="" selected disabled>-- Pilih Salah Satu --</option>
                        <option value="internis">Penyakit Dalam (Internis)</option>
                        <option value="surgeon">Bedah (Surgeon)</option>
                        <option value="neurologist">Saraf (neurologist)</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>