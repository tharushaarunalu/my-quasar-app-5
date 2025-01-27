<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/portfolio.css">

  <!-- Lightbox CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'partials/nav.php'; ?>

  <!-- Portfolio Section -->
  <section class="portfolio-section text-white py-5">
    <div class="container">
      <h2 class="section-title text-center mb-5">MY <span class="highlight">PORTFOLIO</span></h2>

      <!-- Portfolio Grid -->
      <div class="row g-4">
        <!-- Portfolio Item 1 -->
        <div class="col-md-4">
          <a href="assets/images/item1.jpg" class="portfolio-item popup-link">
            <img src="assets/images/item1.jpg" class="img-fluid" alt="Portfolio Item 1">
          </a>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-4">
          <a href="#youtube-popup" class="portfolio-item popup-youtube">
            <div class="portfolio-overlay text-center d-flex align-items-center justify-content-center">
              <h4>YOUTUBE PROJECT</h4>
            </div>
          </a>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-4">
          <a href="assets/images/item3.jpg" class="portfolio-item popup-link">
            <img src="assets/images/item3.jpg" class="img-fluid" alt="Portfolio Item 3">
          </a>
        </div>

        <!-- Portfolio Item 4 -->
        <div class="col-md-4">
          <a href="assets/images/item4.jpg" class="portfolio-item popup-link">
            <img src="assets/images/item4.jpg" class="img-fluid" alt="Portfolio Item 4">
          </a>
        </div>

        <!-- Portfolio Item 5 -->
        <div class="col-md-4">
          <a href="assets/images/item5.jpg" class="portfolio-item popup-link">
            <img src="assets/images/item5.jpg" class="img-fluid" alt="Portfolio Item 5">
          </a>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-4">
          <a href="assets/images/item6.jpg" class="portfolio-item popup-link">
            <img src="assets/images/item6.jpg" class="img-fluid" alt="Portfolio Item 6">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- YouTube Project Popup -->
  <div id="youtube-popup" class="mfp-hide popup-box">
    <h3 class="popup-title text-center mb-4">YOUTUBE PROJECT</h3>
    <ul class="popup-details mb-4">
      <li><strong>Project:</strong> Video</li>
      <li><strong>Client:</strong> Videohive</li>
      <li><strong>Languages:</strong> Adobe After Effects</li>
      <li><strong>Preview:</strong> <a href="https://www.videohive.net" target="_blank">www.videohive.net</a></li>
    </ul>
    <div class="popup-video">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/2fngvQS_PmQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'partials/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.popup-link').magnificPopup({type:'image'});
      $('.popup-youtube').magnificPopup({type:'inline'});
    });
  </script>
</body>
</html>
