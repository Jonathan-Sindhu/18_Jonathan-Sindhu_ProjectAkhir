<!DOCTYPE html>
<html>
<head>
    <title>Music Hub Edit Songs</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>

<br><br>
<h1>EDIT YOUR SONG</h1>

<?php
include 'koneksi.php';

$code = $_GET['code'];

$data = mysqli_query($koneksi, "SELECT * FROM data WHERE code='$code'");

while($d = mysqli_fetch_array($data)){
?>
    <form method="post" action="change.php">
        <input type="hidden" name="code" value="<?php echo $d['code']; ?>">
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $d['title']; ?>"></td>
            </tr>
            <tr>
                <td>Songwriter</td>
                <td><input type="text" name="songwriter" value="<?php echo $d['songwriter']; ?>"></td>
            </tr>
            <tr>
                <td>Featured Artist</td>
                <td><input type="text" name="featuredartist" value="<?php echo $d['featuredartist']; ?>"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
            </tr>
            <tr>
                <td>Release Date</td>
                <td><input type="date" name="release_date" value="<?php echo $d['release_date']; ?>"></td>
            </tr>
            <tr>
                <td>Duration</td>
                <td><input type="time" name="duration" value="<?php echo $d['duration']; ?>"></td>
            </tr>
            <tr>
            <td colspan="2" style="text-align:center;">
                <input type="submit" value="SAVE">
            </td>
</tr>

        </table>
    </form>
    <br>
    <div style="text-align: center;">
    <a href="showdata.php" class="kembali-btn">KEMBALI</a>
</div>

<?php 
}
?>

</body>
</html>
