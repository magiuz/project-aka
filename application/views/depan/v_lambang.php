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
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 30px;
            background-color: #f2f5f4;
        }

        .container1 .box {
            position: relative;
            width: calc(400px - 30px);
            height: calc(300px - 30px);
            max-width: 300px;

            background: #fff;
            float: left;
            margin: 15px;
            box-sizing: border-box;
            overflow: hidden;
            border-radius: 10px;



            margin: 30px 20px 20px 30px;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);

        }

        .container1 .box .image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
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
            font-size: 100px;
            transition: 0.5s;
        }

        /* .container1 .box:hover .image .img {

        } */

        .container1 .box .content {
            position: absolute;
            top: 100px;
            height: calc(100% - 100px);
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            transition: 0.5s;
        }

        .container1 .box .content h3 {
            margin: 0 0 10px;
            padding: 0;
            color: #000;
            font-size: 24px;
        }

        .container1 .box .content p {
            margin: 0;
            padding: 0;
            color: #000;
            font-size: 18px;
        }
    </style>

    <section class="blog-wrap">
        <div class="container">
            <div class="section-title">
                <h2>Lambang</h2>
            </div>

            <div class="container1">
                
                <div class="box">
                <h3>Bentuk Umum</h3>
                        <p>Bentuk umum seperti huruf alif, hal ini
                            mengandung arti bahwa Al-Kautsar ingin menjadi
                            yang nomor satu.
                        </p>
                    <div class="image">
                        <img src="theme/images/lambangalif.png" width="85px" height="90px">
                    </div>
                    <div class="content">
                       
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="theme/images/tulisanalkautsar.png" width="85px" height="90px">
                    </div>
                    <div class="content">
                        <h3>Bentuk Umum</h3>
                        <p>Bentuk umum seperti huruf alif, hal ini
                            mengandung arti bahwa Al-Kautsar ingin menjadi
                            yang nomor satu.
                        </p>
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="theme/images/bintangbersudut.png" width="85px" height="90px">
                    </div>
                    <div class="content">
                        <h3>Bentuk Umum</h3>
                        <p>Bentuk umum seperti huruf alif, hal ini
                            mengandung arti bahwa Al-Kautsar ingin menjadi
                            yang nomor satu.
                        </p>
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="theme/images/alquaranterbuka.png" width="85px" height="90px">
                    </div>
                    <div class="content">
                        <h3>Bentuk Umum</h3>
                        <p>Bentuk umum seperti huruf alif, hal ini
                            mengandung arti bahwa Al-Kautsar ingin menjadi
                            yang nomor satu.
                        </p>
                    </div>

                </div>

                <div class="box">
                    <div class="image">
                        <img src="theme/images/warnadasar.png" width="85px" height="90px">
                    </div>
                    <div class="content">
                        <h3>Bentuk Umum</h3>
                        <p>Warna dasar Kuning melambangkan sifat transparan dan percaya diri. Warna tulisan Biru melambangkan kewibawaan dan derajat yang tinggi.
                        </p>
                    </div>

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