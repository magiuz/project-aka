<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SELAMAT DATANG DI WEBSITE SMA AL KAUTSAR BANDAR LAMPUNG</title>
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
    <section>
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="theme/images/apa.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Berpikir Kreatif &amp; Inovatif</h1>
                                <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> Kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="theme/images/api.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Guru Berkualitas Tinggi</h1>
                                <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('guru'); ?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="theme/images/apo.jpg" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Proses Belajar Interaktif</h1>
                                <h4>Kami membuat proses belajar mengajar menjadi lebih interaktif.<br> Dengan demikian siswa lebih menyukai <br>proses belajar.</h4>
                                <div class="slider-btn">
                                    <a href="<?php echo site_url('galeri'); ?>" class="btn btn-default">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="carousel-control-prev-icon" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="carousel-control-next-icon" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-img2">
                        <?php foreach ($pengumuman->result() as $row) : ?>
                            <div class="row">
                                <div class="col-sm-3"> <img src="theme/images/announcement-icon.png" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                                <div class="col-sm-9">
                                    <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                    <span><?php echo $row->tanggal; ?></span>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                </div><!-- // end .col-sm-7 -->
                            </div><!-- // end .row -->
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($agenda->result() as $row) : ?>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                                        <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                    <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                    <hr class="event_line">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files; ?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_5.png" class="img-fluid" alt="chart_icon">
                    </div>
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
                        <p><span class="counter"><?php echo $visitor;  ?></span>Pengunjung</p>
                    </div>
                </div>
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
    <!-- Script JS Bootstrap 5 gaes-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
</body>
</html>