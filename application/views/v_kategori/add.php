<div class="card-header">
    <h4><i class="fas fa-database"></i> KATEGORI DATA ASSETS</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'kategori/tambah_aksi'; ?>" method="post">
		<div class="form-row">
			<div class="col">
				<label>Nama Kategori</label>
				<input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
			</div>
		</div>
		<div class="modal-footer">
        	<a href="<?= base_url('kategori/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>