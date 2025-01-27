
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/profile.css">

  <!-- Vanta.js and Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.globe.min.js"></script>
</head>
<body>

  <!-- Vanta Background -->
  <div id="vanta-background" style="height: 100vh; width: 100%; position: relative;">
    <!-- Profile Content -->
    <div class="container text-white profile-container">

      <div class="row align-items-center">
        <!-- Profile Image -->
        
       
      </div>
    </div>
  </div>

  <!-- Vanta Globe Effect -->
  <script>
    VANTA.GLOBE({
      el: "#vanta-background",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      backgroundColor: 0x23153c,
      color: 0xff3f81,
      color2: 0xffffff,
      size: 1
    });
  </script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
