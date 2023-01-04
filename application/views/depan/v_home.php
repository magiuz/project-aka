<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SELAMAT DATANG DI WEBSITE SMA AL KAUTSAR BANDAR LAMPUNG</title>

    <link href="assets/aset/img/icon.png" rel="icon">
    <link href="assets/aset/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="shorcut icon" href="theme/images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="theme/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="theme/css/simple-line-icons.css">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="theme/css/slick.css">
    <link rel="stylesheet" href="theme/css/slick-theme.css">
    <link rel="stylesheet" href="theme/css/owl.carousel.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/aset/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/aset/css/style.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="theme/css/style.css" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
    <!-- Bootstrap 4 cdn  -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
</head>

<body>



    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(theme/images/slider.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Berpikir Kreatif & Inovatif</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Bagi kami kreativitas merupakan gerbang
                                    masa depan. Kreativitas akan mendorong motivasi. Itulah yang kami lakukan.</p>
                                <a href="blog"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(theme/images/slider-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Guru Berkualitas Tinggi</h2>
                                <p class="animate__animated animate__fadeInUp">Guru merupakan faktor penting dalam
                                    proses belajar-mengajar. Itulah kenapa kami mendatangkan guru-guru terbaik dari
                                    berbagai penjuru.</p>
                                <a href="guru"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(theme/images/slider-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Proses Belajar Interaktif</h2>
                                <p class="animate__animated animate__fadeInUp">Kami membuat proses belajar mengajar
                                    menjadi lebih interaktif. Dengan demikian siswa lebih menyukai proses belajar.</p>
                                <a href="galeri"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="home" class="navbar-brand nav-brand2"><img class="img img-responsive" width="160px;"
                        src="theme/images/Logo Al-Kautsar.png"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="aset/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="home">Beranda</a></li>
                    <li><a class="nav-link scrollto" target="blank" href="http://sis.smas-alkautsar.sch.id/">SIS</a>
                    </li>
                    <li><a class="nav-link scrollto" href="blog">Blog</a></li>
                    <li class="dropdown"><a href="about"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about">Sambutan</a></li>
                            <li><a href="sejarah">Sejarah</a></li>
                            <li><a href="visi_misi">Visi dan Misi</a></li>
                            <li><a href="struktur">Struktur</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="akademik"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="guru">Guru</a></li>
                            <li><a href="siswa">Siswa</a></li>
                            <li><a href="alumni">Alumni</a></li>
                            <li><a href="pengumuman">Pengumuman</a></li>
                            <li><a href="agenda">Agenda</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="menu"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="download">Download</a></li>
                            <li><a href="galeri">Galeri</a></li>
                            <li><a href="contact">Kontak</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Selamat Datang</h2>
                    <p>Kami menyambut baik terbitnya website SMAS AL KAUTSAR yang baru, dengan harapan dipublikasinya
                        website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan
                        masyrakat umum semakin meningkat.</p>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Alumni</h2>
                    <p>Apa kata mereka tentang SMA S Al-Kautsar ?</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Kemas</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Kemas</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Kemas</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Kemas</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Cta Section ======= -->
        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Penerimaan Murid Baru</h3>
                    <p>Al Kautsar akan membuka pendaftaran penerimaan murid baru (PMB) tahun ajaran 2023-2024 pada
                        Januari 2023.</p>
                    <a class="cta-btn" target="blank" href="http://pmb.alkautsarlampung.sch.id/">Daftar Sekarang</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Counts Section ======= -->
        <section class="counts section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span class="counter"><?php echo $tot_guru; ?></span>
                            <p><strong>Guru</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span class="counter"><?php echo $tot_siswa; ?></span>
                            <p><strong>Siswa</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span class="counter"><?php echo $tot_files; ?></span>
                            <p><strong>Download</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span class="counter"><?php echo $tot_agenda; ?></span>
                            <p><strong>Agenda</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= More Services Section ======= -->
        <section class="more-services section-bg">
            <div class="container">

                <div class="row">
                    <?php $i = 0;
        foreach ($isi_berita->result() as $row){
          $i++;
          if ($i > 3){
            break;
          } ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="assets/images/<?= $row->tulisan_gambar; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href=""><?= $row->tulisan_judul; ?></a></h5>
                                <p class="card-text" style="text-align: justify">
                                    <?= substr($row->tulisan_isi, 3, 180); ?> ...</p>
                                <a href="#" class="btn">Explore more</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="assets/aset/img/more-service-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Nobis et tempore</a></h5>
                <p class="card-text">Ut quas omnis est. Non et aut tempora dignissimos similique in dignissimos. Sit incidunt et odit iusto</p>
                <a href="#" class="btn">Explore more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="assets/aset/img/more-service-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Facere quia quae dolores</a></h5>
                <p class="card-text">Modi ut et delectus. Modi nobis saepe voluptates nostrum. Sed quod consequatur quia provident dera</p>
                <a href="#" class="btn">Explore more</a>
              </div>
            </div>
          </div> -->
                </div>

            </div>
        </section><!-- End More Services Section -->

        <!-- ======= Info Box Section ======= -->
        <section class="info-box py-0">
            <div class="container-fluid">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at
                                        lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                            nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                            morbi quis
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url(assets/aset/img/info-box.jpg);">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Info Box Section -->

        <!-- ======= Galeri Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>

                    <div class="row portfolio-container">

                        <?php $i = 0;
        foreach ($isi_berita->result() as $row){
          $i++;
          if ($i > 3){
            break;
          } ?>

                        <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/images/<?= $row->tulisan_gambar; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $row->tulisan_judul; ?></h4>
                                </div>
                                <div class="portfolio-links">
                                    <a href="assets/images/<?= $row->tulisan_gambar; ?>" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="<?= $row->tulisan_judul; ?>"><i
                                            class="bx bx-info-circle"></i></a>

                                    <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/aset/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Penghargaan Guru Terbaik</h4>
              </div>
              <div class="portfolio-links">
                <a href="assets/aset/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penghargaan Guru Terbaik"><i class="bx bx-info-circle"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>



                    </div>
                </div>
        </section><!-- End Galeri Section -->



        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact section-bg">

            <div class="container">
                <div class="section-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-stretch infos">

                        <div class="row">

                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-map"></i>
                                <h4>Address</h4>
                                <p>Jl. Soekarno Hatta<br>Rajabasa, By Pass<br>Bandar Lampung, 35144</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-phone"></i>
                                <h4>Call Us</h4>
                                <p>0721 781578</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Us</h4>
                                <p>smaalkautsarlampung@gmail.com</p>
                            </div>
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-time-five"></i>
                                <h4>Working Hours</h4>
                                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="8" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/aset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/aset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/aset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/aset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/aset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/aset/js/main.js"></script>

</body>

</html>