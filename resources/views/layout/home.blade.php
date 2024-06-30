<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portofolio Yadi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fav1.jpeg" rel="icon">
  <link href="assets/img/fav1.jpeg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio Yadioyno</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">Tentang Saya</a></li>
          <li><a href="#services">Blog</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/bgbro.jfif" alt="" data-aos="fade-in"><!--ini diganti bg-->

      <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>Hai Saya Yadiyono</h2>
        <!-- <p><span class="typed" data-typed-items="TNI, Developer"></span></p> -->
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-md-6">

            <div class="row justify-content-between gy-4">
              <div class="col-lg-5">
                <img src="assets/img/fav1.jpeg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-7 about-info">
                <p><strong>Nama: </strong> <span>Yadiyono</span></p>
                <p><strong>Profesi </strong> <span>Tentara Nasional Indonesia</span></p>
                <p><strong>Email: </strong> <span>yadiyono84@gmail.com</span></p>
                <p><strong>No.Telepon: </strong> <span>+6282197272829</span></p>
                <p><strong>Alamat:</strong> <span>Jakarta, Indonesia</span></p>
              </div>

            </div>

            <div class="skills-content skills-animation">

              <h5>Keahlian</h5>

              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Wordpress</span> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
          <div class="col-md-6">
            <div class="about-me">
              <h4>Tentang saya</h4>
              <p>
                Saya Adalah seorang Mahasiswa Informatika di ITSK RS.dr.Soepraoen Malang, Saat ini saya Semester 4.
              </p>
              <p>
                Saya Bertempat tinggal di Jakarta pusat Indonesia, saat ini saya adalah seorang anggota Tentara Nasional Indonesia (TNI)
              </p>
              <p>
                Walaupun saya Sudah Bekerja Namun Saya Masihlah Haus Akan pengetahuan Oleh karena itulah saya melanjutkan pendidikan ke jenjang S1 informatika di ITSK RS.dr.Soepraoen Malang ini.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Saya</h2>
        <p>Berikut Adalah Biodata singkat Saya</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Biodata Singkat</h3>

            <div class="resume-item pb-0">
              <h4>Yadiyono</h4>
              <p><em>Saya Adalah Seorang TNI yang memiliki Minat dibidang IT</em></p>
              <ul>
                <li>Jl. Sederhana V No. 17 Gedong, Pasar Rebo Jakarta Timur, Indonesia</li>
                <li>(+62)82197272829</li>
                <li>yadiyono84@gmail.com</li>
                <li>Motto : “Manfaatkan Waktu dan Kesempatan dengan sebaik baiknya”</li> 
                <li>Hobi : Menembak/Olah Raga</li>

              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">pendidikan</h3>
            <div class="resume-item">
              <h4>SMU BERBUDI YOGYAKARTA </h4>
              <h5>2000 – 2003</h5>
              <p><em> ILMU PENGETAHUAN SOSIAL (IPS)</em></p>
              <p>Jurusan Ilmu Pengetahuan Sosial (IPS) yang mempelajari bagaimana meningkatkan keterampilan sosial karena mempelajari tentang isu-isu sosial, interaksi sosial, keterampilan komunikasi, memahami konsep sosiologi, antropologi, geografi, ekononi. Dengan memahami ilmu sosial maka diharapkan akan lebih peka terhadap isu-isu aktual dan memahami adaptasi masyarakat terhadap perubahan.
                Jurusan Ilmu Pengetahuan Sosial (IPS) juga mempelajari tentang sejarah nasional dan internasional serta melatih untuk berfikir kritis, selalu mencari sumber informasi valid dan menggabungkan informasi dari berbagai sumber sehingga memiliki pandangan yang luas dan dapat menemukan solusi tepat dalam berbagai situsasi dan kondisi.
                </p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Pendidikan Pembentukan Bintara TNI AD (Diktukba)</h4>
              <h5>2005 - 2019</h5>
              <p><em>Sekolah Calon Tamtama Prajurit Karier (PK)</em></p>
              <p>Menempuh pendidikan calon prajurit TNI AD di Rindam Jaya/Jayakarta dilanjutkan dengan Pendidikan Kejuruan Tamtama Infanteri di Depo Pendidikan dan Latihan Pertempuran (Dodiklatpur) Infanteri Rindam Jaya/Jayakarta di Gunung Bunder Jawa Barat</p>
              <p><em>Pendidikan Pembentukan Bintara TNI AD (Diktukba)</em></p>
              <p>Menempuh Pendidikan Pembentukan Bintara TNI AD (diktukba) di Rindam Jaya/Jayakarta dilanjutkan Pendidikan Kejuruan Bintara Infanteri di Depo Pendidikan dan Latihan Pertempuran (Dodiklatpur) Infanteri Rindam Jaya/Jayakarta di Gunung Bunder Jawa Barat</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">pendidikan</h3>
            <div class="resume-item">
              <h4>Universitas Wisnuwardhana Malang</h4>
              <h5>2022-Sekarang</h5>
              <p><em> ILMU PENGETAHUAN HUKUM</em></p>
              <p>Mempelajari tentang berbagai jenis hukum di berbagai bidang dengan mempelajari konsep-konsep dasar, sistem hukum dan berbagai terminologi hukum yang berlaku di Indonesia, diantaranya adalah hukum pidana dan hukum perdata, hukum tata negara dan administrasi negara, hukum internasional dan HAM, hukum dagang, hukum lingkungan dan tata ruang, dan lain sebagainya</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>ITSK RS.dr.Soepraoen Malang</h4>
              <h5>2022-Sekarang</h5>
              <p><em> Informatika</em></p>
              <p>Mempelajari mengenai Sofware, Hardware dan pengembangannya serta berbagai materi yang berbasis teknologi informasi, dan lain sebagainya.</p>
              </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Pekerjaan</h3>
            <div class="resume-item">
              <h4>Lembaga Ketahanan Nasional Republik Indonesia (Lemhannas RI)</h4>
              <h5>2015-Sekarang</h5>
              <p><em>Jakarta, Indonesia</em></p>
              <ul>
                <li>Menyelenggarakan Pemantapan Nilai-Nilai Kebangsaan bagi seluruh unsur komponen bangsa</li>
                <li>Menyelengarakan kegiatan Training Of Trainers/Pelatihan Untuk Pelatih bagi kalangan Guru, Dosen, Widyaiswara dan TNI/Polri</li>
                <li>Menyelenggarakan Dialog Kebangsaan bagi seluruh komponen bangsa</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Services Section -->
   <!-- ini blog ygy -->
<div id="blog">
  <div class="section-title">
  <h2>Daftar Tulisan Blog</h2>
  </div>

 <!-- Tambahkan input pencarian di sini -->
 <input type="text" id="searchInput" placeholder="Cari postingan...">

 <div id="posts">
     <!-- Postingan blog akan ditampilkan di sini -->
 </div>
 <br>
  <div class="section-title">
 <h2>Tambah Postingan Baru</h2>
 </div>
 <form id="newPostForm">
     <label for="title">Judul:</label>
     <input type="text" id="title" name="title" required><br>

     <label for="content">Konten:</label>
     <textarea id="content" name="content" required></textarea><br>

     <button type="submit">Tambah</button>
 </form>
</div>

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="0" class="purecounter">1453</span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0" class="purecounter">32</span>
              <p>Awards</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Beberapa karya Yang pernah saya buat</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Wordpress</li>
            <!-- <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li> -->
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/wordpresbgyadi1.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Wordpress</h4>
                <p>Blog Wordpress Saya</p>
                <a href="assets/img/portfolio/wordpresbgyadi1.PNG" title="Blog Wordpress" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ url('/wordpress') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div> -->
            <!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Apabila Terdapat sesuatu yang ingin disampaikan silahkan hubungi saya</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jakarta, Indonesia</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>No.Telepon</h3>
                  <p>+6282197272829</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email<br></h3>
                  <p>yadiyono84@gmail.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="nama anda" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Email anda" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subjek pesan" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="pesan" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesanmu Tersampaikan</div>

              <button type="submit">Kirim</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">DevFolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <!-- <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div> -->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Yadiyono</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>