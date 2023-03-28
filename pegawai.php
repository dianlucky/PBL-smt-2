<?php 
//pemanggilan file function
require 'functions.php';

// $barang = query("SELECT * FROM barang");
$barang = query("SELECT barang.kd_barang, barang.nama_barang, barang.stok, satuan.nama_satuan
FROM barang
INNER JOIN satuan
ON barang.kd_satuan=satuan.kd_satuan;");




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pegawai</title>
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    </head>
    <body style="background-color: #E2E6EB;">

<!-- Sidebar -->
        <div class="sidebar">
            <img src="image/logo.png" class="logo1"> <img src="image/tulisan.png" class="logo2">
            <div class="sidebar line2"></div>
            <div class="menu">
                <a href="#" class="dashboard"><b>Dashboard</b></a>  
            </div>
            <div class="sidebar line2"></div>
            <div class="menu">
                <button class="dropdown-btn"><b>Barang</b></button>
                <div class="dropdown-container">
                    <a href="#">Barang Masuk</a>
                    <a href="#">Barang Keluar</a>
                    <a href="#">Daftar Barang</a>
                    <a href="#">Daftar Satuan</a>
                </div>
            </div>
            <div class="sidebar line2"></div>
            <div class="menu">
                <a href="#" class="profil"><b>Profil</b></a>
            </div>
            <div class="sidebar line2"></div>
        </div>

<!-- Navbar -->
        <div class="navbar">
            <div class="profile">
                <!-- <p> <?= $_POST["username"];?></p> -->
            </div>
            <div class="searchbar">
                <input type="text" name="barang" placeholder="Cari barang"> 
                <button type="submit" name="button" class="fa-solid fa-magnifying-glass"></button>
            </div>
        </div>

        <div class="judul-menu">
            <p><b>Daftar Stok Barang</b></p>
        </div>

<!-- Tabel -->
        <div class="tabel">
            <table>
                <tr>
                    <th>NO</th>
                    <th>Nama Barang</th>        
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            <?php $i = 1; ?>
            <?php foreach ( $barang as $brg) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['stok']; ?></td>
                    <td><?= $brg['nama_satuan']; ?></td>
                    <td>
                        <a href="#"><img src="image/edit.png"  style="width:30px; height:30px;" class="edit" data-modal="modalOne"></a>
                        <div id="modalOne" class="modal">
                            <div class="modal-content">
                                <div class="contact-form">
                                <a class="close">&times;</a>
                                <form action="/">
                                    <h2>Edit barang</h2>
                                <div>
                                    <input class="fname" type="text" name="name" value="<?= $brg['nama_barang']?>" />
                                    <input type="text" name="name" placeholder="stok" />
                                    <input type="text" name="name" placeholder="Satuan" />
                                 </div>
                                    <button class="btn-simpan"type="submit" href="/">Simpan</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        <a href="hapus.php?kd_barang=<?= $brg['kd_barang']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"><img src="image/delete.png" style="width:30px; height:30px;"></a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endforeach ; ?>
                
            </table>
        </div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


let modalBtns = [...document.querySelectorAll(".edit")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
</script>
    </body>
</html>