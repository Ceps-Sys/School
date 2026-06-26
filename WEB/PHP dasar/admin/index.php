<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cepi Handani - Mazer Professional</title>
    
    <link rel="shortcut icon" href="assets1/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets1/compiled/css/app.css">
    <link rel="stylesheet" href="./assets1/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets1/compiled/css/iconly.css">
    <link rel="stylesheet" href="./assets1/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="./assets1/compiled/css/table-datatable.css">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script src="./assets1/static/js/initTheme.js"></script>
    
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.php"><img src="./assets1/compiled/svg/logo.svg" alt="Logo"></a>
                        </div>
                    </div>
                </div>
              <div class="sidebar-menu">
                <ul class="menu">
                       <li class="sidebar-title">Menu Utama</li>
        
                     <!-- Menu Tabel dengan Dropdown -->
                   <li class="sidebar-item has-sub">
                  <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i><span>Tabel</span>
                  </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                    <a href="index.php?pages=tabel" class="submenu-link">Tabel Utama</a>
                        </li>
                        <li class="submenu-item">
                    <a href="index.php?pages=tabelsiswa" class="submenu-link">Tabel Siswa</a>
                        </li>
                </ul>
            </li>

            <!-- Menu Form dengan Dropdown -->
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i><span>Form</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="index.php?pages=form" class="submenu-link">Form Pegawai</a>
                </li>
                <li class="submenu-item">
                    <a href="index.php?pages=forms" class="submenu-link">Form Vertical</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a href="index.php?pages=crud_dasar" class='sidebar-link'>
                <i class="bi bi-database-fill"></i><span>CRUD Dasar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?pages=wilayah" class='sidebar-link'>
               <i class="bi bi-map-fill"></i><span>Data Wilayah (Inner)</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="../../index.html" class='sidebar-link'>
                <i class="bi bi-globe"></i><span>Landing Page</span>
            </a>
        </li>

        <li class="sidebar-title">Materi Tutorial</li>
        <li class="sidebar-item">
            <a href="index.php?pages=webserver" class='sidebar-link'>
                <i class="bi bi-server"></i><span>Webserver</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?pages=strucktur_dasar" class='sidebar-link'>
                <i class="bi bi-code-square"></i><span>Struktur Dasar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="index.php?pages=variable" class='sidebar-link'>
                <i class="bi bi-gemstone"></i><span>Variable</span>
            </a>
        </li>

        <li class="sidebar-title">Sistem</li>
        <li class="sidebar-item">
            <a href="index.php?pages=default" class='sidebar-link'>
                <i class="bi bi-layout-sidebar-inset"></i><span>Default Mazer</span>
            </a>
        </li>

        <li class="sidebar-title">Authentication</li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-person-badge-fill"></i><span>Auth</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item"><a href="../inc/login.php" class="submenu-link">Login</a></li>
                <li class="submenu-item"><a href="../inc/register.php" class="submenu-link">Register</a></li>
            </ul>
        </li>
    </ul>
                </div>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            
            <div id="content" class="main-content">
                <div class="container">
                    <?php 
                    $page = $_GET['pages'] ?? 'dashboard';
                    switch ($page) {
                        case 'webserver':
                            include '../pages/tutorial/webserver.php';
                            break;
                        case 'strucktur_dasar':
                            include '../pages/tutorial/strucktur_dasar.php';
                            break;
                        case 'variable':
                            include '../pages/tutorial/variable.php';
                            break;
                        case 'crud_dasar':
                            include '../pages/crud_dasar/crud_dasar.php';
                            break;
                        case 'form':
                            include '../pages/tutorial/form-validation-parsley.php';
                            break;
                        case 'tabel':
                            include '../pages/pegawai/tampil.php';
                            break;
                        case 'forms':
                            include '../pages/forms/verticalform.php';
                            break;
                        case 'tabelsiswa':
                            include "../pages/tabel/tabelsiswa.php";
                            break;
                        case 'default':
                            include '../pages/master/layout-default.php';
                            break;
                        case 'test':
                            include '../pages/crud_dasar/tes_crud.php';
                            break;
                        case 'wilayah':
                            include '../pages/crud_inner/crudinner.php';
                            break;
                        case 'tambah_wilayah':
                            include '../pages/crud_inner/tambah.php'; 
                            break;
                        case 'simpan_wilayah':
                            include '../pages/crud_inner/simpan.php'; 
                            break;
                        default:
                    ?>

                    <div class="page-heading">
                        <div class="page-title">
                            <h3>Dashboard</h3>
                        </div>
                        <section class="section">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Selamat Datang!</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>Pilih menu di sidebar untuk memulai...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php break; } ?>
                </div>
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title white" id="modalTambahLabel">Form Tambah Pegawai</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form id="formTambah">
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email@mail.com" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" onclick="simpanData()" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted px-4">
                    <div class="float-start"><p>2026 &copy; Mazer</p></div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JS -->
    <script src="assets1/static/js/components/dark.js"></script>
    <script src="assets1/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets1/compiled/js/app.js"></script>
    <script src="assets1/extensions/simple-datatables/umd/simple-datatables.js"></script>

    <!-- ✅ SCRIPT UTAMA - INI YANG MEMBUAT LAYOUT NORMAL -->
    <script>
        // PERFECT SCROLLBAR
        let ps;
        if (typeof PerfectScrollbar !== 'undefined') {
            const sidebar = document.querySelector('#sidebar');
            ps = new PerfectScrollbar(sidebar, {
                wheelPropagation: false,
                suppressScrollX: true
            });
        }

        // ACTIVE MENU DYNAMIC
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = new URLSearchParams(window.location.search).get('pages') || 'dashboard';
            document.querySelectorAll('.sidebar-item').forEach(item => {
                item.classList.remove('active');
                const link = item.querySelector('a[href*="pages=' + currentPage + '"]');
                if (link) {
                    item.classList.add('active');
                }
            });
        });

        // MOBILE BURGER MENU
        document.querySelector('.burger-btn')?.addEventListener('click', function() {
            document.body.classList.toggle('sidebar-mini');
        });

        // DATATABLE
        if(document.querySelector('#table1')){
            new simpleDatatables.DataTable("#table1");
        }

        // FUNCTIONS
        function simpanData() {
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambah'));
            modal.hide();
            Swal.fire({
                title: "Berhasil!",
                text: "Data pegawai baru telah ditambahkan.",
                icon: "success",
                confirmButtonColor: "#435ebe"
            });
        }

        function pesanHapus() {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak bisa kembali!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Terhapus!", "Data telah dihapus.", "success");
                }
            });
        }
    </script>
</body>
</html>