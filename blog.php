<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/blog.css">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'partials/nav.php'; ?>

  <!-- Blog Section -->
  <section class="blog-section text-white py-5">
    <div class="container">
      <h2 class="section-title text-center mb-5">MY <span class="highlight">BLOG</span></h2>

      <!-- Blog Grid -->
      <div class="row g-4">
        <!-- Blog Post 1 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog1.jpg" class="img-fluid" alt="Blog 1">
            <div class="blog-content">
              <h4>How to Own Your Audience by Creating an Email List</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog2.jpg" class="img-fluid" alt="Blog 2">
            <div class="blog-content">
              <h4>Top 10 Toolkits for Deep Learning in 2020</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog3.jpg" class="img-fluid" alt="Blog 3">
            <div class="blog-content">
              <h4>Everything You Need to Know About Web Accessibility</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>

        <!-- Blog Post 4 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog4.jpg" class="img-fluid" alt="Blog 4">
            <div class="blog-content">
              <h4>How to Inject Humor & Comedy Into Your Brand</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>

        <!-- Blog Post 5 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog5.jpg" class="img-fluid" alt="Blog 5">
            <div class="blog-content">
              <h4>Women in Web Design: How To Achieve Success</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>

        <!-- Blog Post 6 -->
        <div class="col-md-4">
          <div class="blog-card">
            <img src="assets/images/blog6.jpg" class="img-fluid" alt="Blog 6">
            <div class="blog-content">
              <h4>Evergreen versus topical content: An overview</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <nav class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
