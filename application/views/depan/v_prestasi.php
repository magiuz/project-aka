<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prestasi</title>
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
    <style>
        .jumbotron {
            background-color: #1bbca3;
            color: #fff;

        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-text {
            font-size: 14px;
            color: #666;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
    </style>

    <section class="blog-wrap">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4"><b>PRESTASI SISWA</b></h1>
                <hr class="my-4">
                <p><i>SMA S Al Kautsar merupakan sekolah para juara, dan masuk pada jajaran sekolah terbaik di Indonesia yang dibuktikan dengan prestasi pada ajang Pusat Prestasi Nasional melalui OSN, FLS2N dan LDBI serta mampu berkompetisi pada lomba akademik maupun non akademik di level Nasional bahkan Internasional.</i></p>
            </div>

            <section class="more-services section-bg">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="theme/images/alumni-1.jpg" class="img-fluid" alt="#">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: justify">M. NABHAN DZAKI AUFAR</h5>
                                    <p class="card-text" style="text-align: justify">MEDALI PERUNGGU
                                        <br>BIDANG KEBUMIAN
                                        <br>OLIMPIADE SAINS NASIONAL (OSN)
                                        <br>TINGKAT NASIONAL 2022
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="theme/images/alumni-1.jpg" class="img-fluid" alt="#">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: justify">MUHAMMAD AB'DU AL HAFIZH</h5>
                                    <p class="card-text" style="text-align: justify">MEDALI PERUNGGU
                                        <br>BIDANG GEOGRAFI
                                        <br>OLIMPIADE SAINS NASIONAL (OSN)
                                        <br>TINGKAT NASIONAL 2022
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="theme/images/alumni-1.jpg" class="img-fluid" alt="#">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: justify">M. NABHAN DZAKI AUFAR</h5>
                                    <p class="card-text" style="text-align: justify">MEDALI PERUNGGU
                                        <br>BIDANG KEBUMIAN
                                        <br>OLIMPIADE SAINS NASIONAL (OSN)
                                        <br>TINGKAT NASIONAL 2022
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
            </section>

            <!-- TABLE PRESTASI -->
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2 style="text-align:center;">PRESTASI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Perlombaan</th>
                                    <th>Hasil</th>
                                    <th>Tingkat</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>




    </section>

    <!-- <div class=" jumbotron">
                <img src="image.jpg" alt="image">
                <h1>PRESTASI SISWA</h1>
                <p>SMA S Al Kautsar merupakan sekolah para juara, dan masuk pada jajaran sekolah terbaik di Indonesia byang dibuktikan dengan prestasi pada ajang Pusat Prestasi Nasional melalui OSN, FLS2N dan LDBI serta mampu berkompetisi pada lomba akademik maupun non akademik di level Nasional bahkan Internasional.</p>
                </p>
            </div> -->




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