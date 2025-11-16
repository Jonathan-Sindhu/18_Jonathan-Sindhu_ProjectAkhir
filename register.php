<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, fullname, age, email, password) 
              VALUES ('$username','$fullname','$age','$email','$hashed_password')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi Berhasil! Silahkan login.'); 
        window.location='login.php'</script>";
    } else {
        echo "Gagal mendaftar!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Music Hub Register</title>
    <link rel="stylesheet" href="regist.css">
</head>
<body>
    <div class="conlog">
    <h2>Register Form</h2>
    <form method="POST">
        <fieldset>
        <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="username" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fullname">Fullname</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>
                    <input type="text" name="fullname" placeholder="fullname" required><br>
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="age">Age</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>
                    <input type="number" name="age" placeholder="age" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>
                    <input type="text" name="email" placeholder="email" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="password" required><br>
                </td>
                </tr>
                <tr>
                <tr>
                    <td colspan="3" style="text-align: center">
                        <input type="checkbox" name="terms" required>
                        <label for="terms">I agree to the Terms and Conditions</label>
                    </td>
                </tr>
            <tr style="text-align: center">
                <td colspan="3">
                    <button type="submit" name="register">Register</button>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
    <p> Already have an account? | <a href="login.php">Login Here</a></p>
    </div>
</body>
</head>
</html>