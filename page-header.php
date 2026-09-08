<?php
// Default values if not set
$headerEyebrow = isset($headerEyebrow) ? $headerEyebrow : 'FLASH STUDIO';
$headerTitle = isset($headerTitle) ? $headerTitle : 'Our Story';
$breadcrumbActive = isset($breadcrumbActive) ? $breadcrumbActive : 'Page';
?>
<section class="intro-section" style="padding-top: 10rem; padding-bottom: 4rem; background-color: var(--cream-deep);">
  <div class="decorative-detail mb-3"
    style="font-size: .65rem; letter-spacing: .25em; text-transform: uppercase; color: var(--gold); display: flex; justify-content: center; align-items: center; gap: 1rem;">
    <span class="line" style="width: 40px; height: 1px; background: var(--gold-line);"></span>
    <?= htmlspecialchars($headerEyebrow) ?>
    <span class="line" style="width: 40px; height: 1px; background: var(--gold-line);"></span>
  </div>
  <h1 class="script" style="font-size: 6.5rem; color: var(--ink);"><?= htmlspecialchars($headerTitle) ?></h1>

  <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-4">
    <ol class="breadcrumb mb-0" style="font-size: .75rem; letter-spacing: .2em; text-transform: uppercase;">
      <li class="breadcrumb-item"><a href="index.php" style="color: var(--ink-soft); text-decoration: none;">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page" style="color: var(--ink);"><?= htmlspecialchars($breadcrumbActive) ?></li>
    </ol>
  </nav>
</section>
