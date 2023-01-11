<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kontak</title>

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

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

        <div class="container">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>
        </div>

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
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="phone">Telepon</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telepon" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>

                        </div>
                        <div class="form-group mt-3">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" name="message" rows="8" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda Berhasil Terkirim. Terima Kasih!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                    </form>
                </div>

                <div class="col-lg-12 d-flex align-items-stretch contact-form-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.357597269861!2d105.23396317373543!3d-5.36229489461647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40cff9c110dbff%3A0xb0bbb3e360027e10!2sSMA%20Al%20Kautsar!5e0!3m2!1sid!2sid!4v1672730154303!5m2!1sid!2sid" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

        </div>

        </div>
    </section><!-- End Contact Us Section -->

    <!-- jQuery, Bootstrap JS. -->
    <script src="theme/js/jquery.min.js"></script>
    <script src="theme/js/tether.min.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/validate.js"></script>
    <script src="theme/js/tweetie.min.js"></script>
    <!-- Subscribe / Contact-->
    <script src="theme/js/subscribe.js"></script>
    <script src="theme/js/contact.js"></script>
    <!-- Script JS -->
    <script src="theme/js/script.js"></script>
</body>

</html>