<?php 
// Ubah bagian atas sendiri menjadi seperti ini biar gak bentrok koneksi
/** @var mysqli $koneksi */ 
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kecamatan & Kabupaten</title>
</head>
<body>
    <h2>Data Wilayah Kecamatan</h2>
        <a href="index.php?pages=tambah_wilayah" class="btn btn-primary mb-3">+ Tambah Kecamatan Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Nama Kabupaten (Hasil Join)</th>
                <th>Ibukota Kabupaten</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            
            // CORE QUERY: Menggabungkan tabel kecamatan dengan tabel kabupaten
            $query_join = "SELECT kecamatan.*, kabupaten.nama_kabupaten, kabupaten.ibukota 
                           FROM kecamatan 
                           INNER JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten
                           ORDER BY kecamatan.nama_kecamatan ASC";
            
            $eksekusi = mysqli_query($koneksi, $query_join);

            // Cek apakah ada data di dalam tabel
            if (mysqli_num_rows($eksekusi) > 0) {
                // Looping untuk menampilkan data hasil gabungan tabel
                while ($data = mysqli_fetch_assoc($eksekusi)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama_kecamatan']; ?></td>
                        <td><?= $data['nama_kabupaten']; ?></td>
                        <td><?= $data['ibukota']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                // Jika tabel masih kosong (colspan disesuaikan jadi 4)
                echo "<tr><td colspan='4' align='center'>Belum ada data kecamatan. Silakan tambah data terlebih dahulu!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>