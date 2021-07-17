    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>New Loker</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                    vituperatoribus.</p>
            </header>

            <div class="row">
                <?php foreach ($loker as $data) { ?>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <img src="<?= base_url() ?>assets/img/logo/iysa.png" class="logo-box">
                        <h4 class="title"><a href=""><?= $data->nama ?></a></h4>
                        <p class="description"><?= $data->deskripsi_pekerjaan ?></p>
                        <p><b><?= $data->tanggal_akhir ?></b></p>
                        <p><a href="<?= base_url() ?>index.php/loker/detail/<?= $data->id ?>">Detail Lowongan</a></p>
                        <a href="" class="btn btn-primary mt-5">Apply</a>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- #services -->