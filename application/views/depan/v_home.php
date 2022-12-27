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
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>0721781578
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smaalkautsarlampung@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Bandar Lampung, Lampung, INA. 35144
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-9">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>

                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="theme/images/Logo Al-Kautsar.png"></a>

                        <!-- copy ke semua menu-->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="blank" href="http://sis.smas-alkautsar.sch.id/">SIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
                                </li>
                                <!--    <li class="nav-item">-->
                                <!--        <a class="nav-link" href="<?php echo site_url('download'); ?>">Download</a>-->
                                <!--    </li>-->
                                <!--    <li class="nav-item">-->
                                <!--        <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>-->
                                <!--    </li>-->
                                <!--    <li class="nav-item">-->
                                <!--        <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>-->
                                <!--    </li>-->
                            </ul>


                            <!-- drop down-->
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo site_url('sejarah'); ?>">Sejarah</a>
                                    <a class="dropdown-item" href="<?php echo site_url('visi_misi'); ?>">Visi dan Misi</a>
                                    <a class="dropdown-item" href="<?php echo site_url('struktur'); ?>">Struktur</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Akademik
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo site_url('guru'); ?>">Guru</a>
                                    <a class="dropdown-item" href="<?php echo site_url('siswa'); ?>">Siswa</a>
                                    <a class="dropdown-item" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                    <a class="dropdown-item" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo site_url('download'); ?>">Download</a>
                                    <a class="dropdown-item" href="galeri">Gallery</a>
                                    <a class="dropdown-item" href="<?php echo site_url('contact'); ?>">Kontak</a>
                                </div>
                            </div>
                            <!-- end drop down-->

                        </div>
                        <!-- end copy untuk kesemua menu-->

                    </nav>
                </div>
            </div>
        </div>
    </div>
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
                                <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                                <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
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
                                <h1>Guru Bekualitas Tinggi</h1>
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
                                <h1>Proses Belajar Interatif</h1>
                                <h4>Kami membuat proses belajar mengajar menjadi lebih interaktif.<br> dengan demikian siswa lebih menyukai <br>proses belajar.</h4>
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
                <div class="col-sm-3">
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
                <div class="col-sm-2">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_files; ?></span> Download
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="chart-img">
                        <img src="theme/images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda</p>
                    </div>
                </div>
                <div class="col-sm-2">
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
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url(); ?>">
                            <img src="theme/images/logo-white.png" class="img-fluid" alt="footer_logo">
                        </a>
                        <p><?php echo date('Y'); ?> © copyright by <a href="" target="_blank">M Fikri</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Beranda</a></li>

                            <li><a href="<?php echo site_url('about'); ?>">Tentang</a></li>
                            <li><a href="<?php echo site_url('artikel'); ?>">Blog</a></li>
                            <li><a href="<?php echo site_url('akademik'); ?>">Akademik</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Akademik</h3>
                        <ul>
                            <li><a href="<?php echo site_url('guru'); ?>">Guru</a></li>
                            <li><a href="<?php echo site_url('siswa'); ?>">Siswa </a></li>
                            <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> BANDAR LAMPUNG, LAMPUNG, INA. 35144</p>
                        <p>Email : smaalkautsarlampung@gmail.com</p>
                        <br>
                        <p>Phone : 0721 781578</p>

                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
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