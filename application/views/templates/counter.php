<section class="counts section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-person"></i>
                            <span class="counter"><?php echo $tot_guru; ?></span>
                            <p><strong>Guru</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
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
                        <span class="counter"><?php echo $visitor; ?></span>
                        <p style="color : #334240"><strong>Pengunjung</strong></p>
                        <a href="#">Find out more &raquo;</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-download"></i>
                            <span class="counter"><?php echo $tot_files; ?></span>
                            <p><strong>Download</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span class="counter"><?php echo $tot_agenda; ?></span>
                            <p><strong>Agenda</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>