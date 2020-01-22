<div class="card-header">
    <h4><i class="fas fa-database"></i> EDIT BAGIAN BANGUNAN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'bgbangunan/update'; ?>" method="post">
		<?php foreach ($data as $key) { ?>
			  	<div class="form-row">
					<div class="col">
						<label class="control-label">Nama Bagian</label>
						<input type="text" class="form-control" placeholder="" name="nama_bagian" value="<?= $key->nama_bagian ?>">
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
				<input type="hidden" name="id_bg_bangunan" value="<?= $key->id_bg_bangunan ?>">
				<input type="hidden" name="id_bangunan" value="<?= $key->id_bangunan ?>">
				<br>
				<div class="form-row">
					<div class="col">
						<label class="control-label">Keterangan</label>
						<input type="text" class="form-control" placeholder="" name="keterangan" value="<?= $key->keterangan ?>">
					</div>
				</div>
		<?php } ?>
		<?php foreach ($data as $key) { ?>
		<div class="modal-footer">
        	<a href="<?= base_url('bgbangunan/show/').$key->id_bangunan; ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Simpan</button>
      	</div>
      	<?php } ?>
	</form>
</div>
