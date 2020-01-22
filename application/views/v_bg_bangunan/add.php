<div class="card-header">
    <h4><i class="fas fa-database"></i> TAMBAH BAGIAN BANGUNAN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'bgbangunan/tambah_aksi'; ?>" method="post">
	  	<div class="form-row">
			<div class="col">
				<label class="control-label">Nama Bagian</label>
				<input type="text" class="form-control" placeholder="" name="nama_bagian">
			</div>
			<div class="col">
				<label class="control-label">Status</label>
				<select name="status" class="form-control">
					<optgroup>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</optgroup>
				</select>
			</div>
		</div>
		<?php foreach ($bangunan as $key) { ?>
			<input type="hidden" name="id_bangunan" value="<?= $key->id_bangunan ?>">
		<?php } ?>
		
		<br>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Keterangan</label>
				<input type="text" class="form-control" placeholder="" name="keterangan">
			</div>
		</div>
		
		<div class="modal-footer">
        	<a href="<?= base_url('bgbangunan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>
