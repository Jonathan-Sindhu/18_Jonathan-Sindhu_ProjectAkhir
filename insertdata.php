<?php
include 'koneksi.php';

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $songwriter = $_POST['songwriter'];
    $featuredartist = $_POST['featuredartist'];
    $genre = $_POST['genre'];
    $release_date = $_POST['release_date'];
    $duration = $_POST['duration'];

    $query = "INSERT INTO data (title, songwriter, featuredartist, genre, release_date, duration) VALUES ('$title','$songwriter','$featuredartist','$genre','$release_date','$duration')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Your song has been uploaded!'); window.location='showdata.php';</script>";
        
    } else {
        echo "<script>alert('Failed to upload your song, Try again!');</script>";
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Hub Insert Songs</title>
    <link rel="stylesheet" href="insertdataa.css">
</head>
<body>
    <div class="container" style="background-color:rgba(255, 255, 255, 0.8);">
        <br><h2>Create Your Own Song</h2></br>
        <form method="post">

            <tr><td><label for="title">Title</label></td></tr>
            <input class="inbox" type="text" name="title" placeholder="Title" required><br><br>

            <label for="description">Songwriter</label>
            <input class="inbox" type="text" name="songwriter" placeholder="Songwriter" required><br><br>

            <label for="description">Featured Artist</label>
            <input class="inbox" type="text" name="featuredartist" placeholder="Featured artist" required><br><br>

            <label for="genre">Genre</label>
            <input class="inbox" type="text" name="genre" placeholder="Genre" required><br><br>

            <label for="release_date">Release Date</label>
            <input class="inbox" type="date" name="release_date" placeholder="Release Date" required><br><br>

            <label for="duration">Duration</label>
            <input class="inbox" type="time" step="1" name="duration" placeholder="Duration" required><br><br>

            <button type="submit" name="create" >Create</button>

        </form> <br>

            <a href="showdata.php">Back</a>
    </div>

</body>
</html>