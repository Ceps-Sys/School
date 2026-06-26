 <?php
@$page = $_GET['pages'];
switch  ($page) {
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
        case 'tabelsiswa':
        include "../pages/tabel/tabelsiswa.php";
        break;

        default:
        include '../pages/master/layout-default.php';
}

 ?>