<?php
$album = isset($_GET['album']) ? basename($_GET['album']) : '';
$portfolioDir = 'images/Portfolio/' . $album;

// Prevent directory traversal and check if valid folder
if (empty($album) || $album === '.' || $album === '..' || !is_dir($portfolioDir)) {
  header("Location: portfolio.php");
  exit;
}

$displayAlbum = preg_replace('/([a-z])and([A-Z])/', '$1 and $2', $album);
$pageTitle = htmlspecialchars($displayAlbum) . ' — Flash Studio | Wedding Photography & Films';
include 'header.php';
?>

<?php

$headerTitle = htmlspecialchars($displayAlbum);
$breadcrumbActive = 'Portfolio / ' . htmlspecialchars($displayAlbum);
include 'page-header.php';
?>

<link rel="stylesheet" href="assets/css/portfolio.css">

<!-- MAIN GALLERY SECTION -->
<section class="gallery-main" style="padding: 6.5rem 1rem; max-width: 1400px; margin: 0 auto;">


  <div class="portfolio-masonry">
    <?php
    $validExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    $images = scandir($portfolioDir);

    // Filter and sort images naturally
    $validImages = [];
    foreach ($images as $img) {
      $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
      if (in_array($ext, $validExtensions)) {
        $validImages[] = $img;
      }
    }
    natsort($validImages);

    if (count($validImages) > 0) {
      foreach ($validImages as $img) {
        $imgPath = $portfolioDir . '/' . $img;
        $encodedImgPath = implode('/', array_map('rawurlencode', explode('/', $imgPath)));
        ?>
        <div class="masonry-item">
          <img src="<?= htmlspecialchars($encodedImgPath) ?>"
            alt="<?= htmlspecialchars($displayAlbum) ?> photography by Flash Studio" loading="lazy">
        </div>
        <?php
      }
    } else {
      echo "<p class='text-center w-100'>No images found in this collection.</p>";
    }
    ?>
  </div>

  <div class="text-center mt-5 pt-4">
    <a href="portfolio.php" class="btn btn-outline-dark"
      style="font-family: 'Jost', sans-serif; letter-spacing: 0.1em; font-weight: 500; text-transform: uppercase;">&larr;
      ALL PORTFOLIOS</a>
  </div>
</section>

<!-- LIGHTBOX MARKUP -->
<div id="portfolio-lightbox" class="portfolio-lightbox">
  <button id="lightbox-close" class="lightbox-close">&times;</button>
  <button id="lightbox-prev" class="lightbox-prev">&#10094;</button>

  <div class="lightbox-img-wrapper">
    <img id="lightbox-img" class="lightbox-img" src="" alt="Fullscreen image">
    <div id="lightbox-counter" class="lightbox-counter"></div>
  </div>

  <button id="lightbox-next" class="lightbox-next">&#10095;</button>
</div>



<script src="assets/js/portfolio.js"></script>
<?php include 'footer.php'; ?>