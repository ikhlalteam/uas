<?php
require_once('koneksi.php');

    $id = $_GET['id'];
    if (hapus($id) > 0) {
        echo "
            <script>
            alert('Data Berhasil Dihapus');
            window.location.href='halaman_utama.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Dihapus');
            window.location.href='halaman_utama.php';
            </script>
        ";
    }
?>
