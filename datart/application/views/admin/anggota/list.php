<!DOCTYPE html>
<html lang="en">

<head>
	<!-- menampilkan tampilan header -->
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<!-- menampilkan tampilan navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
		<!-- menampilkan halaman sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">
				<!-- menampilkan bagian breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<!-- membuat link penambahan data -->
						<a href="<?php echo site_url('admin/PencatatanRT/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<!-- membuat tabel -->
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<!-- untuk membuat tampilan tulisan seperti label dengan isi dibawah ini -->
										<th>NIK</th>
										<th>Nama</th>
										<th>Jumlah Anggota keluarga</th>
										<th>Tempat, Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Pekerjaan</th>
										<th>Nomor HP</th>
										<th>Alamat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<!-- membuat sebuah perulangan dengan $pencatatanRT dibuat atau as anggota -->
									<?php foreach ($PencatatanRT as $anggota): ?>
									<tr>
										<td width="150">
											<!-- digunakan untuk menampilkan data mulai dari nik hingga alamat -->
											<?php echo $anggota->nik ?>
										</td>
										<td width="150">
											<?php echo $anggota->nama ?>
										</td>
										<td width="150">
											<?php echo $anggota->jml_anggotakeluarga ?>
										</td>
										<td width="150">
											<?php echo $anggota->ttl ?>
										</td>
										<td width="150">
											<?php echo $anggota->jenis_kelamin ?>
										</td>
										<td width="150">
											<?php echo $anggota->pekerjaan ?>
										</td>
										<td width="150">
											<?php echo $anggota->no_hp ?>
										</td>
										<td class="small">
											<?php echo substr($anggota->alamat, 0, 120) ?>...</td>
										<td width="250">
											<!-- link untuk melakukan operasi edit yang dimana anggota ini mengambil id_anggota -->
											<a href="<?php echo site_url('admin/PencatatanRT/edit/'.$anggota->id_anggota) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <!-- untuk menghapus data -->
											<a onclick="deleteConfirm('<?php echo site_url('admin/PencatatanRT/delete/'.$anggota->id_anggota) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<!-- untuk menampilkan dan memanggil footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- untuk menampilkan scrolltop dan modal serta js -->
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	// fungsi javascript yang digunakan untuk menghapus data
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
