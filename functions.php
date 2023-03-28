<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kulakita");

function query($query) 
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function hapus($kd_barang)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE kd_barang =$kd_barang");

    return mysqli_affected_rows($conn);
}

?>