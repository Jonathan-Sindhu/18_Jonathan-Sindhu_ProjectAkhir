<?php

$koneksi = mysqli_connect("localhost","root","mysql","website musik");

if(mysqli_connect_error()){

    echo "Koneksi database gagal : " , mysqli_connect_error();
}

?>