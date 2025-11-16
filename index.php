<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Hub Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="navbarr.css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
        <a class="navbar-brand" href="about.php">
        <img src="logo.png" alt="Logo" class="logo">
        </a>

    <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent">

      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="login.php">Log in to your account!</a></li>
        <li class="nav-item"><a class="nav-link active" href="register.php">Don't have an account yet?</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero text-center text-white">
    <div class="container">
        <h1 class="display-4 fw-bold">Discover Your Next Favorite Music</h1>
        <p class="lead">Stream, explore, and enjoy millions of songs.</p>
        <a href="login.php" class="btn btn-primary btn-lg mt-3">Start Listening</a>
    </div>
</section>

<div class="container mt-5">
    <h2 class="text-center mb-4">Genres</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="genre-card p-4 text-center rounded">
                <h4>Pop</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="genre-card p-4 text-center rounded">
                <h4>Rock</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="genre-card p-4 text-center rounded">
                <h4>Hip-Hop</h4>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Recommended for You</h2>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="song-card p-3 rounded text-center">
                <img src="tulus.jpeg" class="img-fluid rounded mb-2">
                <h6>Hati-Hati di Jalan</h6>
                <p class="band">Tulus</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="song-card p-3 rounded text-center">
                <img src="mj.jpeg" class="img-fluid rounded mb-2">
                <h6>Billie Jean</h6>
                <p class="band">Michael Jackson</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="song-card p-3 rounded text-center">
                <img src="bruno.jpeg" class="img-fluid rounded mb-2">
                <h6>Just The Way You Are</h6>
                <p class="band">Bruno Mars</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="song-card p-3 rounded text-center">
                <img src="coldplay.jpeg" class="img-fluid rounded mb-2">
                <h6>Sparks</h6>
                <p class="band">Coldplay</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2025 Music Hub. All rights reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
