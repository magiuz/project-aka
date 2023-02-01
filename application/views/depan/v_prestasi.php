<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prestasi</title>
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
        /* CSS PRESTASI TOP 3 */
        .container1 {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 30px;
            background-color: #f2f5f4;
        }

        .container1 .card {
            position: relative;
            max-width: 300px;
            height: 350px;
            background: #fff;
            margin: 30px 20px 20px 30px;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease-in-out;
        }

        .container1 .card:hover {
            height: 515px;
        }

        .container1 .card .imgBx {
            position: relative;
            width: 260px;
            height: 260px;
            top: -60px;
            left: 5px;
            z-index: 1;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .container1 .card .imgBx img {
            max-width: 100%;
            border-radius: 5px;

        }

        .container1 .card .content {
            position: relative;
            margin-top: -140px;
            padding: 75px 15px;
            text-align: center;
            color: #111;
            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;
        }

        .container1 .card:hover .content {
            visibility: visible;
            opacity: 1;
            margin-top: -30px;
            transition-delay: 0.3s;
        }

        .content h3 {
            color: #3f3f3f;
            font-family: "poppins";
        }

        .content p {
            font-size: 16px;
            color: #666;
            font-family: "poppins";
        }

        h1 {
            font-family: "poppins";
        }

        p {
            font-family: "poppins";
        }

        /* CSS TABLE */
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 100%;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #1bbca3;
            color: #fff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;

        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #1bbca3;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #1bbca3;
        }

        .content-table tbody tr:nth-child(even):hover {
            /* background-color: #a3e4da; */
            /* font-weight: bold; */
            color: #1bbca3;
        }

        .content-table tbody tr:nth-child(odd):hover {
            /* background-color: #a3e4da; */
            /* font-weight: bold; */
            color: #1bbca3;
        }

        /* .card {
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
        } */
    </style>

    <section class="blog-wrap">
        <div class="container">
            <div class="section-title">
                <h2>PRESTASI</h2>
                <p>SMA S Al Kautsar merupakan sekolah para juara, dan masuk pada jajaran sekolah terbaik di Indonesia yang dibuktikan dengan prestasi pada ajang Pusat Prestasi Nasional melalui OSN, FLS2N dan LDBI serta mampu berkompetisi pada lomba akademik maupun non akademik di level Nasional bahkan Internasional.</p>

            </div><br><br>

            <div class="container1">
                <!-- <div class="card">
                    <div class="imgBx">
                        <img src="theme/images/alumni-2.jpg">
                    </div>
                    <div class="content">
                        <h3>M. NABHAN DZAKI AUFAR</h3>

                        <p>Medali Perunggu
                            <br>Bidang Kebumian
                            <br>Olimpiade Sains Nasional
                            <br>Tingkat Nasional
                        </p>
                    </div>
                </div> -->

                <div class="card">
                    <div class="imgBx">
                        <img src="theme/images/alumni-2.jpg">
                    </div>
                    <div class="content">
                        <h3>M. NABHAN DZAKI AUFAR</h3>
                        <p>Medali Perunggu
                            <br>Bidang Kebumian
                            <br>Olimpiade Sains Nasional
                            <br>Tingkat Nasional
                        </p>
                    </div>
                </div>

                <!-- <div class="card">
                    <div class="imgBx">
                        <img src="theme/images/alumni-2.jpg">
                    </div>
                    <div class="content">
                        <h3>M. NABHAN DZAKI AUFAR</h3>
                        <p>Medali Perunggu
                            <br>Bidang Kebumian
                            <br>Olimpiade Sains Nasional
                            <br>Tingkat Nasional
                        </p>
                    </div>
                </div>
            </div> -->

            <br>
            <br>

            <!-- TABLE PRESTASI -->
            <!-- <div class="row ">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2 style="text-align:center;">PRESTASI</h2>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Perlombaan</th>
                                    <th>Tahun</th>
                                    <th>Hasil</th>
                                    <th>Tingkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Olimpiade Astronomi (IAOC) di Colombia</td>
                                    <td>2021</td>
                                    <td>Perunggu</td>
                                    <td>Nasional</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </section>

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