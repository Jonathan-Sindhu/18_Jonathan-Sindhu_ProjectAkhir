<?php
include 'koneksi.php';

if (isset($_POST['contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $query = "INSERT INTO kontak (name, email, message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Your message has been uploaded!'); window.location='home.php';</script>";
        
    } else {
        echo "<script>alert('Failed to send your message, Try again!');</script>";
    }}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;">
  <div class="container">
  <a class="navbar-brand" href="about.php">
        <img src="logo.png" alt="Logo" class="logo">
        </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Make your own songs!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="showdata.php">Show songs</a></li>
            <li><a class="dropdown-item" href="insertdata.php">Add songs</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="home.php">Back to Home Page</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<form class="contact-form p-4 rounded shadow" method="POST">
    <div class="mb-3">
        <label class="form-label">Your Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="4" required></textarea>
    </div>

    <button class="btn btn-primary w-100" type="submit" name="contact">Send Message</button>
</form>

            <footer class="text-center py-3 bg-dark text-light mt-5">
    © 2025 Music Hub — All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>