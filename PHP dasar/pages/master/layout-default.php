<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Professional</title>
    
    <link rel="shortcut icon" href="../../admin/assets1/compiled/png/favicon.png" type="image/x-icon">
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/app-dark.css">
    <link rel="stylesheet" crossorigin href="../../admin/assets1/compiled/css/iconly.css">
</head>

<body>
    <script src="../../admin/assets1/static/js/initTheme.js"></script>
    <div id="app">
        <!-- SIDEBAR -->
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.php"><img src="../../admin/assets1/compiled/svg/logo.svg" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu Utama</li>
                        
                        <li class="sidebar-item active">
                            <a href="../../admin/index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Default</li>
                        <li class="sidebar-item">
                            <a href="layout-default.php" class='sidebar-link'>
                                <i class="bi bi-layout-sidebar-inset"></i>
                                <span>Default Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Authentication</li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Auth</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="../inc/login.php" class="submenu-link">Login</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT - KOSONG -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <!-- CONTENT AREA KOSONG -->
            <div id="content" class="main-content">
                <div class="container">
                    <!-- HALAMAN KOSONG - Siap diisi -->
                    <div class="page-title mb-4">
                        <h3>Layout Default</h3>
                        <p class="text-subtitle text-muted">Halaman kosong - siap diisi konten</p>
                    </div>
                    
                    <!-- EMPTY STATE -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="empty-state" data-height="400">
                                        <div class="empty-state-icon">
                                            <i class="bi bi-file-earmark-plus"></i>
                                        </div>
                                       isi ini 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 © Mazer Professional</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- SCRIPTS MINIMAL -->
    <script src="../../admin/assets1/static/js/components/dark.js"></script>
    <script src="../../admin/assets1/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../admin/assets1/compiled/js/app.js"></script>
</body>
</html>