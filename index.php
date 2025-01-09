<?php
    include('function.php');

    $listKasus = readKasus();
    $listKebutuhan = readKebutuhan();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZERO HUNGER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">zerohunger@upi.edu</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 999 999 999</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZERO<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="Login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>zerohunger</span></h2>
          <p>Access to safe, nutritious, and sufficient food year-round. End malnutrition in all its forms.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=ifCQ4LqT8G8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">Case</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="#faq" class="stretched-link">Kebutuhan</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#recent-posts" class="stretched-link">Information</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="#clients" class="stretched-link">Starving Case</a></h4>
            </div>
          </div>
          <!-- End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Zero hunger merupakan satu dari tujuh belas tujuan SDGs untuk memperbaiki dunia. Zero hunger ada karena munculnya berbagai permasalahan pokok yang berhubungan dengan kelaparan. Berdasarkan Global Hunger Index (GHI),
            Indonesia dalam kategori kritis. DI tinagkat ASEAN Indoensia posisi lebih buruk dari pada negara tetangga
          </p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>ZERO HUNGER</h3>
            <img src="assets/img/kasus1.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Penanganan masalah zero hunger sangat penting untuk tercapainya kesejahteraan suatu negara. Permasalahan kelaparan ini dapat mempengaruhi sumber daya manusia pada suatu negara yang berakibat pada kemajuan negara tersebut. </p>
            <p>Dampak yang ditimbulkan khususnya pada anak-anak yaitu nilai kalori berada di bawah standar (undernourishment); memiliki ukuran berat badan lebih rendah dari kondisi normal (kurus); sebagai akibat kurang gizi yang bersifat akut (child wasting); anak-anak yang berusia kurang dari lima tahun dengan ukuran tubuh kuntet (child stunting) serta tingkat kematian yang tinggi (child mortality) (von Grebmer 2017 cit. Pakpahan, 2017).</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Mari kita lihat beberapa fakta penting tentang zerohunger :
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> mengakhiri kelaparan.</li>
                <li><i class="bi bi-check-circle-fill"></i> mencapai ketahanan pangan, memperbaiki nutrisi.</li>
                <li><i class="bi bi-check-circle-fill"></i> mempromosikan pertanian yang berkelanjutan.</li>
              </ul>
              <p>
                Dengan mengakhiri kelaparan, mencapai ketahanan pangan, memperbaiki nutrisi, dan mempromosikan pertanian yang berkelanjutan, kita sedang membangun dasar untuk sebuah masa depan yang lebih baik dan lebih adil. 
                Hanya dengan mengatasi masalah kelaparan, meningkatkan akses terhadap makanan bergizi, dan melindungi lingkungan melalui praktik pertanian yang berkelanjutan, kita dapat mencapai dunia di mana setiap orang memiliki kesempatan yang sama untuk tumbuh, berkembang, dan mencapai potensinya. 
                Mari bersatu dan berkomitmen untuk mencapai Zero Hunger dan menciptakan masa depan yang lebih cerah bagi semua.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/kasus2.jpg" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">
        <div class="section-header">
          <h2>Kasus Kelaparan Indonesia</h2>
          <h5>Berdasarkan jumlah kasus kelaparan, tingkat kelaparan, dan tingkat keberhasikan mencegah kelaparan</h5>
        </div>
        <div class="wrapper">
          <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">
              <div class="row gy-4 align-items-center">
                <?php
                    foreach($listKasus as $kasus){
                ?>
                <div class="col-lg-6">
                  <img src="assets/img/stats-img.svg" alt="" class="img-fluid"></a>
                </div>
                <div class="col-lg-6">
                  <div class="stats-item">
                    <div class="stats-number">
                      <span class="count"><?=$kasus['jumlah_kasus']?> / <?=$kasus['tingkat_kelaparan']?> / <?=$kasus['tingkat_keberhasilan']?></span></a>
                    </div>
                    <p class="stats-year">Year: <strong><?=$kasus['tahun']?></strong></p></a>
                  </div><!-- End Stats Item -->
                </div>
                <?php
                    }
                ?>
              </div>
            </div>
          </section><!-- End Stats Counter Section -->
        </div>
      </div>
    </section><!-- End Clients Section -->

    <div id="data-container"></div>


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Case</h2>
          <p>Pada Kasus yang terjadi di Indonesia</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Anak - Anak</h3>
              <p>Pada kasus kelaparan anak - anak</p>
              <a href="blog_anak.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Remaja</h3>
              <p>Pada kasus kelaparan remaja</p>
              <a href="blog_remaja.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Dewasa</h3>
              <p>Pada kasus kelaparan dewasa</p>
              <a href="blog_dewasa.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>Keseluruhan</h3>
              <p>Pada kasus kelaparan keseluruhan</p>
              <a href="blog_keseluruhan.php" class="readmore stretched-link">2019 |<i class="bi bi"></i></a>
              <a href="blog_keseluruhan.php" class="readmore stretched-link">2022<i class="bi bi"></i></a>
              <br>
              <a href="blog_keseluruhan.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Our Services Section -->

    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3><strong>Kebutuhan</strong></h3>
              <p>
                Untuk mengurangi Zero Hunger, ada beberapa kebutuhan penting yang perlu dipenuhi
              </p>
            </div>
          </div>
    
          <div class="col-lg-8">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Akses Terhadap Pangan:
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Penting untuk memastikan bahwa semua orang memiliki akses fisik dan ekonomi yang memadai terhadap makanan
                    yang aman, bergizi, dan terjangkau.
                    Ini melibatkan membangun dan memperkuat sistem pangan yang inklusif dan berkelanjutan, termasuk
                    distribusi yang adil dan efisien.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Pertanian Berkelanjutan:
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dibutuhkan investasi dalam pertanian berkelanjutan untuk meningkatkan produksi pangan dan keamanan pangan
                    jangka panjang.
                    Hal ini melibatkan pengembangan praktik pertanian yang ramah lingkungan, pendekatan berkelanjutan dalam
                    penggunaan sumber daya alam, pengelolaan air yang bijaksana, dan diversifikasi tanaman.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Pengentasan Kemiskinan:
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Kemiskinan menjadi hambatan utama dalam mencapai Zero Hunger.
                    Diperlukan kebijakan dan program yang secara khusus berfokus pada mengurangi kemiskinan, meningkatkan
                    pendapatan, dan memberdayakan komunitas yang rentan untuk memastikan bahwa mereka memiliki akses
                    terhadap makanan yang mencukupi.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Infrastruktur dan Teknologi:
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dibutuhkan investasi dalam infrastruktur pertanian, seperti irigasi, jaringan transportasi, dan akses ke
                    pasar, untuk meningkatkan produktivitas dan kualitas hasil pertanian.
                    Penggunaan teknologi pertanian yang inovatif, seperti sistem irigasi yang efisien, pemantauan cuaca, dan
                    teknologi informasi, juga dapat meningkatkan ketahanan pangan.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Pendidikan dan Kesadaran:
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Pendidikan dan kesadaran masyarakat tentang pentingnya gizi dan pertanian berkelanjutan sangat penting.
                    Dibutuhkan program edukasi untuk meningkatkan pemahaman tentang nutrisi yang seimbang, mempromosikan pola
                    makan yang sehat, dan memberikan pengetahuan tentang teknik pertanian yang berkelanjutan kepada petani
                    dan komunitas lokal.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-6">
                    <span class="num">6.</span>
                    Keberlanjutan Lingkungan:
                  </button>
                </h3>
                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Perlindungan dan pengelolaan sumber daya alam yang berkelanjutan, seperti tanah, air, dan keanekaragaman
                    hayati, merupakan faktor penting dalam mencapai Zero Hunger.
                    Praktik pertanian yang ramah lingkungan dan upaya untuk mengurangi dampak perubahan iklim juga harus
                    menjadi fokus.
                  </div>
                </div>
              </div><!-- # Faq item-->
    
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="faq-utama" class="faq">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4"> 
      <div class="col-lg-4">
        <div class="content px-xl-5">
          <h3><strong>Kebutuhan Utama</strong></h3>
          <p>
            Untuk mengurangi Zero Hunger, ada tiga kebutuhan utama yang perlu dipenuhi dan anda bisa memberikan sesuai dengan kebutuhan yang sekarang diperlukan.
          </p>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="accordion accordion-flush" id="faqlist-utama" data-aos="fade-up" data-aos-delay="100">
          <?php
            foreach($listKebutuhan as $index => $kebutuhan){
          ?> 
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-utama-<?=$index+1?>">
                3 kebutuhan Utama Yang diperlukan <?=$kebutuhan['id_kebutuhan']?>:
              </button>
            </h3>
            <div id="faq-content-utama-<?=$index+1?>" class="accordion-collapse collapse" data-bs-parent="#faqlist-utama">
              <div class="accordion-body">
                <li><?=$kebutuhan['sandang']?></li>
                <li><?=$kebutuhan['pangan']?></li>
                <li><?=$kebutuhan['fasilitas']?></li>
              </div>
            </div>
          </div><!-- # Faq item-->
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Frequently Asked Questions Section -->









    
    
    
    
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Information</h2>
          <p>The Global Goals, also known as the Sustainable Development Goals (SDGs), are a set of 17 interconnected goals established by the United Nations in 2015. 
            These goals aim to address various global challenges and achieve sustainable development worldwide.</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/kasus3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Social</p>

              <h2 class="title">
                <a href="https://www.globalgoals.org/">The Global Goals</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/pathways.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">The Global Goals</p>
                  <p class="post-date">
                    <time datetime="2015"> IN 2015</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Zero Hunger</span>
          </a>
          <p>Zero Hunger adalah sebuah permasalahan yang ada di Indonesia Atau pun di Dunia.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Referensi Data</h4>
          <ul>
            <li>2018-2019</a></li>
            <li>2020-2021</a></li>
            <li>2022-2023</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Universitas Pendidikan Indonesia <br>
            Setia Budi<br>
            Bandung <br><br>
            <strong>Phone:</strong> +62 999 999 999<br>
            <strong>Email:</strong> zerohunger@upi.edu<br>
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Zero Hunger</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>