<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume - About Me</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Vanta.js and Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.fog.min.js"></script>
</head>
<body>
  <?php include 'partials/nav.php'; ?>

  <!-- Vanta Background -->
  <div id="vanta-background" style="min-height: 100vh; width: 100%; position: relative;">
    <!-- Content Section -->
    <section class="about-section text-white">
      <div class="container">
        <h2 class="section-title text-center mb-5">ABOUT <span class="highlight">ME</span></h2>

        <!-- Personal Info -->
        <div class="row">
          <div class="col-lg-6">
            <h4 class="mb-4">PERSONAL INFOS</h4>
            <ul class="info-list">
              <li><strong>First Name   :</strong>Tharusha</li>
              <li><strong>Last Name    :</strong> Arunalu</li>
              <li><strong>Age          :</strong> 24 Years</li>
              <li><strong>Nationality  :</strong> Sri Lankan</li>
            </ul>
            <ul class="info-list">
              <li><strong>Address   :</strong> Badulla, Sri Lanka</li>
              <li><strong>Phone     :</strong> +94 767022174</li>
              <li><strong>Email     :</strong> tharushaarunalu17@gmail.com</li>
              <li><strong>Languages :</strong> English, Sinhala, Tamil</li>
            </ul>
            <button class="btn btn-warning mt-3">DOWNLOAD CV</button>
          </div>

          <!-- Experience Stats -->
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6 stat-box">
                <h3>1<span>+</span></h3>
                <p>YEARS OF EXPERIENCE</p>
              </div>
              <div class="col-md-6 stat-box">
                <h3>3<span>+</span></h3>
                <p>COMPLETED PROJECTS</p>
              </div>
              <div class="col-md-6 stat-box">
                <h3>0<span>+</span></h3>
                <p>HAPPY CUSTOMERS</p>
              </div>
              <div class="col-md-6 stat-box">
                <h3>0<span>+</span></h3>
                <p>AWARDS WON</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Skills Section -->
        <h4 class="mt-5 mb-4 text-center">MY SKILLS</h4>
        <div class="row text-center">
          <div class="col-md-3 skill-box"><div class="circle" data-percent="25">80%</div><p>HTML</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="89">89%</div><p>JAVASCRIPT</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="70">70%</div><p>CSS</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="66">66%</div><p>PHP</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="95">50%</div><p>WORDPRESS</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="50">80%</div><p>NODE JS</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="65">50%</div><p>VEUE JS</p></div>
          <div class="col-md-3 skill-box"><div class="circle" data-percent="45">65%</div><p>REACT</p></div>
        </div>
      </div>
    </section>

    <!-- Experience & Education Section -->
    <section class="experience-education text-white mt-5">
      <div class="container">
        <h2 class="section-title text-center mb-5">EXPERIENCE & EDUCATION</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="timeline-box"><span class="badge bg-secondary">2021 - PRESENT</span><h5>BICT HONOURS</h5><p>UNIVERSITY OF VAVUNIYA</p></div>
            <div class="timeline-box"><span class="badge bg-secondary">2019</span><h5>ADVANCED LEVEL</h5><p></p></div>
            <div class="timeline-box"><span class="badge bg-secondary">2016</span><h5>ORDANARI LEVEL</h5><p></p></div>
          </div>
          <div class="col-md-6">
            <div class="timeline-box"><span class="badge bg-secondary">2020</span><h5>Data Recorder - Car Wash Management System</h5><p>Badulla Motors - 2020.</p></div>
            <div class="timeline-box"><span class="badge bg-secondary">Since 2022</span><h5>Online Goods Sales — Since </h5><p>Managed and updated the online sales platform, ensuring smooth order processing.</p></div>
            <div class="timeline-box"><span class="badge bg-secondary"> Aug 2024 (Going on)</span><h5>MERN Stack Course</h5><p>Certificate in MERN Stack Development.</p></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Vanta Fog Effect -->
  <script>
    VANTA.FOG({
      el: "#vanta-background",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      highlightColor: 0x210fac,
      midtoneColor: 0x98ff,
      lowlightColor: 0x2d00ff,
      baseColor: 0x50d2e,
      blurFactor: 0.6,
      zoom: 1,
      speed: 1
    });
  </script>

  <?php include 'partials/footer.php'; ?>
</body>
</html>
