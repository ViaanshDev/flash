<?php
$pageTitle = 'About Us — Flash Studio';
include 'header.php';
?>

<?php
$headerEyebrow = 'A LEGACY OF CAPTURING LOVE';
$headerTitle = 'Since 1975';
$breadcrumbActive = 'About Us';
include 'page-header.php';
?>

<!-- STORY / 50+ YEARS -->
<section style="padding: 5rem 1rem 7rem 1rem; max-width: 1100px; margin: 0 auto;">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-2 mb-5 mb-md-0" style="padding-left: 3rem;">
      <p class="eyebrow mb-2">50+ YEARS OF PRESERVING MOMENTS</p>
      <h2 style="font-size: 2.8rem; line-height: 1.25; margin-bottom: 1.6rem;">We Don't Just<br>Capture Weddings.</h2>
      <p style="color: var(--ink-soft); font-size: 1.05rem; line-height: 1.9; margin-bottom: 1.5rem;">For decades, Flash
        Studio has been invited into some of life's most meaningful celebrations. Since 1975, our journey has been built
        on trust, creativity, family values, and a deep love for preserving emotions.</p>
      <p style="color: var(--ink-soft); font-size: 1.05rem; line-height: 1.9;">From one generation to another, our
        passion remains the same — to capture the laughter, tears, love, and fleeting moments that become priceless with
        time.</p>
      <span class="signature"
        style="font-family: 'Tangerine', cursive; font-size: 3.5rem; color: var(--gold); display: block; margin-top: 1.5rem;">Flash
        Studio</span>
    </div>
    <div class="col-md-6 order-md-1">
      <img src="images/about2.JPG" alt="Wedding Moments"
        style="width: 100%; border-radius: 2px; filter: saturate(0.92); box-shadow: 0 15px 40px rgba(0,0,0,0.04);">
    </div>
  </div>
</section>

<!-- THE ART OF REMEMBERING -->
<section class="gallery-strip" id="portfolio" style="background: #d9d0c8;">

  <p class="eyebrow">THE ART OF REMEMBERING</p>
  <h2>Some Moments Happen Once.</h2>


  <div class="row g-3 gallery-row mt-4 justify-content-center">
    <div class="col-12 col-md-4">
      <img src="images/portfolio1.JPG" alt="Collage Image 1" style="height: 650px; object-fit: cover; width: 100%;">
    </div>
    <div class="col-12 col-md-4">
      <img src="images/portfolio2.JPG" alt="Collage Image 2" style="height: 650px; object-fit: cover; width: 100%;">
    </div>
    <div class="col-12 col-md-4">
      <img src="images/portfolio4.jpg" alt="Collage Image 3" style="height: 650px; object-fit: cover; width: 100%;">
    </div>
  </div>
</section>

<!-- FINAL PROMISE / CTA -->
<section class="emotional-section">
  <div class="emotional-wrap">
    <div class="emotional-text">
      <p class="eyebrow">OUR PROMISE</p>
      <h2>Your Wedding Will End.<br>The Feeling Shouldn't.</h2>

      <p>Years from now, your photographs will do more than remind you of what happened. They will remind you of how it
        felt.</p>
      <p>The laughter. The emotions. The people you loved. The moments that changed your life.</p>
      <p>At Flash Studio, we capture today with the hope that you can return to it tomorrow.</p>
      <a href="contact.php" class="btn btn-editorial mt-3" style="width: auto; display: inline-block;">LET'S TELL YOUR
        STORY &rarr;</a>
    </div>
    <div class="emotional-img">
      <img src="images/whychoose.JPG" alt="Our Promise">
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>