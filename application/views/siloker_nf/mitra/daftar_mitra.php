<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3>Mitra</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <h5><a href="<?= base_url('index.php/mitra/formTambahMitra') ?>">Daftar Menjadi Mitra?</a></h5>
        <div class="row">
            <?php foreach ($mitra as $list_mitra) : ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                    <img src="<?= base_url() ?>assets/img/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4><?= $list_mitra->nama ?></h4>
                            <span><?= $list_mitra->bidang_usaha ?></span>
                            <div class="social">
                                <p style="color:white"><?= $list_mitra->sektor_usaha ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>


    </div>
</section>