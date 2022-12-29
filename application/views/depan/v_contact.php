<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
    <link rel="shorcut icon" href="theme/images/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="theme/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="theme/css/simple-line-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="theme/css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="theme/css/style.css" rel="stylesheet">
</head>

<body>


    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                                <div class="contact-option_rsp">
                                    <h3>Tinggalkan Pesan</h3>
                                    <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                        </div>
                                        <!-- // end .form-group -->
                                        <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                        <div><?php echo $this->session->flashdata('msg'); ?></div>
                                        <!-- // end #js-contact-result -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact-address">
                                    <h3>Info Kontak</h3>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>smaalkautsarlampung.sch.id
                                            <!-- <br> smaalkautsarlampung.sch.id -->
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>0721 781578</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h6>Alamat</h6>
                                        <p>Jl. Soekarno Hatta
                                            Rajabasa, By Pass
                                            Bandar Lampung. 35144
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.357632026906!2d105.23396317427118!3d-5.36228955366427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40cff9c110dbff%3A0xb0bbb3e360027e10!2sSMA%20Al%20Kautsar!5e0!3m2!1sid!2sid!4v1672210722800!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->

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