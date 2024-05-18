<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GlamUp Nails</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\logo.png" rel="icon">
  <link href="assets\img\logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 9AM to 6PM
      </div>
      <div class="">
        <?php
        session_start();
        if (isset($_SESSION["email"])) {
          echo "Welcome, " . $_SESSION["email"];
          // Add your content for logged-in users here
        } else {
          echo "You are not logged in. Please log in to access this page.";
        }
        ?>

      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 93132 25419
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto">GlamUp</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php
          if (isset($_SESSION["email"])) {
            echo '<a class="nav-link scrollto" href="logout.php">Logout</a>';
          } else {
            echo '<a class="nav-link scrollto" href="registration.php">Login/SignUp</a>';
          }
          ?>
          <!-- <li><a class="nav-link scrollto" href="registration.php">Login/SignUp</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="logout.php">Logout</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
        Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/background-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>GlamUp</span></h2>
            <p>where beauty and relaxation intertwine to pamper your hands and feet. Discover a world of impeccable nail
              artistry, personalized care, and a tranquil escape from the everyday hustle. Your journey to stunning,
              well-groomed nails begins here.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/background-2.jpg)">
          <div class="container">
            <h2>Welcome to <span>GlamUp</span></h2>
            <p>where beauty and relaxation intertwine to pamper your hands and feet. Discover a world of impeccable nail
              artistry, personalized care, and a tranquil escape from the everyday hustle. Your journey to stunning,
              well-groomed nails begins here.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/background-3.jpg)">
          <div class="container">
            <h2>Welcome to <span>GlamUp</span></h2>
            <p>where beauty and relaxation intertwine to pamper your hands and feet. Discover a world of impeccable nail
              artistry, personalized care, and a tranquil escape from the everyday hustle. Your journey to stunning,
              well-groomed nails begins here.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">





    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img
                  src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img
                  src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img
                  src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img
                  src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img
                  src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img
                  src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img
                  src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img
                  src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Browse through our finest work
            There’s nothing a good manicure and pedicure can’t fix, don’t you think? Mani-pedis are like a
            type of therapy for your soul –– and you end up looking good in the bargain. There’s something
            very empowering about flaunting those perfect digits.</p>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <h4 class="title"><a href="">MANICURES</a></h4>
            <p class="description">You’d never go anywhere without your nails looking fresh to death. Enter.
              Our luxe service includes nail & cuticle care, Epsom salt scrub exfoliation,
              can’t-live-without massage, and your choice of polish.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <h4 class="title"><a href="">PEDICURE</a></h4>
            <p class="description">Our luxe service includes a soak in your choice of essential oil, nail
              and cuticle care, callus reduction, Epsom salt scrub exfoliation, can’t-live-without
              massage, essential oil hot towel wrap, and your choice of polish.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <h4 class="title"><a href="">ACRYLIC NAILS</a></h4>
            <p class="description">Acrylic nails remain a firm favorite in nail grooming, being a lady of
              leisure is purely justified by your acrylic nails.</p>
          </div>
          <br>
          <br>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <h4 class="title"><a href="">ARTIFICIAL NAILS</a></h4>
            <p class="description">Artificial nails are a good way to add strength and length to your
              natural nails. Great for anyone with nails lacking in natural wow factor.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <h4 class="title"><a href="">GEL BUILDER NAILS</a></h4>
            <p class="description">No-chip, long-lasting gel color offering incredible shine that lasts up
              to two weeks, following our quickie mani. Perfect for busy schedules, extended vacations or
              any occasion because… life.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <h4 class="title"><a href="">OMBRE NAILS</a></h4>
            <p class="description">When you think of ombre nails, your mind might jump to the basic nude and
              white ombre nails that are always popular. But, if you have already tried that nail look and
              want something different, don’t worry because there are a lot of different colors</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <!-- <p>The GlamUp Nails is a high-design nail studio providing a luxury experience with seasonal collections and personalized nail art since 2008. Our creative artists offer color consultations as well as keeping in the know with the latest trends to ensure you leave with a manicure / pedicure as unique as you are.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>The GlamUp Nails is a high-design nail studio providing a luxury experience with seasonal collections
              and personalized nail art since 2008.</h3>
            <p class="fst-italic">
              Our creative artists offer color consultations as well as keeping in the know with the latest trends to
              ensure you leave with a manicure / pedicure as unique as you are.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Nail Perfectionists:
                We're passionate about flawless nails.</li>
              <li><i class="bi bi-check-circle"></i> Relaxation Oasis:
                Escape to our tranquil nail sanctuary</li>
              <li><i class="bi bi-check-circle"></i> Safety First:
                Your well-being is our top priority.</li>
            </ul>
            <p>
              With our unwavering commitment to excellent customer care and a team of highly skilled nail stylists, we
              have not only garnered a loyal clientele seeking professional and classy nail styles but have also become
              a sanctuary for those looking to create a haven for nail technicians. We understand that the nail industry
              can be demanding, so we've gone above and beyond to establish an environment where our talented nail techs
              not only work but also feel valued and cared for.Moreover, as we embarked on our journey, we identified a
              crucial gap in the market: the quality of nail products. Recognizing that the existing product lines did
              not meet our high standards for excellence, we took matters into our own hands. Committed to delivering
              nothing but the best, we embarked on the path of crafting our very own line of premium nail products.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>The GlamUp Nails is a high-design nail studio providing a luxury experience with seasonal collections and
            personalized nail art since 2008. Our creative artists offer color consultations as well as keeping in the
            know with the latest trends to ensure you leave with a manicure / pedicure as unique as you are..</p>
        </div>

      </div>


      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form"
              onsubmit="return handleFormSubmit()">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <?php
      // Check if the user is logged in
      if (!isset($_SESSION["email"])) {
        // User is not logged in, so redirect to the login page
        header("Location: login.php");
        exit(); // Stop further execution
      }

      // User is logged in, continue displaying the appointment page
      ?>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>We enhance your beauty and pamper yourself – schedule an appointment today and experience a world of
            impeccable nail artistry and personalized care.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
          data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group mt-2">
              <input type="datetime" name="date" class="form-control datepicker" id="date"
                placeholder="Appointment Date" required>
            </div>
            <div class="col-md-6 form-group mt-2">
              <select name="department" id="department" class="form-select">
                <option value="">Select services</option>
                <option value="Manicure">manicure</option>
                <option value="Pedicure">Pedicure</option>
                <option value="acrylic nails">acrylic nails</option>
                <option value="gel builder nails">gel builder nails</option>
                <option value="ombre nails">ombre nails</option>

              </select>
            </div>

            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>GlamUp</h3>
                <p>
                  A108 Adam Street <br>
                  NY 535022, USA<br><br>
                  <strong>Phone:</strong> +91 93132 25419<br>
                  <strong>Email:</strong> info@glamup.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/glamup_nail" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>GlamUp Nails</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js">
      function handleFormSubmit() {
        document.getElementById('success-message').style.display = 'block';

        // Prevent the form from submitting
        return false;
      }
    </script>

</body>

</html>