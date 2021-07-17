<div class="container-fluid" id="container-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="width: 100%; height: 100%;"><br>
				<h3 style="margin-left: 10px;">Detail Data User</h3><hr>
					<div  class="row" >
						<div class="col-md-10" style="margin-left: 20px ; ">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" value="<?= $admin->username ?? '' ?>" class="form-control" autocomplete="off" disabled>
							</div>
						</div>
						<div class="col-md-10" style="margin-left: 20px;">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" value="<?= $admin->email ?? ''?>" autocomplete="off" disabled>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row">
						<div class="footer text-rigt" style="margin-left: 20px;">
							<a href="<?= base_url('index.php/admin/user/') ?>" class="btn btn-success">Back</a>
						</div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
</div>