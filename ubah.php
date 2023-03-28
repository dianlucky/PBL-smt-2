<?php 
require('functions.php');

$kd_barang =$_GET["kd_barang"];

$brg = query("SELECT barang.kd_barang, barang.nama_barang, barang.stok, satuan.nama_satuan
FROM barang
INNER JOIN satuan
ON barang.kd_satuan=satuan.kd_satuan;")[0];



//mengecek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diedit!');
                document.location.href='pegawai.php';
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('data gagal diedit!');
                document.location.href='pegawai.php';
            </script>
        
        ";
    }

 
}
?>
<!DOCTYPE html> 
<html>
    <head>
        <title> Edit barang </title>
    </head>
    <body>
        <h1>Edit barang</h1>
        
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" value="<?= $brg["nama_barang"]?>">
                </li>
                <li>
                    <label for="stok">Stok :</label>
                    <input type="text" name="stok" id="stok" value="<?= $brg["stok"]?>" disabled="true">
                    
                </li>
                <li>
                    <label for="satuan">Satuan :</label>
                    <input type="text" name="satuan" id="satuan" value="<?= $brg["nama_satuan"]?>">
                </li>
                <button type="submit" name="submit">Edit</button>
            </ul>
        </form>
    </body>

</html>