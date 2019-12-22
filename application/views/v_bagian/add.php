<div class="card-header">
    <h4><i class="fas fa-database"></i> TAMBAH BAGIAN MESIN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'bgmesin/tambah_aksi'; ?>" method="post">
	  	<div class="form-row">
			<div class="col">
				<label>Nama Mesin</label>
				<select name="id_asset" class="form-control">
				<optgroup>
					<?php foreach ($mesin as $data) {	?>
				<option value="<?= $data->id_asset ?>"><?= $data->id_asset ?> - <?= $data->nama_asset ?></option>
					<?php } ?>
				</optgroup>
				</select>
			</div>
			<div class="col">
				<label class="control-label">Nama Bagian Mesin</label>
				<input type="text" class="form-control" placeholder="Masukan Bagian Mesin" name="nama_bagian">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Status</label>
				<select name="status" class="form-control">
					<optgroup>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</optgroup>
					
				</select>
			</div>
			<div class="col">
				<label class="control-label">Keterangan</label>
				<input type="text" class="form-control" placeholder="Masukan Keterangan" name="keterangan">
			</div>
		</div>
		
		<div class="modal-footer">
        	<a href="<?= base_url('dashboard/bagian_mesin'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>
