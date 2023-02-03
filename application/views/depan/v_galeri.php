<?php  
function filter($i){
  if ($i == 4){
    return 'filter-fasilitas';
  }
  else if($i == 1){
    return 'filter-kegiatan';
  }
  else if($i == 3){
    return 'filter-prestasi';
  }
  else{
    return '';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Galeri SMA Al-Kautsar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/aset/img/favicon.png" rel="icon">
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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <!-- Template Main CSS File -->
    <link href="assets/aset/css/style.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="theme/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PhotoFolio - v1.2.0
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <style>
        .container{
            font-family: poppins;
        }
    </style>

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <br><br><br>
                <h2>Galeri SMAS AL KAUTSAR</h2>
                <p>Galeri sekolah kami merupakan tempat yang tepat untuk mengetahui lebih dalam tentang sekolah kami.
                    Kami yakin Anda akan terinspirasi dengan apa yang Anda lihat di galeri kami.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-fasilitas">Fasilitas Sekolah</li>
                        <li data-filter=".filter-kegiatan">Kegiatan Sekolah</li>
                        <li data-filter=".filter-prestasi">Prestasi</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <?php $i = 0;
                        foreach ($isi_gambar->result() as $row) {
                            $i++;
                            // if ($i > 12) {
                            //     break;
                            // } ?>

                <div class="col-lg-4 col-md-4 portfolio-item <?= filter($row->galeri_album_id) ?>">
                    <div class="portfolio-wrap">
                        <img src="assets/images/<?= $row->galeri_gambar; ?>" value="<?= $row->galeri_album_id; ?>"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $row->galeri_judul; ?></h4>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/images/<?= $row->galeri_gambar; ?>" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="<?= $row->galeri_judul; ?>"><i
                                    class="bx bx-info-circle"></i></a>
                          </div>
                          </div>
                          </div>
                          <?php } ?>
                        </div>

                    </div>

    <style>
        .center{
        text-align: center;
        font-family: poppins;
        }

        .pagination {
        display: inline-block;
        font-size: 17px;
        margin-top: 30px;
        }

        .pagination a {
        color: #425552;
        float: left;
        padding: 8px 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-decoration: none;
        }

        .pagination a.active {
        background-color: #1bbca3;
        color: white;
        border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
        }
    </style>

<div class="center">
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
</div>

    </section><!-- End Our Portfolio Section -->


</body>

</html>

<div id="preloader">
    <div class="line"></div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

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