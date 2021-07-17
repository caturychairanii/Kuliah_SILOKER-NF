<section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3>
                <p></p>
            </h3>
        </header>

        <div class="row">
            <?php foreach ($detail as $data) { ?>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <img src="<?= base_url() ?>assets/img/logo/iysa.png" class="logo-box">
                    <h4 class="title"><a href=""><?= $data->keahlian ?></a></h4>
                    <p class="description"><?= $data->deskripsi_pekerjaan ?></p>
                    <p><b><?= $data->tanggal_akhir ?></b></p>
                    <p>Berminat Silahkan Kirim CV ke <?= $data->email ?></p>
                    <a href="" class="btn btn-primary mt-5">Apply</a>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section><!-- #services -->