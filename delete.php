<?php
include 'koneksi.php';

$code = $_GET['code'];

mysqli_query($koneksi, "delete from data where code='$code'");

header("location:showdata.php");
?>