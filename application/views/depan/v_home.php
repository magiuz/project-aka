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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

<style>
    /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>

<body>



    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(theme/images/OSK.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Berpikir Kreatif & Inovatif</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Bagi kami kreativitas merupakan gerbang
                                    masa depan. Kreativitas akan mendorong motivasi. Itulah yang kami lakukan.</p>
                                <a href="guru" class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- java script -->

                    <script>
                        const btn = document.querySelector('.tombol');
                        const videoContainer - document.querySelector('.video-container');
                        const close = document.querySelector('close');

                        btn.addEventListener('click', () => {
                                    videoContainer.classList.add('show');
                                }
                    </script>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(theme/images/guru.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Guru Berkualitas Tinggi</h2>
                                <p class="animate__animated animate__fadeInUp">Guru merupakan faktor penting dalam
                                    proses belajar-mengajar. Itulah kenapa kami mendatangkan guru-guru terbaik dari
                                    berbagai penjuru.</p>
                                <a href="guru" class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(theme/images/kelas.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Proses Belajar Interaktif</h2>
                                <p class="animate__animated animate__fadeInUp">Kami membuat proses belajar mengajar
                                    menjadi lebih interaktif. Dengan demikian siswa lebih menyukai proses belajar.</p>
                                <a href="galeri" class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn More</a>
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
    </section>


    <header id="header" class="d-flex align-items-center">
        <audio id="mysong" src="assets/aset/music/lagu-ak.mp3"></audio>
        <img src="theme/images/play.png" id="playbtn" onclick="playSong()" style="width: 40px; height: 40px; margin-left: 70px; margin-right: 15px; cursor: pointer;">
        <img src="theme/images/pause.png" id="pausebtn" onclick="pauseSong()" style=" width: 40px; height: 40px; margin-left: 70px; margin-right: 15px; display: none; cursor: pointer;">

        <script>
            {

                var mysong = document.getElementById("mysong");
                var playbtn = document.getElementById("playbtn");
                var pausebtn = document.getElementById("pausebtn");

                function playSong() {

                    mysong.play();
                    pausebtn.style.display = "block";
                    playbtn.style.display = "none";
                }

                function pauseSong() {

                    mysong.pause();
                    playbtn.style.display = "block";
                    pausebtn.style.display = "none";
                }
            }
        </script>
        <div>
            <a href="home" class="navbar-brand nav-brand2"><img class="img img-responsive" width="160px;" src="theme/images/Logo Al-Kautsar.png"></a>
        </div>

        <div class="container d-flex align-items-center justify-content-start">

            <nav id="navbar" class="navbar mr-5 ml-auto">
                <ul>
                    <li><a class="nav-link scrollto " href="home">Beranda</a></li>
                    <li><a class="nav-link scrollto" target="blank" href="http://sis.smas-alkautsar.sch.id/">SIS</a>
                    </li>
                    <li><a class="nav-link scrollto" href="blog">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about">Sambutan</a></li>
                            <li><a href="sejarah">Sejarah</a></li>
                            <li><a href="lambang">Lambang</a></li>
                            <li><a href="visi_misi">Visi dan Misi</a></li>
                            <li><a href="struktur">Struktur</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="guru">Guru</a></li>
                            <li><a href="alumni">Alumni</a></li>
                            <li><a href="prestasi">Prestasi</a></li>
                            <li><a href="pengumuman">Pengumuman</a></li>
                            <li><a href="agenda">Agenda</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="download">Download</a></li>
                            <li><a href="galeri">Galeri</a></li>
                            <li><a href="contact">Kontak</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <main id="main">
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Selamat Datang</h2>
                    <p>Kami menyambut baik terbitnya website SMAS AL KAUTSAR yang baru, dengan harapan dipublikasinya
                        website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan
                        masyrakat umum semakin meningkat.</p>
                </div>

            </div>
        </section>

        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Alumni</h2>
                    <p>Apa kata mereka tentang SMA S Al-Kautsar?</p>
                </div>

                <div class="row">                    
                        <?php $i = 0;
                        foreach ($data->result() as $row){
                            $i++;
                            if($i > 4){
                            break;
                            } ?>

                        <div class="col-s-6 col-lg-3 d-flex align-items-stretch float-left">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-user"></i></div>
                                <h4 class="title"><a href="alumni"><?= $row->alumni_nama; ?></a></h4>
                                <p class="description" ><?= $row->alumni_kesan; ?></p>
                            </div>
                        </div>
                        <?php } ?>                    
                </div>                            
            </div>
        </section>

        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Penerimaan Murid Baru</h3>
                    <p>SMA S Al Kautsar akan membuka pendaftaran penerimaan murid baru (PMB) tahun ajaran 2023-2024 pada
                        Januari 2023.</p>
                    <a class="cta-btn" target="blank" href="http://pmb.alkautsarlampung.sch.id/">Daftar Sekarang</a>
                </div>

            </div>
        </section>

        <section class="counts section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-person"></i>
                            <span class="counter"><?php echo $tot_guru; ?></span>
                            <p><strong>Guru</strong></p>
                            <a href="guru">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <div class="chart-text">
                            <?php
                            $filetext = "webcounter.txt"; //mendefinisikan nama file untuk menyimpan counter
                            $counter = file($filetext);
                            $visitor = $counter[0];
                            $visitor++;
                            $file = fopen($filetext, "w");
                            fwrite($file, $visitor);
                            fclose($file);
                            ?>
                        <span class="counter"><?php echo $visitor; ?></span>
                        <p><strong>Pengunjung</strong></p>
                        <a href="#">Find out more &raquo;</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-download"></i>
                            <span class="counter"><?php echo $tot_files; ?></span>
                            <p><strong>Download</strong></p>
                            <a href="download">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span class="counter"><?php echo $tot_agenda; ?></span>
                            <p><strong>Agenda</strong></p>
                            <a href="agenda">Find out more &raquo;</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section class="more-services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Artikel Terbaru</h2>
                    <p>Berita terkini tentang SMA S Al Kautsar</p>
                </div>

                <div class="row">
                    <?php $i = 0;
                    foreach ($isi_berita->result() as $row) {
                        $i++;
                        if ($i > 3) {
                            break;
                        } ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="card">
                                <img src="assets/images/<?= $row->tulisan_gambar; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: justify"><a href=""><?= $row->tulisan_judul; ?></a></h5>
                                    <p class="card-text" style="text-align: justify">
                                        <?= substr($row->tulisan_isi, 3, 180); ?> ...</p>
                                    <a href="blog" class="btn">Explore more</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <section class="info-box py-0">

            <div class="container-fluid">


                <div class="row">


                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Prestasi siswa <strong>SMA S Al-Kautsar</strong></h3>
                            <p>
                                Siswa SMA S Al Kautsar menoreh banyak prestasi baik akademik maupun non-akademik
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span style="color:#96d2d9;">01</span> Non consectetur a erat nam at
                                        lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span style="color: #63A5BF;">02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span style="color: #3C6AA6;">03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url(assets/aset/img/info-box.jpg);">&nbsp;</div>
                </div>

            </div>
        </section>


        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>

                    <div class="row portfolio-container">

                        <?php $i = 0;
                        foreach ($isi_gambar->result() as $row) {
                            $i++;
                            if ($i > 3) {
                                break;
                            } ?>

                            <div class="col-lg-4 col-md-4 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <img src="assets/images/<?= $row->galeri_gambar; ?>" value="<?= $row->galeri_album_id; ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4><?= $row->galeri_judul; ?></h4>
                                    </div>
                                    <div class="portfolio-links">
                                        <a href="assets/images/<?= $row->galeri_gambar; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row->galeri_judul; ?>"><i class="bx bx-info-circle"></i></a>

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
        </section>




        <section id="contact" class="contact section-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch infos">
                        <div class="row">
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-map"></i>
                                <h4>Alamat</h4>
                                <p>Jl. Soekarno Hatta<br>Rajabasa, By Pass<br>Bandar Lampung, 35144</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-phone"></i>
                                <h4>Telepon</h4>
                                <p>0721 781578</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-envelope"></i>
                                <h4>Email</h4>
                                <p>smaalkautsarlampung@gmail.com</p>
                            </div>
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-time-five"></i>
                                <h4>Jam Kerja</h4>
                                <p>Senin - Jumat: 07.00 - 16.00 WIB</p>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.357597269861!2d105.23396317373543!3d-5.36229489461647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40cff9c110dbff%3A0xb0bbb3e360027e10!2sSMA%20Al%20Kautsar!5e0!3m2!1sid!2sid!4v1672730154303!5m2!1sid!2sid" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>

            </div>

            </div>
        </section>

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <script src="assets/aset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/aset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/aset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/aset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/aset/vendor/php-email-form/validate.js"></script>


    <script src="assets/aset/js/main.js"></script>

</body>

</html>