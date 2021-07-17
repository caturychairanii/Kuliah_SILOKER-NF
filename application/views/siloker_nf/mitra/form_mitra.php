<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header">
            <p></p>
            <h3>Form Menjadi Mitra</h3>
        </div>
        <form method="POST" action="<?= base_url('index.php/mitra/tambah') ?>">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaperusahaan" placeholder="Nama Perusahaan/Organisasi"
                        name="nama">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <select class="custom-select" id="inlineFormCustomSelectPref" name="bidang_usaha">
                        <option selected>Pilih Bidang Usaha</option>
                        <?php foreach ($mitra as $bu) : ?>
                        <option value="<?= $bu->id ?>"><?= $bu->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Kontak Person" name="kontak">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Nomor HP/Telepon" name="nomor">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Http://" name="website"
                        name="website">
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