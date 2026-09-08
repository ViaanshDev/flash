<?php
$pageTitle = 'Portfolio — Flash Studio | Wedding Photography & Films';
include 'header.php';
?>

<?php
$headerEyebrow = 'SINCE 1975';
$headerTitle = 'Our Portfolio';
$breadcrumbActive = 'Portfolio';
include 'page-header.php';
?>

<link rel="stylesheet" href="assets/css/portfolio.css">

<!-- MAIN PORTFOLIO SECTION -->
<section class="portfolio-main" style="padding: 6.5rem 1rem; max-width: 1200px; margin: 0 auto;">
  <div class="portfolio-header" style="margin-bottom: 5rem; max-width: 700px;">
    <p class="eyebrow">OUR WORK</p>
    <h2 class="serif">Stories We've Captured</h2>
    <p class="intro-text mt-3">
      Every celebration has its own story. Explore some of the moments we've had the privilege of preserving.
    </p>
  </div>

  <div class="portfolio-list row">
    <?php
    $portfolioDir = 'images/Portfolio';
    if (is_dir($portfolioDir)) {
      $folders = scandir($portfolioDir);
      $validExtensions = ['jpg', 'jpeg', 'png', 'webp'];
      $count = 1;

      foreach ($folders as $folder) {
        if ($folder !== '.' && $folder !== '..' && is_dir($portfolioDir . '/' . $folder)) {
          $folderPath = $portfolioDir . '/' . $folder;
          $images = scandir($folderPath);
          $coverImage = '';

          // Find the first valid image for cover
          foreach ($images as $img) {
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
            if (in_array($ext, $validExtensions)) {
              $coverImage = $folderPath . '/' . $img;
              break;
            }
          }

          if ($coverImage) {
            $urlFolder = urlencode($folder);
            $formattedCount = str_pad($count, 2, '0', STR_PAD_LEFT);
            ?>
            <?php
            $encodedCoverImage = implode('/', array_map('rawurlencode', explode('/', $coverImage)));
            ?>
            <div class="col-md-6 mb-5 pb-3">
              <div class="portfolio-item">
                <a href="portfolio-detail.php?album=<?= $urlFolder ?>"
                  class="portfolio-image-link d-block overflow-hidden mb-3">
                  <img src="<?= htmlspecialchars($encodedCoverImage) ?>" alt="<?= htmlspecialchars($folder) ?>"
                    class="portfolio-cover-img" loading="lazy">
                </a>
                <div class="portfolio-content d-flex justify-content-between align-items-center mt-3">
                  <div class="portfolio-text text-start">
                    <div class="portfolio-number mb-1"
                      style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 1.1rem; color: var(--ink); opacity: 0.7;">
                      <?= $formattedCount ?> / PORTFOLIO
                    </div>
                    <h3 class="portfolio-title serif mb-0" style="font-size: 1.8rem; color: var(--ink);">
                      <?= htmlspecialchars($folder) ?>
                    </h3>
                  </div>
                  <a href="portfolio-detail.php?album=<?= $urlFolder ?>"
                    class="portfolio-arrow-btn d-flex justify-content-center align-items-center">
                    &#10095;
                  </a>
                </div>
              </div>
            </div>
            <?php
            $count++;
          }
        }
      }
    } else {
      echo "<p>Portfolio directory not found.</p>";
    }
    ?>
  </div>
</section>


<?php include 'footer.php'; ?>