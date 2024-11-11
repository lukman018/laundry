<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- css link --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
          <a href="index.html" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Lucky Store</h1>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#hero" >Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted" href="{{route('login')}}">Masuk</a>

        </div>
      </header>

      <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>Solusi Bisnis Ada Di Web Saya</h1>
                <p>Kami Adalah Avengers</p>
                <div class="d-flex">
                  <a href="{{route('login')}}" class="btn-get-started">Masuk</a>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('images/logo_tampilan.png')}}" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>About Us</h2>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                  Ini adalah website yang saya gunakan untuk belajar
                </p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>tidak bisa ber word word</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>cuman mau makan</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>dan ingin pulang</span></li>
                </ul>
              </div>

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>beginilah kehidufun saya hehehe </p>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </div>

          </div>

        </section><!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="section why-us light-background" data-builder="section">

          <div class="container-fluid">

            <div class="row gy-4">

              <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                  <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                  </p>
                </div>

                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                  <div class="faq-item faq-active">

                    <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                    <div class="faq-content">
                      <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item">
                    <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                    <div class="faq-content">
                      <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item">
                    <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                    <div class="faq-content">
                      <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                </div>

              </div>

              <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="{{asset('images/tampilan_about.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
              </div>
            </div>

          </div>

        </section><!-- /Why Us Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-activity icon"></i></div>
                  <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                  <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                  <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                  <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

          <img src="assets/img/cta-bg.jpg" alt="">

          <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-xl-9 text-center text-xl-start">
                <h3>Call To Action</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
              </div>
            </div>

          </div>

        </section>

        <section id="faq-2" class="faq-2 section light-background">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <div class="faq-container">

                  <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                    <div class="faq-content">
                      <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                    <div class="faq-content">
                      <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                    <div class="faq-content">
                      <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                    <div class="faq-content">
                      <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                    <div class="faq-content">
                      <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                </div>

              </div>

            </div>

          </div>

        </section><!-- /Faq 2 Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

              <div class="col-lg-5">

                <div class="info-wrap">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h3>Address</h3>
                      <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                      <h3>Call Us</h3>
                      <p>+1 5589 55488 55</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h3>Email Us</h3>
                      <p>info@example.com</p>
                    </div>
                  </div><!-- End Info Item -->

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>

              <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">

                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Your Name</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email-field" required="">
                    </div>

                    <div class="col-md-12">
                      <label for="subject-field" class="pb-2">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject-field" required="">
                    </div>

                    <div class="col-md-12">
                      <label for="message-field" class="pb-2">Message</label>
                      <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit">Send Message</button>
                    </div>

                  </div>
                </form>
              </div><!-- End Contact Form -->

            </div>

          </div>

        </section><!-- /Contact Section -->

      </main>

      <!--Nama-->
      <footer id="footer" class="footer">
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="d-flex align-items-center">
                <span class="sitename">Arsha</span>
              </a>
              <div class="footer-contact pt-3">
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
              </div>
            </div>

            <!--Media sosial-->
            <div class="col-lg-4 col-md-12">
              <h4>Follow Me</h4>
              <p>Ikuti Semua Media Sosial Kami Disini </p>
              <div class="social-links d-flex">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Lucky Store</strong></p>
          <div class="credits">Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </footer>

      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Preloader -->
      <div id="preloader"></div>



      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>

</body>
</html>
