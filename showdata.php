<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Music Hub Show Songs</title>
  <link rel ="stylesheet" href="showdata.css">
</head>
    <body>
    <h2 style="color:white; text-align:center; margin-top:20px;">Songs Data</h2>
                <table border="10" cellpadding="10" cellspacing="0" style="margin:auto; background-color:rgba(255, 255, 255, 0.8);">
                    <tr>
                        <th>Title</th>
                        <th>Songwriter</th>
                        <th>Featured Artist</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>Duration</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from data");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['title']; ?></td>
                        <td><?php echo $d['songwriter']; ?></td>
                        <td><?php echo $d['featuredartist']; ?></td>
                        <td><?php echo $d['genre']; ?></td>
                        <td><?php echo $d['release_date']; ?></td>
                        <td><?php echo $d['duration']; ?></td>
                        <td><a href="update.php?code=<?php echo $d['code']; ?>">EDIT</a></td>
                        <td><a href="delete.php?code=<?php echo $d['code']; ?>">DELETE</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <br>
            <button style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin: auto;"><a href="insertdata.php">Create Your Own Song</a></button>
            <br>
            <button style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin: auto; margin-top:10px;"><a href="home.php">Back to Home</a></button>
</body>
</html>