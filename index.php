<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

<div id="vanta-background" style="height: 100vh; width: 100%; position: relative;">
  <div class="intro-content text-center position-relative" style="z-index: 2;">
    <h1>Welcome to My Portfolio</h1>
    <p>I am Tharusha Arunalu, a creative web designer and full-stack developer. Explore my work!</p>
    <a href="assets/views/profile.php" class="btn btn-primary mt-3">Learn More</a>
  </div>
  <img src="assets/images/profile.jpg" alt="Tharusha Arunalu" class="position-absolute top-50 start-50 translate-middle rounded-circle" style="width: 600px; height: 600px; object-fit: cover; z-index: 1; opacity: 0.8;">
</div>

<?php include 'partials/footer.php'; ?>
  
</body>
</html>