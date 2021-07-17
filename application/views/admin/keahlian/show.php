<div class="container-fluid" id="container-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="width: 100%; height: 100%;"><br>
				<h3 style="margin-left: 20px;">Detail Data keahlian</h3><hr>
					<div  class="row" >
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" value="<?= $keahlian->nama; ?>" disabled class="form-control" autocomplete="off">
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row">
						<div class="footer text-rigt" style="margin-left: 20px;">
							<a href="<?= base_url('index.php/admin/keahlian') ?>" class="btn btn-success">Back</a>
						</div>
					</div>
				<br>
			</div>
		</div>
	</div>
</div>