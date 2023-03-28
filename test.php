<?php 
require 'functions.php';

$barang = query("SELECT * FROM barang");
var_dump($barang);

?>