<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app-dark.css">
</head>

<body>
    <script src="../../admin/assets1/static/js/initTheme.js"></script>
    
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Siswa</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="card-title text-white">Data Siswa</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>ID Siswa</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="id_siswa" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Nama Siswa</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Alamat Siswa</label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="alamat_siswa" rows="3" placeholder="Alamat Siswa"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Nomor Telepon</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="number" class="form-control" name="no_telp" value="0">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-laki">
                                                    <label class="form-check-label" for="laki">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Kelas</label>
                                            </div>
                                            <div class="col-md-10">
                                                <select class="form-select" name="kelas">
                                                    <option>== Pilih Kelas ==</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Jurusan</label>
                                            </div>
                                            <div class="col-md-10">
                                                <select class="form-select" name="jurusan">
                                                    <option>== Pilih Jurusan ==</option>
                                                    <option value="TSM">Teknik Sepeda Motor</option>
                                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                                    <option value="FKK">Farmasi Klinis</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-2">
                                                <label>Photo Siswa</label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile04" accept="image/*">
                                                    <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                </div>
                                                <div class="mt-2">
                                                    <img id="imagePreview" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22150%22%20height%3D%22150%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20150%20150%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_185%20text%20%7B%20fill%3A%23999%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20Open%20Sans%2C%20Arial%2C%20sans-serif%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_185%22%3E%3Crect%20width%3D%22150%22%20height%3D%22150%22%20fill%3D%22%23eee%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2235%22%20y%3D%2280%22%3ENo%20Image%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;" alt="Preview">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <p>Mau ganti password? <a href="#" class="text-primary">Ganti Password</a> user admin !</p>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-start mt-4">
                                            <button type="submit" class="btn btn-info me-1 mb-1 text-white">Tambah</button>
                                            <button type="button" class="btn btn-danger me-1 mb-1">Hapus</button>
                                            <button type="reset" id="btnCancel" class="btn btn-warning me-1 mb-1 text-white">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../../admin/assets1/static/js/components/dark.js"></script>
    <script src="../../admin/assets1/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets1/compiled/js/app.js"></script>
    <script src="../../admin/assets1/extensions/jquery/jquery.min.js"></script>
    <script src="../../admin/assets1/extensions/parsleyjs/parsley.min.js"></script>
    <script src="../../admin/assets1/static/js/pages/parsley.js"></script>

    <script>
        const defaultPlaceholder = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22150%22%20height%3D%22150%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20150%20150%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_185%20text%20%7B%20fill%3A%23999%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20Open%20Sans%2C%20Arial%2C%20sans-serif%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_185%22%3E%3Crect%20width%3D%22150%22%20height%3D%22150%22%20fill%3D%22%23eee%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2235%22%20y%3D%2280%22%3ENo%20Image%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
        const fileInput = document.getElementById('inputGroupFile04');
        const previewImage = document.getElementById('imagePreview');
        const btnCancel = document.getElementById('btnCancel');

        // Handler saat memilih file baru
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                }

                reader.readAsDataURL(file);
            } else {
                previewImage.src = defaultPlaceholder;
            }
        });

        // Handler tambahan jika menekan tombol Cancel (reset) agar preview kembali semula
        btnCancel.addEventListener('click', function() {
            previewImage.src = defaultPlaceholder;
        });
    </script>
</body>
</html>