<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me - Tharusha Arunalu</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/contact.css">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'partials/nav.php'; ?>

  <!-- Contact Section -->
  <section class="contact-section text-white py-5">
    <div class="container">
      <h2 class="section-title text-center mb-5">GET IN <span class="highlight">TOUCH</span></h2>

      <div class="row">
        <!-- Contact Info -->
        <div class="col-lg-5 mb-4 mb-lg-0">
          <h4 class="mb-4">DON'T BE SHY !</h4>
          <p>
            Feel free to get in touch with me. I am always open to discussing new projects, creative ideas, or opportunities to be part of your visions.
          </p>

          <!-- Contact Details -->
          <div class="contact-info mb-4">
            <div class="d-flex align-items-center mb-3">
              <span class="icon bg-warning text-dark me-3">
                <i class="fas fa-envelope"></i>
              </span>
              <div>
                <h6 class="mb-0">MAIL ME</h6>
                <a href="mailto:tharushaarunalu17@gmail.com" class="text-white">tharushaarunalu17@gmail.com</a>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <span class="icon bg-warning text-dark me-3">
                <i class="fas fa-phone"></i>
              </span>
              <div>
                <h6 class="mb-0">CALL ME</h6>
                <a href="tel:+94767022174" class="text-white">+94 767022174</a>
              </div>
            </div>
          </div>

          <!-- Social Media -->
          <div class="social-icons">
            <a href="https://linkedin.com/in/tharusha-arunalu-963318200/" class="text-white me-3"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/tharushaarunalu" class="text-white me-3"><i class="fab fa-github"></i></a>
            <a href="https://www.youtube.com/@kidmirror" class="text-white me-3"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
          <form action="send_mail.php" method="POST">
            <div class="row g-3">
              <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="YOUR NAME" required>
              </div>
              <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="YOUR EMAIL" required>
              </div>
              <div class="col-md-4">
                <input type="text" name="subject" class="form-control" placeholder="YOUR SUBJECT" required>
              </div>
              <div class="col-12">
                <textarea name="message" rows="5" class="form-control" placeholder="YOUR MESSAGE" required></textarea>
              </div>
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-warning mt-3 d-flex align-items-center">
                  SEND MESSAGE
                  <i class="fas fa-paper-plane ms-2"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
