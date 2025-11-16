<?php
    include 'koneksi.php';

    $code = $_POST['code'];
    $title = $_POST['title'];
    $songwriter = $_POST['songwriter'];
    $featuredartist = $_POST['featuredartist'];
    $genre = $_POST['genre'];
    $release_date = $_POST['release_date'];
    $duration = $_POST['duration'];

    mysqli_query($koneksi, "UPDATE data SET title='$title', songwriter='$songwriter', featuredartist='$featuredartist', genre='$genre', release_date='$release_date', duration='$duration' WHERE code='$code'");


    header("location:showdata.php");
?>
