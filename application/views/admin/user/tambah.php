<div class="container-fluid" id="container-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="width: 100%; height: 100%;"><br>
				<h3 style="margin-left: 10px;">Tambah Data User</h3><hr>
				<form action="<?= base_url('index.php/admin/user/TambahData') ?>" method="post">
					<div  class="row" >
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px;">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" autocomplete="off">
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px;">
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" autocomplete="off">
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row">
						<div class="footer text-rigt" style="margin-left: 20px;">
							<button type="submit" class="btn btn-success">Save</button>
						</div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>