<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<div class="container-fluid" id="container-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="card" style="width: 100%; height: 200%;"><br>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" width="100%" cellspacing="0" id="myTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Aksi</th>
								</tr>
							</thead>
								<tbody>
								<?php
									foreach($keahlian->result() as $key => $keahlian){
								?>
									<tr>
										<td><?= $key+1; ?></td>
										<td><?= $keahlian->nama; ?></td>
										<td>
											<a class="btn btn-primary btn-sm"
											href="<?= base_url('index.php/admin/keahlian/edit/'.$keahlian->id) ?>">Edit</a>
											<a class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')"
											href="<?= base_url('index.php/admin/keahlian/hapus/'.$keahlian->id) ?>">Hapus</a></button>
											<a class="btn btn-sm btn-warning"
											href="<?= base_url('index.php/admin/keahlian/show/'.$keahlian->id) ?>">Detail</a>
										</td>
									</tr>
							<?php } ?>
								</tbody>
							<a class="btn btn-success btn-sm mb-3"
							href="<?= base_url('index.php/admin/keahlian/tambah') ?>">Tambah Data</a>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>