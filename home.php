<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Music Hub Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="homee.css">
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
        <li class="nav-item"><a class="nav-link" href="contact.php">Any Problems? Contact Us!</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="welcome-box">
    <h1>Welcome Back!</h1>
    <p>Enjoy your favorite music and explore new playlists that we specially recommend for you.</p>
</div>

<h2 class="section-title">Playlist For You</h2>

<div class="playlist-grid">

    <div class="playlist-card">
        <img src="chill.jpeg">
        <p>Relax & Chill</p>
    </div>

    <div class="playlist-card">
        <img src="morning.jpeg">
        <p>Morning Energy</p>
    </div>

    <div class="playlist-card">
        <img src="sunrise.jpeg">
        <p>Focus Beats</p>
    </div>

    <div class="playlist-card">
        <img src="indo.jpeg">
        <p>Top Hits Indo</p>
    </div>

    <div class="playlist-card">
        <img src="night.jpeg">
        <p>Night Vibes</p>
    </div>

</div>


<footer>
    © 2025 Music Hub — All rights reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
