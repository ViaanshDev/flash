<?php
$pageTitle = 'Contact Us — Flash Studio';
include 'header.php';
?>
<?php
$headerEyebrow = 'SINCE 1975';
$headerTitle = 'Let\'s Connect';
$breadcrumbActive = 'Contact';
include 'page-header.php';
?>

<!-- MAIN CONTACT SECTION -->
<section class="contact-main">
  <div class="row">
    <!-- Contact Information -->
    <div class="col-lg-5">
      <div class="contact-info-block">
        <p class="eyebrow">GET IN TOUCH</p>
        <h2 class="serif">We'd Love to Hear From You</h2>
        <p class="intro-text">
          Whether you're planning your dream wedding, a beautiful pre-wedding shoot, or a special celebration, we're
          here to capture every meaningful moment with care, creativity, and heart.
        </p>

        <div class="contact-detail-item">
          <h5>Call Us</h5>
          <p><a href="tel:+919974962667">+91 99749 62667</a></p>
        </div>

        <div class="contact-detail-item">
          <h5>Email Us</h5>
          <p><a href="mailto:info@flashstudio.co.in">info@flashstudio.co.in</a></p>
        </div>

        <div class="contact-detail-item">
          <h5>Visit Us</h5>
          <p>Ahmedabad, Gujarat, India</p>
        </div>

        <div class="contact-detail-item border-0">
          <h5>Follow Our Journey</h5>
          <div class="contact-social mt-2">
            <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="#"><i class="bi bi-youtube"></i> YouTube</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-lg-7">
      <div class="contact-form-wrap">
        <h3 class="serif">Tell Us About Your Special Day</h3>
        <form class="contact-form">
          <div class="row">
            <div class="col-md-12">
              <label class="form-label">Your Name *</label>
              <input type="text" class="form-control" required>
            </div>

          </div>

          <div class="row mt-2">
            <div class="col-md-6">
              <label class="form-label">Email Address *</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone Number *</label>
              <input type="tel" class="form-control" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6">
              <label class="form-label">Event Type</label>
              <select class="form-select">
                <option selected disabled>Select an option</option>
                <option>Wedding</option>
                <option>Pre-Wedding</option>
                <option>Engagement</option>
                <option>Reception</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Wedding / Event Date</label>
              <input type="date" class="form-control">
            </div>
          </div>

          <div class="mt-2">
            <label class="form-label">Event Location</label>
            <input type="text" class="form-control">
          </div>

          <div class="mt-2">
            <label class="form-label">How Did You Hear About Us?</label>
            <input type="text" class="form-control">
          </div>

          <div class="mt-2">
            <label class="form-label">Tell Us A Little About Your Celebration</label>
            <textarea class="form-control" rows="3" style="resize: none;"></textarea>
          </div>



          <button type="submit" class="btn btn-editorial">BEGIN OUR JOURNEY &rarr;</button>
        </form>
      </div>
    </div>
  </div>
</section>







<?php include 'footer.php'; ?>