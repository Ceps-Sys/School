<?php
// ==========================================
// 1. KONEKSI KE DATABASE
// ==========================================
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_belajar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Inisialisasi variabel untuk form Edit
$id       = "";
$nama     = "";
$nis      = "";
$jurusan  = "";
$sukses   = "";
$error    = "";

// Ambil pesan sukses/error dari redirect URL jika ada
if (isset($_GET['sukses'])) $sukses = $_GET['sukses'];
if (isset($_GET['error'])) $error = $_GET['error'];

// ==========================================
// 2. LOGIKA PROSES (CREATE, UPDATE, DELETE)
// ==========================================

// A. Logika Hapus Data (DELETE)
if (isset($_GET['op']) && $_GET['op'] == 'delete') {
    $id = (int)$_GET['id']; 
    
    $sql_delete = "DELETE FROM siswa WHERE id = $id";
    $q_delete   = mysqli_query($koneksi, $sql_delete);
    
    if ($q_delete) {
        // Alihkan kembali ke halaman utama lewat index.php dengan aman menggunakan JavaScript
        echo "<script>window.location='index.php?pages=crud_dasar&sukses=" . urlencode("Data berhasil dihapus") . "';</script>";
        exit;
    } else {
        echo "<script>window.location='index.php?pages=crud_dasar&error=" . urlencode("Gagal menghapus data: " . mysqli_error($koneksi)) . "';</script>";
        exit;
    }
}

// B. Logika Ambil Data untuk Form Edit (Muncul di Form)
if (isset($_GET['op']) && $_GET['op'] == 'edit') {
    $id = (int)$_GET['id'];
    $sql_edit = "SELECT * FROM siswa WHERE id = $id";
    $q_edit   = mysqli_query($koneksi, $sql_edit);
    $r_edit   = mysqli_fetch_array($q_edit);
    
    if ($r_edit) {
        $nama    = $r_edit['nama'];
        $nis     = $r_edit['nis'];
        $jurusan = $r_edit['jurusan'];
    } else {
        $error = "Data tidak ditemukan di database.";
    }
}

// C. Logika Simpan Data (CREATE & UPDATE)
if (isset($_POST['simpan_siswa'])) {
    $nama    = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nis     = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

    if (!empty($nama) && !empty($nis) && !empty($jurusan)) {
        
        // JIKA LAGI MODE EDIT (PROSES UPDATE)
        if (isset($_GET['op']) && $_GET['op'] == 'edit') { 
            $id = (int)$_GET['id'];
            $sql_update = "UPDATE siswa SET nama='$nama', nis='$nis', jurusan='$jurusan' WHERE id = $id";
            $q_update   = mysqli_query($koneksi, $sql_update);
            
            if ($q_update) {
                echo "<script>window.location='index.php?pages=crud_dasar&sukses=" . urlencode("Data berhasil diperbarui") . "';</script>";
                exit;
            } else {
                $error = "Data gagal diperbarui: " . mysqli_error($koneksi);
            }
            
        // JIKA MODE BIASA (PROSES INSERT BARU)
        } else { 
            $sql_insert = "INSERT INTO siswa (nama, nis, jurusan) VALUES ('$nama', '$nis', '$jurusan')";
            $q_insert   = mysqli_query($koneksi, $sql_insert);
            
            if ($q_insert) {
                echo "<script>window.location='index.php?pages=crud_dasar&sukses=" . urlencode("Berhasil memasukkan data baru") . "';</script>";
                exit;
            } else {
                $error = "Gagal memasukkan data: " . mysqli_error($koneksi);
            }
        }
    } else {
        $error = "Silakan masukkan semua data terlebih dahulu";
    }
}
?>

<div class="page-heading">
    <div class="page-title mb-3">
        <h3>Aplikasi CRUD Data Siswa</h3>
    </div>

    <?php if ($error): ?>
        <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <?php if ($sukses): ?>
        <div class="alert alert-success" role="alert"><?php echo htmlspecialchars($sukses); ?></div>
    <?php endif; ?>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-white">Form Input / Edit Data <?php echo (isset($_GET['op']) && $_GET['op'] == 'edit') ? '(Mode Edit)' : '(Mode Tambah)'; ?></h4>
                    </div>
                    <div class="card-body mt-3">
                        <form action="" method="POST">
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" name="nis" value="<?php echo htmlspecialchars($nis); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jurusan" id="jurusan" required>
                                        <option value="">- Pilih Jurusan -</option>
                                        <option value="Rekayasa Perangkat Lunak" <?php if($jurusan == "Rekayasa Perangkat Lunak") echo "selected"; ?>>Rekayasa Perangkat Lunak (RPL)</option>
                                        <option value="Teknik Komputer Jaringan" <?php if($jurusan == "Teknik Komputer Jaringan") echo "selected"; ?>>Teknik Komputer Jaringan (TKJ)</option>
                                        <option value="Multimedia" <?php if($jurusan == "Multimedia") echo "selected"; ?>>Multimedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <input type="submit" name="simpan_siswa" value="Simpan Data" class="btn btn-primary" />
                                <?php if(isset($_GET['op'])): ?>
                                    <a href="index.php?pages=crud_dasar" class="btn btn-secondary">Batal</a>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h4 class="card-title text-white">Data Siswa Terdaftar</h4>
                    </div>
                    <div class="card-body mt-3">
                        <table class="table table-striped table-hover" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_read = "SELECT * FROM siswa ORDER BY id DESC";
                                $q_read   = mysqli_query($koneksi, $sql_read);
                                $nomor    = 1;
                                
                                while ($r_read = mysqli_fetch_array($q_read)) {
                                    $id_siswa   = $r_read['id'];
                                    $nis_siswa  = $r_read['nis'];
                                    $nama_siswa = $r_read['nama'];
                                    $jur_siswa  = $r_read['jurusan'];
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo htmlspecialchars($nis_siswa); ?></td>
                                        <td><?php echo htmlspecialchars($nama_siswa); ?></td>
                                        <td><?php echo htmlspecialchars($jur_siswa); ?></td>
                                        <td class="text-center">
                                            <a href="index.php?pages=crud_dasar&op=edit&id=<?php echo $id_siswa; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="index.php?pages=crud_dasar&op=delete&id=<?php echo $id_siswa; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                if (mysqli_num_rows($q_read) == 0) {
                                    echo "<tr><td colspan='5' class='text-center'>Belum ada data siswa.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>