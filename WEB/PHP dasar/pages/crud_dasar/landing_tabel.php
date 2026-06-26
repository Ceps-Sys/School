<?php
// ==========================================
// 1. KONEKSI KE DATABASE (Hanya Baca)
// ==========================================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_belajar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ==========================================
// 2. AMBIL DATA SISWA
// ==========================================
$sql_read = "SELECT * FROM siswa ORDER BY id DESC";
$q_read   = mysqli_query($koneksi, $sql_read);
$nomor    = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Terdaftar - Publik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 40px 20px; background-color: #f8f9fa; }
        .card { box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container mx-auto" style="max-width: 900px;">
    
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Daftar Siswa Terdaftar</h2>
        <p class="text-muted">Halaman informasi publik mengenai data siswa yang aktif.</p>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white fw-bold">
            Data Siswa
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Melakukan perulangan untuk menampilkan data dari database
                    while ($r_read = mysqli_fetch_array($q_read)) {
                        $nis_siswa  = $r_read['nis'];
                        $nama_siswa = $r_read['nama'];
                        $jur_siswa  = $r_read['jurusan'];
                        ?>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $nis_siswa; ?></td>
                            <td><?php echo $nama_siswa; ?></td>
                            <td><?php echo $jur_siswa; ?></td>
                        </tr>
                        <?php
                    }
                    
                    // Jika database ternyata masih kosong
                    if (mysqli_num_rows($q_read) == 0) {
                        echo "<tr><td colspan='4' class='text-center text-muted'>Belum ada data siswa terdaftar.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>