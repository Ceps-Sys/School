<?php 
// Menyertakan file koneksi database
include 'koneksi.php';         

/** @var mysqli $koneksi */ // <-- Tambahkan baris ini juga!
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kecamatan</title>
</head>
<body>
    <h2>Form Tambah Kecamatan (Relasi)</h2>
    <a href="index.php?pages=wilayah" class="btn btn-primary mb-3">Kembali ke Tampil Data</a>
    <br><br>

<form action="../pages/crud_inner/simpan.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Kecamatan</td>
                <td>:</td>
                <td><input type="text" name="nama_kecamatan" required></td>
            </tr>
            <tr>
                <td>Pilih Kabupaten</td>
                <td>:</td>
                <td>
                    <select name="id_kabupaten" required>
                        <option value="">-- Pilih Kabupaten --</option>
                        <?php
                        // QUERY INNER: Mengambil semua list kabupaten untuk opsi dropdown
                        $query_kab = mysqli_query($koneksi, "SELECT * FROM kabupaten ORDER BY nama_kabupaten ASC");
                        
                        // Melakukan perulangan untuk menampilkan semua kabupaten
                        while ($kab = mysqli_fetch_assoc($query_kab)) {
                            echo "<option value='".$kab['id_kabupaten']."'>".$kab['nama_kabupaten']."</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="simpan">Simpan Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>