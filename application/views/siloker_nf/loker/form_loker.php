<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header">
            <p></p>
            <h3>Form Isi Loker</h3>
        </div>
        <form method="POST" action="<?= base_url('index.php/loker/tambah') ?>">
            <div class="form-group row">
                <div class="col-sm-10">
                    <select class="custom-select" id="inlineFormCustomSelectPref" name="mitra">
                        <option selected>Pilih Mitra</option>
                        <?php foreach ($mitra as $bu) : ?>
                        <option value="<?= $bu->id ?>"><?= $bu->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <select class="custom-select" id="inlineFormCustomSelectPref" name="bidang_usaha">
                        <option selected>Pilih Bidang Usaha</option>
                        <?php foreach ($bidang as $bu) : ?>
                        <option value="<?= $bu->id ?>"><?= $bu->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <label for="exampleFormControlTextarea1">Deskripsi Lowongan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="deskripsi_lowongan"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <label for="exampleFormControlTextarea1">Deskripsi Kualifikasi Lowongan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="deskripsi_kualifikasi"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <?php foreach ($kategori as $data) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="kategori" id="inlineCheckbox1"
                            value="<?= $data->id ?>">
                        <label class="form-check-label" for="inlineCheckbox1"><?= $data->nama ?></label>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <label for="exampleFormControlTextarea1">Tanggal Date Line</label>
                    <input type="date" class="form-control" id="email" placeholder="Email" name="tanggal">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Kontak Person" name="kontak">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </form>


    </div>
</section>