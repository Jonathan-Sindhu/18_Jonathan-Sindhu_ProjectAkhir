<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Login gagal! Periksa username dan password Anda.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Music Hub Login</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
</style>
<link rel="stylesheet" href="loginn.css">
</head>
<body>
    <div class="bg-blur"></div>

    <div class="login-card">
        <h2>Log in to your account</h2>

        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Log In</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register here</a></p>
        <p><a href="index.php">← Back to Page</a></p>
    </div>

    <footer>© 2025 Music Hub - All rights reserved</footer>
</body>
</html>
