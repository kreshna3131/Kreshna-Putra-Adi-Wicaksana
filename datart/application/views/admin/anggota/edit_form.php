<!DOCTYPE html>
<html lang="en">

<head>
	<!-- menampilkan tampilan header -->
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<!-- menampilkan tampilan navbar pada halaman -->
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
		<!-- menampilkan bagian sidebar -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">
				<!-- untuk menampilkan breadcrumb -->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<!-- jika session sukses maka tampilkan pesan sukses -->
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">
						<!-- menampilkan tombol back -->
						<a href="<?php echo site_url('admin/PencatatanRT/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">
						<!-- meengarahkan ke halaman anggota/edit -->
						<form action="<?php base_url(" admin/anggota/edit") ?>" method="post" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/pencatatanRT/edit/ID --->
							<!-- mengambil anggota dari id anggota -->
							<input type="hidden" name="id" value="<?php echo $anggota->id_anggota ?>" />

							<div class="form-group">
								<label for="nik">NIK</label>
								<!-- mengambil inputan yang dimana mengecek nik error atau tidak kemudian valuenya ini kita cetak dari $anggota yang kita ambil NIK nya -->
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" name="nik" placeholder="NIK" value="<?php echo $anggota->nik ?>" />
								<!-- jika invalid maka print form error dengan isinya nik -->
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama" value="<?php echo $anggota->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jml_anggotakeluarga">Jumlah Anggota Keluarga</label>
								<input class="form-control <?php echo form_error('jml_anggotakeluarga') ? 'is-invalid' : '' ?>" type="text" name="jml_anggotakeluarga" placeholder="Jumlah Anggota Keluarga" value="<?php echo $anggota->jml_anggotakeluarga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jml_anggotakeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ttl">Tempat, Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" value="<?php echo $anggota->ttl ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ttl') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $anggota->jenis_kelamin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $anggota->pekerjaan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_hp">Nomor HP</label>
								<input class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="text" name="no_hp" placeholder="Nomor HP" value="<?php echo $anggota->no_hp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="Alamat...."><?php echo $anggota->alamat ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							<!-- untuk submit data yang sudah dibuat -->
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
					<!-- menampilkan tulisan pada bagian bawah -->
					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<!-- menampilkan bagian footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
	<!-- menampilkan bagian scrolltop -->
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		<!-- memanggil isi yang ada di js -->
		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
