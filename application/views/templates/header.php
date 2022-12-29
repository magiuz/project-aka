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
                                    <a class="nav-link" href="home">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="blank" href="http://sis.smas-alkautsar.sch.id/">SIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog">Blog</a>
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


                                <!-- drop down-->
                                <div class="dropdown mx-3">
                                    <a class="nav-item dropdown-toggle " href="about" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Tentang
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="about">Sambutan</a>
                                        <a class="dropdown-item" href="sejarah">Sejarah</a>
                                        <a class="dropdown-item" href="visi_misi">Visi dan Misi</a>
                                        <a class="dropdown-item" href="struktur">Struktur</a>
                                    </div>

                                </div>

                                <div class="dropdown mx-3">
                                    <a class="nav-item dropdown-toggle " href="akademik" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Akademik
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?php echo site_url('guru'); ?>">Guru</a>
                                        <a class="dropdown-item" href="<?php echo site_url('siswa'); ?>">Siswa</a>
                                        <a class="dropdown-item" href="<?php echo site_url('alumni'); ?>">Alumni</a>
                                        <a class="dropdown-item" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                        <a class="dropdown-item" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                    </div>
                                </div>

                                <div class="dropdown mx-3">
                                    <a class="nav-item dropdown-toggle" href="akademik" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?php echo site_url('download'); ?>">Download</a>
                                        <a class="dropdown-item" href="galeri">Gallery</a>
                                        <a class="dropdown-item" href="contact">Kontak</a>
                                    </div>
                                </div>
                                <!-- end drop down-->
                            </ul>
                        </div>
                        <!-- end copy untuk kesemua menu-->

                    </nav>
                </div>
            </div>
        </div>
    </div>