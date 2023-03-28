<?php 
require 'functions.php';

$kd_barang = $_GET["kd_barang"];

if (hapus($kd_barang) > 0) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href= 'pegawai.php';
    </script>
    ";
} 
else {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href= 'pegawai.php';
    </script>
    ";
}

?>