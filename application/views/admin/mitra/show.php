<?php 
	
	$bidang_usaha =  $this->db->get('bidang_usaha')->result();
	$sektor_usaha = $this->db->get('sektor_usaha')->result();
 ?>
<div class="container-fluid" id="container-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="width: 100%; height: 100%;"><br>
				<h3 style="margin-left: 20px;">Detail Data Mitra</h3><hr>
				<form action="<?= base_url('index.php/admin/mitra/updatData/'.$mitra->id) ?>" method="post">
					<div  class="row" >
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" value="<?= $mitra->nama; ?>" class="form-control" disabled autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" value="<?= $mitra->email; ?>" class="form-control" disabled autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Kontak</label>
								<input type="text" name="kontak" value="<?= $mitra->kontak; ?>" class="form-control" disabled autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Telpon</label>
								<input type="text" name="telpon" value="<?= $mitra->telpon; ?>" class="form-control" disabled autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Web</label>
								<input type="text" disabled name="web" value="<?= $mitra->web; ?>" class="form-control" autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Bidang Usaha</label>
								<select disabled class="form-control" name="bidang_usaha_id"> 
									<?php 
										if(isset($bidang_usaha)){
									?>
									<?php foreach ($bidang_usaha as $key => $value) { ?>
									<option value="<?= $value->id?>" <?php if($mitra->bidang_usaha_id == $value->id){echo "selected";} ?>><?= $value->nama?></option>
								<?php } ?>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Sektor Usaha</label>
								<select disabled class="form-control" name="sektor_usaha_id"> 
									<?php 
										if(isset($sektor_usaha)){
									?>
									<?php foreach ($sektor_usaha as $key => $value) { ?>
									<option value="<?= $value->id?>" <?php if($mitra->sektor_usaha_id == $value->id){echo "selected";} ?>><?= $value->nama?></option>
								<?php } ?>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Alamat</label>
								<textarea disabled name="alamat" class="form-control"><?= $mitra->alamat; ?></textarea>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row">
						<div class="footer text-rigt" style="margin-left: 20px;">
							<a href="<?= base_url('index.php/admin/mitra') ?>" class="btn btn-success">Back</a>
						</div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>