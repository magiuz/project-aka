<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alumni</title>
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
<!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Alumni</h2>
          <p>SMA S Al Kautsar melahirkan banyak siswa berprestasi membanggakan yang tersebar di seluruh Indonesia.</p>
          <p>Apa kata mereka tentang SMA S Al Kautsar?</p>
        </div><br>

              
          <?php $i = 0;
          foreach ($data->result() as $row){
            $i++;
            if($i > 4){
              break;
            } ?>          

        <div>
        <table  style="margin-left: 70px;">
          <tr>
            <td>
            <?php if (empty($row->alumni_photo)) : ?>
                                  <img src="<?php echo 'assets/images/blank.png'; ?>" class="antam" style="max-width: 160px; height: auto;" alt="#">
                              <?php else : ?>
                                  <img src="<?php echo 'assets/images/' . $row->alumni_photo; ?>" class="antam" style="width: 160px; height: 23vh;" alt="#">
                              <?php endif; ?>
            </div></td>
            
            <td><div class="col-lg-9 col-md-6 content" style="margin-left: 20px; float: left;">
            <h3><?= $row->alumni_nama;?></h3>
            <p><strong><?= $row->alumni_kampus;?></strong></p>
            <p align="justify"><?= $row->alumni_kesan;?></p></td>
          </tr>
          <?php } ?>
      </div><br><br><br>
        </table>
      </div><br><br>
      
          
          

      </div>

       
    </section>

    

    <!--//End Style 2 -->
    
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>