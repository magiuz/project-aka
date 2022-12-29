<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sambutan</title>
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
    <!--//END ABOUT IMAGE -->
    <!--============================= WELCOME TITLE =============================-->
    <section class="welcome_about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Kata Sambutan</h2>
                    <p>Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya,
                        sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan.
                        Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan
                        apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita.
                        Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman.
                    </p>
                    
                    <p>Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin,
                        sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif,
                        kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi M-School,
                        sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="theme/images/welcome-img.jpg" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">SMA S AL KAUTSAR benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan SMA S AL KAUTSAR dan menjadi siswa terbaik tahun 2021.</p>
                            <div class="testi-img_block">
                                <img src="theme/images/student-1.png" class="img-fluid" alt="#">
                                <p><span>Toni</span>Siswa Terbaik 2021</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">SMA S AL KAUTSAR memberikan pengalaman yang luar biasa. Guru dan siswa yang teladan berpengaruh juga dalam membentuk karakter saya.</p>
                            <div class="testi-img_block">
                                <img src="theme/images/student-2.png" class="img-fluid" alt="#">
                                <p><span>Salma</span>Siswa Terbaik 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files; ?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->

    <!-- jQuery, Bootstrap JS. -->
    <script src="theme/js/jquery.min.js"></script>
    <script src="theme/js/tether.min.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="theme/js/slick.min.js"></script>
    <script src="theme/js/waypoints.min.js"></script>
    <script src="theme/js/counterup.min.js"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/validate.js"></script>
    <script src="theme/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="theme/js/subscribe.js"></script>
    <!-- Script JS -->
    <script src="theme/js/script.js"></script>
</body>

</html>