<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengumuman</title>
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
        .container {
            font-family: "poppins";
        }

        .event-date {
            background-color: #1bbca3;
        }

        .event-time {
            background-color: #158f7c;
            color: #fff;
        }
    </style>
    <!--============================= EVENTS =============================-->
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>

            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <?php foreach ($data->result() as $row) : ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="event-date">
                                            <h4><?php echo date("d", strtotime($row->pengumuman_tanggal)); ?></h4> <span><?php echo date("M Y", strtotime($row->pengumuman_tanggal)); ?></span>
                                        </div>
                                        <span class="event-time"><?php echo date("H:i", strtotime($row->pengumuman_tanggal)) . ' WIB'; ?></span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="event-heading">
                                            <h3><?php echo $row->pengumuman_judul; ?></h3>
                                            <p><?php echo $row->pengumuman_deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="event-underline">
                            </div>
                        <?php endforeach; ?>

                        <div class="col-md-12 text-center">
                            <?php echo $page; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->

    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/fullcalendar.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>