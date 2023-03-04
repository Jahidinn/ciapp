<?php  ?>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form tambah mahasiswa
				</div>
				<div class="card-body">
					
					<form action="" method="post">
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" placeholder="name" name="nama">

						    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nim">Nim</label>
						    <input type="text" class="form-control" id="nim" placeholder="123456" name="nim">
						    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
						</div>
						<div class="form-group">
						    <label for="email">Email address</label>
						    <input type="text" class="form-control" id="email" placeholder="email" name="email">
						    <small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
						    <label for="jurusan">Pilih jurusan</label>
						    <select class="form-control" name="jurusan" id="jurusan">
						      <option value="Teknik elektro">Teknik elektro</option>
						      <option value="Teknik informatika">Teknik informatika</option>
						      <option value="Teknik industri">Teknik industri</option>
						      <option value="Teknik mesin">Teknik mesin</option>
						  
						    </select>
						 </div>
						 <button type="submit" name="tambah" class="btn btn-success float-right">Tambah</button>
					</form>
					
				</div>
			</div>
		</div>
		
	</div>
</div>