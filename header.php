<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($pageTitle) ? $pageTitle : 'Flash Studio — Documentary & Editorial Wedding Photography' ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Tangerine:wght@400;700&family=Jost:wght@300;400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  ?>
  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-iris sticky-top">
    <div class="container-fluid px-4">
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-none d-lg-flex flex-grow-1 justify-content-start">
        <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
        <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
        <a class="nav-link <?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php">Services</a>
      </div>

      <a class="brand-center mx-auto" href="index.php">
        <span class="brand-name"><img src="images/logo.png" alt="" width="auto" height="40px"></span>
      </a>

      <div class="d-none d-lg-flex flex-grow-1 justify-content-end align-items-center">

        <a class="nav-link <?= ($currentPage == 'portfolio.php' || $currentPage == 'portfolio-detail.php') ? 'active' : '' ?>"
          href="portfolio.php">Portfolio</a>
        <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
        <i class="bi bi-camera nav-icon"></i>
        <i class="bi bi-calendar3 nav-icon"></i>
      </div>

      <div class="collapse navbar-collapse mt-3 d-lg-none" id="navContent">
        <div class="d-flex flex-column">
          <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php#home">Home</a>
          <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
          <a class="nav-link <?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php">Services</a>
          <a class="nav-link <?= ($currentPage == 'portfolio.php' || $currentPage == 'portfolio-detail.php') ? 'active' : '' ?>"
            href="portfolio.php">Portfolio</a>
          <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
        </div>
      </div>
    </div>
  </nav>