<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guru</title>
    <link rel="shorcut icon" href="theme/images/icon.png">
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
    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Guru dan Karyawan SMA S AL KAUTSAR</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                            <?php if (empty($row->guru_photo)) : ?>
                                <img src="<?php echo 'assets/images/blank.png'; ?>" class="img-fluid" alt="#">
                            <?php else : ?>
                                <img src="<?php echo 'assets/images/' . $row->guru_photo; ?>" class="img-fluid" alt="#">
                            <?php endif; ?>
                            <p class="text-center mt-3"><span><?php echo $row->guru_nama; ?></span>
                                <br>
                                <?php echo $row->guru_mapel; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End row -->
            <nav><?php echo $page; ?></nav>
        </div>
    </section>

    <!--//End Style 2 -->
    
    <!-- jQuery, Bootstrap JS. -->
    <script src="theme/js/jquery.min.js"></script>
    <script src="theme/js/tether.min.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="theme/js/slick.min.js' ?>"></script>
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