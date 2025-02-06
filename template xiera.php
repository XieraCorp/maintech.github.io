<?php
/*
Template Name: Xiera Company
*/
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xiera Company</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles.css" />
    <style>
      .navbar {
        background-color: #63b0b8; /* Warna background navbar */
      }
      .main-section {
        background-color: #63b0b8; /* Warna background main section */
        color: white; /* Warna teks main section */
        padding: 50px 0;
      }
      .main-title {
        font-size: 5rem; /* Ukuran font untuk judul utama */
        font-weight: bold;
      }
      footer {
        background-color: #63b0b8; /* Warna background footer */
        color: white; /* Warna teks footer */
        padding: 20px 0;
        text-align: center;
      }
      .social-icons a {
        margin: 0 10px;
        color: white; /* Warna ikon sosial media */
        text-decoration: none;
      }
      .social-icons a:hover {
        color: #007bff;
      }
    </style>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png"
          alt="Xiera Company Logo"
          class="d-inline-block align-top"
        />
        Xiera
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Main Section -->
    <section class="main-section text-center">
      <div class="container">
        <h1 class="main-title">Xiera Company</h1>
        <p>Coming Soon</p>

        <!-- Bootstrap Carousel -->
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/kopi1.jpg" class="d-block w-100" alt="Coffee Cup 1" />
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/kopi2.jpg" class="d-block w-100" alt="Coffee Cup 2" />
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/kopi3.jpg" class="d-block w-100" alt="Coffee Cup 3" />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2024 Xiera. All rights reserved.</p>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"
            ><i class="fab fa-instagram"></i
          ></a>
        </div>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
      </div>
    </footer>

    <!-- Font Awesome for social icons -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
