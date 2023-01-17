<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lambang</title>
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
        /* CSS LAMBANG  */
        .container1 {
            position: relative;
            width: 1200px;
            height: 300px;
            margin: 240px auto;
        }

        .container1 .box {
            position: relative;
            width: calc(400px - 30px);
            height: calc(300px - 30px);
            background: #000;
            float: left;
            margin: 15px;
            box-sizing: border-box;
            overflow: hidden;
            border-radius: 10px;
        }

        .container1 .box .image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f00;
            transition: 0.5s;
            z-index: 1;

        }

        .container1 .box:hover .image {
            top: 20px;
            left: calc(50% - 40px);
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .container1 .box .image .img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            transition: 0.5s;

        }

        .container1 .box:hover .image .img {}
    </style>

    <section class="blog-wrap">
        <div class="container">
            <div class="section-title">
                <h2>Lambang</h2>
            </div>

            <div class="container1">
                <div class="box">
                    <div class="image">
                        <img src="theme/images/lambangalif.png" width="20px" align="center">
                    </div>
                    <h3>Bentuk Umum</h3>
                    <p>Bentuk umum seperti huruf alif, hal ini
                        mengandung arti bahwa Al-Kautsar ingin menjadi
                        yang nomor satu.
                    </p>
                </div>

                <div class="box">
                    <img src="logo2.png">

                </div>
                <div class="box">
                    <img src="logo3.png" alt="Logo 3">
                    <p>Keterangan Logo 3</p>
                </div>
                <div class="box">
                    <img src="logo4.png" alt="Logo 4">
                    <p>Keterangan Logo 4</p>
                </div>
                <div class="box">
                    <img src="logo5.png" alt="Logo 5">
                    <p>Keterangan Logo 5</p>
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
</body>

</html>