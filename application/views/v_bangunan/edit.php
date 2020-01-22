<div class="card-header">
    <h4><i class="fas fa-database"></i> TAMBAH BANGUNAN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'bangunan/update'; ?>" method="post">
		<?php foreach ($data as $r) { ?>
	  	<div class="form-row">
			<div class="col">
				<label class="control-label">Nama Bangunan</label>
				<input type="text" class="form-control" placeholder="" name="nama_bangunan" value="<?= $r->nama_bangunan ?>">
			</div>
			<div class="col">
				<label class="control-label">Lokasi</label>
				<input type="text" class="form-control" placeholder="" name="lokasi" value="<?= $r->lokasi ?>">
			</div>
		</div>
		<br>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Luas</label>
				<input type="text" class="form-control" placeholder="" name="luas" value="<?= $r->luas ?>">
			</div>
			<div class="col">
				<label class="control-label">Keterangan</label>
				<input type="text" class="form-control" placeholder="" name="keterangan" value="<?= $r->keterangan ?>">
			</div>
		</div>
		<input type="hidden" name="id_bangunan" value="<?= $r->id_bangunan ?>">
		<div class="modal-footer">
        	<a href="<?= base_url('bangunan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Simpan</button>
      	</div>
      	<?php } ?>
	</form>
</div>
