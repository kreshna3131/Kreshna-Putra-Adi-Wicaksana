<!DOCTYPE html>
<html lang="en">

<head>
	<!-- untuk mengambil tampilan header pada program -->
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<!-- mengambil tampilan navbar -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
		<!-- mengambil tampilan sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">
				<!-- menampilkan breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<!-- jika session ini success maka tampilkan alert sukes -->
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<!-- link untuk kembali ke menu sebelumnya yaitu admin/pencatatanRT -->
						<a href="<?php echo site_url('admin/PencatatanRT/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<!-- form yang menampilkan data yang ingin diminta mulai dari NIK hingga alamat -->
						<form action="<?php base_url('admin/PencatatanRT/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
							<!-- memberikan label pada form -->
								<label for="nik">NIK</label>
								<!-- untuk input data yang dimana jika data yang dimasukkan ini error atau invalid -->
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" name="nik" placeholder="NIK" />
								<!-- maka keluarkan classs invalid feedback -->
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jml_anggotakeluarga">Jumlah Anggota Keluarga</label>
								<input class="form-control <?php echo form_error('jml_anggotakeluarga') ? 'is-invalid' : '' ?>" type="text" name="jml_anggotakeluarga" placeholder="Jumlah Anggota Keluarga" />
								<div class="invalid-feedback">
									<?php echo form_error('jml_anggotakeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ttl">Tempat, Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('ttl') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan" placeholder="Pekerjaan" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="text" name="no_hp" placeholder="Nomor HP" />
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="Alamat...."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							<!-- button atau tombol untuk submit data -->
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
					<!-- card yang dimana menampilkan tulisan kecil required fields -->
					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<!-- menampilkan bagian view footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- menampilkan halaman scrolltop -->
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		
		<!-- menampilkan dan menjalankan program yang ada di file js.php -->
		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
