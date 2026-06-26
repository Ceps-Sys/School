<?php
// Menyertakan file koneksi database
include 'koneksi.php';

/** @var mysqli $koneksi */ // <-- Tambahkan baris ini juga!
// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])) {
    
    // Menerima kiriman data dari form tambah.php (jumlah_desa sudah dihapus)
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $id_kabupaten   = $_POST['id_kabupaten']; 

    // Query insert disesuaikan dengan struktur tabel database kamu yang baru
    $query_insert = "INSERT INTO kecamatan (id_kabupaten, nama_kecamatan) 
                     VALUES ('$id_kabupaten', '$nama_kecamatan')";
    
    $hasil = mysqli_query($koneksi, $query_insert);

    // Cek apakah proses input berhasil

    if ($hasil) {
        // Biar balik dan masuk lagi ke dalam template Mazer kamu
        echo "<script>alert('Data Kecamatan Berhasil Disimpan!'); window.location='../../admin/index.php?pages=wilayah';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "'); window.location='../../admin/index.php?pages=tambah_wilayah';</script>";
    }
}
?>