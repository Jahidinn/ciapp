<?php 
?>
<div class="container">
	<?php if ($this->session->flashdata('flash')): ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a class="btn btn-primary" href="<?= base_url() ?>mahasiswa/tambah">Tambah data mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="get">
				<div class="input-group">
					
					<input type="text" class="form-control" placeholder="Cari data mahasiswa" name="keyword" value="<?= $this->input->get('keyword'); ?>">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit" name="submit" id="button-addon2">Cari</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Data mahasiswa</h3>
			<?php if(empty($mahasiswa)): ?>
				<div class="alert alert-warning" role="alert">
				  Tidak ada data mahasiswa yang anda cari.
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs ): ?>
				<li class="list-group-item">
					<?= $mhs['nama']; ?>
					<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
					<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right">ubah</a>
					<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Data akan dihapus');">hapus</a>
						
				</li>
			<?php endforeach; ?>
				
			</ul>
		</div>
	</div>
</div>