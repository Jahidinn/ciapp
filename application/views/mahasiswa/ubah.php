<?php  ?>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah mahasiswa
				</div>
				<div class="card-body">
					
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" placeholder="name" name="nama" value="<?= $mahasiswa['nama']; ?>">

						    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nim">Nim</label>
						    <input type="text" class="form-control" id="nim" placeholder="123456" name="nim" value="<?= $mahasiswa['nim']; ?>">
						    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
						</div>
						<div class="form-group">
						    <label for="email">Email address</label>
						    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="<?= $mahasiswa['email']; ?>">
						    <small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
						    <label for="jurusan">Pilih jurusan</label>
						    <select class="form-control" name="jurusan" id="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
						    	<?php foreach ($jurusan as $jur ) : ?>
						    		<?php if( $jur == $mahasiswa['jurusan']) : ?>
						    			<option value="<?= $jur; ?>" selected><?= $jur; ?></option>
						    			<?php else : ?>
						    				<option value="<?= $jur; ?>"><?= $jur; ?></option>
						    			<?php endif; ?>

						  		<?php endforeach; ?>
						     
						    </select>
						 </div>
						 <button type="submit" name="tambah" class="btn btn-success float-right">Ubah</button>
					</form>
					
				</div>
			</div>
		</div>
		
	</div>
</div>