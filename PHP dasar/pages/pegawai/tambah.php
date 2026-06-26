<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai - Mazer</title>
    
    <link rel="shortcut icon" href="../../admin/assets/compiled/png/favicon.png" type="image/x-icon">
    <link rel="stylesheet" crossorigin href="../../admin/assets/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="../../admin/assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="../../admin/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="p-4">
            <header class="mb-3">
                <a href="../../admin/index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Pegawai Baru</h3>
                            <p class="text-subtitle text-muted">Input data pegawai secara lengkap melalui form di bawah.</p>
                        </div>
                    </div>
                </div>

                <section class="section mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Input Data</h4>
                        </div>
                        <div class="card-body">
                            <form action="../../admin/index.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="contoh@mail.com" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="telepon">Nomor Telepon</label>
                                            <input type="number" class="form-control" id="telepon" placeholder="08xxxxxxxx">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="kota">Kota Asal</label>
                                            <input type="text" class="form-control" id="kota" placeholder="Contoh: Jakarta">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                        <button type="reset" class="btn btn-light-secondary">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="mt-5">
                <div class="footer clearfix mb-0 text-muted text-center">
                    <p>2023 &copy; Mazer Admin</p>
                </div>
            </footer>
        </div>
    </div>

    <script src="../../admin/assets/static/js/components/dark.js"></script>
    <script src="../../admin/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets/compiled/js/app.js"></script>
</body>

</html>