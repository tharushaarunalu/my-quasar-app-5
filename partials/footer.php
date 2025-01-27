<script>
  VANTA.BIRDS({
    el: "#vanta-background",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    backgroundColor: 0x0,
    backgroundAlpha: 1,
    color1: 0x269d,
    color2: 0xd1ff,
    colorMode: "varianceGradient",
    quantity: 5,
    birdSize: 1,
    wingSpan: 30,
    speedLimit: 5,
    separation: 20,
    alignment: 20,
    cohesion: 20
  });
</script>
<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <!-- Social Media Links -->
    <div class="mb-3">
      <a href="https://facebook.com" target="_blank" class="text-white me-3">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com" target="_blank" class="text-white me-3">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://linkedin.com" target="_blank" class="text-white me-3">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="https://github.com" target="_blank" class="text-white">
        <i class="fab fa-github"></i>
      </a>
    </div>

    <!-- Copyright -->
    <p>&copy; <span id="year"></span> Tharusha Arunalu. All rights reserved.</p>
  </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Dynamic Year Script -->
<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>

</body>
</html>
